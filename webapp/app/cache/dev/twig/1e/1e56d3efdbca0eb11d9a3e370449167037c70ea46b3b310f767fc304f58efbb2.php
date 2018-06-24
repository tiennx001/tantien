<?php

/* FrontBundle:Default:_products.html.twig */
class __TwigTemplate_717106376f401e8cf86908ab6260ae0989d44d6b0792eb9f3ddb35df3a15b435 extends Twig_Template
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
        $__internal_1adeccaa1998be7773ed7c45d5ce3e8b40e6b8b8ed4dbc67be3b3778c400561f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1adeccaa1998be7773ed7c45d5ce3e8b40e6b8b8ed4dbc67be3b3778c400561f->enter($__internal_1adeccaa1998be7773ed7c45d5ce3e8b40e6b8b8ed4dbc67be3b3778c400561f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:_products.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
            // line 2
            echo "<div class=\" pro-tp\">
    <div class=\"pl-lft\">
        <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_detail", array("slug" => $this->getAttribute($context["prod"], "slug", array()))), "html", null, true);
            echo "\"><img class=\"img-responsive\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('FrontBundle\Twig\TwigExtension')->getImageFilter($this->getAttribute($context["prod"], "imagePath", array()), (isset($context["webPath"]) ? $context["webPath"] : $this->getContext($context, "webPath"))), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serviceHelper"]) ? $context["serviceHelper"] : $this->getContext($context, "serviceHelper")), "getProductPrice", array(0 => $context["prod"]), "method"), "html", null, true);
            echo "</a></p>
    </div>
    <div class=\"clearfix\"></div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_1adeccaa1998be7773ed7c45d5ce3e8b40e6b8b8ed4dbc67be3b3778c400561f->leave($__internal_1adeccaa1998be7773ed7c45d5ce3e8b40e6b8b8ed4dbc67be3b3778c400561f_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:_products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  38 => 7,  30 => 4,  26 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for prod in products %}
<div class=\" pro-tp\">
    <div class=\"pl-lft\">
        <a href=\"{{ path('product_detail', {slug: prod.slug}) }}\"><img class=\"img-responsive\" src=\"{{ prod.imagePath|getImage(webPath) }}\" alt=\"\"></a>
    </div>
    <div class=\"pl-rgt\">
        <h6><a href=\"{{ path('product_detail', {slug: prod.slug}) }}\">{{ prod.name }}</a></h6>
        <p><a href=\"{{ path('product_detail', {slug: prod.slug}) }}\">{{ serviceHelper.getProductPrice(prod) }}</a></p>
    </div>
    <div class=\"clearfix\"></div>
</div>
{% endfor %}", "FrontBundle:Default:_products.html.twig", "D:\\Projects\\yourhome_v1\\src\\FrontBundle/Resources/views/Default/_products.html.twig");
    }
}