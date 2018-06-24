<?php

/* @App/stokelog/_status_name.html.twig */
class __TwigTemplate_40c9990a946fa388432136fd836210801313ac20a3f07eecd43dc8b4f1ccdb8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig", "@App/stokelog/_status_name.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_field($context, array $blocks = array())
    {
        // line 3
        echo "    <div>
        ";
        // line 4
        if ( !(null === $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "status", array()))) {
            // line 5
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "statusName", array()), "html", null, true);
            echo "
        ";
        }
        // line 7
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "@App/stokelog/_status_name.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 7,  36 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/stokelog/_status_name.html.twig", "D:\\Projects\\yourhome_v1\\src\\AppBundle\\Resources\\views\\stokelog\\_status_name.html.twig");
    }
}
