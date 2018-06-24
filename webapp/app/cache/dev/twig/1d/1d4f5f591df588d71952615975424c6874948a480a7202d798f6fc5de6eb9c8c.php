<?php

/* @SonataUser/Profile/action.html.twig */
class __TwigTemplate_11c049902578c8c7406af2c50d5d38dc37d4beae44828991dab02399b6ce7457 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_page_breadcrumb' => array($this, 'block_sonata_page_breadcrumb'),
            'sonata_profile_title' => array($this, 'block_sonata_profile_title'),
            'sonata_profile_menu' => array($this, 'block_sonata_profile_menu'),
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4ad5ac6e1f3d3f7b516400ffea63609aec6fda86e388213b4d6d0454b8bc9d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4ad5ac6e1f3d3f7b516400ffea63609aec6fda86e388213b4d6d0454b8bc9d0->enter($__internal_a4ad5ac6e1f3d3f7b516400ffea63609aec6fda86e388213b4d6d0454b8bc9d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Profile/action.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('sonata_page_breadcrumb', $context, $blocks);
        // line 20
        echo "
<h2>";
        // line 21
        $this->displayBlock('sonata_profile_title', $context, $blocks);
        echo "</h2>

<div class=\"sonata-user-show row row-fluid\">

    <div class=\"span2 col-lg-2\" style=\"padding: 8px 0;\">
        ";
        // line 26
        $this->displayBlock('sonata_profile_menu', $context, $blocks);
        // line 29
        echo "    </div>

    <div class=\"span10 col-lg-10\">
        ";
        // line 32
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "@SonataUser/Profile/action.html.twig", 32)->display($context);
        // line 33
        echo "
        ";
        // line 34
        $this->displayBlock('sonata_profile_content', $context, $blocks);
        // line 35
        echo "    </div>

</div>
";
        
        $__internal_a4ad5ac6e1f3d3f7b516400ffea63609aec6fda86e388213b4d6d0454b8bc9d0->leave($__internal_a4ad5ac6e1f3d3f7b516400ffea63609aec6fda86e388213b4d6d0454b8bc9d0_prof);

    }

    // line 12
    public function block_sonata_page_breadcrumb($context, array $blocks = array())
    {
        $__internal_cbe2c1468ad547232ded15e0ea6f154ba86115ce5b2f8fba60139095354d7a51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbe2c1468ad547232ded15e0ea6f154ba86115ce5b2f8fba60139095354d7a51->enter($__internal_cbe2c1468ad547232ded15e0ea6f154ba86115ce5b2f8fba60139095354d7a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_breadcrumb"));

        // line 13
        echo "    ";
        if ( !array_key_exists("breadcrumb_context", $context)) {
            // line 14
            echo "        ";
            $context["breadcrumb_context"] = "user_index";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div class=\"row-fluid clearfix\">
        ";
        // line 17
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("breadcrumb", array("context" => (isset($context["breadcrumb_context"]) ? $context["breadcrumb_context"] : $this->getContext($context, "breadcrumb_context")), "current_uri" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "requestUri", array()))));
        echo "
    </div>
";
        
        $__internal_cbe2c1468ad547232ded15e0ea6f154ba86115ce5b2f8fba60139095354d7a51->leave($__internal_cbe2c1468ad547232ded15e0ea6f154ba86115ce5b2f8fba60139095354d7a51_prof);

    }

    // line 21
    public function block_sonata_profile_title($context, array $blocks = array())
    {
        $__internal_db7db306399d664f03b38f529e4b3bb349cd18dc56c73c62489c784d597c8f45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db7db306399d664f03b38f529e4b3bb349cd18dc56c73c62489c784d597c8f45->enter($__internal_db7db306399d664f03b38f529e4b3bb349cd18dc56c73c62489c784d597c8f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_title"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("sonata_profile_title", array(), "SonataUserBundle");
        
        $__internal_db7db306399d664f03b38f529e4b3bb349cd18dc56c73c62489c784d597c8f45->leave($__internal_db7db306399d664f03b38f529e4b3bb349cd18dc56c73c62489c784d597c8f45_prof);

    }

    // line 26
    public function block_sonata_profile_menu($context, array $blocks = array())
    {
        $__internal_e76676bf3255d27ce7c4780ac65bd0b792d43cdc12602344281364f95d331e3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e76676bf3255d27ce7c4780ac65bd0b792d43cdc12602344281364f95d331e3a->enter($__internal_e76676bf3255d27ce7c4780ac65bd0b792d43cdc12602344281364f95d331e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_menu"));

        // line 27
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.user.block.menu"), array("current_uri" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "requestUri", array()))));
        echo "
        ";
        
        $__internal_e76676bf3255d27ce7c4780ac65bd0b792d43cdc12602344281364f95d331e3a->leave($__internal_e76676bf3255d27ce7c4780ac65bd0b792d43cdc12602344281364f95d331e3a_prof);

    }

    // line 34
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        $__internal_b515382e493fb89c32a85d413ac9705d9b9a93e6b720eeb888945204a1399957 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b515382e493fb89c32a85d413ac9705d9b9a93e6b720eeb888945204a1399957->enter($__internal_b515382e493fb89c32a85d413ac9705d9b9a93e6b720eeb888945204a1399957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_content"));

        echo "";
        
        $__internal_b515382e493fb89c32a85d413ac9705d9b9a93e6b720eeb888945204a1399957->leave($__internal_b515382e493fb89c32a85d413ac9705d9b9a93e6b720eeb888945204a1399957_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Profile/action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 34,  112 => 27,  106 => 26,  94 => 21,  84 => 17,  81 => 16,  78 => 15,  75 => 14,  72 => 13,  66 => 12,  56 => 35,  54 => 34,  51 => 33,  49 => 32,  44 => 29,  42 => 26,  34 => 21,  31 => 20,  29 => 12,  26 => 11,);
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

{% block sonata_page_breadcrumb %}
    {% if breadcrumb_context is not defined %}
        {% set breadcrumb_context = 'user_index' %}
    {% endif %}
    <div class=\"row-fluid clearfix\">
        {{ sonata_block_render_event('breadcrumb', { 'context': breadcrumb_context, 'current_uri': app.request.requestUri }) }}
    </div>
{% endblock %}

<h2>{% block sonata_profile_title %}{% trans from 'SonataUserBundle' %}sonata_profile_title{% endtrans %}{% endblock %}</h2>

<div class=\"sonata-user-show row row-fluid\">

    <div class=\"span2 col-lg-2\" style=\"padding: 8px 0;\">
        {% block sonata_profile_menu %}
            {{ sonata_block_render({'type': 'sonata.user.block.menu'}, {'current_uri': app.request.requestUri}) }}
        {% endblock %}
    </div>

    <div class=\"span10 col-lg-10\">
        {% include 'SonataCoreBundle:FlashMessage:render.html.twig' %}

        {% block sonata_profile_content '' %}
    </div>

</div>
", "@SonataUser/Profile/action.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\user-bundle\\Resources\\views\\Profile\\action.html.twig");
    }
}
