<?php

/* SonataAdminBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_b2b1c8d3b5b638419ee936309600c4959b9767e8ba7c59376faf23e2dd3e5c6f extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f91ece62dfdbaa988782c391a8a51f61a9fc55bd62fd30d833e6db3461a668d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f91ece62dfdbaa988782c391a8a51f61a9fc55bd62fd30d833e6db3461a668d1->enter($__internal_f91ece62dfdbaa988782c391a8a51f61a9fc55bd62fd30d833e6db3461a668d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f91ece62dfdbaa988782c391a8a51f61a9fc55bd62fd30d833e6db3461a668d1->leave($__internal_f91ece62dfdbaa988782c391a8a51f61a9fc55bd62fd30d833e6db3461a668d1_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_a92a67a2b5c0fadb7d84dbcb1bc416a285d0784c23b9f25fb54008e7d11122ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a92a67a2b5c0fadb7d84dbcb1bc416a285d0784c23b9f25fb54008e7d11122ca->enter($__internal_a92a67a2b5c0fadb7d84dbcb1bc416a285d0784c23b9f25fb54008e7d11122ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_a92a67a2b5c0fadb7d84dbcb1bc416a285d0784c23b9f25fb54008e7d11122ca->leave($__internal_a92a67a2b5c0fadb7d84dbcb1bc416a285d0784c23b9f25fb54008e7d11122ca_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
", "SonataAdminBundle:CRUD:list_percent.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list_percent.html.twig");
    }
}
