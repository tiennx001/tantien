<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_3d05c2139d0bd3f2f9a26b76e887dc27ae4183cd44b44b2dabd05cac459ccf6f extends Twig_Template
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
        $__internal_7e5f54ef1aa554ba7daca7bd8d507dee06b057b50861fe8063e3ad0dcb708c01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e5f54ef1aa554ba7daca7bd8d507dee06b057b50861fe8063e3ad0dcb708c01->enter($__internal_7e5f54ef1aa554ba7daca7bd8d507dee06b057b50861fe8063e3ad0dcb708c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_7e5f54ef1aa554ba7daca7bd8d507dee06b057b50861fe8063e3ad0dcb708c01->leave($__internal_7e5f54ef1aa554ba7daca7bd8d507dee06b057b50861fe8063e3ad0dcb708c01_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "D:\\Projects\\yourhome_v1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
