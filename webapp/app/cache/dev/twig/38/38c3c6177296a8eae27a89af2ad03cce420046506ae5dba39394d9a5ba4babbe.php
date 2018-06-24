<?php

/* SonataUserBundle:Security:base_login.html.twig */
class __TwigTemplate_020e8b6252875380c6c4fe4b66534bbd591939f72856539aa5769c936d745c18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataUserBundle::layout.html.twig", "SonataUserBundle:Security:base_login.html.twig", 12);
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
        $__internal_02e2dd70f99d971170b0d83e66d0fd5b6472f6c2557361302ff7548ef52d05c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02e2dd70f99d971170b0d83e66d0fd5b6472f6c2557361302ff7548ef52d05c8->enter($__internal_02e2dd70f99d971170b0d83e66d0fd5b6472f6c2557361302ff7548ef52d05c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Security:base_login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02e2dd70f99d971170b0d83e66d0fd5b6472f6c2557361302ff7548ef52d05c8->leave($__internal_02e2dd70f99d971170b0d83e66d0fd5b6472f6c2557361302ff7548ef52d05c8_prof);

    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_df5e723fef0d0e69031f5ec083ad6d03d00977d1919be8491a50f5e6cef81d22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df5e723fef0d0e69031f5ec083ad6d03d00977d1919be8491a50f5e6cef81d22->enter($__internal_df5e723fef0d0e69031f5ec083ad6d03d00977d1919be8491a50f5e6cef81d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_df5e723fef0d0e69031f5ec083ad6d03d00977d1919be8491a50f5e6cef81d22->leave($__internal_df5e723fef0d0e69031f5ec083ad6d03d00977d1919be8491a50f5e6cef81d22_prof);

    }

    // line 17
    public function block_sonata_user_login($context, array $blocks = array())
    {
        $__internal_5bbdfce112543d0e1722a4c89feacd2a144577a4994e94ebe275007bdeb73f31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bbdfce112543d0e1722a4c89feacd2a144577a4994e94ebe275007bdeb73f31->enter($__internal_5bbdfce112543d0e1722a4c89feacd2a144577a4994e94ebe275007bdeb73f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login"));

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
        
        $__internal_5bbdfce112543d0e1722a4c89feacd2a144577a4994e94ebe275007bdeb73f31->leave($__internal_5bbdfce112543d0e1722a4c89feacd2a144577a4994e94ebe275007bdeb73f31_prof);

    }

    // line 26
    public function block_sonata_user_login_error($context, array $blocks = array())
    {
        $__internal_d2ea3a4af8523562eb781b59ecb8bffe0712757d51ec4ce0a942ccb1f2d0eced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2ea3a4af8523562eb781b59ecb8bffe0712757d51ec4ce0a942ccb1f2d0eced->enter($__internal_d2ea3a4af8523562eb781b59ecb8bffe0712757d51ec4ce0a942ccb1f2d0eced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login_error"));

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
        
        $__internal_d2ea3a4af8523562eb781b59ecb8bffe0712757d51ec4ce0a942ccb1f2d0eced->leave($__internal_d2ea3a4af8523562eb781b59ecb8bffe0712757d51ec4ce0a942ccb1f2d0eced_prof);

    }

    // line 34
    public function block_sonata_user_login_form($context, array $blocks = array())
    {
        $__internal_a61f1b60b87f72f62f5b0ce21886f61046caab749641ec5697c39a1ccab48587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a61f1b60b87f72f62f5b0ce21886f61046caab749641ec5697c39a1ccab48587->enter($__internal_a61f1b60b87f72f62f5b0ce21886f61046caab749641ec5697c39a1ccab48587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login_form"));

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
        
        $__internal_a61f1b60b87f72f62f5b0ce21886f61046caab749641ec5697c39a1ccab48587->leave($__internal_a61f1b60b87f72f62f5b0ce21886f61046caab749641ec5697c39a1ccab48587_prof);

    }

    // line 78
    public function block_sonata_user_registration($context, array $blocks = array())
    {
        $__internal_42405f9db74f8dddd31dbd6a47762485098d78afdea1ac3aa98ae48144a1ec45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42405f9db74f8dddd31dbd6a47762485098d78afdea1ac3aa98ae48144a1ec45->enter($__internal_42405f9db74f8dddd31dbd6a47762485098d78afdea1ac3aa98ae48144a1ec45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_registration"));

        // line 79
        echo "                ";
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SonataUserBundle:RegistrationFOSUser1:register"), array());
        // line 80
        echo "            ";
        
        $__internal_42405f9db74f8dddd31dbd6a47762485098d78afdea1ac3aa98ae48144a1ec45->leave($__internal_42405f9db74f8dddd31dbd6a47762485098d78afdea1ac3aa98ae48144a1ec45_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Security:base_login.html.twig";
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
", "SonataUserBundle:Security:base_login.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\user-bundle/Resources/views/Security/base_login.html.twig");
    }
}
