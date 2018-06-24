<?php

/* @SonataAdmin/CRUD/list_email.html.twig */
class __TwigTemplate_d82020df2ef4d488b237e0608b85500479448ae8dfd35d4ea3437e087e7a8eef extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c93fe86af0c88ed47aca2ca6b0429c38383761d421c5fe66ecffac07fe88db4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c93fe86af0c88ed47aca2ca6b0429c38383761d421c5fe66ecffac07fe88db4->enter($__internal_5c93fe86af0c88ed47aca2ca6b0429c38383761d421c5fe66ecffac07fe88db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c93fe86af0c88ed47aca2ca6b0429c38383761d421c5fe66ecffac07fe88db4->leave($__internal_5c93fe86af0c88ed47aca2ca6b0429c38383761d421c5fe66ecffac07fe88db4_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f0314fedbcf9295be1e92dae681364bf02973d936cedf5d4399a343813662dff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0314fedbcf9295be1e92dae681364bf02973d936cedf5d4399a343813662dff->enter($__internal_f0314fedbcf9295be1e92dae681364bf02973d936cedf5d4399a343813662dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "@SonataAdmin/CRUD/list_email.html.twig", 15)->display($context);
        
        $__internal_f0314fedbcf9295be1e92dae681364bf02973d936cedf5d4399a343813662dff->leave($__internal_f0314fedbcf9295be1e92dae681364bf02973d936cedf5d4399a343813662dff_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "@SonataAdmin/CRUD/list_email.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list_email.html.twig");
    }
}
