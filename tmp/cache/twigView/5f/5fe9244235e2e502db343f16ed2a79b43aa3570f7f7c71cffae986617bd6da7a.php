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

/* D:\programs\xampp\htdocs\garnishee/vendor/maiconpinto/cakephp-adminlte-theme/src\Template\Bake\Element\form.twig */
class __TwigTemplate_13ca040b9bb14127552e4763d4a7fe23901a449e4552150c9f54bba57feaece9 extends \Twig\Template
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
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa->enter($__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "D:\\programs\\xampp\\htdocs\\garnishee/vendor/maiconpinto/cakephp-adminlte-theme/src\\Template\\Bake\\Element\\form.twig"));

        // line 16
        $context["fields"] = $this->getAttribute(($context["Bake"] ?? null), "filterFields", [0 => ($context["fields"] ?? null), 1 => ($context["schema"] ?? null), 2 => ($context["modelObject"] ?? null)], "method");
        // line 17
        echo "<!-- Content Header (Page header) -->
  <section class=\"content-header\">
    <h1>
      ";
        // line 20
        echo twig_escape_filter($this->env, ($context["singularHumanName"] ?? null), "html", null, true);
        echo "
      <small><?php echo __('";
        // line 21
        echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize(($context["action"] ?? null)), "html", null, true);
        echo "'); ?></small>
    </h1>
    <ol class=\"breadcrumb\">
      <li><a href=\"<?php echo \$this->Url->build(['action' => 'index']); ?>\"><i class=\"fa fa-dashboard\"></i> <?php echo __('Home'); ?></a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class=\"content\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <!-- general form elements -->
        <div class=\"box box-primary\">
          <div class=\"box-header with-border\">
            <h3 class=\"box-title\"><?php echo __('Form'); ?></h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <?php echo \$this->Form->create(\$";
        // line 39
        echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
        echo ", ['role' => 'form']); ?>
            <div class=\"box-body\">
              <?php
";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            if (!twig_in_filter($context["field"], ($context["primaryKey"] ?? null))) {
                // line 43
                if ($this->getAttribute(($context["keyFields"] ?? null), $context["field"], [], "array")) {
                    // line 44
                    $context["fieldData"] = $this->getAttribute(($context["Bake"] ?? null), "columnData", [0 => $context["field"], 1 => ($context["schema"] ?? null)], "method");
                    // line 45
                    if ($this->getAttribute(($context["fieldData"] ?? null), "null", [])) {
                        // line 46
                        echo "                echo \$this->Form->control('";
                        echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                        echo "', ['options' => \$";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["keyFields"] ?? null), $context["field"], [], "array"), "html", null, true);
                        echo ", 'empty' => true]);";
                        // line 47
                        echo "
";
                    } else {
                        // line 49
                        echo "                echo \$this->Form->control('";
                        echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                        echo "', ['options' => \$";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["keyFields"] ?? null), $context["field"], [], "array"), "html", null, true);
                        echo "]);";
                        // line 50
                        echo "
