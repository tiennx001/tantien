<?php

/* FrontBundle:Default:index.html.twig */
class __TwigTemplate_e091044ae7ecd79ede5122faa0e76c1f3d3e1e6bb7d89c59183c3d1e2b2cacd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bdff74c1c845439e6aa84910d9ed87ee753b5ded3c1adac2b2b563b21d3e4a5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdff74c1c845439e6aa84910d9ed87ee753b5ded3c1adac2b2b563b21d3e4a5e->enter($__internal_bdff74c1c845439e6aa84910d9ed87ee753b5ded3c1adac2b2b563b21d3e4a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:index.html.twig"));

        // line 1
        echo "<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <title>An eCommerce Furniture Website | Your Home</title>
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Custom Theme files -->
    <!--theme-style-->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <!--//theme-style-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"keywords\" content=\"Noi that, ban ghe, noi that gia re, noi that sang tao, noi that gia dinh...\" />
    <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--fonts-->
    <link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'><!--//fonts-->
    <!-- start menu -->
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/memenu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/memenu.js"), "html", null, true);
        echo "\"></script>
    <script>\$(document).ready(function(){\$(\".memenu\").memenu();});</script>
    <script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/update.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 31
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/responsiveslides.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/update.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
</head>
<body>

";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FrontBundle:Default:header"));
        echo "

";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FrontBundle:Default:banner"));
        echo "

";
        // line 40
        $this->displayBlock('content', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FrontBundle:Default:footer"));
        echo "

</body>
</html>";
        
        $__internal_bdff74c1c845439e6aa84910d9ed87ee753b5ded3c1adac2b2b563b21d3e4a5e->leave($__internal_bdff74c1c845439e6aa84910d9ed87ee753b5ded3c1adac2b2b563b21d3e4a5e_prof);

    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
        $__internal_9d565dcfc11c4aaefe75dc888877a57061a4cc7165ff60450c33cd71bcc87aec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d565dcfc11c4aaefe75dc888877a57061a4cc7165ff60450c33cd71bcc87aec->enter($__internal_9d565dcfc11c4aaefe75dc888877a57061a4cc7165ff60450c33cd71bcc87aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 41
        echo "
";
        
        $__internal_9d565dcfc11c4aaefe75dc888877a57061a4cc7165ff60450c33cd71bcc87aec->leave($__internal_9d565dcfc11c4aaefe75dc888877a57061a4cc7165ff60450c33cd71bcc87aec_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 41,  110 => 40,  99 => 44,  96 => 43,  94 => 40,  89 => 38,  84 => 36,  77 => 32,  72 => 31,  68 => 29,  63 => 27,  59 => 26,  46 => 16,  40 => 13,  35 => 11,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <title>An eCommerce Furniture Website | Your Home</title>
    <link href=\"{{ asset('bundles/app/css/bootstrap.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"{{ asset('bundles/app/js/jquery-1.11.2.min.js') }}\"></script>
    <!-- Custom Theme files -->
    <!--theme-style-->
    <link href=\"{{ asset('bundles/front/css/style.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <!--//theme-style-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"keywords\" content=\"Noi that, ban ghe, noi that gia re, noi that sang tao, noi that gia dinh...\" />
    <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--fonts-->
    <link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'><!--//fonts-->
    <!-- start menu -->
    <link href=\"{{ asset('bundles/front/css/memenu.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <script type=\"text/javascript\" src=\"{{ asset('bundles/front/js/memenu.js') }}\"></script>
    <script>\$(document).ready(function(){\$(\".memenu\").memenu();});</script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/front/js/update.js') }}\"></script>
    {#<script src=\"js/simpleCart.min.js\"> </script>#}
    <link href=\"{{ asset('bundles/front/css/responsiveslides.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link href=\"{{ asset('bundles/front/css/update.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
</head>
<body>

{{ render(controller('FrontBundle:Default:header')) }}

{{ render(controller('FrontBundle:Default:banner')) }}

{% block content %}

{% endblock %}

{{ render(controller('FrontBundle:Default:footer')) }}

</body>
</html>", "FrontBundle:Default:index.html.twig", "D:\\Projects\\yourhome_v1\\src\\FrontBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
