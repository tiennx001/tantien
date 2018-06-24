<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_ef251d1d7c4328f444dc75a7d2484df54457845cfb05479efe19e7be34c63657 extends Twig_Template
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
        $__internal_1a4ee2f988272868c297716e2bbb099607d1e9b3419ea6a24ac011cc3d97323c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a4ee2f988272868c297716e2bbb099607d1e9b3419ea6a24ac011cc3d97323c->enter($__internal_1a4ee2f988272868c297716e2bbb099607d1e9b3419ea6a24ac011cc3d97323c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1a4ee2f988272868c297716e2bbb099607d1e9b3419ea6a24ac011cc3d97323c->leave($__internal_1a4ee2f988272868c297716e2bbb099607d1e9b3419ea6a24ac011cc3d97323c_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0e0db26e9138142d865dcce1a5219b883c2405761dd7c6cec6c62784bce82656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e0db26e9138142d865dcce1a5219b883c2405761dd7c6cec6c62784bce82656->enter($__internal_0e0db26e9138142d865dcce1a5219b883c2405761dd7c6cec6c62784bce82656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0e0db26e9138142d865dcce1a5219b883c2405761dd7c6cec6c62784bce82656->leave($__internal_0e0db26e9138142d865dcce1a5219b883c2405761dd7c6cec6c62784bce82656_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_11a87380b2a833d3c09f4cfcc5645145cb3658deb0ada0685bed16f3b8852aba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11a87380b2a833d3c09f4cfcc5645145cb3658deb0ada0685bed16f3b8852aba->enter($__internal_11a87380b2a833d3c09f4cfcc5645145cb3658deb0ada0685bed16f3b8852aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_11a87380b2a833d3c09f4cfcc5645145cb3658deb0ada0685bed16f3b8852aba->leave($__internal_11a87380b2a833d3c09f4cfcc5645145cb3658deb0ada0685bed16f3b8852aba_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_43c51c7097f2460a17487eecca22496cfaf18244063ff9d9a54f0781dfdca439 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43c51c7097f2460a17487eecca22496cfaf18244063ff9d9a54f0781dfdca439->enter($__internal_43c51c7097f2460a17487eecca22496cfaf18244063ff9d9a54f0781dfdca439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_43c51c7097f2460a17487eecca22496cfaf18244063ff9d9a54f0781dfdca439->leave($__internal_43c51c7097f2460a17487eecca22496cfaf18244063ff9d9a54f0781dfdca439_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
", "FOSUserBundle:Resetting:email.txt.twig", "D:\\Projects\\yourhome_v1\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Resetting/email.txt.twig");
    }
}
