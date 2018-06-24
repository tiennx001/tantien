<?php

/* SonataAdminBundle:CRUD:list_time.html.twig */
class __TwigTemplate_a0383a27766fb38d510fedac3c2e28faaf3c358feca4494a4f3ffb10f95177ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a39b31e4fcd7c62391fd0cb3baebb059b8bce467f94b83d92e5c1c95483db084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a39b31e4fcd7c62391fd0cb3baebb059b8bce467f94b83d92e5c1c95483db084->enter($__internal_a39b31e4fcd7c62391fd0cb3baebb059b8bce467f94b83d92e5c1c95483db084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a39b31e4fcd7c62391fd0cb3baebb059b8bce467f94b83d92e5c1c95483db084->leave($__internal_a39b31e4fcd7c62391fd0cb3baebb059b8bce467f94b83d92e5c1c95483db084_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_40241defea30ade3f43066c2b6375128a14b7abacc1e041b2e1b3453d1f5376a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40241defea30ade3f43066c2b6375128a14b7abacc1e041b2e1b3453d1f5376a->enter($__internal_40241defea30ade3f43066c2b6375128a14b7abacc1e041b2e1b3453d1f5376a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_40241defea30ade3f43066c2b6375128a14b7abacc1e041b2e1b3453d1f5376a->leave($__internal_40241defea30ade3f43066c2b6375128a14b7abacc1e041b2e1b3453d1f5376a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:list_time.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list_time.html.twig");
    }
}
