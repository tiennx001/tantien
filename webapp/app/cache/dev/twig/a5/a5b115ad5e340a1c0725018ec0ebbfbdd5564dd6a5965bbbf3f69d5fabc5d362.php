<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_f772db8bf796dcb6e10f48870b18af7cbbca903e6035df846cbaf21ae6bfada9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataUserBundle:Security:base_login.html.twig", "@FOSUser/Security/login.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle:Security:base_login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bbabeca23dc0ba79b900a3050fff1eab8638e392d7d0e02be287fc297a2d5f6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbabeca23dc0ba79b900a3050fff1eab8638e392d7d0e02be287fc297a2d5f6d->enter($__internal_bbabeca23dc0ba79b900a3050fff1eab8638e392d7d0e02be287fc297a2d5f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbabeca23dc0ba79b900a3050fff1eab8638e392d7d0e02be287fc297a2d5f6d->leave($__internal_bbabeca23dc0ba79b900a3050fff1eab8638e392d7d0e02be287fc297a2d5f6d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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

{% extends \"SonataUserBundle:Security:base_login.html.twig\" %}", "@FOSUser/Security/login.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
