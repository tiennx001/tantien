<?php

/* FrontBundle:Detail:index.html.twig */
class __TwigTemplate_ed3310199a1191cab94fada9da33b47a10197a84bd4cf0705ed79bd3d1c1b098 extends Twig_Template
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
        $__internal_f5962e6636b3347418f6150024fbd783b41aae87cef0ae01f602b829408d4262 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5962e6636b3347418f6150024fbd783b41aae87cef0ae01f602b829408d4262->enter($__internal_f5962e6636b3347418f6150024fbd783b41aae87cef0ae01f602b829408d4262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Detail:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5962e6636b3347418f6150024fbd783b41aae87cef0ae01f602b829408d4262->leave($__internal_f5962e6636b3347418f6150024fbd783b41aae87cef0ae01f602b829408d4262_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_03af1444f0cea217dc6da4b2d22412ba8ae056c6b54fb83fb003b0671d7c03df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03af1444f0cea217dc6da4b2d22412ba8ae056c6b54fb83fb003b0671d7c03df->enter($__internal_03af1444f0cea217dc6da4b2d22412ba8ae056c6b54fb83fb003b0671d7c03df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<!-- grow -->
<div class=\"grow\">
    <div class=\"container\">
        <h2>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["productColors"]) ? $context["productColors"] : $this->getContext($context, "productColors")));
        foreach ($context['_seq'] as $context["_key"] => $context["pColor"]) {
            // line 24
            echo "                        ";
            if (($this->getAttribute($context["pColor"], "status", array()) == 1)) {
                // line 25
                echo "                        <div class=\"flexslider";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo " thumb-slider\" data-value=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\" ";
                if (((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) != 0)) {
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
                        echo twig_escape_filter($this->env, $this->env->getExtension('FrontBundle\Twig\TwigExtension')->getImageFilter($context["img"], (isset($context["webPath"]) ? $context["webPath"] : $this->getContext($context, "webPath"))), "html", null, true);
                        echo "\">
                                        <div class=\"thumb-image\"> <img src=\"";
                        // line 30
                        echo twig_escape_filter($this->env, $this->env->getExtension('FrontBundle\Twig\TwigExtension')->getImageFilter($context["img"], (isset($context["webPath"]) ? $context["webPath"] : $this->getContext($context, "webPath"))), "html", null, true);
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
                $context["key"] = ((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) + 1);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["productColors"]) ? $context["productColors"] : $this->getContext($context, "productColors")));
        foreach ($context['_seq'] as $context["_key"] => $context["pColor"]) {
            // line 66
            echo "                            ";
            if (($this->getAttribute($context["pColor"], "status", array()) == 1)) {
                // line 67
                echo "                                <h5 class=\"item_price\" data-value=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\" ";
                if (((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) != 0)) {
                    echo " style=\"display: none\" ";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["pColor"], "price", array()), 0, ",", "."), "html", null, true);
                echo "đ</h5>
                                ";
                // line 68
                $context["key"] = ((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) + 1);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "description", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["productColors"]) ? $context["productColors"] : $this->getContext($context, "productColors")));
        foreach ($context['_seq'] as $context["_key"] => $context["pColor"]) {
            // line 79
            echo "                                        ";
            if (($this->getAttribute($context["pColor"], "status", array()) == 1)) {
                // line 80
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pColor"], "color", array()), "name", array()), "html", null, true);
                echo "</option>
                                            ";
                // line 81
                $context["key"] = ((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) + 1);
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

            <div style=\"display: block; height: 20px\"></div>

            <div class=\"container\">
                ";
        // line 108
        echo $this->env->getExtension('FrontBundle\Twig\TwigExtension')->purifierFilter($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "content", array()));
        echo "
            </div>

            <div class=\" bottom-product\">
                <p class=\"h3\">Sản phẩm cùng loại</p>
                ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["relatedProducts"]) ? $context["relatedProducts"] : $this->getContext($context, "relatedProducts")));
        foreach ($context['_seq'] as $context["_key"] => $context["relatedProd"]) {
            // line 114
            echo "                <div class=\"col-md-4 bottom-cd simpleCart_shelfItem\">
                    <div class=\"product-at \">
                        <a href=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_detail", array("slug" => $this->getAttribute($context["relatedProd"], "slug", array()))), "html", null, true);
            echo "\"><img class=\"img-responsive\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('FrontBundle\Twig\TwigExtension')->getImageFilter($this->getAttribute($context["relatedProd"], "imagePath", array()), (isset($context["webPath"]) ? $context["webPath"] : $this->getContext($context, "webPath"))), "html", null, true);
            echo "\" alt=\"\">
                            <div class=\"pro-grid\">
                                <span class=\"buy-in\">Buy Now</span>
                            </div>
                        </a>
                    </div>
                    <p class=\"tun\"><span>";
            // line 122
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($context["relatedProd"], "description", array())), "html", null, true);
            echo "</span><br>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["relatedProd"], "name", array()), "html", null, true);
            echo "</p>
                    <div class=\"ca-rt\">
                        <a href=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_detail", array("slug" => $this->getAttribute($context["relatedProd"], "slug", array()))), "html", null, true);
            echo "\" class=\"item_add\"><p class=\"number item_price\"><i> </i>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serviceHelper"]) ? $context["serviceHelper"] : $this->getContext($context, "serviceHelper")), "getProductPrice", array(0 => $context["relatedProd"]), "method"), "html", null, true);
            echo "</p></a>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['relatedProd'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "                <div class=\"clearfix\"> </div>
            </div>
        </div>

        <div class=\"clearfix\"> </div>
    </div>
