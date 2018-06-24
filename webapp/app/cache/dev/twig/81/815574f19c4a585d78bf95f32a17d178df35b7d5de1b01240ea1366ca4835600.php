<?php

/* SonataAdminBundle:CRUD:show_email.html.twig */
class __TwigTemplate_edced5442b43da877f88c8d858b4a846a530fc7f6a265bb15e6d724ace9ad637 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 1);
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
        $__internal_0cfb4eb771bb832f09d4cc6aee3b410b119cca4f538fbe7daf5a63b2e1c478c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cfb4eb771bb832f09d4cc6aee3b410b119cca4f538fbe7daf5a63b2e1c478c0->enter($__internal_0cfb4eb771bb832f09d4cc6aee3b410b119cca4f538fbe7daf5a63b2e1c478c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cfb4eb771bb832f09d4cc6aee3b410b119cca4f538fbe7daf5a63b2e1c478c0->leave($__internal_0cfb4eb771bb832f09d4cc6aee3b410b119cca4f538fbe7daf5a63b2e1c478c0_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_213b824ed5a61550d6d284788f35adddeba28afe3f3d61581f7599f2ea6aad73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_213b824ed5a61550d6d284788f35adddeba28afe3f3d61581f7599f2ea6aad73->enter($__internal_213b824ed5a61550d6d284788f35adddeba28afe3f3d61581f7599f2ea6aad73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 4)->display($context);
        
        $__internal_213b824ed5a61550d6d284788f35adddeba28afe3f3d61581f7599f2ea6aad73->leave($__internal_213b824ed5a61550d6d284788f35adddeba28afe3f3d61581f7599f2ea6aad73_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_email.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/show_email.html.twig");
    }
}
