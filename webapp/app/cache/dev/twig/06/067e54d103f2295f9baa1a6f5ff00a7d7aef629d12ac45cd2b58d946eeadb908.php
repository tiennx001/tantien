<?php

/* SonataAdminBundle:CRUD:list_email.html.twig */
class __TwigTemplate_c8063ad31b3e2c3482e92163556a15dbdf4256caf91a60bad73330a1f4f267ef extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a713f79cfdd63afc345b5f04ebf6e00e32c98370258fafaf8278724a5bf4d36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a713f79cfdd63afc345b5f04ebf6e00e32c98370258fafaf8278724a5bf4d36->enter($__internal_9a713f79cfdd63afc345b5f04ebf6e00e32c98370258fafaf8278724a5bf4d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a713f79cfdd63afc345b5f04ebf6e00e32c98370258fafaf8278724a5bf4d36->leave($__internal_9a713f79cfdd63afc345b5f04ebf6e00e32c98370258fafaf8278724a5bf4d36_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4b45937a3c042be90dc0e956021c202dcc00f117c7d6ef7188e7e5e5d661d74f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b45937a3c042be90dc0e956021c202dcc00f117c7d6ef7188e7e5e5d661d74f->enter($__internal_4b45937a3c042be90dc0e956021c202dcc00f117c7d6ef7188e7e5e5d661d74f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:list_email.html.twig", 15)->display($context);
        
        $__internal_4b45937a3c042be90dc0e956021c202dcc00f117c7d6ef7188e7e5e5d661d74f->leave($__internal_4b45937a3c042be90dc0e956021c202dcc00f117c7d6ef7188e7e5e5d661d74f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_email.html.twig";
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
", "SonataAdminBundle:CRUD:list_email.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list_email.html.twig");
    }
}