</div>
<!--//content-->
";
        
        $__internal_03af1444f0cea217dc6da4b2d22412ba8ae056c6b54fb83fb003b0671d7c03df->leave($__internal_03af1444f0cea217dc6da4b2d22412ba8ae056c6b54fb83fb003b0671d7c03df_prof);

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
        return array (  316 => 128,  304 => 124,  297 => 122,  286 => 116,  282 => 114,  278 => 113,  270 => 108,  253 => 93,  251 => 92,  249 => 91,  247 => 90,  245 => 89,  243 => 88,  241 => 87,  237 => 84,  231 => 83,  228 => 82,  226 => 81,  219 => 80,  216 => 79,  211 => 78,  209 => 77,  201 => 72,  198 => 71,  192 => 70,  189 => 69,  187 => 68,  176 => 67,  173 => 66,  168 => 65,  166 => 64,  161 => 61,  159 => 60,  157 => 59,  151 => 55,  146 => 52,  140 => 51,  137 => 50,  135 => 49,  118 => 34,  115 => 33,  106 => 30,  101 => 29,  96 => 28,  94 => 27,  82 => 25,  79 => 24,  74 => 23,  72 => 22,  67 => 20,  63 => 19,  58 => 17,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FrontBundle:Default:index.html.twig' %}

{% block content %}
<!-- grow -->
<div class=\"grow\">
    <div class=\"container\">
        <h2>{{ product.name }}</h2>
    </div>
</div>
<!-- grow -->
<div class=\"product\">
    <div class=\"container\">

        <div class=\"product-price1\">
            <div class=\"top-sing\">
                <div class=\"col-md-7 single-top\">
                    <script defer src=\"{{ asset('bundles/front/js/imagezoom.js') }}\"></script>
                    <!-- FlexSlider -->
                    <script defer src=\"{{ asset('bundles/front/js/jquery.flexslider.js') }}\"></script>
                    <link rel=\"stylesheet\" href=\"{{ asset('bundles/front/css/flexslider.css') }}\" type=\"text/css\" media=\"screen\" />

                    {% set key = 0 %}
                    {% for pColor in productColors %}
                        {% if pColor.status == 1 %}
                        <div class=\"flexslider{{ key }} thumb-slider\" data-value=\"{{ key }}\" {% if key != 0 %} style=\"display: none\" {% endif %}>
                            <ul class=\"slides\">
                                {% if pColor.images|jsonDecode|length > 0 %}
                                    {% for img in pColor.images|jsonDecode %}
                                    <li data-thumb=\"{{ img|getImage(webPath) }}\">
                                        <div class=\"thumb-image\"> <img src=\"{{ img|getImage(webPath) }}\" data-imagezoom=\"true\" class=\"img-responsive\"> </div>
                                    </li>
                                    {% endfor %}
                                {% endif %}
                            </ul>
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
                            {% set key = key + 1 %}
                        {% endif  %}
                    {% endfor %}
                </div>
                <div class=\"col-md-5 single-top-in simpleCart_shelfItem\">
                    <div class=\"single-para \">
                        <h4>{{ product.name }}</h4>
                        <div class=\"star-on\">

                            {#<div class=\"review\">#}
                                {#<a href=\"#\"> 1 customer review </a>#}
                            {#</div>#}
                            <div class=\"clearfix\"> </div>
                        </div>

                        {% set key = 0 %}
                        {% for pColor in productColors %}
                            {% if pColor.status == 1 %}
                                <h5 class=\"item_price\" data-value=\"{{ key }}\" {% if key != 0 %} style=\"display: none\" {% endif %}>{{ pColor.price|number_format(0, ',', '.') }}đ</h5>
                                {% set key = key + 1 %}
                            {% endif  %}
                        {% endfor %}

                        <p>{{ product.description }}</p>
                        <div class=\"available\">
                            <ul>
                                <li>Color
                                    <select onchange=\"changeColorEffect(this)\">
                                    {% set key = 0 %}
                                    {% for pColor in productColors %}
                                        {% if pColor.status == 1 %}
                                            <option value=\"{{ key }}\">{{ pColor.color.name }}</option>
                                            {% set key = key + 1 %}
                                        {% endif  %}
                                    {% endfor %}
                                    </select>
                                </li>
                                {#<li class=\"size-in\">Size<select>#}
                                        {#<option>Large</option>#}
                                        {#<option>Medium</option>#}
                                        {#<option>small</option>#}
                                        {#<option>Large</option>#}
                                        {#<option>small</option>#}
                                    {#</select></li>#}
                                <div class=\"clearfix\"> </div>
                            </ul>
                        </div>

                        <a href=\"#\" class=\"add-cart item_add\">ADD TO CART</a>

                    </div>
                </div>
                <div class=\"clearfix\"> </div>
            </div>
            <!---->

            <div style=\"display: block; height: 20px\"></div>

            <div class=\"container\">
                {{ product.content|purifier|raw }}
            </div>

            <div class=\" bottom-product\">
                <p class=\"h3\">Sản phẩm cùng loại</p>
                {% for relatedProd in relatedProducts %}
                <div class=\"col-md-4 bottom-cd simpleCart_shelfItem\">
                    <div class=\"product-at \">
                        <a href=\"{{ path('product_detail', {slug: relatedProd.slug}) }}\"><img class=\"img-responsive\" src=\"{{ relatedProd.imagePath|getImage(webPath) }}\" alt=\"\">
                            <div class=\"pro-grid\">
                                <span class=\"buy-in\">Buy Now</span>
                            </div>
                        </a>
                    </div>
                    <p class=\"tun\"><span>{{ relatedProd.description|truncate }}</span><br>{{ relatedProd.name }}</p>
                    <div class=\"ca-rt\">
                        <a href=\"{{ path('product_detail', {slug: relatedProd.slug}) }}\" class=\"item_add\"><p class=\"number item_price\"><i> </i>{{ serviceHelper.getProductPrice(relatedProd) }}</p></a>
                    </div>
                </div>
                {% endfor %}
                <div class=\"clearfix\"> </div>
            </div>
        </div>

        <div class=\"clearfix\"> </div>
    </div>
</div>
<!--//content-->
{% endblock %}", "FrontBundle:Detail:index.html.twig", "D:\\Projects\\yourhome_v1\\src\\FrontBundle\\Resources\\views\\Detail\\index.html.twig");
    }
}
