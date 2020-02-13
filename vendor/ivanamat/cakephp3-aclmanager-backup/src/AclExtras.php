<?php
/**
 * Acl Extras.
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2008-2013, Mark Story.
 * @link http://mark-story.com
 * @author Mark Story <mark@mark-story.com>
 * @license http://www.opensource.org/licenses/mit-license.php The MIT License
 */
namespace AclManager;

use Acl\Controller\Component\AclComponent;
use Cake\Controller\ComponentRegistry;
use Cake\Controller\Controller;
use Cake\Core\App;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Filesystem\Folder;
use Cake\Network\Request;
use Cake\Routing\Router;
use Cake\Utility\Hash;
use Cake\Utility\Inflector;

/**
 * Provides features for additional ACL operations.
 * Can be used in either a CLI or Web context.
 */
class AclExtras
{

    /**
     * Contains instance of AclComponent
     *
     * @var \Acl\Controller\Component\AclComponent
     */
    public $Acl;
    
    /**
     * ACO Counter.
     *
     * @var int
     */
    public $counter;

    /**
     * Contains arguments parsed from the command line.
     *
     * @var array
     */
    public $args;

    /**
     * Contains database source to use
     *
     * @var string
     */
    public $dataSource = 'default';

    /**
     * Root node name.
     *
     * @var string
     */
    public $rootNode = 'controllers';

    /**
     * Internal Clean Actions switch
     *
     * @var bool
     */
    protected $_clean = false;

    /**
     * Contains app route prefixes
     *
     * @var array
     */
    protected $prefixes = [];

    /**
     * Contains plugins route prefixes
     *
     * @var array
     */
    protected $pluginPrefixes = [];

    /**
     * List of ACOs found during synchronization
     *
     * @var array
     */
    protected $foundACOs = [];
    
    /**
     * List of actions to ignore during synchronization
     *
     * @var array
     */
    protected $ignoreActions = [];
    
    /**
     * List of paths to ignore during synchronization
     *
     * @var array
     */
    protected $ignorePaths = [];

    /**
     * Start up And load Acl Component / Aco model
     *
     * @param \Cake\Controller\Controller $controller Controller instance
     * @return void
     */
    public function startup($controller = null)
    {
        if (!$controller) {
            $controller = new Controller(new Request());
        }
        $registry = new ComponentRegistry();
        $this->Acl = new AclComponent($registry, Configure::read('Acl'));
        $this->Aco = $this->Acl->Aco;
        $this->controller = $controller;
        $this->_buildPrefixes();
        $this->_processIgnored();
    }

    /**
     * Output a message.
     *
     * Will either use shell->out, or controller->Flash->success()
     *
     * @param string $msg The message to output.
     * @return void
     */
    public function out($msg)
    {
        if (!empty($this->controller->Flash)) {
            $this->controller->Flash->success($msg);
        } else {
            $this->Shell->out($msg);
        }
    }

    /**
     * Output an error message.
     *
     * Will either use shell->err, or controller->Flash->error()
     *
     * @param string $msg The message to output.
     * @return void
     */
    public function err($msg)
    {
        if (!empty($this->controller->Flash)) {
            $this->controller->Flash->error($msg);
        } else {
            $this->Shell->err($msg);
        }
    }

    /**
     * Sync the ACO table
     *
     * @param array $params An array of parameters
     * @return void
     */
    public function acoSync($params = [])
    {
        $this->_clean = true;
        $this->acoUpdate($params);
    }

    /**
     * Updates the Aco Tree with new controller actions.
     *
     * @param array $params An array of parameters
     * @return bool
     */
    public function acoUpdate($params = [])
    {
        $root = $this->_checkNode($this->rootNode, $this->rootNode, null);
        if (empty($params['plugin'])) {
            $plugins = Plugin::loaded();
            $this->_processControllers($root);
            $this->_processPrefixes($root);
            $this->_processPlugins($root, $plugins);
            // debug($this->foundACOs);
        } else {
            $plugin = $params['plugin'];
            if (!Plugin::loaded($plugin)) {
                $this->err(__d('cake_acl', "Plugin {0} not found or not activated.", [$plugin]));

                return false;
            }
            $plugins = [$params['plugin']];
            $this->_processPlugins($root, $plugins);
            $this->foundACOs = array_slice($this->foundACOs, 1, null, true);
        }

        if ($this->_clean) {
            foreach ($this->foundACOs as $parentId => $acosList) {
                $this->_cleaner($parentId, $acosList);
            }
        }
        $this->out(__d('cake_acl', '{0} ACOs have been created, updated or deleted', (int)$this->counter));
        // $this->out(__d('cake_acl', 'ACOs update complete'));

        // die();
        return true;
    }

