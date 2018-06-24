<?php

/* @Front/Default/_footer.html.twig */
class __TwigTemplate_bfcc4167e14b410090b22b84994a78197326a4ec8793d7e3d5a004408a5ea866 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('header', $context, $blocks);
    }

    public function block_header($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"footer w3layouts\">
        <div class=\"container\">
            <div class=\"footer-top-at w3\">

                <div class=\"col-md-3 amet-sed w3l\">
                    <h4>MORE INFO</h4>
                    <ul class=\"nav-bottom\">
                        <li><a href=\"#\">How to order</a></li>
                        <li><a href=\"#\">FAQ</a></li>
                        <li><a href=\"contact.html\">Location</a></li>
                        <li><a href=\"#\">Shipping</a></li>
                        <li><a href=\"#\">Membership</a></li>
                    </ul>
                </div>
                <div class=\"col-md-3 amet-sed w3ls\">
                    <h4>CATEGORIES</h4>
                    <ul class=\"nav-bottom\">
                        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["cate"]) {
            // line 20
            echo "                        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category", array("cateSlug" => $this->getAttribute($context["cate"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cate"], "name", array()), "html", null, true);
            echo "</a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                    </ul>

                </div>
                <div class=\"col-md-3 amet-sed agileits\">
                    <h4>NEWSLETTER</h4>
                    <div class=\"stay agileinfo\">
                        <div class=\"stay-left wthree\">
                            <form action=\"#\" method=\"post\">
                                <input type=\"text\" placeholder=\"Enter your email \" required=\"\">
                            </form>
                        </div>
                        <div class=\"btn-1 w3-agileits\">
                            <form action=\"#\" method=\"post\">
                                <input type=\"submit\" value=\"Subscribe\">
                            </form>
                        </div>
                        <div class=\"clearfix\"> </div>
                    </div>

                </div>
                <div class=\"col-md-3 amet-sed agileits-w3layouts\">
                    <h4>CONTACT US</h4>
                    <p>Contrary to popular belief</p>
                    <p>The standard chunk</p>
                    <p>office :  +12 34 995 0792</p>
                </div>
                <div class=\"clearfix\"> </div>
            </div>
        </div>
        <div class=\"footer-class w3-agile\">
            <p>© 2015 Mattress . All Rights Reserved | Design by  <a href=\"http://w3layouts.com/\" target=\"_blank\">W3layouts</a> </p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@Front/Default/_footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  60 => 22,  49 => 20,  45 => 19,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Front/Default/_footer.html.twig", "D:\\Projects\\yourhome_v1\\src\\FrontBundle\\Resources\\views\\Default\\_footer.html.twig");
    }
}
