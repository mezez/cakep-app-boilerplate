<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* D:\programs\xampp\htdocs\garnishee/vendor/maiconpinto/cakephp-adminlte-theme/src\Template\Bake\\Template\view.twig */
class __TwigTemplate_1d2b26839fb815508a9e576622459ecbe42bacb6eb929779355972daeef7e8d6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa = $this->env->getExtension("WyriHaximus\\TwigView\\Lib\\Twig\\Extension\\Profiler");
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa->enter($__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "D:\\programs\\xampp\\htdocs\\garnishee/vendor/maiconpinto/cakephp-adminlte-theme/src\\Template\\Bake\\\\Template\\view.twig"));

        // line 16
        $context["associations"] = twig_array_merge(["BelongsTo" => [], "HasOne" => [], "HasMany" => [], "BelongsToMany" => []], ($context["associations"] ?? null));
        // line 17
        $context["fieldsData"] = $this->getAttribute(($context["Bake"] ?? null), "getViewFieldsData", [0 => ($context["fields"] ?? null), 1 => ($context["schema"] ?? null), 2 => ($context["associations"] ?? null)], "method");
        // line 18
        $context["associationFields"] = $this->getAttribute(($context["fieldsData"] ?? null), "associationFields", []);
        // line 19
        $context["groupedFields"] = $this->getAttribute(($context["fieldsData"] ?? null), "groupedFields", []);
        // line 20
        $context["pK"] = ((("\$" . ($context["singularVar"] ?? null)) . "->") . $this->getAttribute(($context["primaryKey"] ?? null), 0, [], "array"));
        // line 21
        echo "<section class=\"content-header\">
  <h1>
    ";
        // line 23
        echo twig_escape_filter($this->env, ($context["singularHumanName"] ?? null), "html", null, true);
        echo "
    <small><?php echo __('View'); ?></small>
  </h1>
  <ol class=\"breadcrumb\">
    <li><a href=\"<?php echo \$this->Url->build(['action' => 'index']); ?>\"><i class=\"fa fa-dashboard\"></i> <?php echo __('Home'); ?></a></li>
  </ol>
</section>

<!-- Main content -->
<section class=\"content\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"box box-solid\">
        <div class=\"box-header with-border\">
          <i class=\"fa fa-info\"></i>
          <h3 class=\"box-title\"><?php echo __('Information'); ?></h3>
        </div>
        <!-- /.box-header -->
        <div class=\"box-body\">
          <dl class=\"dl-horizontal\">
";
        // line 43
        if ($this->getAttribute(($context["groupedFields"] ?? null), "string", [], "array")) {
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["groupedFields"] ?? null), "string", [], "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 45
                if ($this->getAttribute(($context["associationFields"] ?? null), $context["field"], [], "array")) {
                    // line 46
                    $context["details"] = $this->getAttribute(($context["associationFields"] ?? null), $context["field"], [], "array");
                    // line 47
                    echo "            <dt scope=\"row\"><?= __('";
                    echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize($this->getAttribute(($context["details"] ?? null), "property", [])), "html", null, true);
                    echo "') ?></dt>
            <dd><?= \$";
                    // line 48
                    echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
                    echo "->has('";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["details"] ?? null), "property", []), "html", null, true);
                    echo "') ? \$this->Html->link(\$";
                    echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["details"] ?? null), "property", []), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["details"] ?? null), "displayField", []), "html", null, true);
                    echo ", ['controller' => '";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["details"] ?? null), "controller", []), "html", null, true);
                    echo "', 'action' => 'view', \$";
                    echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["details"] ?? null), "property", []), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["details"] ?? null), "primaryKey", []), 0, [], "array"), "html", null, true);
                    echo "]) : '' ?></dd>
