<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_78e9ab7fab5ac5804564b833df8d02cc60348621d58d4cac12513db802507dae extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_777fbc393eb4fa5b0bbf2567b3bb5146c1d96395622ccf25b6b452767bd99a62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_777fbc393eb4fa5b0bbf2567b3bb5146c1d96395622ccf25b6b452767bd99a62->enter($__internal_777fbc393eb4fa5b0bbf2567b3bb5146c1d96395622ccf25b6b452767bd99a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_777fbc393eb4fa5b0bbf2567b3bb5146c1d96395622ccf25b6b452767bd99a62->leave($__internal_777fbc393eb4fa5b0bbf2567b3bb5146c1d96395622ccf25b6b452767bd99a62_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f629f52c704af31ffad031d42a4eefe6774936fca90b2d8b931e107fb9a15eb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f629f52c704af31ffad031d42a4eefe6774936fca90b2d8b931e107fb9a15eb7->enter($__internal_f629f52c704af31ffad031d42a4eefe6774936fca90b2d8b931e107fb9a15eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_f629f52c704af31ffad031d42a4eefe6774936fca90b2d8b931e107fb9a15eb7->leave($__internal_f629f52c704af31ffad031d42a4eefe6774936fca90b2d8b931e107fb9a15eb7_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
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
", "SonataAdminBundle:CRUD:edit_text.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/edit_text.html.twig");
    }
}
