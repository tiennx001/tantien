<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_0214e77d211b99219a7c7441e9fdcdfd70ba64094af68b15c71c05c373c5c78c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d39d86c408d452dd8a4fe9c291120168847b059b499b63761605116cd3339960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d39d86c408d452dd8a4fe9c291120168847b059b499b63761605116cd3339960->enter($__internal_d39d86c408d452dd8a4fe9c291120168847b059b499b63761605116cd3339960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d39d86c408d452dd8a4fe9c291120168847b059b499b63761605116cd3339960->leave($__internal_d39d86c408d452dd8a4fe9c291120168847b059b499b63761605116cd3339960_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a47680ec14457441b9fef3860fb0d0698bc312f9b8793dfff5d97d22bd6776ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a47680ec14457441b9fef3860fb0d0698bc312f9b8793dfff5d97d22bd6776ea->enter($__internal_a47680ec14457441b9fef3860fb0d0698bc312f9b8793dfff5d97d22bd6776ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a47680ec14457441b9fef3860fb0d0698bc312f9b8793dfff5d97d22bd6776ea->leave($__internal_a47680ec14457441b9fef3860fb0d0698bc312f9b8793dfff5d97d22bd6776ea_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2bce23abc3bc78244c2d73f38c126b1fa01a1f5adbf25aa60b98c9b2ede79033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bce23abc3bc78244c2d73f38c126b1fa01a1f5adbf25aa60b98c9b2ede79033->enter($__internal_2bce23abc3bc78244c2d73f38c126b1fa01a1f5adbf25aa60b98c9b2ede79033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2bce23abc3bc78244c2d73f38c126b1fa01a1f5adbf25aa60b98c9b2ede79033->leave($__internal_2bce23abc3bc78244c2d73f38c126b1fa01a1f5adbf25aa60b98c9b2ede79033_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9cb5c2940ac4f030cabe9448109d65d7e9fcb4e4ae1e3cbed37ccb5fb7a9c447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cb5c2940ac4f030cabe9448109d65d7e9fcb4e4ae1e3cbed37ccb5fb7a9c447->enter($__internal_9cb5c2940ac4f030cabe9448109d65d7e9fcb4e4ae1e3cbed37ccb5fb7a9c447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9cb5c2940ac4f030cabe9448109d65d7e9fcb4e4ae1e3cbed37ccb5fb7a9c447->leave($__internal_9cb5c2940ac4f030cabe9448109d65d7e9fcb4e4ae1e3cbed37ccb5fb7a9c447_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block subject %}
{% autoescape false %}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "D:\\Projects\\yourhome_v1\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
