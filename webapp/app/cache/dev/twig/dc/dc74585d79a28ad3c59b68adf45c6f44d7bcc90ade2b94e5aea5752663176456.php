<?php

/* @App/stokelog/_custom_create_action.html.twig */
class __TwigTemplate_68dd4aa3eab53abf4677d0562d28d90d5ebe058d6632d6961f3cdcdc04c2719f extends Twig_Template
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
        $__internal_175b2d69798b7ae63c65d70e300d65c5802acf46bc49acc267ad7da827ec65cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_175b2d69798b7ae63c65d70e300d65c5802acf46bc49acc267ad7da827ec65cd->enter($__internal_175b2d69798b7ae63c65d70e300d65c5802acf46bc49acc267ad7da827ec65cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/stokelog/_custom_create_action.html.twig"));

        // line 1
        echo "<ul class=\"nav navbar-nav navbar-right\">
    <li>
        <a class=\"btn btn-link btn-flat\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create", 1 => array()), "method"), "html", null, true);
        echo "\">
            <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>
            ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nhập kho", array(), "message"), "html", null, true);
        echo "
        </a>
    </li>
</ul>";
        
        $__internal_175b2d69798b7ae63c65d70e300d65c5802acf46bc49acc267ad7da827ec65cd->leave($__internal_175b2d69798b7ae63c65d70e300d65c5802acf46bc49acc267ad7da827ec65cd_prof);

    }

    public function getTemplateName()
    {
        return "@App/stokelog/_custom_create_action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"nav navbar-nav navbar-right\">
    <li>
        <a class=\"btn btn-link btn-flat\" href=\"{{ admin.generateUrl('create', {}) }}\">
            <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>
            {{ 'Nhập kho'|trans({}, 'message') }}
        </a>
    </li>
</ul>", "@App/stokelog/_custom_create_action.html.twig", "D:\\Projects\\yourhome_v1\\src\\AppBundle\\Resources\\views\\stokelog\\_custom_create_action.html.twig");
    }
}
