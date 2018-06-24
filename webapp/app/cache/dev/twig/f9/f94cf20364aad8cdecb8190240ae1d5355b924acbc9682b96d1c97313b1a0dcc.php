<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_abe5dcdbe5ab3fe4c46f39206ea7f30440ff51f0348e67d2dd5d48425b1fee7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
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
        $__internal_08f57999ead796e0a6a42593b47c813cd75bb96a8c30b39c7880a4ee3ce7f5b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08f57999ead796e0a6a42593b47c813cd75bb96a8c30b39c7880a4ee3ce7f5b6->enter($__internal_08f57999ead796e0a6a42593b47c813cd75bb96a8c30b39c7880a4ee3ce7f5b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08f57999ead796e0a6a42593b47c813cd75bb96a8c30b39c7880a4ee3ce7f5b6->leave($__internal_08f57999ead796e0a6a42593b47c813cd75bb96a8c30b39c7880a4ee3ce7f5b6_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_13130f40ba809b6d958a2fb0ceeca1bf022005005dc0c0802fd021a63c06ce5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13130f40ba809b6d958a2fb0ceeca1bf022005005dc0c0802fd021a63c06ce5d->enter($__internal_13130f40ba809b6d958a2fb0ceeca1bf022005005dc0c0802fd021a63c06ce5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_13130f40ba809b6d958a2fb0ceeca1bf022005005dc0c0802fd021a63c06ce5d->leave($__internal_13130f40ba809b6d958a2fb0ceeca1bf022005005dc0c0802fd021a63c06ce5d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
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
", "SonataAdminBundle:CRUD:show_percent.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/show_percent.html.twig");
    }
}
