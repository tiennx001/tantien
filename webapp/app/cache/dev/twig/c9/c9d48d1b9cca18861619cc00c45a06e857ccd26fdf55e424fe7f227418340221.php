<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_67e270a283ba4b0cd16ce05ce0141489c0aa9671615faa41013f3bd098790fa5 extends Twig_Template
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
        $__internal_dfbefd82eec64652901bf6effb7cf7d968577e033e2ef65645dc5757ed4e0e3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfbefd82eec64652901bf6effb7cf7d968577e033e2ef65645dc5757ed4e0e3f->enter($__internal_dfbefd82eec64652901bf6effb7cf7d968577e033e2ef65645dc5757ed4e0e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_dfbefd82eec64652901bf6effb7cf7d968577e033e2ef65645dc5757ed4e0e3f->leave($__internal_dfbefd82eec64652901bf6effb7cf7d968577e033e2ef65645dc5757ed4e0e3f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "D:\\Projects\\yourhome_v1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