";
                    }
                } elseif (!twig_in_filter(                // line 52
$context["field"], [0 => "created", 1 => "modified", 2 => "updated"])) {
                    // line 53
                    $context["fieldData"] = $this->getAttribute(($context["Bake"] ?? null), "columnData", [0 => $context["field"], 1 => ($context["schema"] ?? null)], "method");
                    // line 54
                    if ((twig_in_filter($this->getAttribute(($context["fieldData"] ?? null), "type", []), [0 => "date", 1 => "datetime", 2 => "time"]) && $this->getAttribute(($context["fieldData"] ?? null), "null", []))) {
                        // line 55
                        echo "                echo \$this->Form->control('";
                        echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                        echo "', ['empty' => true]);";
                        // line 56
                        echo "
";
                    } else {
                        // line 58
                        echo "                echo \$this->Form->control('";
                        echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                        echo "');";
                        // line 59
                        echo "
";
                    }
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        if ($this->getAttribute(($context["associations"] ?? null), "BelongsToMany", [])) {
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["associations"] ?? null), "BelongsToMany", []));
            foreach ($context['_seq'] as $context["assocName"] => $context["assocData"]) {
                // line 66
                echo "                echo \$this->Form->control('";
                echo twig_escape_filter($this->env, $this->getAttribute($context["assocData"], "property", []), "html", null, true);
                echo "._ids', ['options' => \$";
                echo twig_escape_filter($this->env, $this->getAttribute($context["assocData"], "variable", []), "html", null, true);
                echo "]);";
                // line 67
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['assocName'], $context['assocData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 70
        echo "              ?>
            </div>
            <!-- /.box-body -->

          <?php echo \$this->Form->submit(__('Submit')); ?>

          <?php echo \$this->Form->end(); ?>
        </div>
        <!-- /.box -->
      </div>
  </div>
  <!-- /.row -->
</section>
";
        
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa->leave($__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa_prof);

    }

    public function getTemplateName()
    {
        return "D:\\programs\\xampp\\htdocs\\garnishee/vendor/maiconpinto/cakephp-adminlte-theme/src\\Template\\Bake\\Element\\form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 70,  142 => 67,  136 => 66,  132 => 65,  130 => 64,  120 => 59,  116 => 58,  112 => 56,  108 => 55,  106 => 54,  104 => 53,  102 => 52,  98 => 50,  92 => 49,  88 => 47,  82 => 46,  80 => 45,  78 => 44,  76 => 43,  71 => 42,  65 => 39,  44 => 21,  40 => 20,  35 => 17,  33 => 16,);
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
{% set fields = Bake.filterFields(fields, schema, modelObject) %}
<!-- Content Header (Page header) -->
  <section class=\"content-header\">
    <h1>
      {{ singularHumanName }}
      <small><?php echo __('{{ action|humanize }}'); ?></small>
    </h1>
    <ol class=\"breadcrumb\">
      <li><a href=\"<?php echo \$this->Url->build(['action' => 'index']); ?>\"><i class=\"fa fa-dashboard\"></i> <?php echo __('Home'); ?></a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class=\"content\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <!-- general form elements -->
        <div class=\"box box-primary\">
          <div class=\"box-header with-border\">
            <h3 class=\"box-title\"><?php echo __('Form'); ?></h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <?php echo \$this->Form->create(\${{ singularVar }}, ['role' => 'form']); ?>
            <div class=\"box-body\">
              <?php
{% for field in fields if field not in primaryKey %}
    {%- if keyFields[field] %}
        {%- set fieldData = Bake.columnData(field, schema) %}
        {%- if fieldData.null %}
                echo \$this->Form->control('{{ field }}', ['options' => \${{ keyFields[field] }}, 'empty' => true]);
            {{- \"\\n\" }}
        {%- else %}
                echo \$this->Form->control('{{ field }}', ['options' => \${{ keyFields[field] }}]);
            {{- \"\\n\" }}
        {%- endif %}
    {%- elseif field not in ['created', 'modified', 'updated'] %}
        {%- set fieldData = Bake.columnData(field, schema) %}
        {%- if fieldData.type in ['date', 'datetime', 'time'] and fieldData.null %}
                echo \$this->Form->control('{{ field }}', ['empty' => true]);
            {{- \"\\n\" }}
        {%- else %}
                echo \$this->Form->control('{{ field }}');
    {{- \"\\n\" }}
        {%- endif %}
    {%- endif %}
{%- endfor %}

{%- if associations.BelongsToMany %}
    {%- for assocName, assocData in associations.BelongsToMany %}
                echo \$this->Form->control('{{ assocData.property }}._ids', ['options' => \${{ assocData.variable }}]);
    {{- \"\\n\" }}
    {%- endfor %}
{% endif %}
              ?>
            </div>
            <!-- /.box-body -->

          <?php echo \$this->Form->submit(__('Submit')); ?>

          <?php echo \$this->Form->end(); ?>
        </div>
        <!-- /.box -->
      </div>
  </div>
  <!-- /.row -->
</section>
", "D:\\programs\\xampp\\htdocs\\garnishee/vendor/maiconpinto/cakephp-adminlte-theme/src\\Template\\Bake\\Element\\form.twig", "D:\\programs\\xampp\\htdocs\\garnishee/vendor/maiconpinto/cakephp-adminlte-theme/src\\Template\\Bake\\Element\\form.twig");
    }
}
