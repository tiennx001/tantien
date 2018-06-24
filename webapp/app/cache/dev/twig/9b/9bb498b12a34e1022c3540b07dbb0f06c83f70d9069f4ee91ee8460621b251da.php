<?php

/* @SonataUser/Admin/Security/Resetting/request.html.twig */
class __TwigTemplate_d126edf4a7071fc46020631e61eb73be8c56ce72eafd82476b40a8b68af7cb91 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataUser/Admin/Security/Resetting/request.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2eff18db30279b4b291746f7796153bb51a24876188f02a8c13c25b3745a4433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eff18db30279b4b291746f7796153bb51a24876188f02a8c13c25b3745a4433->enter($__internal_2eff18db30279b4b291746f7796153bb51a24876188f02a8c13c25b3745a4433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Admin/Security/Resetting/request.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2eff18db30279b4b291746f7796153bb51a24876188f02a8c13c25b3745a4433->leave($__internal_2eff18db30279b4b291746f7796153bb51a24876188f02a8c13c25b3745a4433_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_8a54a301a182d080b3a082b609e21a04fd58a27f5de959dd8e6dbe3dc8fe4856 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a54a301a182d080b3a082b609e21a04fd58a27f5de959dd8e6dbe3dc8fe4856->enter($__internal_8a54a301a182d080b3a082b609e21a04fd58a27f5de959dd8e6dbe3dc8fe4856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_8a54a301a182d080b3a082b609e21a04fd58a27f5de959dd8e6dbe3dc8fe4856->leave($__internal_8a54a301a182d080b3a082b609e21a04fd58a27f5de959dd8e6dbe3dc8fe4856_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_dbb49137a146d752257bdec4b00c1518bb1c36d1de386f174b2b8ac7e1bb39b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbb49137a146d752257bdec4b00c1518bb1c36d1de386f174b2b8ac7e1bb39b9->enter($__internal_dbb49137a146d752257bdec4b00c1518bb1c36d1de386f174b2b8ac7e1bb39b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_dbb49137a146d752257bdec4b00c1518bb1c36d1de386f174b2b8ac7e1bb39b9->leave($__internal_dbb49137a146d752257bdec4b00c1518bb1c36d1de386f174b2b8ac7e1bb39b9_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_6fcec41f0b65e94026522276ec49d1bf2d05e36148512e882492cb68023379f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fcec41f0b65e94026522276ec49d1bf2d05e36148512e882492cb68023379f1->enter($__internal_6fcec41f0b65e94026522276ec49d1bf2d05e36148512e882492cb68023379f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_6fcec41f0b65e94026522276ec49d1bf2d05e36148512e882492cb68023379f1->leave($__internal_6fcec41f0b65e94026522276ec49d1bf2d05e36148512e882492cb68023379f1_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_2ddaad48ef984298a2c3a1a58cc591bbfd15059a9e89a57e089bb6a13567260e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ddaad48ef984298a2c3a1a58cc591bbfd15059a9e89a57e089bb6a13567260e->enter($__internal_2ddaad48ef984298a2c3a1a58cc591bbfd15059a9e89a57e089bb6a13567260e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_2ddaad48ef984298a2c3a1a58cc591bbfd15059a9e89a57e089bb6a13567260e->leave($__internal_2ddaad48ef984298a2c3a1a58cc591bbfd15059a9e89a57e089bb6a13567260e_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_ffa0cf02248959a8e9c9ee03a81fba9fb1dbecbdbe1a0957ca4e58ede95e66ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffa0cf02248959a8e9c9ee03a81fba9fb1dbecbdbe1a0957ca4e58ede95e66ae->enter($__internal_ffa0cf02248959a8e9c9ee03a81fba9fb1dbecbdbe1a0957ca4e58ede95e66ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        
        $__internal_ffa0cf02248959a8e9c9ee03a81fba9fb1dbecbdbe1a0957ca4e58ede95e66ae->leave($__internal_ffa0cf02248959a8e9c9ee03a81fba9fb1dbecbdbe1a0957ca4e58ede95e66ae_prof);

    }

    // line 25
    public function block_sonata_user_reset_request_form($context, array $blocks = array())
    {
        $__internal_651820a2394b867699dc907317c79cecb15c4a53128192765ad130b97792321c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_651820a2394b867699dc907317c79cecb15c4a53128192765ad130b97792321c->enter($__internal_651820a2394b867699dc907317c79cecb15c4a53128192765ad130b97792321c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_reset_request_form"));

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
        
        $__internal_651820a2394b867699dc907317c79cecb15c4a53128192765ad130b97792321c->leave($__internal_651820a2394b867699dc907317c79cecb15c4a53128192765ad130b97792321c_prof);

    }

    // line 26
    public function block_sonata_user_reset_request_error($context, array $blocks = array())
    {
        $__internal_d63a61600c30c0728e8030c874642052f9cd64cb9d67a3dd99fccae73f65e40a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d63a61600c30c0728e8030c874642052f9cd64cb9d67a3dd99fccae73f65e40a->enter($__internal_d63a61600c30c0728e8030c874642052f9cd64cb9d67a3dd99fccae73f65e40a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_reset_request_error"));

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
        
        $__internal_d63a61600c30c0728e8030c874642052f9cd64cb9d67a3dd99fccae73f65e40a->leave($__internal_d63a61600c30c0728e8030c874642052f9cd64cb9d67a3dd99fccae73f65e40a_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Admin/Security/Resetting/request.html.twig";
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
", "@SonataUser/Admin/Security/Resetting/request.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\user-bundle\\Resources\\views\\Admin\\Security\\Resetting\\request.html.twig");
    }
}
