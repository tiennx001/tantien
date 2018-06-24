<?php

/* @SonataAdmin/CRUD/edit_array.html.twig */
class __TwigTemplate_1f58676ad33e4e732a86c5c539cc56a03ea8fb2b969478be8d0e853f1bc7273d extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_437c8a169289baa26d2c3bb74a943c7aed3dab3c582229350f989d1961f14028 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_437c8a169289baa26d2c3bb74a943c7aed3dab3c582229350f989d1961f14028->enter($__internal_437c8a169289baa26d2c3bb74a943c7aed3dab3c582229350f989d1961f14028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_437c8a169289baa26d2c3bb74a943c7aed3dab3c582229350f989d1961f14028->leave($__internal_437c8a169289baa26d2c3bb74a943c7aed3dab3c582229350f989d1961f14028_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4172881f07629aa4d0462a80e60b8175fd67afbf03003f2fa5d4ce108c5850c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4172881f07629aa4d0462a80e60b8175fd67afbf03003f2fa5d4ce108c5850c7->enter($__internal_4172881f07629aa4d0462a80e60b8175fd67afbf03003f2fa5d4ce108c5850c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_4172881f07629aa4d0462a80e60b8175fd67afbf03003f2fa5d4ce108c5850c7->leave($__internal_4172881f07629aa4d0462a80e60b8175fd67afbf03003f2fa5d4ce108c5850c7_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_array.html.twig";
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

{% extends base_template %}

{% block field %}
    <span class=\"edit\">
        {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}
    </span>
{% endblock %}
", "@SonataAdmin/CRUD/edit_array.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\edit_array.html.twig");
    }
}
