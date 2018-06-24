<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_3342613eea611bde98f4b453b26b2b911ed77a2c9927e4fd2452d5a03cbb8cf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataUserBundle:Security:base_login.html.twig", "FOSUserBundle:Security:login.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle:Security:base_login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8211d1cbcd4bca9034a72bdaf2f46876b3401501ecf66e07d31190b272453eba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8211d1cbcd4bca9034a72bdaf2f46876b3401501ecf66e07d31190b272453eba->enter($__internal_8211d1cbcd4bca9034a72bdaf2f46876b3401501ecf66e07d31190b272453eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8211d1cbcd4bca9034a72bdaf2f46876b3401501ecf66e07d31190b272453eba->leave($__internal_8211d1cbcd4bca9034a72bdaf2f46876b3401501ecf66e07d31190b272453eba_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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

{% extends \"SonataUserBundle:Security:base_login.html.twig\" %}", "FOSUserBundle:Security:login.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\user-bundle/Resources/views/Security/login.html.twig");
    }
}
