<?php

/* @SonataAdmin/CRUD/action.html.twig */
class __TwigTemplate_070a7ea99630ac7332b467d4b9166a4ef4ff7d81b019b6084d4388e20e9f7d93 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e8eeeea5a251d09931056674fe041922d35c7a0a06ffd764216ea752fe1caf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e8eeeea5a251d09931056674fe041922d35c7a0a06ffd764216ea752fe1caf4->enter($__internal_2e8eeeea5a251d09931056674fe041922d35c7a0a06ffd764216ea752fe1caf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e8eeeea5a251d09931056674fe041922d35c7a0a06ffd764216ea752fe1caf4->leave($__internal_2e8eeeea5a251d09931056674fe041922d35c7a0a06ffd764216ea752fe1caf4_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_fb84812bdfdb66c93601c0173654a97ee8e03676c015ca667c453cfc6e45ec25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb84812bdfdb66c93601c0173654a97ee8e03676c015ca667c453cfc6e45ec25->enter($__internal_fb84812bdfdb66c93601c0173654a97ee8e03676c015ca667c453cfc6e45ec25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/action.html.twig", 15)->display($context);
        
        $__internal_fb84812bdfdb66c93601c0173654a97ee8e03676c015ca667c453cfc6e45ec25->leave($__internal_fb84812bdfdb66c93601c0173654a97ee8e03676c015ca667c453cfc6e45ec25_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_e582bb881040f9cb72965d66a53e0304febe91db9eb187ad812743988318b95d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e582bb881040f9cb72965d66a53e0304febe91db9eb187ad812743988318b95d->enter($__internal_e582bb881040f9cb72965d66a53e0304febe91db9eb187ad812743988318b95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_e582bb881040f9cb72965d66a53e0304febe91db9eb187ad812743988318b95d->leave($__internal_e582bb881040f9cb72965d66a53e0304febe91db9eb187ad812743988318b95d_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_e9ab134a24174fa3392926c6d9fc90e6b040931d2147e70023adbfa28beade9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9ab134a24174fa3392926c6d9fc90e6b040931d2147e70023adbfa28beade9a->enter($__internal_e9ab134a24174fa3392926c6d9fc90e6b040931d2147e70023adbfa28beade9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_e9ab134a24174fa3392926c6d9fc90e6b040931d2147e70023adbfa28beade9a->leave($__internal_e9ab134a24174fa3392926c6d9fc90e6b040931d2147e70023adbfa28beade9a_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/action.html.twig";
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
", "@SonataAdmin/CRUD/action.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\action.html.twig");
    }
}
