<?php

/* AppBundle:product:_image_path.html.twig */
class __TwigTemplate_a3be8f45f1684cca71f62d77e3063b827009ad168fe141ea603fff4cd8d318fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig", "AppBundle:product:_image_path.html.twig", 1);
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
        if (($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "imagePath", array()) != null)) {
            // line 5
            echo "            <img width=\"100\" height=\"100\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "imagePath", array()), "html", null, true);
            echo "\">
        ";
        } else {
            // line 7
            echo "            <span>No picture</span>
        ";
        }
        // line 9
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:product:_image_path.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 9,  42 => 7,  36 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:product:_image_path.html.twig", "D:\\Projects\\yourhome_v1\\src\\AppBundle/Resources/views/product/_image_path.html.twig");
    }
}
