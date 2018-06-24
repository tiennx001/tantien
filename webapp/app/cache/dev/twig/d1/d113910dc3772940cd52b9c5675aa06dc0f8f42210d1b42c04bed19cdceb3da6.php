<?php

/* SonataUserBundle:Admin/Security/Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_c0620dd76e62edf5d219a5f3b25eeb9f19a6ac19a732d73f1c5305ec939ee8fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'logo' => array($this, 'block_logo'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataUserBundle:Admin/Security/Resetting:passwordAlreadyRequested.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_acc078fe3efc8b726c06c80204dd246acbf7786f531d915d319ec1014a59310b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acc078fe3efc8b726c06c80204dd246acbf7786f531d915d319ec1014a59310b->enter($__internal_acc078fe3efc8b726c06c80204dd246acbf7786f531d915d319ec1014a59310b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Security/Resetting:passwordAlreadyRequested.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acc078fe3efc8b726c06c80204dd246acbf7786f531d915d319ec1014a59310b->leave($__internal_acc078fe3efc8b726c06c80204dd246acbf7786f531d915d319ec1014a59310b_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_cba1040d9a64e0d1cec40d47320b6e85f8fcf6285e215d3dee6228c7c69d17d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cba1040d9a64e0d1cec40d47320b6e85f8fcf6285e215d3dee6228c7c69d17d8->enter($__internal_cba1040d9a64e0d1cec40d47320b6e85f8fcf6285e215d3dee6228c7c69d17d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_cba1040d9a64e0d1cec40d47320b6e85f8fcf6285e215d3dee6228c7c69d17d8->leave($__internal_cba1040d9a64e0d1cec40d47320b6e85f8fcf6285e215d3dee6228c7c69d17d8_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_720aa79f80aefbd6bdd5c9f2b12bf2f28c9b9ece660bb31b61301ba0eacb6be5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_720aa79f80aefbd6bdd5c9f2b12bf2f28c9b9ece660bb31b61301ba0eacb6be5->enter($__internal_720aa79f80aefbd6bdd5c9f2b12bf2f28c9b9ece660bb31b61301ba0eacb6be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_720aa79f80aefbd6bdd5c9f2b12bf2f28c9b9ece660bb31b61301ba0eacb6be5->leave($__internal_720aa79f80aefbd6bdd5c9f2b12bf2f28c9b9ece660bb31b61301ba0eacb6be5_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_dddd8c4798116861733c5397b8f77c11abae5befa1d704b8e0bfc67fad67f4ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dddd8c4798116861733c5397b8f77c11abae5befa1d704b8e0bfc67fad67f4ba->enter($__internal_dddd8c4798116861733c5397b8f77c11abae5befa1d704b8e0bfc67fad67f4ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_dddd8c4798116861733c5397b8f77c11abae5befa1d704b8e0bfc67fad67f4ba->leave($__internal_dddd8c4798116861733c5397b8f77c11abae5befa1d704b8e0bfc67fad67f4ba_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_574188c71c6b834bf62f4c64b86c546e1a536e0e93a5e7780b4b175fd679be81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_574188c71c6b834bf62f4c64b86c546e1a536e0e93a5e7780b4b175fd679be81->enter($__internal_574188c71c6b834bf62f4c64b86c546e1a536e0e93a5e7780b4b175fd679be81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_574188c71c6b834bf62f4c64b86c546e1a536e0e93a5e7780b4b175fd679be81->leave($__internal_574188c71c6b834bf62f4c64b86c546e1a536e0e93a5e7780b4b175fd679be81_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_196b3a42472b76de01390903dc8daebfc5847949d494f672663f1f5184dcfa44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_196b3a42472b76de01390903dc8daebfc5847949d494f672663f1f5184dcfa44->enter($__internal_196b3a42472b76de01390903dc8daebfc5847949d494f672663f1f5184dcfa44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 15
        echo "
    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_dashboard");
        echo "\">
                ";
        // line 19
        if ((("single_text" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")))) {
            // line 20
            echo "                    <span>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "title", array()), "html", null, true);
            echo "</span>
                ";
        }
        // line 22
        echo "            </a>
        </div>
        <div class=\"login-box-body\">
            <p>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
            <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_user_admin_security_login");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "</a>
        </div>
    </div>

";
        
        $__internal_196b3a42472b76de01390903dc8daebfc5847949d494f672663f1f5184dcfa44->leave($__internal_196b3a42472b76de01390903dc8daebfc5847949d494f672663f1f5184dcfa44_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Security/Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 26,  110 => 25,  105 => 22,  99 => 20,  97 => 19,  93 => 18,  88 => 15,  82 => 14,  70 => 12,  59 => 9,  48 => 6,  37 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends base_template %}

{% block sonata_nav %}
{% endblock sonata_nav %}

{% block logo %}
{% endblock logo %}

{% block sonata_left_side %}
{% endblock sonata_left_side %}

{% block body_attributes %}class=\"sonata-bc login-page\"{% endblock %}

{% block sonata_wrapper %}

    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"{{ path('sonata_admin_dashboard') }}\">
                {% if 'single_text' == admin_pool.getOption('title_mode') or 'both' == admin_pool.getOption('title_mode') %}
                    <span>{{ admin_pool.title }}</span>
                {% endif %}
            </a>
        </div>
        <div class=\"login-box-body\">
            <p>{{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}</p>
            <a href=\"{{ path('sonata_user_admin_security_login') }}\">{{ 'title_user_authentication'|trans({}, 'SonataUserBundle') }}</a>
        </div>
    </div>

{% endblock sonata_wrapper %}
", "SonataUserBundle:Admin/Security/Resetting:passwordAlreadyRequested.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\user-bundle/Resources/views/Admin/Security/Resetting/passwordAlreadyRequested.html.twig");
    }
}
