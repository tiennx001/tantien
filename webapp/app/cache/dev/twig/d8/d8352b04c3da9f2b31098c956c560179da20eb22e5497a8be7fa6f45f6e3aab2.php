<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_ecef0eedda116113e9cbed3b1559bd08ea91974afe36423cb6e93a2a79e0e0fd extends Twig_Template
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
        $__internal_35cf0476bfbc30bd8b89434bb596e5f725496e54f5b68afbcbcbef92ab35cf67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35cf0476bfbc30bd8b89434bb596e5f725496e54f5b68afbcbcbef92ab35cf67->enter($__internal_35cf0476bfbc30bd8b89434bb596e5f725496e54f5b68afbcbcbef92ab35cf67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_35cf0476bfbc30bd8b89434bb596e5f725496e54f5b68afbcbcbef92ab35cf67->leave($__internal_35cf0476bfbc30bd8b89434bb596e5f725496e54f5b68afbcbcbef92ab35cf67_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "D:\\Projects\\yourhome_v1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
