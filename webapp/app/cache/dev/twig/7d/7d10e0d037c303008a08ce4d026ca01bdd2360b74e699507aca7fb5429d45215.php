<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_bca9e8ea3801ce8a824bef13266b6c6aa69125900c8064fc19736e07f9bd1048 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_451c32f0b88adea111213a9fc2d271861b45bec03152a1662daeebc18ecaa22c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_451c32f0b88adea111213a9fc2d271861b45bec03152a1662daeebc18ecaa22c->enter($__internal_451c32f0b88adea111213a9fc2d271861b45bec03152a1662daeebc18ecaa22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_451c32f0b88adea111213a9fc2d271861b45bec03152a1662daeebc18ecaa22c->leave($__internal_451c32f0b88adea111213a9fc2d271861b45bec03152a1662daeebc18ecaa22c_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_c5ab42f94a63adb8e4bf74ce33ef8aaaf8caebbe7c0ecfae23282bca623cd9f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5ab42f94a63adb8e4bf74ce33ef8aaaf8caebbe7c0ecfae23282bca623cd9f3->enter($__internal_c5ab42f94a63adb8e4bf74ce33ef8aaaf8caebbe7c0ecfae23282bca623cd9f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_c5ab42f94a63adb8e4bf74ce33ef8aaaf8caebbe7c0ecfae23282bca623cd9f3->leave($__internal_c5ab42f94a63adb8e4bf74ce33ef8aaaf8caebbe7c0ecfae23282bca623cd9f3_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_332e2604ef40af587c80d78350b51b73d4dcf18c18c87f8ff92dc5d67c60e69a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_332e2604ef40af587c80d78350b51b73d4dcf18c18c87f8ff92dc5d67c60e69a->enter($__internal_332e2604ef40af587c80d78350b51b73d4dcf18c18c87f8ff92dc5d67c60e69a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_332e2604ef40af587c80d78350b51b73d4dcf18c18c87f8ff92dc5d67c60e69a->leave($__internal_332e2604ef40af587c80d78350b51b73d4dcf18c18c87f8ff92dc5d67c60e69a_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_79bbb9672a56b79d0be3dcf2948b397ce0f67a57ccc3e2d710b4b08f16b4a985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79bbb9672a56b79d0be3dcf2948b397ce0f67a57ccc3e2d710b4b08f16b4a985->enter($__internal_79bbb9672a56b79d0be3dcf2948b397ce0f67a57ccc3e2d710b4b08f16b4a985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_79bbb9672a56b79d0be3dcf2948b397ce0f67a57ccc3e2d710b4b08f16b4a985->leave($__internal_79bbb9672a56b79d0be3dcf2948b397ce0f67a57ccc3e2d710b4b08f16b4a985_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_414b61c7f2727c26f2e0f88eacc192734be23955693df202757ae086799f9aee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_414b61c7f2727c26f2e0f88eacc192734be23955693df202757ae086799f9aee->enter($__internal_414b61c7f2727c26f2e0f88eacc192734be23955693df202757ae086799f9aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_414b61c7f2727c26f2e0f88eacc192734be23955693df202757ae086799f9aee->leave($__internal_414b61c7f2727c26f2e0f88eacc192734be23955693df202757ae086799f9aee_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
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
", "SonataAdminBundle:CRUD:base_acl.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/base_acl.html.twig");
    }
}
