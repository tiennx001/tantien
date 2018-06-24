<?php

/* @Front/Category/index.html.twig */
class __TwigTemplate_6a294c0e4e80218f1123607eac201c5bcafad86f750e4f311f142999ff9247f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle:Default:index.html.twig", "@Front/Category/index.html.twig", 1);
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
        echo "    <!-- grow -->
    <div class=\"grow\">
        <div class=\"container\">
            <h2>Sản phẩm \"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "html", null, true);
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
        if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getTotalItemCount", array()) > 0)) {
            // line 16
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 17
                echo "                        <div class=\"col-md-6 bottom-cd simpleCart_shelfItem\">
                            <div class=\"product-at \">
                                <a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_detail", array("slug" => $this->getAttribute($context["row"], "slug", array()))), "html", null, true);
                echo "\"><img class=\"img-responsive\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('FrontBundle\Twig\TwigExtension')->getImageFilter($this->getAttribute($context["row"], "imagePath", array()), (isset($context["webPath"]) ? $context["webPath"] : null)), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serviceHelper"]) ? $context["serviceHelper"] : null), "getProductPrice", array(0 => $context["row"]), "method"), "html", null, true);
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
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : null));
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
    }

    public function getTemplateName()
    {
        return "@Front/Category/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 48,  112 => 47,  104 => 41,  100 => 39,  94 => 36,  91 => 35,  87 => 32,  76 => 27,  69 => 25,  58 => 19,  54 => 17,  49 => 16,  47 => 15,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Front/Category/index.html.twig", "D:\\Projects\\yourhome_v1\\src\\FrontBundle\\Resources\\views\\Category\\index.html.twig");
    }
}
