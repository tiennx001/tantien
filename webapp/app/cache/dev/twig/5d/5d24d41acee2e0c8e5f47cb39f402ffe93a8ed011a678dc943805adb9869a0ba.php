<?php

/* SonataUserBundle:Admin/Security/Resetting:checkEmail.html.twig */
class __TwigTemplate_9bd3b7b7c8041fc09831b7ed05a819328b4080dfbba2dd8d5f1ac5af03d67827 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataUserBundle:Admin/Security/Resetting:checkEmail.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a851a2bf187da267865956b32b89e7ec0229b48789df693160d531735c8c65f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a851a2bf187da267865956b32b89e7ec0229b48789df693160d531735c8c65f4->enter($__internal_a851a2bf187da267865956b32b89e7ec0229b48789df693160d531735c8c65f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Security/Resetting:checkEmail.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a851a2bf187da267865956b32b89e7ec0229b48789df693160d531735c8c65f4->leave($__internal_a851a2bf187da267865956b32b89e7ec0229b48789df693160d531735c8c65f4_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_b9a83b3c308421f3e71e99506f6691becefe03d69d4ce9c14ef01ecfeb1e1f12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9a83b3c308421f3e71e99506f6691becefe03d69d4ce9c14ef01ecfeb1e1f12->enter($__internal_b9a83b3c308421f3e71e99506f6691becefe03d69d4ce9c14ef01ecfeb1e1f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_b9a83b3c308421f3e71e99506f6691becefe03d69d4ce9c14ef01ecfeb1e1f12->leave($__internal_b9a83b3c308421f3e71e99506f6691becefe03d69d4ce9c14ef01ecfeb1e1f12_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_9363f1c0a7cd73f87651d6e78be2d4635f4ba814da8b10c760c58a982b4515ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9363f1c0a7cd73f87651d6e78be2d4635f4ba814da8b10c760c58a982b4515ad->enter($__internal_9363f1c0a7cd73f87651d6e78be2d4635f4ba814da8b10c760c58a982b4515ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_9363f1c0a7cd73f87651d6e78be2d4635f4ba814da8b10c760c58a982b4515ad->leave($__internal_9363f1c0a7cd73f87651d6e78be2d4635f4ba814da8b10c760c58a982b4515ad_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_d3abd584ab6f53b1055a059d97e58f4cc0c7c49ff77e8cf06b8600a200ca48dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3abd584ab6f53b1055a059d97e58f4cc0c7c49ff77e8cf06b8600a200ca48dc->enter($__internal_d3abd584ab6f53b1055a059d97e58f4cc0c7c49ff77e8cf06b8600a200ca48dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_d3abd584ab6f53b1055a059d97e58f4cc0c7c49ff77e8cf06b8600a200ca48dc->leave($__internal_d3abd584ab6f53b1055a059d97e58f4cc0c7c49ff77e8cf06b8600a200ca48dc_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_c47636702ace5bf2deb9d77b1b542670d9cb1f1d7756e915ed57c64c3e48dd9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c47636702ace5bf2deb9d77b1b542670d9cb1f1d7756e915ed57c64c3e48dd9f->enter($__internal_c47636702ace5bf2deb9d77b1b542670d9cb1f1d7756e915ed57c64c3e48dd9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_c47636702ace5bf2deb9d77b1b542670d9cb1f1d7756e915ed57c64c3e48dd9f->leave($__internal_c47636702ace5bf2deb9d77b1b542670d9cb1f1d7756e915ed57c64c3e48dd9f_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_da196faefe47c184d7107c396d05c1a013f6a8e1df246fbc1f15292e279c0ff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da196faefe47c184d7107c396d05c1a013f6a8e1df246fbc1f15292e279c0ff1->enter($__internal_da196faefe47c184d7107c396d05c1a013f6a8e1df246fbc1f15292e279c0ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        
        $__internal_da196faefe47c184d7107c396d05c1a013f6a8e1df246fbc1f15292e279c0ff1->leave($__internal_da196faefe47c184d7107c396d05c1a013f6a8e1df246fbc1f15292e279c0ff1_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Security/Resetting:checkEmail.html.twig";
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
", "SonataUserBundle:Admin/Security/Resetting:checkEmail.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\user-bundle/Resources/views/Admin/Security/Resetting/checkEmail.html.twig");
    }
}
