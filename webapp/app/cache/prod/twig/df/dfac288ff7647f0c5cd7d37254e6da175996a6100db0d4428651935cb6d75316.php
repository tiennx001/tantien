<?php

/* FrontBundle:Default:_banner.html.twig */
class __TwigTemplate_c6f0f155bcbf933082dcbe95b5abbcb73e0ef0de264f5854d769cf9e7359a6f9 extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:_banner.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle:Default:_banner.html.twig", "D:\\Projects\\yourhome_v1\\src\\FrontBundle/Resources/views/Default/_banner.html.twig");
    }
}
