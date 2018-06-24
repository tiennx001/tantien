<?php

/* @SonataAdmin/CRUD/show_percent.html.twig */
class __TwigTemplate_20065cd10ed2cea1f0fec5e6cc9a420602889d6afc6055f9d99caece527d6ece extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_percent.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1bb886d4ca85047e8a060c2f41acff20cd44062916aadaf4756e371f5abac61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1bb886d4ca85047e8a060c2f41acff20cd44062916aadaf4756e371f5abac61->enter($__internal_e1bb886d4ca85047e8a060c2f41acff20cd44062916aadaf4756e371f5abac61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1bb886d4ca85047e8a060c2f41acff20cd44062916aadaf4756e371f5abac61->leave($__internal_e1bb886d4ca85047e8a060c2f41acff20cd44062916aadaf4756e371f5abac61_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ae848e992165ee7d7622a8bb8909e7dc3b382e80f8c4a75581d3b2177926f10e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae848e992165ee7d7622a8bb8909e7dc3b382e80f8c4a75581d3b2177926f10e->enter($__internal_ae848e992165ee7d7622a8bb8909e7dc3b382e80f8c4a75581d3b2177926f10e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_ae848e992165ee7d7622a8bb8909e7dc3b382e80f8c4a75581d3b2177926f10e->leave($__internal_ae848e992165ee7d7622a8bb8909e7dc3b382e80f8c4a75581d3b2177926f10e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
", "@SonataAdmin/CRUD/show_percent.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\show_percent.html.twig");
    }
}
