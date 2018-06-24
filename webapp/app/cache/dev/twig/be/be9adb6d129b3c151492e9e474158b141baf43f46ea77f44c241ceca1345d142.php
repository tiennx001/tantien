<?php

/* @SonataUser/Admin/Security/Resetting/checkEmail.html.twig */
class __TwigTemplate_9594869f20f194c848881739c8dda6ac239972c58d13b51631f2477849f777f5 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataUser/Admin/Security/Resetting/checkEmail.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27ceed7a3280a05df9d6fea81eb1c45ed8789b3f1c6b36766af63de7bb742719 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27ceed7a3280a05df9d6fea81eb1c45ed8789b3f1c6b36766af63de7bb742719->enter($__internal_27ceed7a3280a05df9d6fea81eb1c45ed8789b3f1c6b36766af63de7bb742719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Admin/Security/Resetting/checkEmail.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27ceed7a3280a05df9d6fea81eb1c45ed8789b3f1c6b36766af63de7bb742719->leave($__internal_27ceed7a3280a05df9d6fea81eb1c45ed8789b3f1c6b36766af63de7bb742719_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_b56f39eab334cbfef36de65f642aadec908eb85f660ad3ccc68753cfb092e83a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b56f39eab334cbfef36de65f642aadec908eb85f660ad3ccc68753cfb092e83a->enter($__internal_b56f39eab334cbfef36de65f642aadec908eb85f660ad3ccc68753cfb092e83a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_b56f39eab334cbfef36de65f642aadec908eb85f660ad3ccc68753cfb092e83a->leave($__internal_b56f39eab334cbfef36de65f642aadec908eb85f660ad3ccc68753cfb092e83a_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_48d3a05557f5b246c726eb53214ca52556ed1f5a2408b2b20e1b9ae2d32c0959 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48d3a05557f5b246c726eb53214ca52556ed1f5a2408b2b20e1b9ae2d32c0959->enter($__internal_48d3a05557f5b246c726eb53214ca52556ed1f5a2408b2b20e1b9ae2d32c0959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_48d3a05557f5b246c726eb53214ca52556ed1f5a2408b2b20e1b9ae2d32c0959->leave($__internal_48d3a05557f5b246c726eb53214ca52556ed1f5a2408b2b20e1b9ae2d32c0959_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_b73895b167e8b937ff2ef6b62bbeef158a67a35c97a3e4bb576cc99a1aead334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b73895b167e8b937ff2ef6b62bbeef158a67a35c97a3e4bb576cc99a1aead334->enter($__internal_b73895b167e8b937ff2ef6b62bbeef158a67a35c97a3e4bb576cc99a1aead334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_b73895b167e8b937ff2ef6b62bbeef158a67a35c97a3e4bb576cc99a1aead334->leave($__internal_b73895b167e8b937ff2ef6b62bbeef158a67a35c97a3e4bb576cc99a1aead334_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_1765935b8e13b162491040342755ca7daf264c70f42c989ece2a1e8a2c6f75d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1765935b8e13b162491040342755ca7daf264c70f42c989ece2a1e8a2c6f75d5->enter($__internal_1765935b8e13b162491040342755ca7daf264c70f42c989ece2a1e8a2c6f75d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_1765935b8e13b162491040342755ca7daf264c70f42c989ece2a1e8a2c6f75d5->leave($__internal_1765935b8e13b162491040342755ca7daf264c70f42c989ece2a1e8a2c6f75d5_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_21a2b674880f81615969aa8b80f6b91f1da73184572219e05ced1bf62615b89e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21a2b674880f81615969aa8b80f6b91f1da73184572219e05ced1bf62615b89e->enter($__internal_21a2b674880f81615969aa8b80f6b91f1da73184572219e05ced1bf62615b89e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
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
        
        $__internal_21a2b674880f81615969aa8b80f6b91f1da73184572219e05ced1bf62615b89e->leave($__internal_21a2b674880f81615969aa8b80f6b91f1da73184572219e05ced1bf62615b89e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Admin/Security/Resetting/checkEmail.html.twig";
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
            <p>{{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}</p>
            <a href=\"{{ path('sonata_user_admin_security_login') }}\">{{ 'title_user_authentication'|trans({}, 'SonataUserBundle') }}</a>
        </div>
    </div>

{% endblock sonata_wrapper %}
", "@SonataUser/Admin/Security/Resetting/checkEmail.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\user-bundle\\Resources\\views\\Admin\\Security\\Resetting\\checkEmail.html.twig");
    }
}
