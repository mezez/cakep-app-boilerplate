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

/* D:\programs\xampp\htdocs\garnishee/vendor/maiconpinto/cakephp-adminlte-theme/src\Template\Bake\\Template\index.twig */
class __TwigTemplate_160ab0120d03ee4d1825cd3bdf6b32f2708642d58d2e23df610c4083b6997204 extends \Twig\Template
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
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa->enter($__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "D:\\programs\\xampp\\htdocs\\garnishee/vendor/maiconpinto/cakephp-adminlte-theme/src\\Template\\Bake\\\\Template\\index.twig"));

        // line 16
        $context["fields"] = $this->getAttribute(($context["Bake"] ?? null), "filterFields", [0 => ($context["fields"] ?? null), 1 => ($context["schema"] ?? null), 2 => ($context["modelObject"] ?? null), 3 => ($context["indexColumns"] ?? null), 4 => [0 => "binary", 1 => "text"]], "method");
        // line 17
        echo "<!-- Content Header (Page header) -->
<section class=\"content-header\">
  <h1>
    ";
        // line 20
        echo twig_escape_filter($this->env, ($context["pluralHumanName"] ?? null), "html", null, true);
        echo "

    <div class=\"pull-right\"><?php echo \$this->Html->link(__('New'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class=\"content\">
  <div class=\"row\">
    <div class=\"col-xs-12\">
      <div class=\"box\">
        <div class=\"box-header\">
          <h3 class=\"box-title\"><?php echo __('List'); ?></h3>

          <div class=\"box-tools\">
            <form action=\"<?php echo \$this->Url->build(); ?>\" method=\"POST\">
              <div class=\"input-group input-group-sm\" style=\"width: 150px;\">
                <input type=\"text\" name=\"table_search\" class=\"form-control pull-right\" placeholder=\"<?php echo __('Search'); ?>\">

                <div class=\"input-group-btn\">
                  <button type=\"submit\" class=\"btn btn-default\"><i class=\"fa fa-search\"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- /.box-header -->
        <div class=\"box-body table-responsive no-padding\">
          <table class=\"table table-hover\">
            <thead>
              <tr>
  ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 52
            echo "                <th scope=\"col\"><?= \$this->Paginator->sort('";
            echo twig_escape_filter($this->env, $context["field"], "html", null, true);
            echo "') ?></th>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                <th scope=\"col\" class=\"actions text-center\"><?= __('Actions') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach (\$";
        // line 58
        echo twig_escape_filter($this->env, ($context["pluralVar"] ?? null), "html", null, true);
        echo " as \$";
        echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
        echo "): ?>
                <tr>
