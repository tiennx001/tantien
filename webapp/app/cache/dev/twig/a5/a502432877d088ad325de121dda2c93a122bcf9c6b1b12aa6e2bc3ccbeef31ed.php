<?php

/* FrontBundle:Default:_banner.html.twig */
class __TwigTemplate_f356be06599ff787e83961ba6abe8c71a9da0c371e83b5d7fc9a4bbe122ca91b extends Twig_Template
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
        $__internal_41cf46963780f811e3d6289744487dfbe084e7db9f23452194e11f4d800d84c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41cf46963780f811e3d6289744487dfbe084e7db9f23452194e11f4d800d84c1->enter($__internal_41cf46963780f811e3d6289744487dfbe084e7db9f23452194e11f4d800d84c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:_banner.html.twig"));

        // line 1
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_41cf46963780f811e3d6289744487dfbe084e7db9f23452194e11f4d800d84c1->leave($__internal_41cf46963780f811e3d6289744487dfbe084e7db9f23452194e11f4d800d84c1_prof);

    }

    public function block_header($context, array $blocks = array())
    {
        $__internal_9df661191182c1e0cbbc6f927ae86375f527adb308dc19fc83133adaad336ef8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9df661191182c1e0cbbc6f927ae86375f527adb308dc19fc83133adaad336ef8->enter($__internal_9df661191182c1e0cbbc6f927ae86375f527adb308dc19fc83133adaad336ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_9df661191182c1e0cbbc6f927ae86375f527adb308dc19fc83133adaad336ef8->leave($__internal_9df661191182c1e0cbbc6f927ae86375f527adb308dc19fc83133adaad336ef8_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:_banner.html.twig";
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
{% endblock %}", "FrontBundle:Default:_banner.html.twig", "D:\\Projects\\yourhome_v1\\src\\FrontBundle\\Resources\\views\\Default\\_banner.html.twig");
    }
}
