<?php

/* @SonataAdmin/CRUD/show_email.html.twig */
class __TwigTemplate_64b064e5327baaec788cd96c8fdffcb5296eaea51f1c40d6aad6a12c63d2e4ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_email.html.twig", 1);
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
        $__internal_28fc788c5879923dfeb5f31408ae998bc98192c42948037e21687f1203d09b49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28fc788c5879923dfeb5f31408ae998bc98192c42948037e21687f1203d09b49->enter($__internal_28fc788c5879923dfeb5f31408ae998bc98192c42948037e21687f1203d09b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28fc788c5879923dfeb5f31408ae998bc98192c42948037e21687f1203d09b49->leave($__internal_28fc788c5879923dfeb5f31408ae998bc98192c42948037e21687f1203d09b49_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_c3d9e921b0d205d5c5d5a7723abbb3abf5bfddf42e03b532ca919f3ab133d853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3d9e921b0d205d5c5d5a7723abbb3abf5bfddf42e03b532ca919f3ab133d853->enter($__internal_c3d9e921b0d205d5c5d5a7723abbb3abf5bfddf42e03b532ca919f3ab133d853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "@SonataAdmin/CRUD/show_email.html.twig", 4)->display($context);
        
        $__internal_c3d9e921b0d205d5c5d5a7723abbb3abf5bfddf42e03b532ca919f3ab133d853->leave($__internal_c3d9e921b0d205d5c5d5a7723abbb3abf5bfddf42e03b532ca919f3ab133d853_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_email.html.twig";
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
", "@SonataAdmin/CRUD/show_email.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\show_email.html.twig");
    }
}
