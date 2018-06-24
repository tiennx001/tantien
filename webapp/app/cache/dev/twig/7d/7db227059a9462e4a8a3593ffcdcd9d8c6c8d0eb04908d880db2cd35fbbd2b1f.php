<?php

/* SonataAdminBundle:CRUD:preview.html.twig */
class __TwigTemplate_38d8826c588a791d0f377c2b87f8432b044d195b42b30f07284a691c5ea6f752 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:edit.html.twig", "SonataAdminBundle:CRUD:preview.html.twig", 12);
        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'formactions' => array($this, 'block_formactions'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c2176d76b94f20b2b58b3148e27d3cfca4de686ee8100dabc5831d19d6a5088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c2176d76b94f20b2b58b3148e27d3cfca4de686ee8100dabc5831d19d6a5088->enter($__internal_0c2176d76b94f20b2b58b3148e27d3cfca4de686ee8100dabc5831d19d6a5088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:preview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c2176d76b94f20b2b58b3148e27d3cfca4de686ee8100dabc5831d19d6a5088->leave($__internal_0c2176d76b94f20b2b58b3148e27d3cfca4de686ee8100dabc5831d19d6a5088_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_1d187777cabbb23ccafcaa5431a94144f3fd2a2ae8215a22226b8ad4b2e43fe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d187777cabbb23ccafcaa5431a94144f3fd2a2ae8215a22226b8ad4b2e43fe1->enter($__internal_1d187777cabbb23ccafcaa5431a94144f3fd2a2ae8215a22226b8ad4b2e43fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        
        $__internal_1d187777cabbb23ccafcaa5431a94144f3fd2a2ae8215a22226b8ad4b2e43fe1->leave($__internal_1d187777cabbb23ccafcaa5431a94144f3fd2a2ae8215a22226b8ad4b2e43fe1_prof);

    }

    // line 17
    public function block_side_menu($context, array $blocks = array())
    {
        $__internal_77969e4c6e32fbe133febdf5189c9a551a2cff945a40b984d49d39d895f1d1cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77969e4c6e32fbe133febdf5189c9a551a2cff945a40b984d49d39d895f1d1cb->enter($__internal_77969e4c6e32fbe133febdf5189c9a551a2cff945a40b984d49d39d895f1d1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        
        $__internal_77969e4c6e32fbe133febdf5189c9a551a2cff945a40b984d49d39d895f1d1cb->leave($__internal_77969e4c6e32fbe133febdf5189c9a551a2cff945a40b984d49d39d895f1d1cb_prof);

    }

    // line 20
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_63d38f83d7fed6e982999dd9600f424a7c2937fe9cde843396ac78cdd1a2e3da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63d38f83d7fed6e982999dd9600f424a7c2937fe9cde843396ac78cdd1a2e3da->enter($__internal_63d38f83d7fed6e982999dd9600f424a7c2937fe9cde843396ac78cdd1a2e3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        // line 21
        echo "    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview_approve", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview_decline", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
";
        
        $__internal_63d38f83d7fed6e982999dd9600f424a7c2937fe9cde843396ac78cdd1a2e3da->leave($__internal_63d38f83d7fed6e982999dd9600f424a7c2937fe9cde843396ac78cdd1a2e3da_prof);

    }

    // line 31
    public function block_preview($context, array $blocks = array())
    {
        $__internal_d032352615bd5dd91f962a2ad6ebfd2d8556cba5b03655eb1455f844f8d6774d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d032352615bd5dd91f962a2ad6ebfd2d8556cba5b03655eb1455f844f8d6774d->enter($__internal_d032352615bd5dd91f962a2ad6ebfd2d8556cba5b03655eb1455f844f8d6774d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        // line 32
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showgroups", array()));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 34
            echo "            <table class=\"table table-bordered\">
                ";
            // line 35
            if ($context["name"]) {
                // line 36
                echo "                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            ";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["name"], array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain", array())), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 42
            echo "
                ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["view_group"], "fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 44
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 45
                if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "show", array(), "any", false, true), $context["field_name"], array(), "array", true, true)) {
                    // line 46
                    echo "                            ";
                    echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "show", array()), $context["field_name"], array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
                    echo "
                        ";
                }
                // line 48
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>
";
        
        $__internal_d032352615bd5dd91f962a2ad6ebfd2d8556cba5b03655eb1455f844f8d6774d->leave($__internal_d032352615bd5dd91f962a2ad6ebfd2d8556cba5b03655eb1455f844f8d6774d_prof);

    }

    // line 55
    public function block_form($context, array $blocks = array())
    {
        $__internal_fcb07c3721f612e658ab02273e19e072b9d6b2dc714806de1082d16659a9c858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcb07c3721f612e658ab02273e19e072b9d6b2dc714806de1082d16659a9c858->enter($__internal_fcb07c3721f612e658ab02273e19e072b9d6b2dc714806de1082d16659a9c858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 56
        echo "    <div class=\"sonata-preview-form-container\">
        ";
        // line 57
        $this->displayParentBlock("form", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_fcb07c3721f612e658ab02273e19e072b9d6b2dc714806de1082d16659a9c858->leave($__internal_fcb07c3721f612e658ab02273e19e072b9d6b2dc714806de1082d16659a9c858_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 57,  162 => 56,  156 => 55,  148 => 52,  141 => 50,  134 => 48,  128 => 46,  126 => 45,  123 => 44,  119 => 43,  116 => 42,  109 => 38,  105 => 36,  103 => 35,  100 => 34,  96 => 33,  93 => 32,  87 => 31,  77 => 27,  70 => 23,  66 => 21,  60 => 20,  49 => 17,  38 => 14,  11 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:edit.html.twig' %}

{% block actions %}
{% endblock %}

{% block side_menu %}
{% endblock %}

{% block formactions %}
    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        {{ 'btn_preview_approve'|trans({}, 'SonataAdminBundle') }}
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        {{ 'btn_preview_decline'|trans({}, 'SonataAdminBundle') }}
    </button>
{% endblock %}

{% block preview %}
    <div class=\"sonata-ba-view\">
        {% for name, view_group in admin.showgroups %}
            <table class=\"table table-bordered\">
                {% if name %}
                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            {{ name|trans({}, admin.translationdomain) }}
                        </td>
                    </tr>
                {% endif %}

                {% for field_name in view_group.fields %}
                    <tr class=\"sonata-ba-view-container\">
                        {% if admin.show[field_name] is defined %}
                            {{ admin.show[field_name]|render_view_element(object) }}
                        {% endif %}
                    </tr>
                {% endfor %}
            </table>
        {% endfor %}
    </div>
{% endblock %}

{% block form %}
    <div class=\"sonata-preview-form-container\">
        {{ parent() }}
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:preview.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/preview.html.twig");
    }
}
