<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_f7bbd4a33d06435d98563c6b49d878a63dcf3548b74cd43bb0b665222f3db023 extends Twig_Template
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
        $__internal_85b4d312fc5eefbfe5cf80d58e26dc66e52e55fcf1512a4e648ba9a2701d8d26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85b4d312fc5eefbfe5cf80d58e26dc66e52e55fcf1512a4e648ba9a2701d8d26->enter($__internal_85b4d312fc5eefbfe5cf80d58e26dc66e52e55fcf1512a4e648ba9a2701d8d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_85b4d312fc5eefbfe5cf80d58e26dc66e52e55fcf1512a4e648ba9a2701d8d26->leave($__internal_85b4d312fc5eefbfe5cf80d58e26dc66e52e55fcf1512a4e648ba9a2701d8d26_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2d58915c0d1a1a7497876867c4e7b655b547a5b5c93c40169c999f70b997e131 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d58915c0d1a1a7497876867c4e7b655b547a5b5c93c40169c999f70b997e131->enter($__internal_2d58915c0d1a1a7497876867c4e7b655b547a5b5c93c40169c999f70b997e131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2d58915c0d1a1a7497876867c4e7b655b547a5b5c93c40169c999f70b997e131->leave($__internal_2d58915c0d1a1a7497876867c4e7b655b547a5b5c93c40169c999f70b997e131_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1601ae3f2caa03190e0862c0e353a7d227d2000ce368635e2f126af0e191f6b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1601ae3f2caa03190e0862c0e353a7d227d2000ce368635e2f126af0e191f6b8->enter($__internal_1601ae3f2caa03190e0862c0e353a7d227d2000ce368635e2f126af0e191f6b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1601ae3f2caa03190e0862c0e353a7d227d2000ce368635e2f126af0e191f6b8->leave($__internal_1601ae3f2caa03190e0862c0e353a7d227d2000ce368635e2f126af0e191f6b8_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4b04bc6cbedeb749b568e2ec1831ccdc85a8ea87c3faa2177b3eaea2651ef137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b04bc6cbedeb749b568e2ec1831ccdc85a8ea87c3faa2177b3eaea2651ef137->enter($__internal_4b04bc6cbedeb749b568e2ec1831ccdc85a8ea87c3faa2177b3eaea2651ef137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4b04bc6cbedeb749b568e2ec1831ccdc85a8ea87c3faa2177b3eaea2651ef137->leave($__internal_4b04bc6cbedeb749b568e2ec1831ccdc85a8ea87c3faa2177b3eaea2651ef137_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
", "FOSUserBundle:Registration:email.txt.twig", "D:\\Projects\\yourhome_v1\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Registration/email.txt.twig");
    }
}
