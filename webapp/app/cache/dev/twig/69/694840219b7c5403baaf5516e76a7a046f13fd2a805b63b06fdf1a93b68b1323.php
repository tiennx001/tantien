<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_2b0b0a3df73778dd26126daf1b1e8dff89ba32efdb7fa6de72743c1c1685b05b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataUserBundle:Profile:action.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_1e9a2ef91ae5e6cd4aab28a6e7999abbddee645b1043504dbc11663fcd0ce03f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e9a2ef91ae5e6cd4aab28a6e7999abbddee645b1043504dbc11663fcd0ce03f->enter($__internal_1e9a2ef91ae5e6cd4aab28a6e7999abbddee645b1043504dbc11663fcd0ce03f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e9a2ef91ae5e6cd4aab28a6e7999abbddee645b1043504dbc11663fcd0ce03f->leave($__internal_1e9a2ef91ae5e6cd4aab28a6e7999abbddee645b1043504dbc11663fcd0ce03f_prof);

    }

    // line 3
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        $__internal_7502ad6ebb6f0d305c8234225ac5b561b216865fd9ec8ff9126c81fb5d7951b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7502ad6ebb6f0d305c8234225ac5b561b216865fd9ec8ff9126c81fb5d7951b7->enter($__internal_7502ad6ebb6f0d305c8234225ac5b561b216865fd9ec8ff9126c81fb5d7951b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_content"));

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
        
        $__internal_7502ad6ebb6f0d305c8234225ac5b561b216865fd9ec8ff9126c81fb5d7951b7->leave($__internal_7502ad6ebb6f0d305c8234225ac5b561b216865fd9ec8ff9126c81fb5d7951b7_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_122baa0cadc23fe8e80bde9bef29fc69379725fe6ab88f8a04f98d0fd75e5265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_122baa0cadc23fe8e80bde9bef29fc69379725fe6ab88f8a04f98d0fd75e5265->enter($__internal_122baa0cadc23fe8e80bde9bef29fc69379725fe6ab88f8a04f98d0fd75e5265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "                ";
        $this->loadTemplate("SonataUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 12)->display($context);
        // line 13
        echo "            ";
        
        $__internal_122baa0cadc23fe8e80bde9bef29fc69379725fe6ab88f8a04f98d0fd75e5265->leave($__internal_122baa0cadc23fe8e80bde9bef29fc69379725fe6ab88f8a04f98d0fd75e5265_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
", "@FOSUser/ChangePassword/changePassword.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\user-bundle\\Resources\\views\\ChangePassword\\changePassword.html.twig");
    }
}
