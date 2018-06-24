<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_c715e4b4c5fe540e59645f1888d8835dc2187facf575ac202c0979dd476ff3e0 extends Twig_Template
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
        $__internal_05ce11ed1f96a4a1cbeae9f04bf7883e035b29ef6fd2d78b188f07e63b610454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05ce11ed1f96a4a1cbeae9f04bf7883e035b29ef6fd2d78b188f07e63b610454->enter($__internal_05ce11ed1f96a4a1cbeae9f04bf7883e035b29ef6fd2d78b188f07e63b610454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_05ce11ed1f96a4a1cbeae9f04bf7883e035b29ef6fd2d78b188f07e63b610454->leave($__internal_05ce11ed1f96a4a1cbeae9f04bf7883e035b29ef6fd2d78b188f07e63b610454_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "D:\\Projects\\yourhome_v1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
