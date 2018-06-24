<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_eddcd8b309f8ec1beb67215893104e0ab3100a4949dc3b2d0ccf80f909538b14 extends Twig_Template
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
        $__internal_deb9c3573add098abe6eb9ed9a4b51063c2b025335b76e6232cf66bd8a1dd16b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deb9c3573add098abe6eb9ed9a4b51063c2b025335b76e6232cf66bd8a1dd16b->enter($__internal_deb9c3573add098abe6eb9ed9a4b51063c2b025335b76e6232cf66bd8a1dd16b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_deb9c3573add098abe6eb9ed9a4b51063c2b025335b76e6232cf66bd8a1dd16b->leave($__internal_deb9c3573add098abe6eb9ed9a4b51063c2b025335b76e6232cf66bd8a1dd16b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "D:\\Projects\\yourhome_v1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
