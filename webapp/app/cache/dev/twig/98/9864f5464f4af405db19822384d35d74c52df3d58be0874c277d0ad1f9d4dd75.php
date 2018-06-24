<?php

/* ::base.html.twig */
class __TwigTemplate_e30ee0e1fff5aced83b9d12ec5f0382b03bd33a2edf6402e7d5842a353155636 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b97ff37faf2c79104667ea1ce92528442c89f7e801bb415b7a6c766204b95a59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b97ff37faf2c79104667ea1ce92528442c89f7e801bb415b7a6c766204b95a59->enter($__internal_b97ff37faf2c79104667ea1ce92528442c89f7e801bb415b7a6c766204b95a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_b97ff37faf2c79104667ea1ce92528442c89f7e801bb415b7a6c766204b95a59->leave($__internal_b97ff37faf2c79104667ea1ce92528442c89f7e801bb415b7a6c766204b95a59_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_50f87034586f0de6296bb58eb42372dff76da2e608ea56d11ae4cb61462627f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50f87034586f0de6296bb58eb42372dff76da2e608ea56d11ae4cb61462627f3->enter($__internal_50f87034586f0de6296bb58eb42372dff76da2e608ea56d11ae4cb61462627f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_50f87034586f0de6296bb58eb42372dff76da2e608ea56d11ae4cb61462627f3->leave($__internal_50f87034586f0de6296bb58eb42372dff76da2e608ea56d11ae4cb61462627f3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c4fb59d840979b06936f9a1115764aef28b9456f6d22420cea8b09297bf2101c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4fb59d840979b06936f9a1115764aef28b9456f6d22420cea8b09297bf2101c->enter($__internal_c4fb59d840979b06936f9a1115764aef28b9456f6d22420cea8b09297bf2101c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c4fb59d840979b06936f9a1115764aef28b9456f6d22420cea8b09297bf2101c->leave($__internal_c4fb59d840979b06936f9a1115764aef28b9456f6d22420cea8b09297bf2101c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3177376c4d8cc44e89b7f00c1915df2e17b8a232ecc8d6b0c54920220fb42f0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3177376c4d8cc44e89b7f00c1915df2e17b8a232ecc8d6b0c54920220fb42f0e->enter($__internal_3177376c4d8cc44e89b7f00c1915df2e17b8a232ecc8d6b0c54920220fb42f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3177376c4d8cc44e89b7f00c1915df2e17b8a232ecc8d6b0c54920220fb42f0e->leave($__internal_3177376c4d8cc44e89b7f00c1915df2e17b8a232ecc8d6b0c54920220fb42f0e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_289de9ca155d64b77efb2279af673dcd60e844afbadfd46ae1a3aabd2ff74874 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_289de9ca155d64b77efb2279af673dcd60e844afbadfd46ae1a3aabd2ff74874->enter($__internal_289de9ca155d64b77efb2279af673dcd60e844afbadfd46ae1a3aabd2ff74874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_289de9ca155d64b77efb2279af673dcd60e844afbadfd46ae1a3aabd2ff74874->leave($__internal_289de9ca155d64b77efb2279af673dcd60e844afbadfd46ae1a3aabd2ff74874_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "D:\\Projects\\yourhome_v1\\app/Resources\\views/base.html.twig");
    }
}
