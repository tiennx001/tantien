<?php

/* @SonataAdmin/Core/user_block.html.twig */
class __TwigTemplate_cc8730d743e408219427b0cbe8bca97061cd66f3b76616e1d0b31ba277027e28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7087e33f0e4d495e01f7431c92c1a454588cebe3def66d31cc2f0ac9c6f9868b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7087e33f0e4d495e01f7431c92c1a454588cebe3def66d31cc2f0ac9c6f9868b->enter($__internal_7087e33f0e4d495e01f7431c92c1a454588cebe3def66d31cc2f0ac9c6f9868b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_7087e33f0e4d495e01f7431c92c1a454588cebe3def66d31cc2f0ac9c6f9868b->leave($__internal_7087e33f0e4d495e01f7431c92c1a454588cebe3def66d31cc2f0ac9c6f9868b_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_eb1bae24cc1452180ecdabe3f8c98a365e133d15f31268bfe0452cc5fe9934cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb1bae24cc1452180ecdabe3f8c98a365e133d15f31268bfe0452cc5fe9934cf->enter($__internal_eb1bae24cc1452180ecdabe3f8c98a365e133d15f31268bfe0452cc5fe9934cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_eb1bae24cc1452180ecdabe3f8c98a365e133d15f31268bfe0452cc5fe9934cf->leave($__internal_eb1bae24cc1452180ecdabe3f8c98a365e133d15f31268bfe0452cc5fe9934cf_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Core/user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block user_block %}{# Customize this value #}{% endblock %}
", "@SonataAdmin/Core/user_block.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Core\\user_block.html.twig");
    }
}
