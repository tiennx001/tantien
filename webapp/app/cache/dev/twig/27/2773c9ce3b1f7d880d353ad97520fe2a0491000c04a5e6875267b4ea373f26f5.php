<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_a1cc220ac589fffa4a273d5eef56fc64e648ef1e7657f41644119ed9a80663e4 extends Twig_Template
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
        $__internal_67fd04d4570ca99bc68c0d423855ba1d43ebd608a4bcb0f969475db085ca3867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67fd04d4570ca99bc68c0d423855ba1d43ebd608a4bcb0f969475db085ca3867->enter($__internal_67fd04d4570ca99bc68c0d423855ba1d43ebd608a4bcb0f969475db085ca3867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_67fd04d4570ca99bc68c0d423855ba1d43ebd608a4bcb0f969475db085ca3867->leave($__internal_67fd04d4570ca99bc68c0d423855ba1d43ebd608a4bcb0f969475db085ca3867_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "D:\\Projects\\yourhome_v1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
