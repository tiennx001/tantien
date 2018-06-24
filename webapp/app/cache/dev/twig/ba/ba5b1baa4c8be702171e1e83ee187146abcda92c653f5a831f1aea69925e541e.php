<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_bd7b17716e313e61036ceb78f371d41b1e5f698a1065c777a12d1e81cb3a8510 extends Twig_Template
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
        $__internal_480ca3766c24e8c92f7a5c16faabd08c08272dee0f2606e12c1250c844df2347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_480ca3766c24e8c92f7a5c16faabd08c08272dee0f2606e12c1250c844df2347->enter($__internal_480ca3766c24e8c92f7a5c16faabd08c08272dee0f2606e12c1250c844df2347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_480ca3766c24e8c92f7a5c16faabd08c08272dee0f2606e12c1250c844df2347->leave($__internal_480ca3766c24e8c92f7a5c16faabd08c08272dee0f2606e12c1250c844df2347_prof);

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
