<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_2545d40329e13163f237723258763f61e200fd76ba7e8ab6bee10d5ad30fa931 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_64f48342cd132b1c7a72f80ad84b54d88be8f3acdfca7e7f09987c9454c301ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64f48342cd132b1c7a72f80ad84b54d88be8f3acdfca7e7f09987c9454c301ac->enter($__internal_64f48342cd132b1c7a72f80ad84b54d88be8f3acdfca7e7f09987c9454c301ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64f48342cd132b1c7a72f80ad84b54d88be8f3acdfca7e7f09987c9454c301ac->leave($__internal_64f48342cd132b1c7a72f80ad84b54d88be8f3acdfca7e7f09987c9454c301ac_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_4c38457f2a88243be6128b2896433215b2a27a427505f5cd7b58ed53efc9d00c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c38457f2a88243be6128b2896433215b2a27a427505f5cd7b58ed53efc9d00c->enter($__internal_4c38457f2a88243be6128b2896433215b2a27a427505f5cd7b58ed53efc9d00c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_4c38457f2a88243be6128b2896433215b2a27a427505f5cd7b58ed53efc9d00c->leave($__internal_4c38457f2a88243be6128b2896433215b2a27a427505f5cd7b58ed53efc9d00c_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_bb6e3b1e3be4cab6f34bd79dfc4654224e484f956e2ddbd9db174e096c7ab83c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb6e3b1e3be4cab6f34bd79dfc4654224e484f956e2ddbd9db174e096c7ab83c->enter($__internal_bb6e3b1e3be4cab6f34bd79dfc4654224e484f956e2ddbd9db174e096c7ab83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_bb6e3b1e3be4cab6f34bd79dfc4654224e484f956e2ddbd9db174e096c7ab83c->leave($__internal_bb6e3b1e3be4cab6f34bd79dfc4654224e484f956e2ddbd9db174e096c7ab83c_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_b21e4eca4406523080d95730a37ac17a8d6b92de10b98ae00b56ee0ac63bf5c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b21e4eca4406523080d95730a37ac17a8d6b92de10b98ae00b56ee0ac63bf5c4->enter($__internal_b21e4eca4406523080d95730a37ac17a8d6b92de10b98ae00b56ee0ac63bf5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_b21e4eca4406523080d95730a37ac17a8d6b92de10b98ae00b56ee0ac63bf5c4->leave($__internal_b21e4eca4406523080d95730a37ac17a8d6b92de10b98ae00b56ee0ac63bf5c4_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 25,  68 => 24,  57 => 20,  54 => 19,  48 => 18,  41 => 15,  35 => 14,  20 => 12,);
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

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}
    {% if action is defined %}
        {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}
    {% endif %}
{% endblock %}

{% block content %}

    Redefine the content block in your action template

{% endblock %}
", "SonataAdminBundle:CRUD:action.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/action.html.twig");
    }
}
