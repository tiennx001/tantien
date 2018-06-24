<?php

/* FrontBundle:Home:index.html.twig */
class __TwigTemplate_12fb32ff6df7521b4c33e31ecad38981c817f54f3227a6afb1c9f8daed55ce92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle:Default:index.html.twig", "FrontBundle:Home:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <!--content-->
    <div class=\"container\">
        <div class=\"cont\">
            <div class=\"content\">
                ";
        // line 8
        if (($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), 0, array(), "array", true, true) && (twig_length_filter($this->env, (isset($context["featureProducts"]) ? $context["featureProducts"] : null)) > 0))) {
            // line 9
            echo "                    <div class=\"content-top-bottom\">
                        <h2>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), 0, array(), "array"), "name", array()), "html", null, true);
            echo "</h2>
                        ";
            // line 11
            if ($this->getAttribute((isset($context["featureProducts"]) ? $context["featureProducts"] : null), 0, array(), "array", true, true)) {
                // line 12
                echo "                        <div class=\"col-md-6 men\">
                            <a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_detail", array("slug" => $this->getAttribute($this->getAttribute((isset($context["featureProducts"]) ? $context["featureProducts"] : null), 0, array(), "array"), "slug", array()))), "html", null, true);
                echo "\" class=\"b-link-stripe b-animate-go  thickbox\"><img class=\"img-responsive\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontBundle\Twig\TwigExtension')->getImageFilter($this->getAttribute($this->getAttribute((isset($context["featureProducts"]) ? $context["featureProducts"] : null), 0, array(), "array"), "imageShow", array()), (isset($context["webPath"]) ? $context["webPath"] : null)), "html", null, true);
                echo "\" alt=\"\">
                                <div class=\"b-wrapper\">
                                    <h3 class=\"b-animate b-from-top top-in   b-delay03 \">
                                        <span>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["featureProducts"]) ? $context["featureProducts"] : null), 0, array(), "array"), "name", array()), "html", null, true);
                echo "</span>
                                    </h3>
                                </div>
                            </a>

                        </div>
                        ";
            }
            // line 23
            echo "                        ";
            if ($this->getAttribute((isset($context["featureProducts"]) ? $context["featureProducts"] : null), 1, array(), "array", true, true)) {
                // line 24
                echo "                        <div class=\"col-md-6\">
                            <div class=\"col-md1 \">
                                <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_detail", array("slug" => $this->getAttribute($this->getAttribute((isset($context["featureProducts"]) ? $context["featureProducts"] : null), 1, array(), "array"), "slug", array()))), "html", null, true);
                echo "\" class=\"b-link-stripe b-animate-go  thickbox\"><img class=\"img-responsive\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontBundle\Twig\TwigExtension')->getImageFilter($this->getAttribute($this->getAttribute((isset($context["featureProducts"]) ? $context["featureProducts"] : null), 1, array(), "array"), "imageShow", array()), (isset($context["webPath"]) ? $context["webPath"] : null)), "html", null, true);
                echo "\" alt=\"\">
                                    <div class=\"b-wrapper\">
                                        <h3 class=\"b-animate b-from-top top-in1   b-delay03 \">
                                            <span>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["featureProducts"]) ? $context["featureProducts"] : null), 1, array(), "array"), "name", array()), "html", null, true);
                echo "</span>
                                        </h3>
                                    </div>
                                </a>

                            </div>
                            ";
                // line 35
                if ($this->getAttribute((isset($context["featureProducts"]) ? $context["featureProducts"] : null), 2, array(), "array", true, true)) {
                    // line 36
                    echo "                            <div class=\"col-md2\">
                                <div class=\"col-md-6 men1\">
                                    <a href=\"";
                    // line 38
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_detail", array("slug" => $this->getAttribute($this->getAttribute((isset($context["featureProducts"]) ? $context["featureProducts"] : null), 2, array(), "array"), "slug", array()))), "html", null, true);
                    echo "\" class=\"b-link-stripe b-animate-go  thickbox\"><img class=\"img-responsive\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('FrontBundle\Twig\TwigExtension')->getImageFilter($this->getAttribute($this->getAttribute((isset($context["featureProducts"]) ? $context["featureProducts"] : null), 2, array(), "array"), "imageShow", array()), (isset($context["webPath"]) ? $context["webPath"] : null)), "html", null, true);
                    echo "\" alt=\"\">
                                        <div class=\"b-wrapper\">
                                            <h3 class=\"b-animate b-from-top top-in2   b-delay03 \">
                                                <span>";
                    // line 41
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["featureProducts"]) ? $context["featureProducts"] : null), 2, array(), "array"), "name", array()), "html", null, true);
                    echo "</span>
                                            </h3>
                                        </div>
                                    </a>

                                </div>
                                ";
                    // line 47
                    if ($this->getAttribute((isset($context["featureProducts"]) ? $context["featureProducts"] : null), 3, array(), "array", true, true)) {
                        // line 48
                        echo "                                <div class=\"col-md-6 men2\">
                                    <a href=\"";
                        // line 49
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_detail", array("slug" => $this->getAttribute($this->getAttribute((isset($context["featureProducts"]) ? $context["featureProducts"] : null), 3, array(), "array"), "slug", array()))), "html", null, true);
                        echo "\" class=\"b-link-stripe b-animate-go  thickbox\"><img class=\"img-responsive\" src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('FrontBundle\Twig\TwigExtension')->getImageFilter($this->getAttribute($this->getAttribute((isset($context["featureProducts"]) ? $context["featureProducts"] : null), 3, array(), "array"), "imageShow", array()), (isset($context["webPath"]) ? $context["webPath"] : null)), "html", null, true);
                        echo "\" alt=\"\">
                                        <div class=\"b-wrapper\">
                                            <h3 class=\"b-animate b-from-top top-in2   b-delay03 \">
                                                <span>";
                        // line 52
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["featureProducts"]) ? $context["featureProducts"] : null), 3, array(), "array"), "name", array()), "html", null, true);
                        echo "</span>
                                            </h3>
                                        </div>
                                    </a>

                                </div>
                                ";
                    }
                    // line 59
                    echo "                                <div class=\"clearfix\"> </div>
                            </div>
                            ";
                }
                // line 62
                echo "                        </div>
                        ";
            }
            // line 64
            echo "                        <div class=\"clearfix\"> </div>
                    </div>
                ";
        }
        // line 67
        echo "
                ";
        // line 68
        if ($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), 1, array(), "array", true, true)) {
            // line 69
            echo "                    <div class=\"content-top\">
                        <h1>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), 1, array(), "array"), "name", array()), "html", null, true);
            echo "</h1>
                        <div class=\"grid-in\">
                            ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["newProducts"]) ? $context["newProducts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 73
                echo "                            <div class=\"col-md-3 grid-top simpleCart_shelfItem\">
                                <a href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_detail", array("slug" => $this->getAttribute($context["product"], "slug", array()))), "html", null, true);
                echo "\" class=\"b-link-stripe b-animate-go  thickbox\"><img class=\"img-responsive\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontBundle\Twig\TwigExtension')->getImageFilter($this->getAttribute($context["product"], "imageShow", array()), (isset($context["webPath"]) ? $context["webPath"] : null)), "html", null, true);
                echo "\" alt=\"\">
                                    <div class=\"b-wrapper\">
                                        <h3 class=\"b-animate b-from-left    b-delay03 \">
                                            <span>";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
                echo "</span>

                                        </h3>
                                    </div>
                                </a>
                                <p><a href=\"";
                // line 82
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_detail", array("slug" => $this->getAttribute($context["product"], "slug", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
                echo "</a></p>
                                <a href=\"#\" class=\"item_add\"><p class=\"number item_price\"><i> </i>";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serviceHelper"]) ? $context["serviceHelper"] : null), "getProductPrice", array(0 => $context["product"]), "method"), "html", null, true);
                echo "</p></a>
                            </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "                            <div class=\"clearfix\"> </div>
                        </div>
                    </div>
                ";
        }
        // line 90
        echo "
                ";
        // line 91
        if ($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), 2, array(), "array", true, true)) {
            // line 92
            echo "                    <div class=\"content-top\">
                        <h1>";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), 2, array(), "array"), "name", array()), "html", null, true);
            echo "</h1>
                        <div class=\"grid-in\">
                            ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["creativeProducts"]) ? $context["creativeProducts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 96
                echo "                                <div class=\"col-md-3 grid-top simpleCart_shelfItem\">
                                    <a href=\"";
                // line 97
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_detail", array("slug" => $this->getAttribute($context["product"], "slug", array()))), "html", null, true);
                echo "\" class=\"b-link-stripe b-animate-go  thickbox\"><img class=\"img-responsive\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontBundle\Twig\TwigExtension')->getImageFilter($this->getAttribute($context["product"], "imageShow", array()), (isset($context["webPath"]) ? $context["webPath"] : null)), "html", null, true);
                echo "\" alt=\"\">
                                        <div class=\"b-wrapper\">
                                            <h3 class=\"b-animate b-from-left    b-delay03 \">
                                                <span>";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
                echo "</span>

                                            </h3>
                                        </div>
                                    </a>
                                    <p><a href=\"";
                // line 105
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_detail", array("slug" => $this->getAttribute($context["product"], "slug", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
                echo "</a></p>
                                    <a href=\"#\" class=\"item_add\"><p class=\"number item_price\"><i> </i>";
                // line 106
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serviceHelper"]) ? $context["serviceHelper"] : null), "getProductPrice", array(0 => $context["product"]), "method"), "html", null, true);
                echo "</p></a>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "                            <div class=\"clearfix\"> </div>
                        </div>
                    </div>
                ";
        }
        // line 113
        echo "            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FrontBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 113,  261 => 109,  252 => 106,  246 => 105,  238 => 100,  230 => 97,  227 => 96,  223 => 95,  218 => 93,  215 => 92,  213 => 91,  210 => 90,  204 => 86,  195 => 83,  189 => 82,  181 => 77,  173 => 74,  170 => 73,  166 => 72,  161 => 70,  158 => 69,  156 => 68,  153 => 67,  148 => 64,  144 => 62,  139 => 59,  129 => 52,  121 => 49,  118 => 48,  116 => 47,  107 => 41,  99 => 38,  95 => 36,  93 => 35,  84 => 29,  76 => 26,  72 => 24,  69 => 23,  59 => 16,  51 => 13,  48 => 12,  46 => 11,  42 => 10,  39 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle:Home:index.html.twig", "D:\\Projects\\yourhome_v1\\src\\FrontBundle/Resources/views/Home/index.html.twig");
    }
}
