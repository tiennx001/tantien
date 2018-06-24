<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_08bae31b39db76a79743026032b86ab33e16f1cd73b294b6fcffb652256b3114 extends Twig_Template
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
        $__internal_a9c9ac04499e5660a3f01dc52188e675a0fea7f9329e2bf2c42e725deb3544db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9c9ac04499e5660a3f01dc52188e675a0fea7f9329e2bf2c42e725deb3544db->enter($__internal_a9c9ac04499e5660a3f01dc52188e675a0fea7f9329e2bf2c42e725deb3544db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_a9c9ac04499e5660a3f01dc52188e675a0fea7f9329e2bf2c42e725deb3544db->leave($__internal_a9c9ac04499e5660a3f01dc52188e675a0fea7f9329e2bf2c42e725deb3544db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "D:\\Projects\\yourhome_v1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
