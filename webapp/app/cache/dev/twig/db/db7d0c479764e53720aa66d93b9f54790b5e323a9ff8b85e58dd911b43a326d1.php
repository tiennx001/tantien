<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_16383c3b89a1e16e19a310a7ef615537496d3c712862b7fbd861fc4171582650 extends Twig_Template
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
        $__internal_7a9fd13074b329f1dc3480c1e6b93b533c301f8e7ac45b017d5ff6ae3e128854 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a9fd13074b329f1dc3480c1e6b93b533c301f8e7ac45b017d5ff6ae3e128854->enter($__internal_7a9fd13074b329f1dc3480c1e6b93b533c301f8e7ac45b017d5ff6ae3e128854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_7a9fd13074b329f1dc3480c1e6b93b533c301f8e7ac45b017d5ff6ae3e128854->leave($__internal_7a9fd13074b329f1dc3480c1e6b93b533c301f8e7ac45b017d5ff6ae3e128854_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_84ec5bd6c0962916cce7fb18947573fa52b835ae616f11c5b91724d9e4e8a37c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84ec5bd6c0962916cce7fb18947573fa52b835ae616f11c5b91724d9e4e8a37c->enter($__internal_84ec5bd6c0962916cce7fb18947573fa52b835ae616f11c5b91724d9e4e8a37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_84ec5bd6c0962916cce7fb18947573fa52b835ae616f11c5b91724d9e4e8a37c->leave($__internal_84ec5bd6c0962916cce7fb18947573fa52b835ae616f11c5b91724d9e4e8a37c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
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
", "SonataAdminBundle:Core:user_block.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle/Resources/views/Core/user_block.html.twig");
    }
}
