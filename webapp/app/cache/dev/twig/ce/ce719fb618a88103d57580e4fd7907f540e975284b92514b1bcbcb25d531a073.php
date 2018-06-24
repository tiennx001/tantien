<?php

/* @SonataAdmin/Pager/results.html.twig */
class __TwigTemplate_262ecbd1133a2582c2e42e9f1f7781961dd3bf59f5cc7face0556c94db0d8761 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "@SonataAdmin/Pager/results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b97e9ae70ec8c552ceba7a548c530178126f3272ed3d1cbf672cfbd798c3431b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b97e9ae70ec8c552ceba7a548c530178126f3272ed3d1cbf672cfbd798c3431b->enter($__internal_b97e9ae70ec8c552ceba7a548c530178126f3272ed3d1cbf672cfbd798c3431b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Pager/results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b97e9ae70ec8c552ceba7a548c530178126f3272ed3d1cbf672cfbd798c3431b->leave($__internal_b97e9ae70ec8c552ceba7a548c530178126f3272ed3d1cbf672cfbd798c3431b_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Pager/results.html.twig";
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

{% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}
", "@SonataAdmin/Pager/results.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Pager\\results.html.twig");
    }
}
