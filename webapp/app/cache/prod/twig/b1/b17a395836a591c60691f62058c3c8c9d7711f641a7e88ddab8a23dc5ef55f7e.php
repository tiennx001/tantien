<?php

/* @Front/Default/_products.html.twig */
class __TwigTemplate_a4f109922d8253c80de9d428a0ae7e2e19c23f0a3ae10ef229fd10fa7ce47a52 extends Twig_Template
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
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
            // line 2
            echo "<div class=\" pro-tp\">
    <div class=\"pl-lft\">
        <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_detail", array("slug" => $this->getAttribute($context["prod"], "slug", array()))), "html", null, true);
            echo "\"><img class=\"img-responsive\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('FrontBundle\Twig\TwigExtension')->getImageFilter($this->getAttribute($context["prod"], "imagePath", array()), (isset($context["webPath"]) ? $context["webPath"] : null)), "html", null, true);
            echo "\" alt=\"\"></a>
    </div>
    <div class=\"pl-rgt\">
        <h6><a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_detail", array("slug" => $this->getAttribute($context["prod"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "name", array()), "html", null, true);
            echo "</a></h6>
        <p><a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_detail", array("slug" => $this->getAttribute($context["prod"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serviceHelper"]) ? $context["serviceHelper"] : null), "getProductPrice", array(0 => $context["prod"]), "method"), "html", null, true);
            echo "</a></p>
    </div>
    <div class=\"clearfix\"></div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@Front/Default/_products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  35 => 7,  27 => 4,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Front/Default/_products.html.twig", "D:\\Projects\\yourhome_v1\\src\\FrontBundle\\Resources\\views\\Default\\_products.html.twig");
    }
}
