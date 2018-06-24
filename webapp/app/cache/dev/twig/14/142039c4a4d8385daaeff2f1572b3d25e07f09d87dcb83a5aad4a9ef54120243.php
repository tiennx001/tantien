<?php

/* @Front/Default/_banner.html.twig */
class __TwigTemplate_2d12bab5e8377e9052dcd933036fb208b83301b50e6c19c2f2f3e5194123c348 extends Twig_Template
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
        $__internal_3b8fe19da91b49319f487fbd4f809c3e24122b782ded188659e23473940d1d0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b8fe19da91b49319f487fbd4f809c3e24122b782ded188659e23473940d1d0d->enter($__internal_3b8fe19da91b49319f487fbd4f809c3e24122b782ded188659e23473940d1d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Front/Default/_banner.html.twig"));

        // line 1
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_3b8fe19da91b49319f487fbd4f809c3e24122b782ded188659e23473940d1d0d->leave($__internal_3b8fe19da91b49319f487fbd4f809c3e24122b782ded188659e23473940d1d0d_prof);

    }

    public function block_header($context, array $blocks = array())
    {
        $__internal_126e3e89d1eb04a7478bb7213db7bf19c4e532199e41a0c0ae2e7f8da4466b5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_126e3e89d1eb04a7478bb7213db7bf19c4e532199e41a0c0ae2e7f8da4466b5d->enter($__internal_126e3e89d1eb04a7478bb7213db7bf19c4e532199e41a0c0ae2e7f8da4466b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 2
        echo "    <div class=\"banner\">
        <div class=\"container\">
            <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/responsiveslides.min.js"), "html", null, true);
        echo "\"></script>
            <script>
                \$(function () {
                    \$(\"#slider\").responsiveSlides({
                        auto: true,
                        nav: true,
                        speed: 500,
                        namespace: \"callbacks\",
                        pager: true
                    });
                });
            </script>
            <div id=\"top\" class=\"callbacks_container\">
                <ul class=\"rslides\" id=\"slider\">
                    <li>
                        <div class=\"banner-text\">
                            <h3>Sản phẩm đặc trưng</h3>
                            <p>Sản phẩm đặc trưng dành riêng cho căn nhà của bạn.</p>
                        </div>
                    </li>
                    <li>
                        <div class=\"banner-text\">
                            <h3>Sản phẩm nhập khẩu</h3>
                            <p>Những sản phẩm với chất lượng và mẫu mã đẹp nhất được nhập khẩu từ Châu Âu.</p>
                        </div>
                    </li>
                    <li>
                        <div class=\"banner-text\">
                            <h3>Sản phẩm sáng tạo</h3>
                            <p>Hãy thỏa sức sáng tạo với không gian riêng của bạn.</p>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </div>
";
        
        $__internal_126e3e89d1eb04a7478bb7213db7bf19c4e532199e41a0c0ae2e7f8da4466b5d->leave($__internal_126e3e89d1eb04a7478bb7213db7bf19c4e532199e41a0c0ae2e7f8da4466b5d_prof);

    }

    public function getTemplateName()
    {
        return "@Front/Default/_banner.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  35 => 2,  23 => 1,);
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
    <div class=\"banner\">
        <div class=\"container\">
            <script src=\"{{ asset('bundles/front/js/responsiveslides.min.js') }}\"></script>
            <script>
                \$(function () {
                    \$(\"#slider\").responsiveSlides({
                        auto: true,
                        nav: true,
                        speed: 500,
                        namespace: \"callbacks\",
                        pager: true
                    });
                });
            </script>
            <div id=\"top\" class=\"callbacks_container\">
                <ul class=\"rslides\" id=\"slider\">
                    <li>
                        <div class=\"banner-text\">
                            <h3>Sản phẩm đặc trưng</h3>
                            <p>Sản phẩm đặc trưng dành riêng cho căn nhà của bạn.</p>
                        </div>
                    </li>
                    <li>
                        <div class=\"banner-text\">
                            <h3>Sản phẩm nhập khẩu</h3>
                            <p>Những sản phẩm với chất lượng và mẫu mã đẹp nhất được nhập khẩu từ Châu Âu.</p>
                        </div>
                    </li>
                    <li>
                        <div class=\"banner-text\">
                            <h3>Sản phẩm sáng tạo</h3>
                            <p>Hãy thỏa sức sáng tạo với không gian riêng của bạn.</p>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </div>
{% endblock %}", "@Front/Default/_banner.html.twig", "D:\\Projects\\yourhome_v1\\src\\FrontBundle\\Resources\\views\\Default\\_banner.html.twig");
    }
}
