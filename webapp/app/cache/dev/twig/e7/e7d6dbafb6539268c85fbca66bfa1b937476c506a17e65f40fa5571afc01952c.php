<?php

/* @Front/Default/_footer.html.twig */
class __TwigTemplate_dc0545208e9c753125a5a1993fcf4f8221c1bbb4472180a6b94297773d627f78 extends Twig_Template
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
        $__internal_05202e840c35fd6471607a3a11aa56889e7817fea79aac55bd452a1f1fdc4eb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05202e840c35fd6471607a3a11aa56889e7817fea79aac55bd452a1f1fdc4eb5->enter($__internal_05202e840c35fd6471607a3a11aa56889e7817fea79aac55bd452a1f1fdc4eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Front/Default/_footer.html.twig"));

        // line 1
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_05202e840c35fd6471607a3a11aa56889e7817fea79aac55bd452a1f1fdc4eb5->leave($__internal_05202e840c35fd6471607a3a11aa56889e7817fea79aac55bd452a1f1fdc4eb5_prof);

    }

    public function block_header($context, array $blocks = array())
    {
        $__internal_d92dbb533fd8efacb81d1eb553037ec288c54f1aafe15074ab95c6762cf47398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d92dbb533fd8efacb81d1eb553037ec288c54f1aafe15074ab95c6762cf47398->enter($__internal_d92dbb533fd8efacb81d1eb553037ec288c54f1aafe15074ab95c6762cf47398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
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
        
        $__internal_d92dbb533fd8efacb81d1eb553037ec288c54f1aafe15074ab95c6762cf47398->leave($__internal_d92dbb533fd8efacb81d1eb553037ec288c54f1aafe15074ab95c6762cf47398_prof);

    }

    public function getTemplateName()
    {
        return "@Front/Default/_footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  69 => 22,  58 => 20,  54 => 19,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block header %}
    <div class=\"footer w3layouts\">
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
                        {% for cate in categories %}
                        <li><a href=\"{{ path('category', {cateSlug: cate.slug}) }}\">{{ cate.name }}</a></li>
                        {% endfor %}
                    </ul>

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
{% endblock %}", "@Front/Default/_footer.html.twig", "D:\\Projects\\yourhome_v1\\src\\FrontBundle\\Resources\\views\\Default\\_footer.html.twig");
    }
}
