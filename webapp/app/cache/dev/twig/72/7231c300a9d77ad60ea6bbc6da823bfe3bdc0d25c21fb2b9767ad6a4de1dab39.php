<?php

/* KnpMenuBundle::menu.html.twig */
class __TwigTemplate_aa7a4166a26ce8ce18404ba8794f4445fbd91a8a44b4ce1b1eef88c608bfdfff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "KnpMenuBundle::menu.html.twig", 1);
        $this->blocks = array(
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f78bb71519dcea9670cdae55393024b7caa6795f063b98f4675e0701483bff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f78bb71519dcea9670cdae55393024b7caa6795f063b98f4675e0701483bff0->enter($__internal_6f78bb71519dcea9670cdae55393024b7caa6795f063b98f4675e0701483bff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpMenuBundle::menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f78bb71519dcea9670cdae55393024b7caa6795f063b98f4675e0701483bff0->leave($__internal_6f78bb71519dcea9670cdae55393024b7caa6795f063b98f4675e0701483bff0_prof);

    }

    // line 3
    public function block_label($context, array $blocks = array())
    {
        $__internal_b70fc185884d1d0e4f9e6407352f844f8b3227ded92b92b2c6d3d88979aaf01a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b70fc185884d1d0e4f9e6407352f844f8b3227ded92b92b2c6d3d88979aaf01a->enter($__internal_b70fc185884d1d0e4f9e6407352f844f8b3227ded92b92b2c6d3d88979aaf01a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 4
        $context["translation_domain"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "translation_domain", 1 => "messages"), "method");
        // line 5
        $context["label"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array());
        // line 6
        if ( !((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) {
            // line 7
            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        }
        // line 9
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"));
        } else {
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
        }
        
        $__internal_b70fc185884d1d0e4f9e6407352f844f8b3227ded92b92b2c6d3d88979aaf01a->leave($__internal_b70fc185884d1d0e4f9e6407352f844f8b3227ded92b92b2c6d3d88979aaf01a_prof);

    }

    public function getTemplateName()
    {
        return "KnpMenuBundle::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  46 => 7,  44 => 6,  42 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% block label %}
    {%- set translation_domain = item.extra('translation_domain', 'messages') -%}
    {%- set label = item.label -%}
    {%- if translation_domain is not same as(false) -%}
        {%- set label = label|trans(item.extra('translation_params', {}), translation_domain) -%}
    {%- endif -%}
    {%- if options.allow_safe_labels and item.extra('safe_label', false) %}{{ label|raw }}{% else %}{{ label }}{% endif -%}
{% endblock %}
", "KnpMenuBundle::menu.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\knplabs\\knp-menu-bundle/Resources/views/menu.html.twig");
    }
}
