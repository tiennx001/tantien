<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_b12bb4abb2f95f70f8a68b91eb74db76f9ad19b795708a0a4ec527b8e552a641 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_71d69d8f179f315b8b28130eab8bc6b28c4588e06d3d09f59ac6b38103508ba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71d69d8f179f315b8b28130eab8bc6b28c4588e06d3d09f59ac6b38103508ba2->enter($__internal_71d69d8f179f315b8b28130eab8bc6b28c4588e06d3d09f59ac6b38103508ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71d69d8f179f315b8b28130eab8bc6b28c4588e06d3d09f59ac6b38103508ba2->leave($__internal_71d69d8f179f315b8b28130eab8bc6b28c4588e06d3d09f59ac6b38103508ba2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e7ab8be5e94515f9a6f1f08c4b0e465ca4c3c6fb7de84a00120fadc5d5f3d109 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7ab8be5e94515f9a6f1f08c4b0e465ca4c3c6fb7de84a00120fadc5d5f3d109->enter($__internal_e7ab8be5e94515f9a6f1f08c4b0e465ca4c3c6fb7de84a00120fadc5d5f3d109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_e7ab8be5e94515f9a6f1f08c4b0e465ca4c3c6fb7de84a00120fadc5d5f3d109->leave($__internal_e7ab8be5e94515f9a6f1f08c4b0e465ca4c3c6fb7de84a00120fadc5d5f3d109_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}
</p>
{% endblock %}
", "@FOSUser/Resetting/checkEmail.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Resetting\\checkEmail.html.twig");
    }
}