";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 61
            $context["isKey"] = false;
            // line 62
            if ($this->getAttribute(($context["associations"] ?? null), "BelongsTo", [])) {
                // line 63
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["associations"] ?? null), "BelongsTo", []));
                foreach ($context['_seq'] as $context["alias"] => $context["details"]) {
                    if (($context["field"] == $this->getAttribute($context["details"], "foreignKey", []))) {
                        // line 64
                        $context["isKey"] = true;
                        // line 65
                        echo "                  <td><?= \$";
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
                        echo "]) : '' ?></td>
";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['alias'], $context['details'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 68
            if ( !(($context["isKey"] ?? null) === true)) {
                // line 69
                $context["columnData"] = $this->getAttribute(($context["Bake"] ?? null), "columnData", [0 => $context["field"], 1 => ($context["schema"] ?? null)], "method");
                // line 70
                if (!twig_in_filter($this->getAttribute(($context["columnData"] ?? null), "type", []), [0 => "integer", 1 => "float", 2 => "decimal", 3 => "biginteger", 4 => "smallinteger", 5 => "tinyinteger"])) {
                    // line 71
                    echo "                  <td><?= h(\$";
                    echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                    echo ") ?></td>
";
                } else {
                    // line 73
                    echo "                  <td><?= \$this->Number->format(\$";
                    echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                    echo ") ?></td>
";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        $context["pk"] = ((("\$" . ($context["singularVar"] ?? null)) . "->") . $this->getAttribute(($context["primaryKey"] ?? null), 0, [], "array"));
        // line 78
        echo "                  <td class=\"actions text-right\">
                      <?= \$this->Html->link(__('View'), ['action' => 'view', ";
        // line 79
        echo ($context["pk"] ?? null);
        echo "], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= \$this->Html->link(__('Edit'), ['action' => 'edit', ";
        // line 80
        echo ($context["pk"] ?? null);
        echo "], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= \$this->Form->postLink(__('Delete'), ['action' => 'delete', ";
        // line 81
        echo ($context["pk"] ?? null);
        echo "], ['confirm' => __('Are you sure you want to delete # {0}?', ";
        echo ($context["pk"] ?? null);
        echo "), 'class'=>'btn btn-danger btn-xs']) ?>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>";
        
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa->leave($__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa_prof);

    }

    public function getTemplateName()
    {
        return "D:\\programs\\xampp\\htdocs\\garnishee/vendor/maiconpinto/cakephp-adminlte-theme/src\\Template\\Bake\\\\Template\\index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 81,  178 => 80,  174 => 79,  171 => 78,  169 => 77,  156 => 73,  148 => 71,  146 => 70,  144 => 69,  142 => 68,  115 => 65,  113 => 64,  108 => 63,  106 => 62,  104 => 61,  100 => 60,  93 => 58,  87 => 54,  78 => 52,  74 => 51,  40 => 20,  35 => 17,  33 => 16,);
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
{% set fields = Bake.filterFields(fields, schema, modelObject, indexColumns, ['binary', 'text']) %}
<!-- Content Header (Page header) -->
<section class=\"content-header\">
  <h1>
    {{ pluralHumanName }}

    <div class=\"pull-right\"><?php echo \$this->Html->link(__('New'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class=\"content\">
  <div class=\"row\">
    <div class=\"col-xs-12\">
      <div class=\"box\">
        <div class=\"box-header\">
          <h3 class=\"box-title\"><?php echo __('List'); ?></h3>

          <div class=\"box-tools\">
            <form action=\"<?php echo \$this->Url->build(); ?>\" method=\"POST\">
              <div class=\"input-group input-group-sm\" style=\"width: 150px;\">
                <input type=\"text\" name=\"table_search\" class=\"form-control pull-right\" placeholder=\"<?php echo __('Search'); ?>\">

                <div class=\"input-group-btn\">
                  <button type=\"submit\" class=\"btn btn-default\"><i class=\"fa fa-search\"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- /.box-header -->
        <div class=\"box-body table-responsive no-padding\">
          <table class=\"table table-hover\">
            <thead>
              <tr>
  {% for field in fields %}
                <th scope=\"col\"><?= \$this->Paginator->sort('{{ field }}') ?></th>
  {% endfor %}
                <th scope=\"col\" class=\"actions text-center\"><?= __('Actions') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach (\${{ pluralVar }} as \${{ singularVar }}): ?>
                <tr>
{% for field in fields %}
{% set isKey = false %}
{% if associations.BelongsTo %}
{% for alias, details in associations.BelongsTo if field == details.foreignKey %}
{% set isKey = true %}
                  <td><?= \${{ singularVar }}->has('{{ details.property }}') ? \$this->Html->link(\${{ singularVar }}->{{ details.property }}->{{ details.displayField }}, ['controller' => '{{ details.controller }}', 'action' => 'view', \${{ singularVar }}->{{ details.property }}->{{ details.primaryKey[0] }}]) : '' ?></td>
{% endfor %}
{% endif %}
{% if isKey is not same as(true) %}
{% set columnData = Bake.columnData(field, schema) %}
{% if columnData.type not in ['integer', 'float', 'decimal', 'biginteger', 'smallinteger', 'tinyinteger'] %}
                  <td><?= h(\${{ singularVar }}->{{ field }}) ?></td>
{% else %}
                  <td><?= \$this->Number->format(\${{ singularVar }}->{{ field }}) ?></td>
{% endif %}
{% endif %}
{% endfor %}
{% set pk = '\$' ~ singularVar ~ '->' ~ primaryKey[0] %}
                  <td class=\"actions text-right\">
                      <?= \$this->Html->link(__('View'), ['action' => 'view', {{ pk|raw }}], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= \$this->Html->link(__('Edit'), ['action' => 'edit', {{ pk|raw }}], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= \$this->Form->postLink(__('Delete'), ['action' => 'delete', {{ pk|raw }}], ['confirm' => __('Are you sure you want to delete # {0}?', {{ pk|raw }}), 'class'=>'btn btn-danger btn-xs']) ?>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>", "D:\\programs\\xampp\\htdocs\\garnishee/vendor/maiconpinto/cakephp-adminlte-theme/src\\Template\\Bake\\\\Template\\index.twig", "D:\\programs\\xampp\\htdocs\\garnishee/vendor/maiconpinto/cakephp-adminlte-theme/src\\Template\\Bake\\\\Template\\index.twig");
    }
}
