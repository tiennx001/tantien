<?php

/* @SonataUser/Security/base_login.html.twig */
class __TwigTemplate_3fcc3512616a3758e7a7a10c02c45a1a65431a1cd4fb78085a2ddf75e02d739e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataUserBundle::layout.html.twig", "@SonataUser/Security/base_login.html.twig", 12);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'sonata_user_login' => array($this, 'block_sonata_user_login'),
            'sonata_user_login_error' => array($this, 'block_sonata_user_login_error'),
            'sonata_user_login_form' => array($this, 'block_sonata_user_login_form'),
            'sonata_user_registration' => array($this, 'block_sonata_user_registration'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9df6a2e3d6dfcf8d19c54016966f41a782d3400c16d595678d5a947d85b16f65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9df6a2e3d6dfcf8d19c54016966f41a782d3400c16d595678d5a947d85b16f65->enter($__internal_9df6a2e3d6dfcf8d19c54016966f41a782d3400c16d595678d5a947d85b16f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Security/base_login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9df6a2e3d6dfcf8d19c54016966f41a782d3400c16d595678d5a947d85b16f65->leave($__internal_9df6a2e3d6dfcf8d19c54016966f41a782d3400c16d595678d5a947d85b16f65_prof);

    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7c7192e109121397bc4f9002ed0af023a4bdcd999c09a41f55eddaaa1cfe9c26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c7192e109121397bc4f9002ed0af023a4bdcd999c09a41f55eddaaa1cfe9c26->enter($__internal_7c7192e109121397bc4f9002ed0af023a4bdcd999c09a41f55eddaaa1cfe9c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "    <div class=\"row\">
        <div class=\"col-sm-6\">
            ";
        // line 17
        $this->displayBlock('sonata_user_login', $context, $blocks);
        // line 76
        echo "        </div>
        <div class=\"col-sm-6\">
            ";
        // line 78
        $this->displayBlock('sonata_user_registration', $context, $blocks);
        // line 81
        echo "        </div>
    </div>
";
        
        $__internal_7c7192e109121397bc4f9002ed0af023a4bdcd999c09a41f55eddaaa1cfe9c26->leave($__internal_7c7192e109121397bc4f9002ed0af023a4bdcd999c09a41f55eddaaa1cfe9c26_prof);

    }

    // line 17
    public function block_sonata_user_login($context, array $blocks = array())
    {
        $__internal_e28abead9b0263c53a8ce73e7504546d6267dee869c8b077a3a9ee610f89d98e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e28abead9b0263c53a8ce73e7504546d6267dee869c8b077a3a9ee610f89d98e->enter($__internal_e28abead9b0263c53a8ce73e7504546d6267dee869c8b077a3a9ee610f89d98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login"));

        // line 18
        echo "                <div class=\"panel panel-info\">

                <div class=\"panel-heading\">
                    <h2 class=\"panel-title\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "</h2>
                </div>

                <div class=\"panel-body\">

                    ";
        // line 26
        $this->displayBlock('sonata_user_login_error', $context, $blocks);
        // line 33
        echo "
                    ";
        // line 34
        $this->displayBlock('sonata_user_login_form', $context, $blocks);
        // line 73
        echo "                </div>
            </div>
            ";
        
        $__internal_e28abead9b0263c53a8ce73e7504546d6267dee869c8b077a3a9ee610f89d98e->leave($__internal_e28abead9b0263c53a8ce73e7504546d6267dee869c8b077a3a9ee610f89d98e_prof);

    }

    // line 26
    public function block_sonata_user_login_error($context, array $blocks = array())
    {
        $__internal_60982737fc83a900f09b2c946130237c2687733168798e658df7a4ff32f77702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60982737fc83a900f09b2c946130237c2687733168798e658df7a4ff32f77702->enter($__internal_60982737fc83a900f09b2c946130237c2687733168798e658df7a4ff32f77702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login_error"));

        // line 27
        echo "                        ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 28
            echo "                            <div class=\"alert alert-danger alert-error\">
                                ";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
                            </div>
                        ";
        }
        // line 32
        echo "                    ";
        
        $__internal_60982737fc83a900f09b2c946130237c2687733168798e658df7a4ff32f77702->leave($__internal_60982737fc83a900f09b2c946130237c2687733168798e658df7a4ff32f77702_prof);

    }

    // line 34
    public function block_sonata_user_login_form($context, array $blocks = array())
    {
        $__internal_71c34100366dbb18a7f9ad8b64be4c814f281298a30d6dc66ebefcb47060e21c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71c34100366dbb18a7f9ad8b64be4c814f281298a30d6dc66ebefcb47060e21c->enter($__internal_71c34100366dbb18a7f9ad8b64be4c814f281298a30d6dc66ebefcb47060e21c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login_form"));

        // line 35
        echo "                        <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\" role=\"form\" class=\"form-horizontal\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\"/>

                            <div class=\"form-group\">
                                <label for=\"username\" class=\"col-sm-4 control-label\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "SonataUserBundle"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm-8\"><input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\"/></div>
                            </div>


                            <div class=\"form-group control-group\">
                                <label for=\"password\" class=\"col-sm-4 control-label\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "SonataUserBundle"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm-8\"><input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\"/></div>
                            </div>

                            <div class=\"form-group\">
                                <div class=\"col-sm-offset-4 col-sm-8\">
                                    <div class=\"checkbox control-group\">
                                        <label for=\"remember_me\">
                                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                                            ";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-group control-group\">
                                <div class=\"controls col-sm-offset-4 col-sm-8\">
                                    <a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("forgotten_password", array(), "SonataUserBundle"), "html", null, true);
        echo "</a>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <div class=\"col-sm-offset-4 col-sm-8\">
                                    <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
                                </div>
                            </div>
                        </form>
                    ";
        
        $__internal_71c34100366dbb18a7f9ad8b64be4c814f281298a30d6dc66ebefcb47060e21c->leave($__internal_71c34100366dbb18a7f9ad8b64be4c814f281298a30d6dc66ebefcb47060e21c_prof);

    }

    // line 78
    public function block_sonata_user_registration($context, array $blocks = array())
    {
        $__internal_85ff410fb1b0f887d32713beaff41fc230e5dca4dd093719510bad0968d2fc9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85ff410fb1b0f887d32713beaff41fc230e5dca4dd093719510bad0968d2fc9f->enter($__internal_85ff410fb1b0f887d32713beaff41fc230e5dca4dd093719510bad0968d2fc9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_registration"));

        // line 79
        echo "                ";
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SonataUserBundle:RegistrationFOSUser1:register"), array());
        // line 80
        echo "            ";
        
        $__internal_85ff410fb1b0f887d32713beaff41fc230e5dca4dd093719510bad0968d2fc9f->leave($__internal_85ff410fb1b0f887d32713beaff41fc230e5dca4dd093719510bad0968d2fc9f_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Security/base_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 80,  206 => 79,  200 => 78,  188 => 68,  177 => 62,  166 => 54,  154 => 45,  146 => 40,  142 => 39,  136 => 36,  131 => 35,  125 => 34,  118 => 32,  112 => 29,  109 => 28,  106 => 27,  100 => 26,  91 => 73,  89 => 34,  86 => 33,  84 => 26,  76 => 21,  71 => 18,  65 => 17,  56 => 81,  54 => 78,  50 => 76,  48 => 17,  44 => 15,  38 => 14,  11 => 12,);
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

{% extends \"SonataUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    <div class=\"row\">
        <div class=\"col-sm-6\">
            {% block sonata_user_login %}
                <div class=\"panel panel-info\">

                <div class=\"panel-heading\">
                    <h2 class=\"panel-title\">{{ 'title_user_authentication'|trans({}, 'SonataUserBundle') }}</h2>
                </div>

                <div class=\"panel-body\">

                    {% block sonata_user_login_error %}
                        {% if error %}
                            <div class=\"alert alert-danger alert-error\">
                                {{ error.messageKey|trans(error.messageData, 'security') }}
                            </div>
                        {% endif %}
                    {% endblock %}

                    {% block sonata_user_login_form %}
                        <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\" role=\"form\" class=\"form-horizontal\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\"/>

                            <div class=\"form-group\">
                                <label for=\"username\" class=\"col-sm-4 control-label\">{{ 'security.login.username'|trans({}, 'SonataUserBundle') }}</label>
                                <div class=\"col-sm-8\"><input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\"/></div>
                            </div>


                            <div class=\"form-group control-group\">
                                <label for=\"password\" class=\"col-sm-4 control-label\">{{ 'security.login.password'|trans({}, 'SonataUserBundle') }}</label>
                                <div class=\"col-sm-8\"><input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\"/></div>
                            </div>

                            <div class=\"form-group\">
                                <div class=\"col-sm-offset-4 col-sm-8\">
                                    <div class=\"checkbox control-group\">
                                        <label for=\"remember_me\">
                                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                                            {{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-group control-group\">
                                <div class=\"controls col-sm-offset-4 col-sm-8\">
                                    <a href=\"{{ path('fos_user_resetting_request') }}\">{{ 'forgotten_password'|trans({}, 'SonataUserBundle') }}</a>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <div class=\"col-sm-offset-4 col-sm-8\">
                                    <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary\" value=\"{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}\"/>
                                </div>
                            </div>
                        </form>
                    {% endblock %}
                </div>
            </div>
            {% endblock %}
        </div>
        <div class=\"col-sm-6\">
            {% block sonata_user_registration %}
                {% render controller(\"SonataUserBundle:RegistrationFOSUser1:register\") %}
            {% endblock %}
        </div>
    </div>
{% endblock fos_user_content %}
", "@SonataUser/Security/base_login.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\user-bundle\\Resources\\views\\Security\\base_login.html.twig");
    }
}
