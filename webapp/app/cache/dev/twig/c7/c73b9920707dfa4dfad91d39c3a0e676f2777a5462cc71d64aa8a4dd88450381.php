<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_eea562472a0a49c2ca57f4b38cf157d86dbe3c4ffd44bfbfa4ad8bc9f10b7aea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0f32f20411740fb1d32d995814783969d079aee1e0bdee43a1cd71920166d9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0f32f20411740fb1d32d995814783969d079aee1e0bdee43a1cd71920166d9d->enter($__internal_a0f32f20411740fb1d32d995814783969d079aee1e0bdee43a1cd71920166d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a0f32f20411740fb1d32d995814783969d079aee1e0bdee43a1cd71920166d9d->leave($__internal_a0f32f20411740fb1d32d995814783969d079aee1e0bdee43a1cd71920166d9d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_813263d4b50f2587b65f25316d3a158f95a882645113e66b880981ec6cf52c94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_813263d4b50f2587b65f25316d3a158f95a882645113e66b880981ec6cf52c94->enter($__internal_813263d4b50f2587b65f25316d3a158f95a882645113e66b880981ec6cf52c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_813263d4b50f2587b65f25316d3a158f95a882645113e66b880981ec6cf52c94->leave($__internal_813263d4b50f2587b65f25316d3a158f95a882645113e66b880981ec6cf52c94_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
