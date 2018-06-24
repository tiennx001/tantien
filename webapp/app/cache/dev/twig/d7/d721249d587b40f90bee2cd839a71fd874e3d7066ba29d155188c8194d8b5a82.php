<?php

/* AppBundle:stokelog:_custom_create_action.html.twig */
class __TwigTemplate_ecef747a126a928fca9aafb38b2c690f85b61e44722124da578d302f8cd9b83a extends Twig_Template
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
        $__internal_34c65acd3e6c216355f2d725bb33dd97290be5de260d6ca9a2da8b7a446d3229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34c65acd3e6c216355f2d725bb33dd97290be5de260d6ca9a2da8b7a446d3229->enter($__internal_34c65acd3e6c216355f2d725bb33dd97290be5de260d6ca9a2da8b7a446d3229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:stokelog:_custom_create_action.html.twig"));

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
        
        $__internal_34c65acd3e6c216355f2d725bb33dd97290be5de260d6ca9a2da8b7a446d3229->leave($__internal_34c65acd3e6c216355f2d725bb33dd97290be5de260d6ca9a2da8b7a446d3229_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:stokelog:_custom_create_action.html.twig";
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
</ul>", "AppBundle:stokelog:_custom_create_action.html.twig", "D:\\Projects\\yourhome_v1\\src\\AppBundle/Resources/views/stokelog/_custom_create_action.html.twig");
    }
}
