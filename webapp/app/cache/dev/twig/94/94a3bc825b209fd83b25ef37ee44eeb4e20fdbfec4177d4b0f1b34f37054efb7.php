<?php

/* @SonataAdmin/CRUD/edit.html.twig */
class __TwigTemplate_cf4024ecacf1d90fc6b93d9c19468b455ea6ade20d6656564fc6da380cef44d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "@SonataAdmin/CRUD/edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96fbd66604b61957818520d3fded99e255c290805b4886aa27b7356df43fcc58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96fbd66604b61957818520d3fded99e255c290805b4886aa27b7356df43fcc58->enter($__internal_96fbd66604b61957818520d3fded99e255c290805b4886aa27b7356df43fcc58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96fbd66604b61957818520d3fded99e255c290805b4886aa27b7356df43fcc58->leave($__internal_96fbd66604b61957818520d3fded99e255c290805b4886aa27b7356df43fcc58_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}
", "@SonataAdmin/CRUD/edit.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\edit.html.twig");
    }
}