";
                } else {
                    // line 50
                    echo "            <dt scope=\"row\"><?= __('";
                    echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize($context["field"]), "html", null, true);
                    echo "') ?></dt>
            <dd><?= h(\$";
                    // line 51
                    echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                    echo ") ?></dd>
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 55
        if ($this->getAttribute(($context["associations"] ?? null), "HasOne", [])) {
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["associations"] ?? null), "HasOne", []));
            foreach ($context['_seq'] as $context["alias"] => $context["details"]) {
                // line 57
                echo "            <dt scope=\"row\"><?= __('";
                echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize(Cake\Utility\Inflector::singularize(Cake\Utility\Inflector::underscore($context["alias"]))), "html", null, true);
                echo "') ?></dt>
            <dd><?= \$";
                // line 58
                echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
                echo "->has('";
                echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "property", []), "html", null, true);
                echo "') ? \$this->Html->link(\$";
                echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
                echo "->";
                echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "property", []), "html", null, true);
                echo "->";
                echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "displayField", []), "html", null, true);
                echo ", ['controller' => '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "controller", []), "html", null, true);
                echo "', 'action' => 'view', \$";
                echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
                echo "->";
                echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "property", []), "html", null, true);
                echo "->";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["details"], "primaryKey", []), 0, [], "array"), "html", null, true);
                echo "]) : '' ?></dd>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['alias'], $context['details'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 61
        if ($this->getAttribute(($context["groupedFields"] ?? null), "number", [])) {
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["groupedFields"] ?? null), "number", []));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 63
                echo "            <dt scope=\"row\"><?= __('";
                echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize($context["field"]), "html", null, true);
                echo "') ?></dt>
            <dd><?= \$this->Number->format(\$";
                // line 64
                echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
                echo "->";
                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                echo ") ?></dd>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 67
        if ($this->getAttribute(($context["groupedFields"] ?? null), "date", [])) {
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["groupedFields"] ?? null), "date", []));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 69
                echo "            <dt scope=\"row\"><?= __('";
                echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize($context["field"]), "html", null, true);
                echo "') ?></dt>
            <dd><?= h(\$";
                // line 70
                echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
                echo "->";
                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                echo ") ?></dd>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 73
        if ($this->getAttribute(($context["groupedFields"] ?? null), "boolean", [])) {
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["groupedFields"] ?? null), "boolean", []));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 75
                echo "            <dt scope=\"row\"><?= __('";
                echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize($context["field"]), "html", null, true);
                echo "') ?></dt>
            <dd><?= \$";
                // line 76
                echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
                echo "->";
                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                echo " ? __('Yes') : __('No'); ?></dd>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 79
        echo "          </dl>
        </div>
      </div>
    </div>
  </div>

