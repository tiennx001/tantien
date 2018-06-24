<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_b737a1a6beea05dff5c998f33833b058e7a56ef4f5b50114e8b2283676c31b3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataUserBundle:Profile:action.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
        $this->blocks = array(
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle:Profile:action.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d51a01c93849eb42a6494a92ad577eceba6b277bb971c88cf73d3b20a7d57215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d51a01c93849eb42a6494a92ad577eceba6b277bb971c88cf73d3b20a7d57215->enter($__internal_d51a01c93849eb42a6494a92ad577eceba6b277bb971c88cf73d3b20a7d57215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d51a01c93849eb42a6494a92ad577eceba6b277bb971c88cf73d3b20a7d57215->leave($__internal_d51a01c93849eb42a6494a92ad577eceba6b277bb971c88cf73d3b20a7d57215_prof);

    }

    // line 3
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        $__internal_4b4d4a936ac5fa7a45ab8fc5bcef5778c516076ae76d85170cb3c591d55467ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b4d4a936ac5fa7a45ab8fc5bcef5778c516076ae76d85170cb3c591d55467ea->enter($__internal_4b4d4a936ac5fa7a45ab8fc5bcef5778c516076ae76d85170cb3c591d55467ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_content"));

        // line 4
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_edit_password", array(), "SonataUserBundle"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
            ";
        // line 11
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 14
        echo "        </div>
    </div>
";
        
        $__internal_4b4d4a936ac5fa7a45ab8fc5bcef5778c516076ae76d85170cb3c591d55467ea->leave($__internal_4b4d4a936ac5fa7a45ab8fc5bcef5778c516076ae76d85170cb3c591d55467ea_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b493fdeab6474b03346f3ea5b190a2a706c13e4e68da962f9d1b4d06d00b21f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b493fdeab6474b03346f3ea5b190a2a706c13e4e68da962f9d1b4d06d00b21f4->enter($__internal_b493fdeab6474b03346f3ea5b190a2a706c13e4e68da962f9d1b4d06d00b21f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "                ";
        $this->loadTemplate("SonataUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 12)->display($context);
        // line 13
        echo "            ";
        
        $__internal_b493fdeab6474b03346f3ea5b190a2a706c13e4e68da962f9d1b4d06d00b21f4->leave($__internal_b493fdeab6474b03346f3ea5b190a2a706c13e4e68da962f9d1b4d06d00b21f4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 13,  72 => 12,  66 => 11,  57 => 14,  55 => 11,  49 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SonataUserBundle:Profile:action.html.twig\" %}

{% block sonata_profile_content %}
    {{ form_errors(form) }}

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">{{ \"title_user_edit_password\" | trans({}, 'SonataUserBundle') }}</h3>
        </div>
        <div class=\"panel-body\">
            {% block fos_user_content %}
                {% include \"SonataUserBundle:ChangePassword:changePassword_content.html.twig\" %}
            {% endblock fos_user_content %}
        </div>
    </div>
{% endblock sonata_profile_content %}
", "FOSUserBundle:ChangePassword:changePassword.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\user-bundle/Resources/views/ChangePassword/changePassword.html.twig");
    }
}
