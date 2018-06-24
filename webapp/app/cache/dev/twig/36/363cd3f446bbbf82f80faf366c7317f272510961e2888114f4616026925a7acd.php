<?php

/* @SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig */
class __TwigTemplate_ff9ee2c17a9bc3c2e27aef15e97bd9e27d9c7d78fc7b90aceee3c654b2e84243 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Form:filter_admin_fields.html.twig", "@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Form:filter_admin_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d01920042402c0b6efd467c3bb8d963291899b0986ad4b9ed859dc9d0dff7542 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d01920042402c0b6efd467c3bb8d963291899b0986ad4b9ed859dc9d0dff7542->enter($__internal_d01920042402c0b6efd467c3bb8d963291899b0986ad4b9ed859dc9d0dff7542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d01920042402c0b6efd467c3bb8d963291899b0986ad4b9ed859dc9d0dff7542->leave($__internal_d01920042402c0b6efd467c3bb8d963291899b0986ad4b9ed859dc9d0dff7542_prof);

    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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

{% extends 'SonataAdminBundle:Form:filter_admin_fields.html.twig' %}
", "@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\Resources\\views\\Form\\filter_admin_fields.html.twig");
    }
}