";
        // line 85
        if ($this->getAttribute(($context["groupedFields"] ?? null), "text", [])) {
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["groupedFields"] ?? null), "text", []));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 87
                echo "  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"box box-solid\">
        <div class=\"box-header with-border\">
          <i class=\"fa fa-text-width\"></i>
          <h3 class=\"box-title\"><?= __('";
                // line 92
                echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize($context["field"]), "html", null, true);
                echo "') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class=\"box-body\">
            <?= \$this->Text->autoParagraph(\$";
                // line 96
                echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
                echo "->";
                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                echo "); ?>
        </div>
      </div>
    </div>
  </div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 103
        $context["relations"] = twig_array_merge($this->getAttribute(($context["associations"] ?? null), "BelongsToMany", []), $this->getAttribute(($context["associations"] ?? null), "HasMany", []));
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["relations"] ?? null));
        foreach ($context['_seq'] as $context["alias"] => $context["details"]) {
            // line 105
            $context["otherSingularVar"] = Cake\Utility\Inflector::variable($context["alias"]);
            // line 106
            $context["otherPluralHumanName"] = Cake\Utility\Inflector::humanize(Cake\Utility\Inflector::underscore($this->getAttribute($context["details"], "controller", [])));
            // line 107
            echo "  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"box box-solid\">
        <div class=\"box-header with-border\">
          <i class=\"fa fa-share-alt\"></i>
          <h3 class=\"box-title\"><?= __('";
            // line 112
            echo twig_escape_filter($this->env, ($context["otherPluralHumanName"] ?? null), "html", null, true);
            echo "') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class=\"box-body\">
          <?php if (!empty(\$";
            // line 116
            echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
            echo "->";
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "property", []), "html", null, true);
            echo ")): ?>
          <table class=\"table table-hover\">
              <tr>
  ";
            // line 119
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["details"], "fields", []));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 120
                echo "                  <th scope=\"col\"><?= __('";
                echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize($context["field"]), "html", null, true);
                echo "') ?></th>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "                  <th scope=\"col\" class=\"actions text-center\"><?= __('Actions') ?></th>
              </tr>
              <?php foreach (\$";
            // line 124
            echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
            echo "->";
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "property", []), "html", null, true);
            echo " as \$";
            echo twig_escape_filter($this->env, ($context["otherSingularVar"] ?? null), "html", null, true);
            echo "): ?>
              <tr>
  ";
            // line 126
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["details"], "fields", []));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 127
                echo "                  <td><?= h(\$";
                echo twig_escape_filter($this->env, ($context["otherSingularVar"] ?? null), "html", null, true);
                echo "->";
                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                echo ") ?></td>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "  ";
            $context["otherPk"] = ((("\$" . ($context["otherSingularVar"] ?? null)) . "->") . $this->getAttribute($this->getAttribute($context["details"], "primaryKey", []), 0, [], "array"));
            // line 130
            echo "                  <td class=\"actions text-right\">
                      <?= \$this->Html->link(__('View'), ['controller' => '";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "controller", []), "html", null, true);
            echo "', 'action' => 'view', ";
            echo ($context["otherPk"] ?? null);
            echo "], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= \$this->Html->link(__('Edit'), ['controller' => '";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "controller", []), "html", null, true);
            echo "', 'action' => 'edit', ";
            echo ($context["otherPk"] ?? null);
            echo "], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= \$this->Form->postLink(__('Delete'), ['controller' => '";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "controller", []), "html", null, true);
            echo "', 'action' => 'delete', ";
            echo ($context["otherPk"] ?? null);
            echo "], ['confirm' => __('Are you sure you want to delete # {0}?', ";
            echo ($context["otherPk"] ?? null);
            echo "), 'class'=>'btn btn-danger btn-xs']) ?>
                  </td>
              </tr>
              <?php endforeach; ?>
          </table>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['alias'], $context['details'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "</section>
";
        
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa->leave($__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa_prof);

    }

    public function getTemplateName()
    {
        return "D:\\programs\\xampp\\htdocs\\garnishee/vendor/maiconpinto/cakephp-adminlte-theme/src\\Template\\Bake\\\\Template\\view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  380 => 144,  359 => 133,  353 => 132,  347 => 131,  344 => 130,  341 => 129,  330 => 127,  326 => 126,  317 => 124,  313 => 122,  304 => 120,  300 => 119,  292 => 116,  285 => 112,  278 => 107,  276 => 106,  274 => 105,  270 => 104,  268 => 103,  253 => 96,  246 => 92,  239 => 87,  235 => 86,  233 => 85,  225 => 79,  214 => 76,  209 => 75,  205 => 74,  203 => 73,  192 => 70,  187 => 69,  183 => 68,  181 => 67,  170 => 64,  165 => 63,  161 => 62,  159 => 61,  134 => 58,  129 => 57,  125 => 56,  123 => 55,  111 => 51,  106 => 50,  85 => 48,  80 => 47,  78 => 46,  76 => 45,  72 => 44,  70 => 43,  47 => 23,  43 => 21,  41 => 20,  39 => 19,  37 => 18,  35 => 17,  33 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         2.0.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
#}
{% set associations = {'BelongsTo': [], 'HasOne': [], 'HasMany': [], 'BelongsToMany': []}|merge(associations) %}
{% set fieldsData = Bake.getViewFieldsData(fields, schema, associations) %}
{% set associationFields = fieldsData.associationFields %}
{% set groupedFields = fieldsData.groupedFields %}
{% set pK = '\$' ~ singularVar ~ '->' ~ primaryKey[0] %}
<section class=\"content-header\">
  <h1>
    {{ singularHumanName }}
    <small><?php echo __('View'); ?></small>
  </h1>
  <ol class=\"breadcrumb\">
    <li><a href=\"<?php echo \$this->Url->build(['action' => 'index']); ?>\"><i class=\"fa fa-dashboard\"></i> <?php echo __('Home'); ?></a></li>
  </ol>
</section>

<!-- Main content -->
<section class=\"content\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"box box-solid\">
        <div class=\"box-header with-border\">
          <i class=\"fa fa-info\"></i>
          <h3 class=\"box-title\"><?php echo __('Information'); ?></h3>
        </div>
        <!-- /.box-header -->
        <div class=\"box-body\">
          <dl class=\"dl-horizontal\">
{% if groupedFields['string'] %}
{% for field in groupedFields['string'] %}
{% if associationFields[field] %}
{% set details = associationFields[field] %}
            <dt scope=\"row\"><?= __('{{ details.property|humanize }}') ?></dt>
            <dd><?= \${{ singularVar }}->has('{{ details.property }}') ? \$this->Html->link(\${{ singularVar }}->{{ details.property }}->{{ details.displayField }}, ['controller' => '{{ details.controller }}', 'action' => 'view', \${{ singularVar }}->{{ details.property }}->{{ details.primaryKey[0] }}]) : '' ?></dd>
{% else %}
            <dt scope=\"row\"><?= __('{{ field|humanize }}') ?></dt>
            <dd><?= h(\${{ singularVar }}->{{ field }}) ?></dd>
{% endif %}
{% endfor %}
{% endif %}
{% if associations.HasOne %}
{% for alias, details in associations.HasOne %}
            <dt scope=\"row\"><?= __('{{ alias|underscore|singularize|humanize }}') ?></dt>
            <dd><?= \${{ singularVar }}->has('{{ details.property }}') ? \$this->Html->link(\${{ singularVar }}->{{ details.property }}->{{ details.displayField }}, ['controller' => '{{ details.controller }}', 'action' => 'view', \${{ singularVar }}->{{ details.property }}->{{ details.primaryKey[0] }}]) : '' ?></dd>
{% endfor %}
{% endif %}
{% if groupedFields.number %}
{% for field in groupedFields.number %}
            <dt scope=\"row\"><?= __('{{ field|humanize }}') ?></dt>
            <dd><?= \$this->Number->format(\${{ singularVar }}->{{ field }}) ?></dd>
{% endfor %}
{% endif %}
{% if groupedFields.date %}
{% for field in groupedFields.date %}
            <dt scope=\"row\"><?= __('{{ field|humanize }}') ?></dt>
            <dd><?= h(\${{ singularVar }}->{{ field }}) ?></dd>
{% endfor %}
{% endif %}
{% if groupedFields.boolean %}
{% for field in groupedFields.boolean %}
            <dt scope=\"row\"><?= __('{{ field|humanize }}') ?></dt>
            <dd><?= \${{ singularVar }}->{{ field }} ? __('Yes') : __('No'); ?></dd>
{% endfor %}
{% endif %}
          </dl>
        </div>
      </div>
    </div>
  </div>

{% if groupedFields.text %}
{% for field in groupedFields.text %}
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"box box-solid\">
        <div class=\"box-header with-border\">
          <i class=\"fa fa-text-width\"></i>
          <h3 class=\"box-title\"><?= __('{{ field|humanize }}') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class=\"box-body\">
            <?= \$this->Text->autoParagraph(\${{ singularVar }}->{{ field }}); ?>
        </div>
      </div>
    </div>
  </div>
{% endfor %}
{% endif %}
{% set relations = associations.BelongsToMany|merge(associations.HasMany) %}
{% for alias, details in relations %}
{% set otherSingularVar = alias|variable %}
{% set otherPluralHumanName = details.controller|underscore|humanize %}
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"box box-solid\">
        <div class=\"box-header with-border\">
          <i class=\"fa fa-share-alt\"></i>
          <h3 class=\"box-title\"><?= __('{{ otherPluralHumanName }}') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class=\"box-body\">
          <?php if (!empty(\${{ singularVar }}->{{ details.property }})): ?>
          <table class=\"table table-hover\">
              <tr>
  {% for field in details.fields %}
                  <th scope=\"col\"><?= __('{{ field|humanize }}') ?></th>
  {% endfor %}
                  <th scope=\"col\" class=\"actions text-center\"><?= __('Actions') ?></th>
              </tr>
              <?php foreach (\${{ singularVar }}->{{ details.property }} as \${{ otherSingularVar }}): ?>
              <tr>
  {% for field in details.fields %}
                  <td><?= h(\${{ otherSingularVar }}->{{ field }}) ?></td>
  {% endfor %}
  {% set otherPk = '\$' ~ otherSingularVar ~ '->' ~ details.primaryKey[0] %}
                  <td class=\"actions text-right\">
                      <?= \$this->Html->link(__('View'), ['controller' => '{{ details.controller }}', 'action' => 'view', {{ otherPk|raw }}], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= \$this->Html->link(__('Edit'), ['controller' => '{{ details.controller }}', 'action' => 'edit', {{ otherPk|raw }}], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= \$this->Form->postLink(__('Delete'), ['controller' => '{{ details.controller }}', 'action' => 'delete', {{ otherPk|raw }}], ['confirm' => __('Are you sure you want to delete # {0}?', {{ otherPk|raw }}), 'class'=>'btn btn-danger btn-xs']) ?>
                  </td>
              </tr>
              <?php endforeach; ?>
          </table>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
{% endfor %}
</section>
", "D:\\programs\\xampp\\htdocs\\garnishee/vendor/maiconpinto/cakephp-adminlte-theme/src\\Template\\Bake\\\\Template\\view.twig", "D:\\programs\\xampp\\htdocs\\garnishee/vendor/maiconpinto/cakephp-adminlte-theme/src\\Template\\Bake\\\\Template\\view.twig");
    }
}
