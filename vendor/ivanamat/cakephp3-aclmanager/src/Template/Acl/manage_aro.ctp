<?php

/**
 * CakePHP 3.x - Acl Manager
 * 
 * PHP version 5
 * 
 * permissions.ctp
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @category CakePHP3
 * 
 * @author Ivan Amat <dev@ivanamat.es>
 * @copyright Copyright 2016, Iván Amat
 * @license MIT http://opensource.org/licenses/MIT
 * @link https://github.com/ivanamat/cakephp3-aclmanager
 */
use Cake\Core\Configure;
use Cake\Utility\Inflector;

//echo $this->Html->css('AclManager.default', ['inline' => false]);
?>
<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3><?php echo $this->Html->link(__('Acl Manager'), ['action' => 'index']); ?></h3>
                </div>
                <div class="box-body">
                    <div class="">
                        <h2><?php
                        
                        echo sprintf(__($model)) . " - " . h($aros[0][$model][$aroDisplayField]); ?></h2>
                        <hr />
                    </div>
                    <div class="">
                        <div class="col-md-12">
                            <?php echo $this->Form->create('Perms', array('role' => 'form')); ?>
                            <table class="table table-responsive table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Action</th>
                                        <?php foreach ($aros as $aro): ?>
                                            <?php $aro = array_shift($aro); ?>
                                            <th>
                                                <?php
                                                if (($model == 'Roles' OR $model == 'Users') && $this->request->session()->read('Auth.User.role_id') == 1) {
                                                    $gData = $this->AclManager->getName('Groups', $aro['group_id']);
                                                    
                                                    echo "Permissions for " . h($aro[$aroDisplayField]) . ' ( ' . $gData['name'] . ' )';
                                                } else {
                                                    echo "Permissions for " . h($aro[$aroDisplayField]);
                                                }
                                                ?>
                                            </th>
                                        <?php endforeach; ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $uglyIdent = Configure::read('AclManager.uglyIdent');
                                    $lastIdent = null;
                                    foreach ($acos as $id => $aco) {
                                        $action = $aco['Action'];
                                        $alias = $aco['Aco']['alias'];
                                        $ident = substr_count($action, '/');

                                        if ($ident <= $lastIdent && !is_null($lastIdent)) {
                                            for ($i = 0; $i <= ($lastIdent - $ident); $i++) {
                                                echo "</tr>";
                                            }
                                        }

                                        if ($ident != $lastIdent) {
                                            echo "<tr class='aclmanager-ident-" . $ident . "'>";
                                        }

                                        if ($this->AclManager->Acl->check([Configure::read('AclManager.base_model') => ['id' => $this->request->session()->read('Auth.User.id')]], $action)) {
                                            echo "<td>";
                                            echo Inflector::humanize(($ident == 1 ? "<strong>" : "" ) . ($uglyIdent ? str_repeat("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", $ident) : "") . h($alias) . ($ident == 1 ? "</strong>" : "" ));
                                            echo "</td>";

                                            foreach ($aros as $aro):
                                                $inherit = $this->AclManager->value("Perms." . str_replace("/", ":", $action) . ".{$aroAlias}:{$aro[$aroAlias]['id']}-inherit");
                                                $allowed = $this->AclManager->value("Perms." . str_replace("/", ":", $action) . ".{$aroAlias}:{$aro[$aroAlias]['id']}");

                                                $mAro = $model;
                                                $mAllowed = $this->AclManager->Acl->check($aro, $action);
                                                $mAllowedText = ($mAllowed) ? 'Allow' : 'Deny';

                                                // Originally based on 'allowed' above 'mAllowed'
                                                $icon = ($mAllowed) ? $this->Html->image('AclManager.allow_32.png') : $this->Html->image('AclManager.deny_32.png');

                                                if ($inherit) {
                                                    $icon = $this->Html->image('AclManager.inherit_32.png');
                                                }

                                                if ($mAllowed && !$inherit) {
                                                    $icon = $this->Html->image('AclManager.allow_32.png');
                                                    $mAllowedText = 'Allow';
                                                }

                                                if ($mAllowed && $inherit) {
                                                    $icon = $this->Html->image('AclManager.allow_inherited_32.png');
                                                    $mAllowedText = 'Inherit';
                                                }

                                                if (!$mAllowed && $inherit) {
                                                    $icon = $this->Html->image('AclManager.deny_inherited_32.png');
                                                    $mAllowedText = 'Inherit';
                                                }

                                                if (!$mAllowed && !$inherit) {
                                                    $icon = $this->Html->image('AclManager.deny_32.png');
                                                    $mAllowedText = 'Deny';
                                                }

                                                echo "<td class=\"row select-perm\"><span>";
                                                echo $icon . ' ' . $this->Form->select("Perms." . str_replace("/", ":", $action) . ".{$aroAlias}:{$aro[$aroAlias]['id']}", array('inherit' => __('Inherit'), 'allow' => __('Allow'), 'deny' => __('Deny')), array('empty' => __($mAllowedText), 'class' => 'form-control col-md-3'));
                                                echo "</span></td>";
                                            endforeach;

                                            $lastIdent = $ident;
                                        }
                                    }

                                    for ($i = 0; $i <= $lastIdent; $i++) {
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <div class="row">
                                <button type="submit" class="btn btn-primary right"><?php echo __("Save"); ?></button>
                                <?php echo $this->Form->end(); ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <p><?php echo $this->Html->image('AclManager.deny_32.png') . ' ' . __('Denied') ?></p>
                                <p><?php echo $this->Html->image('AclManager.deny_inherited_32.png') . ' ' . __('Denied by inheritance') ?></p>
                            </div>
                            <div class="col-md-4">
                                <p><?php echo $this->Html->image('AclManager.allow_32.png') . ' ' . __('Allowed') ?></p>
                                <p><?php echo $this->Html->image('AclManager.allow_inherited_32.png') . ' ' . __('Allowed by inheritance') ?></p>
                            </div>
                            <div class="col-md-4">
                                <p><?php echo __('All permissions are denied by default. When the permissions are set, this ACO\'s children inherit permissions.'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>