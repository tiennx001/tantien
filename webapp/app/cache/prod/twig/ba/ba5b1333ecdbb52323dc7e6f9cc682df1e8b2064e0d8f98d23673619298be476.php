<?php

/* FrontBundle:Detail:index.html.twig */
class __TwigTemplate_6457c3daf54479aa9bb4e2578aac6d3bce852ac3472924961562eed10f0b1682 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle:Default:index.html.twig", "FrontBundle:Detail:index.html.twig", 1);
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
        echo "<!-- grow -->
<div class=\"grow\">
    <div class=\"container\">
        <h2>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array()), "html", null, true);
        echo "</h2>
    </div>
</div>
<!-- grow -->
<div class=\"product\">
    <div class=\"container\">

        <div class=\"product-price1\">
            <div class=\"top-sing\">
                <div class=\"col-md-7 single-top\">
                    <script defer src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/imagezoom.js"), "html", null, true);
        echo "\"></script>
                    <!-- FlexSlider -->
                    <script defer src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
                    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/flexslider.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />

                    ";
        // line 22
        $context["key"] = 0;
        // line 23
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productColors"]) ? $context["productColors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pColor"]) {
            // line 24
            echo "                        ";
            if (($this->getAttribute($context["pColor"], "status", array()) == 1)) {
                // line 25
                echo "                        <div class=\"flexslider";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo " thumb-slider\" data-value=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" ";
                if (((isset($context["key"]) ? $context["key"] : null) != 0)) {
                    echo " style=\"display: none\" ";
                }
                echo ">
                            <ul class=\"slides\">
                                ";
                // line 27
                if ((twig_length_filter($this->env, $this->env->getExtension('FrontBundle\Twig\TwigExtension')->jsonDecodeFilter($this->getAttribute($context["pColor"], "images", array()))) > 0)) {
                    // line 28
                    echo "                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->env->getExtension('FrontBundle\Twig\TwigExtension')->jsonDecodeFilter($this->getAttribute($context["pColor"], "images", array())));
                    foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                        // line 29
                        echo "                                    <li data-thumb=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('FrontBundle\Twig\TwigExtension')->getImageFilter($context["img"], (isset($context["webPath"]) ? $context["webPath"] : null)), "html", null, true);
                        echo "\">
                                        <div class=\"thumb-image\"> <img src=\"";
                        // line 30
                        echo twig_escape_filter($this->env, $this->env->getExtension('FrontBundle\Twig\TwigExtension')->getImageFilter($context["img"], (isset($context["webPath"]) ? $context["webPath"] : null)), "html", null, true);
                        echo "\" data-imagezoom=\"true\" class=\"img-responsive\"> </div>
                                    </li>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 33
                    echo "                                ";
                }
                // line 34
                echo "                            </ul>
                        </div>

                        <div class=\"clearfix\"> </div>
                        <!-- slide -->

                        <script>
                            // Can also be used with \$(document).ready()
                            \$(window).load(function() {
                                \$('.flexslider0').flexslider({
                                    animation: \"slide\",
                                    controlNav: \"thumbnails\"
                                });
                            });
                        </script>
                            ";
                // line 49
                $context["key"] = ((isset($context["key"]) ? $context["key"] : null) + 1);
                // line 50
                echo "                        ";
            }
            // line 51
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pColor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                </div>
                <div class=\"col-md-5 single-top-in simpleCart_shelfItem\">
                    <div class=\"single-para \">
                        <h4>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array()), "html", null, true);
        echo "</h4>
                        <div class=\"star-on\">

                            ";
        // line 59
        echo "                                ";
        // line 60
        echo "                            ";
        // line 61
        echo "                            <div class=\"clearfix\"> </div>
                        </div>

                        ";
        // line 64
        $context["key"] = 0;
        // line 65
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productColors"]) ? $context["productColors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pColor"]) {
            // line 66
            echo "                            ";
            if (($this->getAttribute($context["pColor"], "status", array()) == 1)) {
                // line 67
                echo "                                <h5 class=\"item_price\" data-value=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" ";
                if (((isset($context["key"]) ? $context["key"] : null) != 0)) {
                    echo " style=\"display: none\" ";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["pColor"], "price", array()), 0, ",", "."), "html", null, true);
                echo "đ</h5>
                                ";
                // line 68
                $context["key"] = ((isset($context["key"]) ? $context["key"] : null) + 1);
                // line 69
                echo "                            ";
            }
            // line 70
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pColor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "
                        <p>";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description", array()), "html", null, true);
        echo "</p>
                        <div class=\"available\">
                            <ul>
                                <li>Color
                                    <select onchange=\"changeColorEffect(this)\">
                                    ";
        // line 77
        $context["key"] = 0;
        // line 78
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productColors"]) ? $context["productColors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pColor"]) {
            // line 79
            echo "                                        ";
            if (($this->getAttribute($context["pColor"], "status", array()) == 1)) {
                // line 80
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pColor"], "color", array()), "name", array()), "html", null, true);
                echo "</option>
                                            ";
                // line 81
                $context["key"] = ((isset($context["key"]) ? $context["key"] : null) + 1);
                // line 82
                echo "                                        ";
            }
            // line 83
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pColor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                                    </select>
                                </li>
                                ";
        // line 87
        echo "                                        ";
        // line 88
        echo "                                        ";
        // line 89
        echo "                                        ";
        // line 90
        echo "                                        ";
        // line 91
        echo "                                        ";
        // line 92
        echo "                                    ";
        // line 93
        echo "                                <div class=\"clearfix\"> </div>
                            </ul>
                        </div>

                        <a href=\"#\" class=\"add-cart item_add\">ADD TO CART</a>

                    </div>
                </div>
                <div class=\"clearfix\"> </div>
            </div>
            <!---->

            <div class=\"container\">
                ";
        // line 106
        echo $this->env->getExtension('FrontBundle\Twig\TwigExtension')->purifierFilter($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "content", array()));
        echo "
            </div>

            <div style=\"display: block; height: 20px\"></div>

            <div class=\" bottom-product\">
                ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["relatedProducts"]) ? $context["relatedProducts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["relatedProd"]) {
            // line 113
            echo "                <div class=\"col-md-4 bottom-cd simpleCart_shelfItem\">
                    <div class=\"product-at \">
                        <a href=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_detail", array("slug" => $this->getAttribute($context["relatedProd"], "slug", array()))), "html", null, true);
            echo "\"><img class=\"img-responsive\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('FrontBundle\Twig\TwigExtension')->getImageFilter($this->getAttribute($context["relatedProd"], "imagePath", array()), (isset($context["webPath"]) ? $context["webPath"] : null)), "html", null, true);
            echo "\" alt=\"\">
                            <div class=\"pro-grid\">
                                <span class=\"buy-in\">Buy Now</span>
                            </div>
                        </a>
                    </div>
                    <p class=\"tun\"><span>";
            // line 121
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($context["relatedProd"], "description", array())), "html", null, true);
            echo "</span><br>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["relatedProd"], "name", array()), "html", null, true);
            echo "</p>
                    <div class=\"ca-rt\">
                        <a href=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_detail", array("slug" => $this->getAttribute($context["relatedProd"], "slug", array()))), "html", null, true);
            echo "\" class=\"item_add\"><p class=\"number item_price\"><i> </i>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serviceHelper"]) ? $context["serviceHelper"] : null), "getProductPrice", array(0 => $context["relatedProd"]), "method"), "html", null, true);
            echo "</p></a>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['relatedProd'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "                <div class=\"clearfix\"> </div>
            </div>
        </div>

        <div class=\"clearfix\"> </div>
    </div>
</div>
<!--//content-->
";
    }

    public function getTemplateName()
    {
        return "FrontBundle:Detail:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 127,  294 => 123,  287 => 121,  276 => 115,  272 => 113,  268 => 112,  259 => 106,  244 => 93,  242 => 92,  240 => 91,  238 => 90,  236 => 89,  234 => 88,  232 => 87,  228 => 84,  222 => 83,  219 => 82,  217 => 81,  210 => 80,  207 => 79,  202 => 78,  200 => 77,  192 => 72,  189 => 71,  183 => 70,  180 => 69,  178 => 68,  167 => 67,  164 => 66,  159 => 65,  157 => 64,  152 => 61,  150 => 60,  148 => 59,  142 => 55,  137 => 52,  131 => 51,  128 => 50,  126 => 49,  109 => 34,  106 => 33,  97 => 30,  92 => 29,  87 => 28,  85 => 27,  73 => 25,  70 => 24,  65 => 23,  63 => 22,  58 => 20,  54 => 19,  49 => 17,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle:Detail:index.html.twig", "D:\\Projects\\yourhome_v1\\src\\FrontBundle/Resources/views/Detail/index.html.twig");
    }
}