    /**
     * Updates the Aco Tree with all App controllers.
     *
     * @param \Acl\Model\Entity\Aco $root The root note of Aco Tree
     * @return void
     */
    protected function _processControllers($root)
    {
        $controllers = $this->getControllerList();
        $this->foundACOs[$root->id] = $this->_updateControllers($root, $controllers);
    }

    /**
     * Updates the Aco Tree with all App route prefixes.
     *
     * @param \Acl\Model\Entity\Aco $root The root note of Aco Tree
     * @return void
     */
    protected function _processPrefixes($root)
    {
        foreach (array_keys($this->prefixes) as $prefix) {
            $controllers = $this->getControllerList(null, $prefix);
            $path = $this->rootNode . '/' . $prefix;
            $pathNode = $this->_checkNode($path, $prefix, $root->id);
            $this->foundACOs[$root->id][] = $prefix;
            if (isset($this->foundACOs[$pathNode->id])) {
                $this->foundACOs[$pathNode->id] += $this->_updateControllers($pathNode, $controllers, null, $prefix);
            } else {
                $this->foundACOs[$pathNode->id] = $this->_updateControllers($pathNode, $controllers, null, $prefix);
            }
        }
    }

    /**
     * Returns the aliased name for the plugin (Needed in order to correctly handle nested plugins)
     *
     * @param string $plugin The name of the plugin to alias
     * @return string
     */
    protected function _pluginAlias($plugin)
    {
        return preg_replace('/\//', '\\', Inflector::camelize($plugin));
    }

    /**
     * Updates the Aco Tree with all Plugins.
     *
     * @param \Acl\Model\Entity\Aco $root The root note of Aco Tree
     * @param array $plugins list of App plugins
     * @return void
     */
    protected function _processPlugins($root, array $plugins = [])
    {
        foreach ($plugins as $plugin) {
            $controllers = $this->getControllerList($plugin);
            $pluginAlias = $this->_pluginAlias($plugin);
            $path = [
                $this->rootNode,
                $pluginAlias
            ];
            $path = implode('/', Hash::filter($path));
            
            if(!in_array($path, $this->ignorePaths) && !in_array($path, $this->ignoreActions)) {
                
                $pathNode = $this->_checkNode($path, $pluginAlias, $root->id);
                $this->foundACOs[$root->id][] = $pluginAlias;
                
                if (isset($this->foundACOs[$pathNode->id])) {
                    $this->foundACOs[$pathNode->id] += $this->_updateControllers($pathNode, $controllers, $plugin);
                } else {
                    $this->foundACOs[$pathNode->id] = $this->_updateControllers($pathNode, $controllers, $plugin);
                }

                if (isset($this->pluginPrefixes[$plugin])) {
                    foreach (array_keys($this->pluginPrefixes[$plugin]) as $prefix) {
                        $path = [
                            $this->rootNode,
                            $pluginAlias
                        ];
                        $path = implode('/', Hash::filter($path));
                        $pluginNode = $this->_checkNode($path, $pluginAlias, $root->id);
                        $this->foundACOs[$root->id][] = $pluginAlias;

                        $path = [
                            $this->rootNode,
                            $pluginAlias,
                            $prefix,
                        ];
                        $path = implode('/', Hash::filter($path));
                        $pathNode = $this->_checkNode($path, $prefix, $pluginNode->id);
                        $this->foundACOs[$pluginNode->id][] = $prefix;

                        $controllers = $this->getControllerList($plugin, $prefix);
                        if (isset($this->foundACOs[$pathNode->id])) {
                            $this->foundACOs[$pathNode->id] += $this->_updateControllers($pathNode, $controllers, $pluginAlias, $prefix);
                        } else {
                            $this->foundACOs[$pathNode->id] = $this->_updateControllers($pathNode, $controllers, $pluginAlias, $prefix);
                        }
                    }
                }
            }
        }
    }

