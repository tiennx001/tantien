<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_10d646d0e38c81b8deda7122979e9a3e1d0fb817c35a332414b599e48425374f extends Twig_Template
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
        $__internal_3db166485f1c4cf2b5cb43954ef9b7019a483ed9c5300cd718a1e85129648d23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3db166485f1c4cf2b5cb43954ef9b7019a483ed9c5300cd718a1e85129648d23->enter($__internal_3db166485f1c4cf2b5cb43954ef9b7019a483ed9c5300cd718a1e85129648d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3db166485f1c4cf2b5cb43954ef9b7019a483ed9c5300cd718a1e85129648d23->leave($__internal_3db166485f1c4cf2b5cb43954ef9b7019a483ed9c5300cd718a1e85129648d23_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_eaef89a22d0c9677a1963d3a8237d61d8167a71a974a19977e2ec7a924b4c6df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaef89a22d0c9677a1963d3a8237d61d8167a71a974a19977e2ec7a924b4c6df->enter($__internal_eaef89a22d0c9677a1963d3a8237d61d8167a71a974a19977e2ec7a924b4c6df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_eaef89a22d0c9677a1963d3a8237d61d8167a71a974a19977e2ec7a924b4c6df->leave($__internal_eaef89a22d0c9677a1963d3a8237d61d8167a71a974a19977e2ec7a924b4c6df_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0cc15c9beae3b64ca6399143911ac98879b71d2af2536b1738007eaf14b893d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cc15c9beae3b64ca6399143911ac98879b71d2af2536b1738007eaf14b893d7->enter($__internal_0cc15c9beae3b64ca6399143911ac98879b71d2af2536b1738007eaf14b893d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0cc15c9beae3b64ca6399143911ac98879b71d2af2536b1738007eaf14b893d7->leave($__internal_0cc15c9beae3b64ca6399143911ac98879b71d2af2536b1738007eaf14b893d7_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_13aff464e4588e182fa3661078e0c755e0bc70f76fd8331f2b5319a209b162f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13aff464e4588e182fa3661078e0c755e0bc70f76fd8331f2b5319a209b162f9->enter($__internal_13aff464e4588e182fa3661078e0c755e0bc70f76fd8331f2b5319a209b162f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_13aff464e4588e182fa3661078e0c755e0bc70f76fd8331f2b5319a209b162f9->leave($__internal_13aff464e4588e182fa3661078e0c755e0bc70f76fd8331f2b5319a209b162f9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "D:\\Projects\\yourhome_v1\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
