<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_c6e578ee0f7a05cfa8290d8ab7d4be0d2bc40a00282d9a1ea44368f29d91c9f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 32);
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b91e968363f0e90f0b055a50d22bc27ad384eb2059985cc3f5b309e75d4c5ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b91e968363f0e90f0b055a50d22bc27ad384eb2059985cc3f5b309e75d4c5ba->enter($__internal_2b91e968363f0e90f0b055a50d22bc27ad384eb2059985cc3f5b309e75d4c5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b91e968363f0e90f0b055a50d22bc27ad384eb2059985cc3f5b309e75d4c5ba->leave($__internal_2b91e968363f0e90f0b055a50d22bc27ad384eb2059985cc3f5b309e75d4c5ba_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_a6c063db05f1ede1addbf7b68b790e18d4dfcd696265de86ec2cbbeac2ef53ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6c063db05f1ede1addbf7b68b790e18d4dfcd696265de86ec2cbbeac2ef53ee->enter($__internal_a6c063db05f1ede1addbf7b68b790e18d4dfcd696265de86ec2cbbeac2ef53ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

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
        
        $__internal_a6c063db05f1ede1addbf7b68b790e18d4dfcd696265de86ec2cbbeac2ef53ee->leave($__internal_a6c063db05f1ede1addbf7b68b790e18d4dfcd696265de86ec2cbbeac2ef53ee_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_0e833068b3f4357d356d95528e54eb204d20f3e47c3a09dd6df6d641a5620b33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e833068b3f4357d356d95528e54eb204d20f3e47c3a09dd6df6d641a5620b33->enter($__internal_0e833068b3f4357d356d95528e54eb204d20f3e47c3a09dd6df6d641a5620b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0e833068b3f4357d356d95528e54eb204d20f3e47c3a09dd6df6d641a5620b33->leave($__internal_0e833068b3f4357d356d95528e54eb204d20f3e47c3a09dd6df6d641a5620b33_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_410ae336c60337ce7c661ce210a5e89cbb708c4dfc5f0e98fa9b782041ef3c6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_410ae336c60337ce7c661ce210a5e89cbb708c4dfc5f0e98fa9b782041ef3c6c->enter($__internal_410ae336c60337ce7c661ce210a5e89cbb708c4dfc5f0e98fa9b782041ef3c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_410ae336c60337ce7c661ce210a5e89cbb708c4dfc5f0e98fa9b782041ef3c6c->leave($__internal_410ae336c60337ce7c661ce210a5e89cbb708c4dfc5f0e98fa9b782041ef3c6c_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_2f63f56f05d05ddf9d88cd596214d12acc9b026ca761ffda288f127145cbe174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f63f56f05d05ddf9d88cd596214d12acc9b026ca761ffda288f127145cbe174->enter($__internal_2f63f56f05d05ddf9d88cd596214d12acc9b026ca761ffda288f127145cbe174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_2f63f56f05d05ddf9d88cd596214d12acc9b026ca761ffda288f127145cbe174->leave($__internal_2f63f56f05d05ddf9d88cd596214d12acc9b026ca761ffda288f127145cbe174_prof);

    }

    // line 34
    public function block_form($context, array $blocks = array())
    {
        $__internal_eac9b46505cbde87bd3ddbcf4d33e62ef3ad91792dcdb10b22550d94590ec0a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eac9b46505cbde87bd3ddbcf4d33e62ef3ad91792dcdb10b22550d94590ec0a2->enter($__internal_eac9b46505cbde87bd3ddbcf4d33e62ef3ad91792dcdb10b22550d94590ec0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 35
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_eac9b46505cbde87bd3ddbcf4d33e62ef3ad91792dcdb10b22550d94590ec0a2->leave($__internal_eac9b46505cbde87bd3ddbcf4d33e62ef3ad91792dcdb10b22550d94590ec0a2_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
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
", "SonataAdminBundle:CRUD:base_edit.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/base_edit.html.twig");
    }
}
