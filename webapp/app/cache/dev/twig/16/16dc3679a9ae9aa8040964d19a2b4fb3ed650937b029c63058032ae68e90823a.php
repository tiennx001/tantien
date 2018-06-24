<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_1fa2db1a40dff1e31b1bbe2db769e27829007c4f085b7c7968dbf9556e1d94b4 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da41331e52ff84eaca7a98758e04cd468fd27566e34d7fa98d79bcf51c0e719f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da41331e52ff84eaca7a98758e04cd468fd27566e34d7fa98d79bcf51c0e719f->enter($__internal_da41331e52ff84eaca7a98758e04cd468fd27566e34d7fa98d79bcf51c0e719f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da41331e52ff84eaca7a98758e04cd468fd27566e34d7fa98d79bcf51c0e719f->leave($__internal_da41331e52ff84eaca7a98758e04cd468fd27566e34d7fa98d79bcf51c0e719f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_0cf11fc346b873a2e12c93e15f5f51417f788cbfc9852efd138ba327c594d9b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cf11fc346b873a2e12c93e15f5f51417f788cbfc9852efd138ba327c594d9b4->enter($__internal_0cf11fc346b873a2e12c93e15f5f51417f788cbfc9852efd138ba327c594d9b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_0cf11fc346b873a2e12c93e15f5f51417f788cbfc9852efd138ba327c594d9b4->leave($__internal_0cf11fc346b873a2e12c93e15f5f51417f788cbfc9852efd138ba327c594d9b4_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
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
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
", "SonataAdminBundle:CRUD:list__batch.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list__batch.html.twig");
    }
}
