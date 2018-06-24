<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_5b048eca3aedccaba73baaa0a56794f93438c80cd23054a14343a0d54699b5e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2815fdc5ebcc6c992c99e1ff768745afa27f7002e8e562ab1b9bad3738ec353d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2815fdc5ebcc6c992c99e1ff768745afa27f7002e8e562ab1b9bad3738ec353d->enter($__internal_2815fdc5ebcc6c992c99e1ff768745afa27f7002e8e562ab1b9bad3738ec353d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2815fdc5ebcc6c992c99e1ff768745afa27f7002e8e562ab1b9bad3738ec353d->leave($__internal_2815fdc5ebcc6c992c99e1ff768745afa27f7002e8e562ab1b9bad3738ec353d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e05c7ac03449bd3e9d2f91b86606a18a30244802937eb14483a8e515cd72f597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e05c7ac03449bd3e9d2f91b86606a18a30244802937eb14483a8e515cd72f597->enter($__internal_e05c7ac03449bd3e9d2f91b86606a18a30244802937eb14483a8e515cd72f597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_e05c7ac03449bd3e9d2f91b86606a18a30244802937eb14483a8e515cd72f597->leave($__internal_e05c7ac03449bd3e9d2f91b86606a18a30244802937eb14483a8e515cd72f597_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}, 'FOSUserBundle') }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/checkEmail.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Registration\\checkEmail.html.twig");
    }
}
