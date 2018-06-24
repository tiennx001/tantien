<?php

/* AppBundle:stokelog:_custom_create_action.html.twig */
class __TwigTemplate_98a1b61d85909c3fe82a3233aeb864a6289301fafbc58b620398c5d053f83740 extends Twig_Template
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
        echo "<ul class=\"nav navbar-nav navbar-right\">
    <li>
        <a class=\"btn btn-link btn-flat\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "create", 1 => array()), "method"), "html", null, true);
        echo "\">
            <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>
            ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nhập kho", array(), "message"), "html", null, true);
        echo "
        </a>
    </li>
</ul>";
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
        return array (  28 => 5,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:stokelog:_custom_create_action.html.twig", "D:\\Projects\\yourhome_v1\\src\\AppBundle/Resources/views/stokelog/_custom_create_action.html.twig");
    }
}
