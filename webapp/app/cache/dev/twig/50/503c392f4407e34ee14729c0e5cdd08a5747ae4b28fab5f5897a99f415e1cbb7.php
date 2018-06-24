<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_5c0c3b59022031a55a35855186e42c156b7251ea89860b5e39dd1d63e05e23fb extends Twig_Template
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
        $__internal_c7357ed572fbbdac96ff70cbcd58be9e10b84ed22bb2e70fb6f6bb074c35fe97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7357ed572fbbdac96ff70cbcd58be9e10b84ed22bb2e70fb6f6bb074c35fe97->enter($__internal_c7357ed572fbbdac96ff70cbcd58be9e10b84ed22bb2e70fb6f6bb074c35fe97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c7357ed572fbbdac96ff70cbcd58be9e10b84ed22bb2e70fb6f6bb074c35fe97->leave($__internal_c7357ed572fbbdac96ff70cbcd58be9e10b84ed22bb2e70fb6f6bb074c35fe97_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f0692e8beba0dadc27c59f3537bea6918a0c0aeb01a2e1c109a4a68dee62dba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0692e8beba0dadc27c59f3537bea6918a0c0aeb01a2e1c109a4a68dee62dba6->enter($__internal_f0692e8beba0dadc27c59f3537bea6918a0c0aeb01a2e1c109a4a68dee62dba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f0692e8beba0dadc27c59f3537bea6918a0c0aeb01a2e1c109a4a68dee62dba6->leave($__internal_f0692e8beba0dadc27c59f3537bea6918a0c0aeb01a2e1c109a4a68dee62dba6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
