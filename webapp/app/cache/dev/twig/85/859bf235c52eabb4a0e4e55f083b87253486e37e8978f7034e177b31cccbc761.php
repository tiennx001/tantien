<?php

/* FrontBundle:Home:index.html.twig */
class __TwigTemplate_7fbc567b35c0250261940b579779205f3de38196f67f400a7674958246263059 extends Twig_Template
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
        $__internal_3c0b1d96a503f4d04c532d3eecf997fb31828537a9b95a7b26910bf7680f7aa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c0b1d96a503f4d04c532d3eecf997fb31828537a9b95a7b26910bf7680f7aa1->enter($__internal_3c0b1d96a503f4d04c532d3eecf997fb31828537a9b95a7b26910bf7680f7aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c0b1d96a503f4d04c532d3eecf997fb31828537a9b95a7b26910bf7680f7aa1->leave($__internal_3c0b1d96a503f4d04c532d3eecf997fb31828537a9b95a7b26910bf7680f7aa1_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_b3e5ed65f15a75d8226f93f3c55245df06e9cbc1994a323b1c24aca4cac99bf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3e5ed65f15a75d8226f93f3c55245df06e9cbc1994a323b1c24aca4cac99bf3->enter($__internal_b3e5ed65f15a75d8226f93f3c55245df06e9cbc1994a323b1c24aca4cac99bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <!--content-->
    <div class=\"container\">
        <div class=\"cont\">
            <div class=\"content\">
                ";
        // line 8
        if (($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), 0, array(), "array", true, true) && (twig_length_filter($this->env, (isset($context["featureProducts"]) ? $context["featureProducts"] : $this->getContext($context, "featureProducts"))) > 0))) {
            // line 9
            echo "                    <div class=\"content-top-bottom\">
                        <h2>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")), 0, array(), "array"), "name", array()), "html", null, true);
            echo "</h2>
                        ";
            // line 11
            if ($this->getAttribute((isset($context["featureProducts"]) ? $context["featureProducts"] : null), 0, array(), "array", true, true)) {
                // line 12
                echo "                        <div class=\"col-md-6 men\">
                            <a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_detail", array("slug" => $this->getAttribute($this->getAttribute((isset($context["featureProducts"]) ? $context["featureProducts"] : $this->getContext($context, "featureProducts")), 0, array(), "array"), "slug", array()))), "html", null, true);
                echo "\" class=\"b-link-stripe b-animate-go  thickbox\"><img class=\"img-responsive\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontBundle\Twig\TwigExtension')->getImageFilter($this->getAttribute($this->getAttribute((isset($context["featureProducts"]) ? $context["featureProducts"] : $this->getContext($context, "featureProducts")), 0, array(), "array"), "imageShow", array()), (isset($context["webPath"]) ? $context["webPath"] : $this->getContext($context, "webPath"))), "html", null, true);
                echo "\" alt=\"\">
                                <div class=\"b-wrapper\">
                                    <h3 class=\"b-animate b-from-top top-in   b-delay03 \">
                                        <span>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["featureProducts"]) ? $context["featureProducts"] : $this->getContext($context, "featureProducts")), 0, array(), "array"), "name", array()), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_detail", array("slug" => $this->getAttribute($this->getAttribute((isset($context["featureProducts"]) ? $context["featureProducts"] : $this->getContext($context, "featureProducts")), 1, array(), "array"), "slug", array()))), "html", null, true);
                echo "\" class=\"b-link-stripe b-animate-go  thickbox\"><img class=\"img-responsive\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontBundle\Twig\TwigExtension')->getImageFilter($this->getAttribute($this->getAttribute((isset($context["featureProducts"]) ? $context["featureProducts"] : $this->getContext($context, "featureProducts")), 1, array(), "array"), "imageShow", array()), (isset($context["webPath"]) ? $context["webPath"] : $this->getContext($context, "webPath"))), "html", null, true);
                echo "\" alt=\"\">
                                    <div class=\"b-wrapper\">
                                        <h3 class=\"b-animate b-from-top top-in1   b-delay03 \">
                                            <span>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["featureProducts"]) ? $context["featureProducts"] : $this->getContext($context, "featureProducts")), 1, array(), "array"), "name", array()), "html", null, true);
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
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_detail", array("slug" => $this->getAttribute($this->getAttribute((isset($context["featureProducts"]) ? $context["featureProducts"] : $this->getContext($context, "featureProducts")), 2, array(), "array"), "slug", array()))), "html", null, true);
                    echo "\" class=\"b-link-stripe b-animate-go  thickbox\"><img class=\"img-responsive\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('FrontBundle\Twig\TwigExtension')->getImageFilter($this->getAttribute($this->getAttribute((isset($context["featureProducts"]) ? $context["featureProducts"] : $this->getContext($context, "featureProducts")), 2, array(), "array"), "imageShow", array()), (isset($context["webPath"]) ? $context["webPath"] : $this->getContext($context, "webPath"))), "html", null, true);
                    echo "\" alt=\"\">
                                        <div class=\"b-wrapper\">
                                            <h3 class=\"b-animate b-from-top top-in2   b-delay03 \">
                                                <span>";
                    // line 41
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["featureProducts"]) ? $context["featureProducts"] : $this->getContext($context, "featureProducts")), 2, array(), "array"), "name", array()), "html", null, true);
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
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_detail", array("slug" => $this->getAttribute($this->getAttribute((isset($context["featureProducts"]) ? $context["featureProducts"] : $this->getContext($context, "featureProducts")), 3, array(), "array"), "slug", array()))), "html", null, true);
                        echo "\" class=\"b-link-stripe b-animate-go  thickbox\"><img class=\"img-responsive\" src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('FrontBundle\Twig\TwigExtension')->getImageFilter($this->getAttribute($this->getAttribute((isset($context["featureProducts"]) ? $context["featureProducts"] : $this->getContext($context, "featureProducts")), 3, array(), "array"), "imageShow", array()), (isset($context["webPath"]) ? $context["webPath"] : $this->getContext($context, "webPath"))), "html", null, true);
                        echo "\" alt=\"\">
                                        <div class=\"b-wrapper\">
                                            <h3 class=\"b-animate b-from-top top-in2   b-delay03 \">
                                                <span>";
                        // line 52
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["featureProducts"]) ? $context["featureProducts"] : $this->getContext($context, "featureProducts")), 3, array(), "array"), "name", array()), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")), 1, array(), "array"), "name", array()), "html", null, true);
            echo "</h1>
                        <div class=\"grid-in\">
                            ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["newProducts"]) ? $context["newProducts"] : $this->getContext($context, "newProducts")));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 73
                echo "                            <div class=\"col-md-3 grid-top simpleCart_shelfItem\">
                                <a href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_detail", array("slug" => $this->getAttribute($context["product"], "slug", array()))), "html", null, true);
                echo "\" class=\"b-link-stripe b-animate-go  thickbox\"><img class=\"img-responsive\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontBundle\Twig\TwigExtension')->getImageFilter($this->getAttribute($context["product"], "imageShow", array()), (isset($context["webPath"]) ? $context["webPath"] : $this->getContext($context, "webPath"))), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serviceHelper"]) ? $context["serviceHelper"] : $this->getContext($context, "serviceHelper")), "getProductPrice", array(0 => $context["product"]), "method"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")), 2, array(), "array"), "name", array()), "html", null, true);
            echo "</h1>
                        <div class=\"grid-in\">
                            ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["creativeProducts"]) ? $context["creativeProducts"] : $this->getContext($context, "creativeProducts")));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 96
                echo "                                <div class=\"col-md-3 grid-top simpleCart_shelfItem\">
                                    <a href=\"";
                // line 97
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_detail", array("slug" => $this->getAttribute($context["product"], "slug", array()))), "html", null, true);
                echo "\" class=\"b-link-stripe b-animate-go  thickbox\"><img class=\"img-responsive\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontBundle\Twig\TwigExtension')->getImageFilter($this->getAttribute($context["product"], "imageShow", array()), (isset($context["webPath"]) ? $context["webPath"] : $this->getContext($context, "webPath"))), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serviceHelper"]) ? $context["serviceHelper"] : $this->getContext($context, "serviceHelper")), "getProductPrice", array(0 => $context["product"]), "method"), "html", null, true);
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
        
        $__internal_b3e5ed65f15a75d8226f93f3c55245df06e9cbc1994a323b1c24aca4cac99bf3->leave($__internal_b3e5ed65f15a75d8226f93f3c55245df06e9cbc1994a323b1c24aca4cac99bf3_prof);

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
        return array (  276 => 113,  270 => 109,  261 => 106,  255 => 105,  247 => 100,  239 => 97,  236 => 96,  232 => 95,  227 => 93,  224 => 92,  222 => 91,  219 => 90,  213 => 86,  204 => 83,  198 => 82,  190 => 77,  182 => 74,  179 => 73,  175 => 72,  170 => 70,  167 => 69,  165 => 68,  162 => 67,  157 => 64,  153 => 62,  148 => 59,  138 => 52,  130 => 49,  127 => 48,  125 => 47,  116 => 41,  108 => 38,  104 => 36,  102 => 35,  93 => 29,  85 => 26,  81 => 24,  78 => 23,  68 => 16,  60 => 13,  57 => 12,  55 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
    <!--content-->
    <div class=\"container\">
        <div class=\"cont\">
            <div class=\"content\">
                {% if categories[0] is defined and featureProducts|length > 0 %}
                    <div class=\"content-top-bottom\">
                        <h2>{{ categories[0].name }}</h2>
                        {% if featureProducts[0] is defined %}
                        <div class=\"col-md-6 men\">
                            <a href=\"{{ path('product_detail', {slug: featureProducts[0].slug}) }}\" class=\"b-link-stripe b-animate-go  thickbox\"><img class=\"img-responsive\" src=\"{{ featureProducts[0].imageShow|getImage(webPath) }}\" alt=\"\">
                                <div class=\"b-wrapper\">
                                    <h3 class=\"b-animate b-from-top top-in   b-delay03 \">
                                        <span>{{ featureProducts[0].name }}</span>
                                    </h3>
                                </div>
                            </a>

                        </div>
                        {% endif %}
                        {% if featureProducts[1] is defined %}
                        <div class=\"col-md-6\">
                            <div class=\"col-md1 \">
                                <a href=\"{{ path('product_detail', {slug: featureProducts[1].slug}) }}\" class=\"b-link-stripe b-animate-go  thickbox\"><img class=\"img-responsive\" src=\"{{ featureProducts[1].imageShow|getImage(webPath) }}\" alt=\"\">
                                    <div class=\"b-wrapper\">
                                        <h3 class=\"b-animate b-from-top top-in1   b-delay03 \">
                                            <span>{{ featureProducts[1].name }}</span>
                                        </h3>
                                    </div>
                                </a>

                            </div>
                            {% if featureProducts[2] is defined %}
                            <div class=\"col-md2\">
                                <div class=\"col-md-6 men1\">
                                    <a href=\"{{ path('product_detail', {slug: featureProducts[2].slug}) }}\" class=\"b-link-stripe b-animate-go  thickbox\"><img class=\"img-responsive\" src=\"{{ featureProducts[2].imageShow|getImage(webPath) }}\" alt=\"\">
                                        <div class=\"b-wrapper\">
                                            <h3 class=\"b-animate b-from-top top-in2   b-delay03 \">
                                                <span>{{ featureProducts[2].name }}</span>
                                            </h3>
                                        </div>
                                    </a>

                                </div>
                                {% if featureProducts[3] is defined %}
                                <div class=\"col-md-6 men2\">
                                    <a href=\"{{ path('product_detail', {slug: featureProducts[3].slug}) }}\" class=\"b-link-stripe b-animate-go  thickbox\"><img class=\"img-responsive\" src=\"{{ featureProducts[3].imageShow|getImage(webPath) }}\" alt=\"\">
                                        <div class=\"b-wrapper\">
                                            <h3 class=\"b-animate b-from-top top-in2   b-delay03 \">
                                                <span>{{ featureProducts[3].name }}</span>
                                            </h3>
                                        </div>
                                    </a>

                                </div>
                                {% endif %}
                                <div class=\"clearfix\"> </div>
                            </div>
                            {% endif %}
                        </div>
                        {% endif %}
                        <div class=\"clearfix\"> </div>
                    </div>
                {% endif %}

                {% if categories[1] is defined %}
                    <div class=\"content-top\">
                        <h1>{{ categories[1].name }}</h1>
                        <div class=\"grid-in\">
                            {% for product in newProducts %}
                            <div class=\"col-md-3 grid-top simpleCart_shelfItem\">
                                <a href=\"{{ path('product_detail', {slug: product.slug}) }}\" class=\"b-link-stripe b-animate-go  thickbox\"><img class=\"img-responsive\" src=\"{{ product.imageShow|getImage(webPath) }}\" alt=\"\">
                                    <div class=\"b-wrapper\">
                                        <h3 class=\"b-animate b-from-left    b-delay03 \">
                                            <span>{{ product.name }}</span>

                                        </h3>
                                    </div>
                                </a>
                                <p><a href=\"{{ path('product_detail', {slug: product.slug}) }}\">{{ product.name }}</a></p>
                                <a href=\"#\" class=\"item_add\"><p class=\"number item_price\"><i> </i>{{ serviceHelper.getProductPrice(product) }}</p></a>
                            </div>
                            {% endfor %}
                            <div class=\"clearfix\"> </div>
                        </div>
                    </div>
                {% endif %}

                {% if categories[2] is defined %}
                    <div class=\"content-top\">
                        <h1>{{ categories[2].name }}</h1>
                        <div class=\"grid-in\">
                            {% for product in creativeProducts %}
                                <div class=\"col-md-3 grid-top simpleCart_shelfItem\">
                                    <a href=\"{{ path('product_detail', {slug: product.slug}) }}\" class=\"b-link-stripe b-animate-go  thickbox\"><img class=\"img-responsive\" src=\"{{ product.imageShow|getImage(webPath) }}\" alt=\"\">
                                        <div class=\"b-wrapper\">
                                            <h3 class=\"b-animate b-from-left    b-delay03 \">
                                                <span>{{ product.name }}</span>

                                            </h3>
                                        </div>
                                    </a>
                                    <p><a href=\"{{ path('product_detail', {slug: product.slug}) }}\">{{ product.name }}</a></p>
                                    <a href=\"#\" class=\"item_add\"><p class=\"number item_price\"><i> </i>{{ serviceHelper.getProductPrice(product) }}</p></a>
                                </div>
                            {% endfor %}
                            <div class=\"clearfix\"> </div>
                        </div>
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %}", "FrontBundle:Home:index.html.twig", "D:\\Projects\\yourhome_v1\\src\\FrontBundle\\Resources\\views\\Home\\index.html.twig");
    }
}
