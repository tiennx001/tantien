<?php

/* SonataAdminBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_36a37434badddfeef700bec8c59d9b4f78280eb7c8c1e32e62fdb940b28fb096 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_currency.html.twig", 12);
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
        $__internal_69c051db38d0e9fca3afa0470e3b6ae42d5fcd9678d600ce29cd9f55cb7abb4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69c051db38d0e9fca3afa0470e3b6ae42d5fcd9678d600ce29cd9f55cb7abb4e->enter($__internal_69c051db38d0e9fca3afa0470e3b6ae42d5fcd9678d600ce29cd9f55cb7abb4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69c051db38d0e9fca3afa0470e3b6ae42d5fcd9678d600ce29cd9f55cb7abb4e->leave($__internal_69c051db38d0e9fca3afa0470e3b6ae42d5fcd9678d600ce29cd9f55cb7abb4e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e0c720c713ea1a065928e811b576bcaca74397926fa8f5a665437c87defd1dac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0c720c713ea1a065928e811b576bcaca74397926fa8f5a665437c87defd1dac->enter($__internal_e0c720c713ea1a065928e811b576bcaca74397926fa8f5a665437c87defd1dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_e0c720c713ea1a065928e811b576bcaca74397926fa8f5a665437c87defd1dac->leave($__internal_e0c720c713ea1a065928e811b576bcaca74397926fa8f5a665437c87defd1dac_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_currency.html.twig";
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
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_currency.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/show_currency.html.twig");
    }
}
