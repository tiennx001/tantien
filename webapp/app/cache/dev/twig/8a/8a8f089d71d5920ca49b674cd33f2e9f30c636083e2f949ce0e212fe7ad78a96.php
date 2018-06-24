<?php

/* @SonataUser/Admin/Security/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_2d7f01f9e2d75ef0b0df95f79a87cb808834eb9759185b18eb68a1efa1bfa0be extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataUser/Admin/Security/Resetting/passwordAlreadyRequested.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d352d5549e80f8fdb1ffb434336c19c62402f3f2e2d6aa550c2baaa1c859c723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d352d5549e80f8fdb1ffb434336c19c62402f3f2e2d6aa550c2baaa1c859c723->enter($__internal_d352d5549e80f8fdb1ffb434336c19c62402f3f2e2d6aa550c2baaa1c859c723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Admin/Security/Resetting/passwordAlreadyRequested.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d352d5549e80f8fdb1ffb434336c19c62402f3f2e2d6aa550c2baaa1c859c723->leave($__internal_d352d5549e80f8fdb1ffb434336c19c62402f3f2e2d6aa550c2baaa1c859c723_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_e7008732e02cfae74881ddd08a2707c457722aa37f2b103a91c2cc9895d8be1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7008732e02cfae74881ddd08a2707c457722aa37f2b103a91c2cc9895d8be1d->enter($__internal_e7008732e02cfae74881ddd08a2707c457722aa37f2b103a91c2cc9895d8be1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_e7008732e02cfae74881ddd08a2707c457722aa37f2b103a91c2cc9895d8be1d->leave($__internal_e7008732e02cfae74881ddd08a2707c457722aa37f2b103a91c2cc9895d8be1d_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_97cac2913b5dfbd86e7862c19c57b6dff8f45885931a4b7f5b0581650ea04043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97cac2913b5dfbd86e7862c19c57b6dff8f45885931a4b7f5b0581650ea04043->enter($__internal_97cac2913b5dfbd86e7862c19c57b6dff8f45885931a4b7f5b0581650ea04043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_97cac2913b5dfbd86e7862c19c57b6dff8f45885931a4b7f5b0581650ea04043->leave($__internal_97cac2913b5dfbd86e7862c19c57b6dff8f45885931a4b7f5b0581650ea04043_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_d31394dcd05936eaf0555019e10e1ad8c34abb1d11fe5711619cae3f75e6cfb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d31394dcd05936eaf0555019e10e1ad8c34abb1d11fe5711619cae3f75e6cfb5->enter($__internal_d31394dcd05936eaf0555019e10e1ad8c34abb1d11fe5711619cae3f75e6cfb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_d31394dcd05936eaf0555019e10e1ad8c34abb1d11fe5711619cae3f75e6cfb5->leave($__internal_d31394dcd05936eaf0555019e10e1ad8c34abb1d11fe5711619cae3f75e6cfb5_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_7e8c38e5391f26e5e5f9be51dcf1ae6fcfda3756a37c8be09bc5df2aba6affaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e8c38e5391f26e5e5f9be51dcf1ae6fcfda3756a37c8be09bc5df2aba6affaa->enter($__internal_7e8c38e5391f26e5e5f9be51dcf1ae6fcfda3756a37c8be09bc5df2aba6affaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_7e8c38e5391f26e5e5f9be51dcf1ae6fcfda3756a37c8be09bc5df2aba6affaa->leave($__internal_7e8c38e5391f26e5e5f9be51dcf1ae6fcfda3756a37c8be09bc5df2aba6affaa_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_eea092571ae516cb7081da51a5e0f00dfd1bbf46781146adf48325664196d246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eea092571ae516cb7081da51a5e0f00dfd1bbf46781146adf48325664196d246->enter($__internal_eea092571ae516cb7081da51a5e0f00dfd1bbf46781146adf48325664196d246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        
        $__internal_eea092571ae516cb7081da51a5e0f00dfd1bbf46781146adf48325664196d246->leave($__internal_eea092571ae516cb7081da51a5e0f00dfd1bbf46781146adf48325664196d246_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Admin/Security/Resetting/passwordAlreadyRequested.html.twig";
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
", "@SonataUser/Admin/Security/Resetting/passwordAlreadyRequested.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\user-bundle\\Resources\\views\\Admin\\Security\\Resetting\\passwordAlreadyRequested.html.twig");
    }
}
