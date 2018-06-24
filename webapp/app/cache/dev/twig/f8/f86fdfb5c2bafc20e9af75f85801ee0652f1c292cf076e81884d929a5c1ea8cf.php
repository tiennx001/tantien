<?php

/* SonataUserBundle:Admin/Security/Resetting:request.html.twig */
class __TwigTemplate_bcfb33f37348787584f0fc5e9619eb53a2998f8350f363d3948e2437ace4d354 extends Twig_Template
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
            'sonata_user_reset_request_form' => array($this, 'block_sonata_user_reset_request_form'),
            'sonata_user_reset_request_error' => array($this, 'block_sonata_user_reset_request_error'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataUserBundle:Admin/Security/Resetting:request.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5954cf9ee979d5acbb7b6c21d619cf559f8bd4cc86d2c30803a46351cfe276f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5954cf9ee979d5acbb7b6c21d619cf559f8bd4cc86d2c30803a46351cfe276f->enter($__internal_f5954cf9ee979d5acbb7b6c21d619cf559f8bd4cc86d2c30803a46351cfe276f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Security/Resetting:request.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5954cf9ee979d5acbb7b6c21d619cf559f8bd4cc86d2c30803a46351cfe276f->leave($__internal_f5954cf9ee979d5acbb7b6c21d619cf559f8bd4cc86d2c30803a46351cfe276f_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_0f720747ce73b0834c897f39578d4ab36b7a7ade9df647460dedd810aece50d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f720747ce73b0834c897f39578d4ab36b7a7ade9df647460dedd810aece50d3->enter($__internal_0f720747ce73b0834c897f39578d4ab36b7a7ade9df647460dedd810aece50d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_0f720747ce73b0834c897f39578d4ab36b7a7ade9df647460dedd810aece50d3->leave($__internal_0f720747ce73b0834c897f39578d4ab36b7a7ade9df647460dedd810aece50d3_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_a1146caf3fd64f92a3bc96b2cb0133c8cfe9019e72dcc1c3b5fe764f928d869e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1146caf3fd64f92a3bc96b2cb0133c8cfe9019e72dcc1c3b5fe764f928d869e->enter($__internal_a1146caf3fd64f92a3bc96b2cb0133c8cfe9019e72dcc1c3b5fe764f928d869e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_a1146caf3fd64f92a3bc96b2cb0133c8cfe9019e72dcc1c3b5fe764f928d869e->leave($__internal_a1146caf3fd64f92a3bc96b2cb0133c8cfe9019e72dcc1c3b5fe764f928d869e_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_d0e20005ff125de1a523961932aebdaf5c6e3e343a9468cd56dbcf819b8afbe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0e20005ff125de1a523961932aebdaf5c6e3e343a9468cd56dbcf819b8afbe1->enter($__internal_d0e20005ff125de1a523961932aebdaf5c6e3e343a9468cd56dbcf819b8afbe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_d0e20005ff125de1a523961932aebdaf5c6e3e343a9468cd56dbcf819b8afbe1->leave($__internal_d0e20005ff125de1a523961932aebdaf5c6e3e343a9468cd56dbcf819b8afbe1_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_f7c4595d5cd72b96e3345937823335315ee97ecd90f64d44e927db3e62f493aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7c4595d5cd72b96e3345937823335315ee97ecd90f64d44e927db3e62f493aa->enter($__internal_f7c4595d5cd72b96e3345937823335315ee97ecd90f64d44e927db3e62f493aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_f7c4595d5cd72b96e3345937823335315ee97ecd90f64d44e927db3e62f493aa->leave($__internal_f7c4595d5cd72b96e3345937823335315ee97ecd90f64d44e927db3e62f493aa_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_3214faf9e48105d0cd5d4ec734378739884fa0c21e047cba4ae46e26e8c78aa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3214faf9e48105d0cd5d4ec734378739884fa0c21e047cba4ae46e26e8c78aa5->enter($__internal_3214faf9e48105d0cd5d4ec734378739884fa0c21e047cba4ae46e26e8c78aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
            ";
        // line 25
        $this->displayBlock('sonata_user_reset_request_form', $context, $blocks);
        // line 47
        echo "        </div>
    </div>

";
        
        $__internal_3214faf9e48105d0cd5d4ec734378739884fa0c21e047cba4ae46e26e8c78aa5->leave($__internal_3214faf9e48105d0cd5d4ec734378739884fa0c21e047cba4ae46e26e8c78aa5_prof);

    }

    // line 25
    public function block_sonata_user_reset_request_form($context, array $blocks = array())
    {
        $__internal_74ae3e89a6150de6c91ce5f0c307cfaba0b48ef1c81b1c7fdb56d7287501fb45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74ae3e89a6150de6c91ce5f0c307cfaba0b48ef1c81b1c7fdb56d7287501fb45->enter($__internal_74ae3e89a6150de6c91ce5f0c307cfaba0b48ef1c81b1c7fdb56d7287501fb45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_reset_request_form"));

        // line 26
        echo "                ";
        $this->displayBlock('sonata_user_reset_request_error', $context, $blocks);
        // line 31
        echo "                <p class=\"login-box-msg\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
                <form action=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_user_admin_resetting_send_email");
        echo "\" method=\"post\" role=\"form\">
                    <div class=\"form-group has-feedback\">
                        <input type=\"text\" class=\"form-control\" id=\"username\"  name=\"username\" required=\"required\" placeholder=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), array(":" => "")), "html", null, true);
        echo "\"/>
                        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                </form>

                <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_user_admin_security_login");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "</a>
            ";
        
        $__internal_74ae3e89a6150de6c91ce5f0c307cfaba0b48ef1c81b1c7fdb56d7287501fb45->leave($__internal_74ae3e89a6150de6c91ce5f0c307cfaba0b48ef1c81b1c7fdb56d7287501fb45_prof);

    }

    // line 26
    public function block_sonata_user_reset_request_error($context, array $blocks = array())
    {
        $__internal_2b25fc9683f3dfe42ccf30cfca9b63aea24f3c5599145823852bcfdd1cea3d8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b25fc9683f3dfe42ccf30cfca9b63aea24f3c5599145823852bcfdd1cea3d8a->enter($__internal_2b25fc9683f3dfe42ccf30cfca9b63aea24f3c5599145823852bcfdd1cea3d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_reset_request_error"));

        // line 27
        echo "                    ";
        if (array_key_exists("invalid_username", $context)) {
            // line 28
            echo "                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 30
        echo "                ";
        
        $__internal_2b25fc9683f3dfe42ccf30cfca9b63aea24f3c5599145823852bcfdd1cea3d8a->leave($__internal_2b25fc9683f3dfe42ccf30cfca9b63aea24f3c5599145823852bcfdd1cea3d8a_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Security/Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 30,  180 => 28,  177 => 27,  171 => 26,  160 => 45,  152 => 40,  143 => 34,  138 => 32,  133 => 31,  130 => 26,  124 => 25,  114 => 47,  112 => 25,  107 => 22,  101 => 20,  99 => 19,  95 => 18,  90 => 15,  84 => 14,  72 => 12,  61 => 9,  50 => 6,  39 => 3,  24 => 1,);
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
            {% block sonata_user_reset_request_form %}
                {% block sonata_user_reset_request_error %}
                    {% if invalid_username is defined %}
                        <div class=\"alert alert-danger\">{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}, 'FOSUserBundle') }}</div>
                    {% endif %}
                {% endblock %}
                <p class=\"login-box-msg\">{{ 'resetting.request.submit'|trans({}, 'FOSUserBundle') }}</p>
                <form action=\"{{ path('sonata_user_admin_resetting_send_email') }}\" method=\"post\" role=\"form\">
                    <div class=\"form-group has-feedback\">
                        <input type=\"text\" class=\"form-control\" id=\"username\"  name=\"username\" required=\"required\" placeholder=\"{{ 'resetting.request.username'|trans({}, 'FOSUserBundle')|replace({':': ''}) }}\"/>
                        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">{{ 'resetting.request.submit'|trans({}, 'FOSUserBundle') }}</button>
                        </div>
                    </div>
                </form>

                <a href=\"{{ path('sonata_user_admin_security_login') }}\">{{ 'title_user_authentication'|trans({}, 'SonataUserBundle') }}</a>
            {% endblock %}
        </div>
    </div>

{% endblock sonata_wrapper %}
", "SonataUserBundle:Admin/Security/Resetting:request.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\user-bundle/Resources/views/Admin/Security/Resetting/request.html.twig");
    }
}
