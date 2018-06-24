<?php

/* @SonataAdmin/CRUD/base_edit.html.twig */
class __TwigTemplate_f13960fd99eeccd258fd3386d995d29e7a1b1bd598c5f038085c5156a5be6430 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "@SonataAdmin/CRUD/base_edit.html.twig", 32);
        // line 32
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c2fe8ea3e42b18f01975241f21dc2aee0bd5e3b4bf9162a9cd1ecf7f87d97f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c2fe8ea3e42b18f01975241f21dc2aee0bd5e3b4bf9162a9cd1ecf7f87d97f4->enter($__internal_5c2fe8ea3e42b18f01975241f21dc2aee0bd5e3b4bf9162a9cd1ecf7f87d97f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_edit.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c2fe8ea3e42b18f01975241f21dc2aee0bd5e3b4bf9162a9cd1ecf7f87d97f4->leave($__internal_5c2fe8ea3e42b18f01975241f21dc2aee0bd5e3b4bf9162a9cd1ecf7f87d97f4_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1d9e7e2397c3c67814ffdb885c2dbb5f33c648cbb706b195903c1848f630a9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1d9e7e2397c3c67814ffdb885c2dbb5f33c648cbb706b195903c1848f630a9c->enter($__internal_d1d9e7e2397c3c67814ffdb885c2dbb5f33c648cbb706b195903c1848f630a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_d1d9e7e2397c3c67814ffdb885c2dbb5f33c648cbb706b195903c1848f630a9c->leave($__internal_d1d9e7e2397c3c67814ffdb885c2dbb5f33c648cbb706b195903c1848f630a9c_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_96d759835d4b09c8294e0ce4925a1c25e2ed7483c012a2c99d27987d257be79e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96d759835d4b09c8294e0ce4925a1c25e2ed7483c012a2c99d27987d257be79e->enter($__internal_96d759835d4b09c8294e0ce4925a1c25e2ed7483c012a2c99d27987d257be79e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_96d759835d4b09c8294e0ce4925a1c25e2ed7483c012a2c99d27987d257be79e->leave($__internal_96d759835d4b09c8294e0ce4925a1c25e2ed7483c012a2c99d27987d257be79e_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_8bcc2a9ef669b77028e1ef6d5692c2964e662134f54f58aa57ce38384f297598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bcc2a9ef669b77028e1ef6d5692c2964e662134f54f58aa57ce38384f297598->enter($__internal_8bcc2a9ef669b77028e1ef6d5692c2964e662134f54f58aa57ce38384f297598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/base_edit.html.twig", 27)->display($context);
        
        $__internal_8bcc2a9ef669b77028e1ef6d5692c2964e662134f54f58aa57ce38384f297598->leave($__internal_8bcc2a9ef669b77028e1ef6d5692c2964e662134f54f58aa57ce38384f297598_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_80321eab0bedb8585b668651e1f7224759ad421a89c37f80f3b0b7455ac8f1c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80321eab0bedb8585b668651e1f7224759ad421a89c37f80f3b0b7455ac8f1c3->enter($__internal_80321eab0bedb8585b668651e1f7224759ad421a89c37f80f3b0b7455ac8f1c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_80321eab0bedb8585b668651e1f7224759ad421a89c37f80f3b0b7455ac8f1c3->leave($__internal_80321eab0bedb8585b668651e1f7224759ad421a89c37f80f3b0b7455ac8f1c3_prof);

    }

    // line 34
    public function block_form($context, array $blocks = array())
    {
        $__internal_f19fcd454293466567dc33ecc64c53f45beb77af669a310bd26e6f0234500498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f19fcd454293466567dc33ecc64c53f45beb77af669a310bd26e6f0234500498->enter($__internal_f19fcd454293466567dc33ecc64c53f45beb77af669a310bd26e6f0234500498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 35
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_f19fcd454293466567dc33ecc64c53f45beb77af669a310bd26e6f0234500498->leave($__internal_f19fcd454293466567dc33ecc64c53f45beb77af669a310bd26e6f0234500498_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 35,  122 => 34,  110 => 30,  103 => 27,  97 => 26,  87 => 23,  81 => 22,  70 => 18,  64 => 16,  61 => 15,  55 => 14,  40 => 12,  12 => 32,);
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

{% extends base_template %}

{% block title %}
    {% if admin.id(object) is not null %}
        {{ \"title_edit\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
    {% else %}
        {{ \"title_create\"|trans({}, 'SonataAdminBundle') }}
    {% endif %}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}

{% block form %}
    {{ block('parentForm') }}
{% endblock %}
", "@SonataAdmin/CRUD/base_edit.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\base_edit.html.twig");
    }
}
