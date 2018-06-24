<?php

/* @SonataAdmin/CRUD/edit_string.html.twig */
class __TwigTemplate_121544153076173199be940dd57a6b23dee6b54442fcc3e0dddcb23db98b73a4 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae459fb8f25eefcac0b06db6da1a87d018247e674f06d99ed2a9e0db8f9ae58c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae459fb8f25eefcac0b06db6da1a87d018247e674f06d99ed2a9e0db8f9ae58c->enter($__internal_ae459fb8f25eefcac0b06db6da1a87d018247e674f06d99ed2a9e0db8f9ae58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae459fb8f25eefcac0b06db6da1a87d018247e674f06d99ed2a9e0db8f9ae58c->leave($__internal_ae459fb8f25eefcac0b06db6da1a87d018247e674f06d99ed2a9e0db8f9ae58c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_83bac9b88c9a990651ab05a874d6eae61a59bdc043581b0f7fbbac9c83259844 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83bac9b88c9a990651ab05a874d6eae61a59bdc043581b0f7fbbac9c83259844->enter($__internal_83bac9b88c9a990651ab05a874d6eae61a59bdc043581b0f7fbbac9c83259844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_83bac9b88c9a990651ab05a874d6eae61a59bdc043581b0f7fbbac9c83259844->leave($__internal_83bac9b88c9a990651ab05a874d6eae61a59bdc043581b0f7fbbac9c83259844_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_string.html.twig";
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
", "@SonataAdmin/CRUD/edit_string.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\edit_string.html.twig");
    }
}
