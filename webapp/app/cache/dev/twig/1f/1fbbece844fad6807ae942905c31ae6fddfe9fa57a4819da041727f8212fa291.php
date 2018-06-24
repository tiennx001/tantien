<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_2ac7cc2a59646e7cf403f4f5ab3780ce41c44b29aea73896fec29db9b56ca79c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_c4d5db4bad30b83e1026e00b4ef2a9b42e2cf5c6d0fecc384796ec59d662902f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4d5db4bad30b83e1026e00b4ef2a9b42e2cf5c6d0fecc384796ec59d662902f->enter($__internal_c4d5db4bad30b83e1026e00b4ef2a9b42e2cf5c6d0fecc384796ec59d662902f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4d5db4bad30b83e1026e00b4ef2a9b42e2cf5c6d0fecc384796ec59d662902f->leave($__internal_c4d5db4bad30b83e1026e00b4ef2a9b42e2cf5c6d0fecc384796ec59d662902f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_46a8039496b5b27f8ea12e8c8382b0a630e6f8a4b1291d09f1f1c25247f16f8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46a8039496b5b27f8ea12e8c8382b0a630e6f8a4b1291d09f1f1c25247f16f8b->enter($__internal_46a8039496b5b27f8ea12e8c8382b0a630e6f8a4b1291d09f1f1c25247f16f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_46a8039496b5b27f8ea12e8c8382b0a630e6f8a4b1291d09f1f1c25247f16f8b->leave($__internal_46a8039496b5b27f8ea12e8c8382b0a630e6f8a4b1291d09f1f1c25247f16f8b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Registration/register.html.twig");
    }
}
