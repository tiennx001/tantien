<?php

/* @SonataUser/Admin/Security/Resetting/reset.html.twig */
class __TwigTemplate_016902cfb7f2bebeb3061ad676326bdee2c5214619d5cdf30fed8a1aa1bc93b8 extends Twig_Template
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
            'sonata_user_reset_form' => array($this, 'block_sonata_user_reset_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataUser/Admin/Security/Resetting/reset.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05424bdc5fb7cd4fd6b8c635dad160cf96a28fe9b831e317536279d38aca5ee4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05424bdc5fb7cd4fd6b8c635dad160cf96a28fe9b831e317536279d38aca5ee4->enter($__internal_05424bdc5fb7cd4fd6b8c635dad160cf96a28fe9b831e317536279d38aca5ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Admin/Security/Resetting/reset.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05424bdc5fb7cd4fd6b8c635dad160cf96a28fe9b831e317536279d38aca5ee4->leave($__internal_05424bdc5fb7cd4fd6b8c635dad160cf96a28fe9b831e317536279d38aca5ee4_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_3c0a57adf3d8bc7b69cd76ad459cb4d4ff2da40da511c6acab732901f00d5b91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c0a57adf3d8bc7b69cd76ad459cb4d4ff2da40da511c6acab732901f00d5b91->enter($__internal_3c0a57adf3d8bc7b69cd76ad459cb4d4ff2da40da511c6acab732901f00d5b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_3c0a57adf3d8bc7b69cd76ad459cb4d4ff2da40da511c6acab732901f00d5b91->leave($__internal_3c0a57adf3d8bc7b69cd76ad459cb4d4ff2da40da511c6acab732901f00d5b91_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_38a047b7f5899bb2f57d096bbc8e80d4714214b5c0dc3dfb511ea1329d09c1b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38a047b7f5899bb2f57d096bbc8e80d4714214b5c0dc3dfb511ea1329d09c1b1->enter($__internal_38a047b7f5899bb2f57d096bbc8e80d4714214b5c0dc3dfb511ea1329d09c1b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_38a047b7f5899bb2f57d096bbc8e80d4714214b5c0dc3dfb511ea1329d09c1b1->leave($__internal_38a047b7f5899bb2f57d096bbc8e80d4714214b5c0dc3dfb511ea1329d09c1b1_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_a7b7676d029582dfae3b8eaafb8f73bcb22e6a6c7bc182f608617ee39e6832ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7b7676d029582dfae3b8eaafb8f73bcb22e6a6c7bc182f608617ee39e6832ac->enter($__internal_a7b7676d029582dfae3b8eaafb8f73bcb22e6a6c7bc182f608617ee39e6832ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_a7b7676d029582dfae3b8eaafb8f73bcb22e6a6c7bc182f608617ee39e6832ac->leave($__internal_a7b7676d029582dfae3b8eaafb8f73bcb22e6a6c7bc182f608617ee39e6832ac_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_6da5c67c45f17fad1c2b1e089084cf8f3e0935846215ac2dfda772b7c3f0e7f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6da5c67c45f17fad1c2b1e089084cf8f3e0935846215ac2dfda772b7c3f0e7f1->enter($__internal_6da5c67c45f17fad1c2b1e089084cf8f3e0935846215ac2dfda772b7c3f0e7f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_6da5c67c45f17fad1c2b1e089084cf8f3e0935846215ac2dfda772b7c3f0e7f1->leave($__internal_6da5c67c45f17fad1c2b1e089084cf8f3e0935846215ac2dfda772b7c3f0e7f1_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_5bf3077dc6ba118987f6b3c18e76a8fafabd3963e525d5593bd80af08fad8588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bf3077dc6ba118987f6b3c18e76a8fafabd3963e525d5593bd80af08fad8588->enter($__internal_5bf3077dc6ba118987f6b3c18e76a8fafabd3963e525d5593bd80af08fad8588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        $this->displayBlock('sonata_user_reset_form', $context, $blocks);
        // line 43
        echo "        </div>
    </div>

";
        
        $__internal_5bf3077dc6ba118987f6b3c18e76a8fafabd3963e525d5593bd80af08fad8588->leave($__internal_5bf3077dc6ba118987f6b3c18e76a8fafabd3963e525d5593bd80af08fad8588_prof);

    }

    // line 25
    public function block_sonata_user_reset_form($context, array $blocks = array())
    {
        $__internal_154247bc071c4782a0459fdcd27ff5c8f27c151d13f75bbbc12393a8a7bb6684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_154247bc071c4782a0459fdcd27ff5c8f27c151d13f75bbbc12393a8a7bb6684->enter($__internal_154247bc071c4782a0459fdcd27ff5c8f27c151d13f75bbbc12393a8a7bb6684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_reset_form"));

        // line 26
        echo "                <p class=\"login-box-msg\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
                <form action=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_user_admin_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "\" method=\"post\" role=\"form\">
                    <div class=\"form-group\">
                        <input type=\"password\" class=\"form-control\" id=\"fos_user_resetting_form_new_first\"  name=\"fos_user_resetting_form[new][first]\" required=\"required\" placeholder=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.new_password", array(), "FOSUserBundle"), array(":" => "")), "html", null, true);
        echo "\"/>
                    </div>
                    <div class=\"form-group\">
                        <input type=\"password\" class=\"form-control\" id=\"fos_user_resetting_form_new_second\"  name=\"fos_user_resetting_form[new][second]\" required=\"required\" placeholder=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.new_password_confirmation", array(), "FOSUserBundle"), array(":" => "")), "html", null, true);
        echo "\"/>
                    </div>
                    ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "

                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                </form>
            ";
        
        $__internal_154247bc071c4782a0459fdcd27ff5c8f27c151d13f75bbbc12393a8a7bb6684->leave($__internal_154247bc071c4782a0459fdcd27ff5c8f27c151d13f75bbbc12393a8a7bb6684_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Admin/Security/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 38,  150 => 34,  145 => 32,  139 => 29,  134 => 27,  129 => 26,  123 => 25,  113 => 43,  111 => 25,  106 => 22,  100 => 20,  98 => 19,  94 => 18,  89 => 15,  83 => 14,  71 => 12,  60 => 9,  49 => 6,  38 => 3,  23 => 1,);
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
            {% block sonata_user_reset_form %}
                <p class=\"login-box-msg\">{{ 'resetting.reset.submit'|trans({}, 'FOSUserBundle') }}</p>
                <form action=\"{{ path('sonata_user_admin_resetting_reset', {'token': token}) }}\" method=\"post\" role=\"form\">
                    <div class=\"form-group\">
                        <input type=\"password\" class=\"form-control\" id=\"fos_user_resetting_form_new_first\"  name=\"fos_user_resetting_form[new][first]\" required=\"required\" placeholder=\"{{ 'form.new_password'|trans({}, 'FOSUserBundle')|replace({':': ''}) }}\"/>
                    </div>
                    <div class=\"form-group\">
                        <input type=\"password\" class=\"form-control\" id=\"fos_user_resetting_form_new_second\"  name=\"fos_user_resetting_form[new][second]\" required=\"required\" placeholder=\"{{ 'form.new_password_confirmation'|trans({}, 'FOSUserBundle')|replace({':': ''}) }}\"/>
                    </div>
                    {{ form_widget(form._token) }}

                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">{{ 'resetting.reset.submit'|trans({}, 'FOSUserBundle') }}</button>
                        </div>
                    </div>
                </form>
            {% endblock %}
        </div>
    </div>

{% endblock sonata_wrapper %}
", "@SonataUser/Admin/Security/Resetting/reset.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\user-bundle\\Resources\\views\\Admin\\Security\\Resetting\\reset.html.twig");
    }
}
