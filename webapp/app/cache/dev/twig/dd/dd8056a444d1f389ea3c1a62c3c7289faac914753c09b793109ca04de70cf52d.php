<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_4830a357d44e36120fe1309662045151b41a568d3c832ef7d92ff03dd52307b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce3da59a9e4ea047c757edd4c8ab6e1e391cee0a9310921d65a2fe5a64a68ee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce3da59a9e4ea047c757edd4c8ab6e1e391cee0a9310921d65a2fe5a64a68ee1->enter($__internal_ce3da59a9e4ea047c757edd4c8ab6e1e391cee0a9310921d65a2fe5a64a68ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_ce3da59a9e4ea047c757edd4c8ab6e1e391cee0a9310921d65a2fe5a64a68ee1->leave($__internal_ce3da59a9e4ea047c757edd4c8ab6e1e391cee0a9310921d65a2fe5a64a68ee1_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Resources\\views\\knp_menu_base.html.twig");
    }
}
