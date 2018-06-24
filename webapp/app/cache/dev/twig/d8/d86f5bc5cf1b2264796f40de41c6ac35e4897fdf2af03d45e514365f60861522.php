<?php

/* @SonataAdmin/CRUD/edit_integer.html.twig */
class __TwigTemplate_b16f68f1b36297eab52c9becf6dac64b93376c78b36c34fc36cdb3ac88d6df69 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c735e820bb64a73707ca0bff1ba51b225b39d3e115d56dd62a8a6b02d659df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c735e820bb64a73707ca0bff1ba51b225b39d3e115d56dd62a8a6b02d659df7->enter($__internal_7c735e820bb64a73707ca0bff1ba51b225b39d3e115d56dd62a8a6b02d659df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c735e820bb64a73707ca0bff1ba51b225b39d3e115d56dd62a8a6b02d659df7->leave($__internal_7c735e820bb64a73707ca0bff1ba51b225b39d3e115d56dd62a8a6b02d659df7_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_7019d225a3f86210497904cb805d821619178a2ba13f7a5709d33efed19e183c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7019d225a3f86210497904cb805d821619178a2ba13f7a5709d33efed19e183c->enter($__internal_7019d225a3f86210497904cb805d821619178a2ba13f7a5709d33efed19e183c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_7019d225a3f86210497904cb805d821619178a2ba13f7a5709d33efed19e183c->leave($__internal_7019d225a3f86210497904cb805d821619178a2ba13f7a5709d33efed19e183c_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_integer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
", "@SonataAdmin/CRUD/edit_integer.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\edit_integer.html.twig");
    }
}