    /**
     * Updates a collection of controllers.
     *
     * @param array $root Array or ACO information for root node.
     * @param array $controllers Array of Controllers
     * @param string $plugin Name of the plugin you are making controllers for.
     * @param string $prefix Name of the prefix you are making controllers for.
     * @return array
     */
    protected function _updateControllers($root, $controllers, $plugin = null, $prefix = null)
    {
        $pluginPath = $this->_pluginAlias($plugin);

        // look at each controller
        $controllersNames = [];
        foreach ($controllers as $controller) {
            $tmp = explode('/', $controller);
            $controllerName = str_replace('Controller.php', '', array_pop($tmp));
            if ($controllerName == 'App') {
                continue;
            }
            $controllersNames[] = $controllerName;
            $path = [
                $this->rootNode,
                $pluginPath,
                $prefix,
                $controllerName
            ];
            $path = implode('/', Hash::filter($path));
            if(!in_array($path, $this->ignorePaths)) {
                $controllerNode = $this->_checkNode($path, $controllerName, $root->id);
                $this->_checkMethods($controller, $controllerName, $controllerNode, $pluginPath, $prefix);
            }
        }

        return $controllersNames;
    }

    /**
     * Get a list of controllers in the app and plugins.
     *
     * Returns an array of path => import notation.
     *
     * @param string $plugin Name of plugin to get controllers for
     * @param string $prefix Name of prefix to get controllers for
     * @return array
     */
    public function getControllerList($plugin = null, $prefix = null)
    {
        if (!$plugin) {
            $path = App::path('Controller' . (empty($prefix) ? '' : DS . Inflector::camelize($prefix)));
            $dir = new Folder($path[0]);
            $controllers = $dir->find('.*Controller\.php');
        } else {
            $path = App::path('Controller' . (empty($prefix) ? '' : DS . Inflector::camelize($prefix)), $plugin);
            $dir = new Folder($path[0]);
            $controllers = $dir->find('.*Controller\.php');
        }

        return $controllers;
    }

    /**
     * Check a node for existance, create it if it doesn't exist.
     *
     * @param string $path The path to check
     * @param string $alias The alias to create
     * @param int $parentId The parent id to use when creating.
     * @return array Aco Node array
     */
    protected function _checkNode($path, $alias, $parentId = null)
    {
        $node = $this->Aco->node($path);
        if (!$node) {
            $data = [
                'parent_id' => $parentId,
                'model' => null,
                'alias' => $alias,
            ];
            $entity = $this->Aco->newEntity($data);
            $node = $this->Aco->save($entity);
            $this->counter++;
            // $this->out(__d('cake_acl', 'Created Aco node: {0}', $path));
        } else {
            $node = $node->first();
        }

        return $node;
    }

    /**
     * Get a list of registered callback methods
     *
     * @param string $className The class to reflect on.
     * @param string $pluginPath The plugin path.
     * @param string $prefixPath The prefix path.
     * @return array
     */
    protected function _getCallbacks($className, $pluginPath = null, $prefixPath = null)
    {
        $callbacks = [];
        $namespace = $this->_getNamespace($className, $pluginPath, $prefixPath);
        $reflection = new \ReflectionClass($namespace);
        if ($reflection->isAbstract()) {
            return $callbacks;
        }
        try {
            $method = $reflection->getMethod('implementedEvents');
        } catch (ReflectionException $e) {
            return $callbacks;
        }
        if (version_compare(phpversion(), '5.4', '>=')) {
            $object = $reflection->newInstanceWithoutConstructor();
        } else {
            $object = unserialize(
                sprintf('O:%d:"%s":0:{}', strlen($className), $className)
            );
        }
        $implementedEvents = $method->invoke($object);
        foreach ($implementedEvents as $event => $callable) {
            if (is_string($callable)) {
                $callbacks[] = $callable;
            }
            if (is_array($callable) && isset($callable['callable'])) {
                $callbacks[] = $callable['callable'];
            }
        }

        return $callbacks;
    }

