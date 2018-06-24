<?php

/* @SonataAdmin/CRUD/base_acl.html.twig */
class __TwigTemplate_931894834ba24853669929df9abba5f4c75daefebab077d8543eeb6e2e29c497 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'form_acl_roles' => array($this, 'block_form_acl_roles'),
            'form_acl_users' => array($this, 'block_form_acl_users'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52b4fee42a174575e37dd500f3034f376832ba94b10e4469d56d7cb1740d9212 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52b4fee42a174575e37dd500f3034f376832ba94b10e4469d56d7cb1740d9212->enter($__internal_52b4fee42a174575e37dd500f3034f376832ba94b10e4469d56d7cb1740d9212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "@SonataAdmin/CRUD/base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52b4fee42a174575e37dd500f3034f376832ba94b10e4469d56d7cb1740d9212->leave($__internal_52b4fee42a174575e37dd500f3034f376832ba94b10e4469d56d7cb1740d9212_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_a300b004e744b24ff9e9def374a7fa593537cf7eef5175fd53dd87dded06aa84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a300b004e744b24ff9e9def374a7fa593537cf7eef5175fd53dd87dded06aa84->enter($__internal_a300b004e744b24ff9e9def374a7fa593537cf7eef5175fd53dd87dded06aa84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/base_acl.html.twig", 15)->display($context);
        
        $__internal_a300b004e744b24ff9e9def374a7fa593537cf7eef5175fd53dd87dded06aa84->leave($__internal_a300b004e744b24ff9e9def374a7fa593537cf7eef5175fd53dd87dded06aa84_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_9b53a08d75c6814e9646c9c9b504911bc427a979753626003f335040ef742489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b53a08d75c6814e9646c9c9b504911bc427a979753626003f335040ef742489->enter($__internal_9b53a08d75c6814e9646c9c9b504911bc427a979753626003f335040ef742489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_9b53a08d75c6814e9646c9c9b504911bc427a979753626003f335040ef742489->leave($__internal_9b53a08d75c6814e9646c9c9b504911bc427a979753626003f335040ef742489_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_cbd23344486982330b59669ea7dd7a8eed7f573bbe6e8f97045baee489da569e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbd23344486982330b59669ea7dd7a8eed7f573bbe6e8f97045baee489da569e->enter($__internal_cbd23344486982330b59669ea7dd7a8eed7f573bbe6e8f97045baee489da569e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_cbd23344486982330b59669ea7dd7a8eed7f573bbe6e8f97045baee489da569e->leave($__internal_cbd23344486982330b59669ea7dd7a8eed7f573bbe6e8f97045baee489da569e_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_0d153b8db4bd37a662929eaf430bca7d4f28d72b377c9386e02b56278a1f024f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d153b8db4bd37a662929eaf430bca7d4f28d72b377c9386e02b56278a1f024f->enter($__internal_0d153b8db4bd37a662929eaf430bca7d4f28d72b377c9386e02b56278a1f024f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_0d153b8db4bd37a662929eaf430bca7d4f28d72b377c9386e02b56278a1f024f->leave($__internal_0d153b8db4bd37a662929eaf430bca7d4f28d72b377c9386e02b56278a1f024f_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 25,  85 => 24,  75 => 22,  69 => 21,  61 => 24,  58 => 21,  52 => 20,  45 => 15,  39 => 14,  32 => 12,  30 => 18,  21 => 12,);
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

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% import 'SonataAdminBundle:CRUD:base_acl_macro.html.twig' as acl %}

{% block form %}
    {% block form_acl_roles %}
        {{ acl.render_form(aclRolesForm, permissions, 'td_role', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
    {% block form_acl_users %}
        {{ acl.render_form(aclUsersForm, permissions, 'td_username', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
{% endblock %}
", "@SonataAdmin/CRUD/base_acl.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\base_acl.html.twig");
    }
}
