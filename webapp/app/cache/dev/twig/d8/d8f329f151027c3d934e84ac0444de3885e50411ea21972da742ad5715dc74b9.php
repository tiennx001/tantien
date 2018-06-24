<?php

/* @Front/Search/index.html.twig */
class __TwigTemplate_af93a44618a8da1873c31e65022d274b64fd01524b72a8788e028e8f5b34c61f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle:Default:index.html.twig", "@Front/Search/index.html.twig", 1);
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
        $__internal_fca764d3946ba8ef5074452c6858a01b4bf0ae65e0303b36d7cdbb75486852f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fca764d3946ba8ef5074452c6858a01b4bf0ae65e0303b36d7cdbb75486852f8->enter($__internal_fca764d3946ba8ef5074452c6858a01b4bf0ae65e0303b36d7cdbb75486852f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Front/Search/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fca764d3946ba8ef5074452c6858a01b4bf0ae65e0303b36d7cdbb75486852f8->leave($__internal_fca764d3946ba8ef5074452c6858a01b4bf0ae65e0303b36d7cdbb75486852f8_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d7fe5733f303094fd3239b217178e5cbeed9353b9fb0623892b55b991991a08f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7fe5733f303094fd3239b217178e5cbeed9353b9fb0623892b55b991991a08f->enter($__internal_d7fe5733f303094fd3239b217178e5cbeed9353b9fb0623892b55b991991a08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <!-- grow -->
    <div class=\"grow\">
        <div class=\"container\">
            <h2>Tìm kiếm theo từ khóa \"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["keyword"]) ? $context["keyword"] : $this->getContext($context, "keyword")), "html", null, true);
        echo "\"</h2>
        </div>
    </div>
    <!-- grow -->
    <div class=\"pro-du\">
        <div class=\"container\">
            <div class=\"col-md-9 product1\">
                <div class=\" bottom-product\">
                    ";
        // line 15
        if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()) > 0)) {
            // line 16
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 17
                echo "                            <div class=\"col-md-6 bottom-cd simpleCart_shelfItem\">
                                <div class=\"product-at \">
                                    <a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_detail", array("slug" => $this->getAttribute($context["row"], "slug", array()))), "html", null, true);
                echo "\"><img class=\"img-responsive\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontBundle\Twig\TwigExtension')->getImageFilter($this->getAttribute($context["row"], "imagePath", array()), (isset($context["webPath"]) ? $context["webPath"] : $this->getContext($context, "webPath"))), "html", null, true);
                echo "\" alt=\"\">
                                        <div class=\"pro-grid\">
                                            <span class=\"buy-in\">Buy Now</span>
                                        </div>
                                    </a>
                                </div>
                                <p class=\"tun\"><span>";
                // line 25
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($context["row"], "description", array()), 20), "html", null, true);
                echo "</span><br>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "name", array()), "html", null, true);
                echo "</p>
                                <div class=\"ca-rt\">
                                    <a href=\"#\" class=\"item_add\"><p class=\"number item_price\"><i> </i>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serviceHelper"]) ? $context["serviceHelper"] : $this->getContext($context, "serviceHelper")), "getProductPrice", array(0 => $context["row"]), "method"), "html", null, true);
                echo "</p></a>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                        <div class=\"clearfix\"> </div>

                        ";
            // line 35
            echo "                        <div class=\"navigation text-center\">
                            ";
            // line 36
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            echo "
                        </div>
                    ";
        } else {
            // line 39
            echo "                        <span>Không có kết quả</span>
                    ";
        }
        // line 41
        echo "                </div>


            </div>
            <div class=\"col-md-3 prod-rgt\">

                ";
        // line 47
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FrontBundle:Default:products"), array());
        // line 48
        echo "
                <div class=\"pr-btm\">
                    <h4>Khách hàng nói gì về chúng tôi?</h4>
                    <img class=\"img-responsive\" src=\"/bundles/front/images/pi.jpg\" alt=\"\">
                    <h6>Huyền</h6>
                    <p>Sản phẩm chất lượng, giá cả hợp lý, tôi rất thích!</p>
                </div>
            </div>
            <div class=\"clearfix\"></div>
        </div>
    </div>
";
        
        $__internal_d7fe5733f303094fd3239b217178e5cbeed9353b9fb0623892b55b991991a08f->leave($__internal_d7fe5733f303094fd3239b217178e5cbeed9353b9fb0623892b55b991991a08f_prof);

    }

    public function getTemplateName()
    {
        return "@Front/Search/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 48,  121 => 47,  113 => 41,  109 => 39,  103 => 36,  100 => 35,  96 => 32,  85 => 27,  78 => 25,  67 => 19,  63 => 17,  58 => 16,  56 => 15,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
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
            <h2>Tìm kiếm theo từ khóa \"{{ keyword }}\"</h2>
        </div>
    </div>
    <!-- grow -->
    <div class=\"pro-du\">
        <div class=\"container\">
            <div class=\"col-md-9 product1\">
                <div class=\" bottom-product\">
                    {% if pagination.getTotalItemCount > 0 %}
                        {% for row in pagination %}
                            <div class=\"col-md-6 bottom-cd simpleCart_shelfItem\">
                                <div class=\"product-at \">
                                    <a href=\"{{ path('product_detail', {slug: row.slug}) }}\"><img class=\"img-responsive\" src=\"{{ row.imagePath|getImage(webPath) }}\" alt=\"\">
                                        <div class=\"pro-grid\">
                                            <span class=\"buy-in\">Buy Now</span>
                                        </div>
                                    </a>
                                </div>
                                <p class=\"tun\"><span>{{ row.description|truncate(20) }}</span><br>{{ row.name }}</p>
                                <div class=\"ca-rt\">
                                    <a href=\"#\" class=\"item_add\"><p class=\"number item_price\"><i> </i>{{ serviceHelper.getProductPrice(row) }}</p></a>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        {% endfor %}
                        <div class=\"clearfix\"> </div>

                        {# display navigation #}
                        <div class=\"navigation text-center\">
                            {{ knp_pagination_render(pagination) }}
                        </div>
                    {% else %}
                        <span>Không có kết quả</span>
                    {% endif %}
                </div>


            </div>
            <div class=\"col-md-3 prod-rgt\">

                {% render(controller('FrontBundle:Default:products')) %}

                <div class=\"pr-btm\">
                    <h4>Khách hàng nói gì về chúng tôi?</h4>
                    <img class=\"img-responsive\" src=\"/bundles/front/images/pi.jpg\" alt=\"\">
                    <h6>Huyền</h6>
                    <p>Sản phẩm chất lượng, giá cả hợp lý, tôi rất thích!</p>
                </div>
            </div>
            <div class=\"clearfix\"></div>
        </div>
    </div>
{% endblock %}", "@Front/Search/index.html.twig", "D:\\Projects\\yourhome_v1\\src\\FrontBundle\\Resources\\views\\Search\\index.html.twig");
    }
}