    /**
     * Check and Add/delete controller Methods
     *
     * @param string $className The classname to check
     * @param string $controllerName The controller name
     * @param array $node The node to check.
     * @param string $pluginPath The plugin path to use.
     * @param string $prefixPath The prefix path to use.
     * @return bool
     */
    protected function _checkMethods($className, $controllerName, $node, $pluginPath = null, $prefixPath = null)
    {
        $excludes = $this->_getCallbacks($className, $pluginPath, $prefixPath);
        if(Configure::check('AclManager.ignoreActions')) {
            $ignore = Configure::read('AclManager.ignoreActions');
            $excludes = array_merge($excludes, $this->ignoreActions);
        }
        $baseMethods = get_class_methods(new Controller);
        $namespace = $this->_getNamespace($className, $pluginPath, $prefixPath);
        $methods = get_class_methods(new $namespace);
        if ($methods == null) {
            $this->err(__d('cake_acl', 'Unable to get methods for {0}', $className));

            return false;
        }
        $actions = array_diff($methods, $baseMethods);
        $actions = array_diff($actions, $excludes);
        foreach ($actions as $key => $action) {
            if (strpos($action, '_', 0) === 0) {
                continue;
            }
            $path = [
                $this->rootNode,
                $pluginPath,
                $prefixPath,
                $controllerName,
                $action
            ];
            $path = implode('/', Hash::filter($path));
            
            if(!in_array($path, $this->ignorePaths) && !in_array($action, $this->ignoreActions)) {
                $this->_checkNode($path, $action, $node->id);
                $actions[$key] = $action;
            }
        }
        if ($this->_clean) {
            $this->_cleaner($node->id, $actions);
        }

        return true;
    }

    /**
     * Recover an Acl Tree
     *
     * @return void
     */
    public function recover()
    {
        $type = Inflector::camelize($this->args[0]);
        $this->Acl->{$type}->recover();
        $this->out(__('Tree has been recovered, or tree did not need recovery.'));
    }

    /**
     * Get the namespace for a given class.
     *
     * @param string $className The class you want a namespace for.
     * @param string $pluginPath The plugin path.
     * @param string $prefixPath The prefix path.
     * @return string
     */
    protected function _getNamespace($className, $pluginPath = null, $prefixPath = null)
    {
        $namespace = preg_replace('/(.*)Controller\//', '', $className);
        $namespace = preg_replace('/\//', '\\', $namespace);
        $namespace = preg_replace('/\.php/', '', $namespace);
        $prefixPath = preg_replace('/\//', '\\', Inflector::camelize($prefixPath));
        if (!$pluginPath) {
            $rootNamespace = Configure::read('App.namespace');
        } else {
            $rootNamespace = preg_replace('/\//', '\\', $pluginPath);
        }
        $namespace = [
            $rootNamespace,
            'Controller',
            $prefixPath,
            $namespace
        ];

        return implode('\\', Hash::filter($namespace));
    }

    /**
     * Build prefixes for App and Plugins based on configured routes
     *
     * @return void
     */
    protected function _buildPrefixes()
    {
        $routes = Router::routes();
        foreach ($routes as $key => $route) {
            if (isset($route->defaults['prefix'])) {
                $prefix = Inflector::camelize($route->defaults['prefix']);
                if (!isset($route->defaults['plugin'])) {
                    $this->prefixes[$prefix] = true;
                } else {
                    $this->pluginPrefixes[$route->defaults['plugin']][$prefix] = true;
                }
            }
        }
    }

    /**
     * Delete unused ACOs.
     *
     * @param int $parentId Id of the parent node.
     * @param array $preservedItems list of items that will not be erased.
     * @return void
     */
    protected function _cleaner($parentId, $preservedItems = [])
    {
        $nodes = $this->Aco->find()->where(['parent_id' => $parentId]);
        $methodFlip = array_flip($preservedItems);
        foreach ($nodes as $node) {
            if (!isset($methodFlip[$node->alias])) {
                $crumbs = $this->Aco->find('path', ['for' => $node->id, 'order' => 'lft']);
                $path = null;
                foreach ($crumbs as $crumb) {
                    $path .= '/' . $crumb->alias;
                }
                $entity = $this->Aco->get($node->id);
                if ($this->Aco->delete($entity)) {
                    $this->out(__d('cake_acl', 'Deleted ACO node: <warning>{0}</warning> and all children', $path));
                }
            }
        }
    }
    
    protected function _processIgnored() {
        $ignore = [];
        $ignoreActions = Configure::read('AclManager.ignoreActions');
        foreach($ignoreActions as $ignoreAction) {
            $isPlugin = boolval(strrpos($ignoreAction, "."));
            $isController = boolval(strrpos($ignoreAction, "/"));
            $isAction = (!$isPlugin && !$isController) ? true : false;

            if(!$isAction) {
                $this->ignorePaths[] = str_replace(['/*','.*'],'',$this->rootNode.'/'.str_replace('.','/',$ignoreAction));
            } else {
                $this->ignoreActions[] = $ignoreAction;
            }
        }
        
        return true;
    }
}