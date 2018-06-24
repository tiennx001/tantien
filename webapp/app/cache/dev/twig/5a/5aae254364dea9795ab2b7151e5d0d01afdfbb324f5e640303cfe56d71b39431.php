<?php

/* FrontBundle:Default:_header.html.twig */
class __TwigTemplate_9a9be816318ce608a74037a6acad87acecf9ee6a7e49e52daada79b99228b241 extends Twig_Template
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
        $__internal_07d29772b88e1de5fb7d9fec4d1ebebde997df573ba6efe477e03fe1ae383a6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07d29772b88e1de5fb7d9fec4d1ebebde997df573ba6efe477e03fe1ae383a6e->enter($__internal_07d29772b88e1de5fb7d9fec4d1ebebde997df573ba6efe477e03fe1ae383a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:_header.html.twig"));

        // line 1
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_07d29772b88e1de5fb7d9fec4d1ebebde997df573ba6efe477e03fe1ae383a6e->leave($__internal_07d29772b88e1de5fb7d9fec4d1ebebde997df573ba6efe477e03fe1ae383a6e_prof);

    }

    public function block_header($context, array $blocks = array())
    {
        $__internal_2c265c1af427b13c68bcbdadb712bfcfae7c7c5d634acdb44b038cef7ea5824e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c265c1af427b13c68bcbdadb712bfcfae7c7c5d634acdb44b038cef7ea5824e->enter($__internal_2c265c1af427b13c68bcbdadb712bfcfae7c7c5d634acdb44b038cef7ea5824e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 2
        echo "    <div class=\"header\">
        <div class=\"header-top\">
            <div class=\"container\">
                <div class=\"social\">
                    <ul>
                        <li><a href=\"#\"><i class=\"facebok\"> </i></a></li>
                        <li><a href=\"#\"><i class=\"twiter\"> </i></a></li>
                        <li><a href=\"#\"><i class=\"inst\"> </i></a></li>
                        <li><a href=\"#\"><i class=\"goog\"> </i></a></li>
                        <div class=\"clearfix\"></div>
                    </ul>
                </div>
                <div class=\"header-left\">

                    <div class=\"search-box\">
                        <div id=\"sb-search\" class=\"sb-search\">
                            <form action=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search");
        echo "\" method=\"get\">
                                <input class=\"sb-search-input\" placeholder=\"Enter your search term...\" type=\"search\"  id=\"search\" name=\"kw\">
                                <input class=\"sb-search-submit\" type=\"submit\" value=\"\">
                                <span class=\"sb-icon-search\"> </span>
                            </form>
                        </div>
                    </div>

                    <!-- search-scripts -->
                    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/classie.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/uisearch.js"), "html", null, true);
        echo "\"></script>
                    <script>
                        new UISearch( document.getElementById( 'sb-search' ) );
                    </script>
                    <!-- //search-scripts -->

                    ";
        // line 35
        echo "                        ";
        // line 36
        echo "                            ";
        // line 37
        echo "                                ";
        // line 38
        echo "                                        ";
        // line 39
        echo "                                    ";
        // line 40
        echo "                            ";
        // line 41
        echo "                            ";
        // line 42
        echo "
                        ";
        // line 44
        echo "                    ";
        // line 45
        echo "                    <div class=\"clearfix\"> </div>
                </div>

            </div>
        </div>
        <div class=\"container\">
            <div class=\"head-top\">
                <div class=\"logo\">
                    <h1><a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Your Home</a></h1>
                </div>
                <div class=\" h_menu4\">
                    <ul class=\"memenu skyblue\">
                        <li><a class=\"color8\" href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category", array("cateSlug" => "dac-trung"));
        echo "\">ĐẶC TRƯNG</a></li>
                        <li><a class=\"color8\" href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category", array("cateSlug" => "nhap-khau"));
        echo "\">NHẬP KHẨU</a></li>
                        <li><a class=\"color8\" href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category", array("cateSlug" => "sang-tao"));
        echo "\">SÁNG TẠO</a></li>
                        ";
        // line 61
        echo "                            ";
        // line 62
        echo "                                ";
        // line 63
        echo "                                    ";
        // line 64
        echo "                                        ";
        // line 65
        echo "                                            ";
        // line 66
        echo "                                                ";
        // line 67
        echo "                                                ";
        // line 68
        echo "                                                ";
        // line 69
        echo "                                            ";
        // line 70
        echo "                                        ";
        // line 71
        echo "                                    ";
        // line 72
        echo "                                    ";
        // line 73
        echo "                                        ";
        // line 74
        echo "                                            ";
        // line 75
        echo "                                                ";
        // line 76
        echo "                                                ";
        // line 77
        echo "                                                ";
        // line 78
        echo "                                                ";
        // line 79
        echo "                                                ";
        // line 80
        echo "                                                ";
        // line 81
        echo "                                                ";
        // line 82
        echo "                                                ";
        // line 83
        echo "                                                ";
        // line 84
        echo "                                                ";
        // line 85
        echo "
                                            ";
        // line 87
        echo "                                        ";
        // line 88
        echo "                                    ";
        // line 89
        echo "                                    ";
        // line 90
        echo "                                        ";
        // line 91
        echo "                                            ";
        // line 92
        echo "                                                ";
        // line 93
        echo "                                                ";
        // line 94
        echo "                                                ";
        // line 95
        echo "                                                ";
        // line 96
        echo "                                                ";
        // line 97
        echo "                                                ";
        // line 98
        echo "                                                ";
        // line 99
        echo "                                                ";
        // line 100
        echo "                                                ";
        // line 101
        echo "                                                ";
        // line 102
        echo "                                            ";
        // line 103
        echo "                                        ";
        // line 104
        echo "                                    ";
        // line 105
        echo "                                ";
        // line 106
        echo "                            ";
        // line 107
        echo "                        ";
        // line 108
        echo "                        ";
        // line 109
        echo "                            ";
        // line 110
        echo "                                ";
        // line 111
        echo "                                    ";
        // line 112
        echo "                                        ";
        // line 113
        echo "                                            ";
        // line 114
        echo "                                                ";
        // line 115
        echo "                                                ";
        // line 116
        echo "                                                ";
        // line 117
        echo "                                                ";
        // line 118
        echo "                                                ";
        // line 119
        echo "                                                ";
        // line 120
        echo "                                                ";
        // line 121
        echo "                                                ";
        // line 122
        echo "                                                ";
        // line 123
        echo "                                                ";
        // line 124
        echo "
                                            ";
        // line 126
        echo "                                        ";
        // line 127
        echo "                                    ";
        // line 128
        echo "                                    ";
        // line 129
        echo "                                        ";
        // line 130
        echo "                                            ";
        // line 131
        echo "                                                ";
        // line 132
        echo "                                                ";
        // line 133
        echo "                                                ";
        // line 134
        echo "                                                ";
        // line 135
        echo "                                                ";
        // line 136
        echo "                                                ";
        // line 137
        echo "                                                ";
        // line 138
        echo "                                                ";
        // line 139
        echo "                                                ";
        // line 140
        echo "                                                ";
        // line 141
        echo "
                                            ";
        // line 143
        echo "                                        ";
        // line 144
        echo "                                    ";
        // line 145
        echo "                                    ";
        // line 146
        echo "                                        ";
        // line 147
        echo "
                                            ";
        // line 149
        echo "                                                ";
        // line 150
        echo "                                                ";
        // line 151
        echo "                                                ";
        // line 152
        echo "                                                ";
        // line 153
        echo "                                                ";
        // line 154
        echo "                                                ";
        // line 155
        echo "                                                ";
        // line 156
        echo "                                                ";
        // line 157
        echo "                                                ";
        // line 158
        echo "                                                ";
        // line 159
        echo "                                            ";
        // line 160
        echo "                                        ";
        // line 161
        echo "                                    ";
        // line 162
        echo "                                ";
        // line 163
        echo "                            ";
        // line 164
        echo "                        ";
        // line 165
        echo "                        ";
        // line 166
        echo "                        <li><a class=\"color6\" href=\"contact.html\">Contact</a></li>
                    </ul>
                </div>

                <div class=\"clearfix\"> </div>
            </div>
        </div>
    </div>
";
        
        $__internal_2c265c1af427b13c68bcbdadb712bfcfae7c7c5d634acdb44b038cef7ea5824e->leave($__internal_2c265c1af427b13c68bcbdadb712bfcfae7c7c5d634acdb44b038cef7ea5824e_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:_header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  332 => 166,  330 => 165,  328 => 164,  326 => 163,  324 => 162,  322 => 161,  320 => 160,  318 => 159,  316 => 158,  314 => 157,  312 => 156,  310 => 155,  308 => 154,  306 => 153,  304 => 152,  302 => 151,  300 => 150,  298 => 149,  295 => 147,  293 => 146,  291 => 145,  289 => 144,  287 => 143,  284 => 141,  282 => 140,  280 => 139,  278 => 138,  276 => 137,  274 => 136,  272 => 135,  270 => 134,  268 => 133,  266 => 132,  264 => 131,  262 => 130,  260 => 129,  258 => 128,  256 => 127,  254 => 126,  251 => 124,  249 => 123,  247 => 122,  245 => 121,  243 => 120,  241 => 119,  239 => 118,  237 => 117,  235 => 116,  233 => 115,  231 => 114,  229 => 113,  227 => 112,  225 => 111,  223 => 110,  221 => 109,  219 => 108,  217 => 107,  215 => 106,  213 => 105,  211 => 104,  209 => 103,  207 => 102,  205 => 101,  203 => 100,  201 => 99,  199 => 98,  197 => 97,  195 => 96,  193 => 95,  191 => 94,  189 => 93,  187 => 92,  185 => 91,  183 => 90,  181 => 89,  179 => 88,  177 => 87,  174 => 85,  172 => 84,  170 => 83,  168 => 82,  166 => 81,  164 => 80,  162 => 79,  160 => 78,  158 => 77,  156 => 76,  154 => 75,  152 => 74,  150 => 73,  148 => 72,  146 => 71,  144 => 70,  142 => 69,  140 => 68,  138 => 67,  136 => 66,  134 => 65,  132 => 64,  130 => 63,  128 => 62,  126 => 61,  122 => 59,  118 => 58,  114 => 57,  107 => 53,  97 => 45,  95 => 44,  92 => 42,  90 => 41,  88 => 40,  86 => 39,  84 => 38,  82 => 37,  80 => 36,  78 => 35,  69 => 28,  65 => 27,  53 => 18,  35 => 2,  23 => 1,);
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
    <div class=\"header\">
        <div class=\"header-top\">
            <div class=\"container\">
                <div class=\"social\">
                    <ul>
                        <li><a href=\"#\"><i class=\"facebok\"> </i></a></li>
                        <li><a href=\"#\"><i class=\"twiter\"> </i></a></li>
                        <li><a href=\"#\"><i class=\"inst\"> </i></a></li>
                        <li><a href=\"#\"><i class=\"goog\"> </i></a></li>
                        <div class=\"clearfix\"></div>
                    </ul>
                </div>
                <div class=\"header-left\">

                    <div class=\"search-box\">
                        <div id=\"sb-search\" class=\"sb-search\">
                            <form action=\"{{ path('search') }}\" method=\"get\">
                                <input class=\"sb-search-input\" placeholder=\"Enter your search term...\" type=\"search\"  id=\"search\" name=\"kw\">
                                <input class=\"sb-search-submit\" type=\"submit\" value=\"\">
                                <span class=\"sb-icon-search\"> </span>
                            </form>
                        </div>
                    </div>

                    <!-- search-scripts -->
                    <script src=\"{{ asset('bundles/front/js/classie.js') }}\"></script>
                    <script src=\"{{ asset('bundles/front/js/uisearch.js') }}\"></script>
                    <script>
                        new UISearch( document.getElementById( 'sb-search' ) );
                    </script>
                    <!-- //search-scripts -->

                    {#<div class=\"ca-r\">#}
                        {#<div class=\"cart box_1\">#}
                            {#<a href=\"checkout.html\">#}
                                {#<h3> <div class=\"total\">#}
                                        {#<span class=\"simpleCart_total\"></span> </div>#}
                                    {#<img src=\"/bundles/front/images/cart.png\" alt=\"\"/></h3>#}
                            {#</a>#}
                            {#<p><a href=\"javascript:;\" class=\"simpleCart_empty\">Empty Cart</a></p>#}

                        {#</div>#}
                    {#</div>#}
                    <div class=\"clearfix\"> </div>
                </div>

            </div>
        </div>
        <div class=\"container\">
            <div class=\"head-top\">
                <div class=\"logo\">
                    <h1><a href=\"{{ path('homepage') }}\">Your Home</a></h1>
                </div>
                <div class=\" h_menu4\">
                    <ul class=\"memenu skyblue\">
                        <li><a class=\"color8\" href=\"{{ path('category', {cateSlug: 'dac-trung'}) }}\">ĐẶC TRƯNG</a></li>
                        <li><a class=\"color8\" href=\"{{ path('category', {cateSlug: 'nhap-khau'}) }}\">NHẬP KHẨU</a></li>
                        <li><a class=\"color8\" href=\"{{ path('category', {cateSlug: 'sang-tao'}) }}\">SÁNG TẠO</a></li>
                        {#<li><a class=\"color1\" href=\"#\">SẢN PHẨM</a>#}
                            {#<div class=\"mepanel\">#}
                                {#<div class=\"row\">#}
                                    {#<div class=\"col3\">#}
                                        {#<div class=\"h_nav\">#}
                                            {#<ul>#}
                                                {#<li><a href=\"products.html\">Sản phẩm đặc trưng</a></li>#}
                                                {#<li><a href=\"products.html\">Sản phẩm nhập khẩu</a></li>#}
                                                {#<li><a href=\"products.html\">Sản phẩm sáng tạo</a></li>#}
                                            {#</ul>#}
                                        {#</div>#}
                                    {#</div>#}
                                    {#<div class=\"col1\">#}
                                        {#<div class=\"h_nav\">#}
                                            {#<ul>#}
                                                {#<li><a href=\"products.html\">Alpaca</a></li>#}
                                                {#<li><a href=\"products.html\">Cashmere</a></li>#}
                                                {#<li><a href=\"products.html\">Cotton</a></li>#}
                                                {#<li><a href=\"products.html\">Cotton Blend</a></li>#}
                                                {#<li><a href=\"products.html\">Down</a></li>#}
                                                {#<li><a href=\"products.html\">Down Alternative</a></li>#}
                                                {#<li><a href=\"products.html\">Egyptian Cotton</a></li>#}
                                                {#<li><a href=\"products.html\">Modal</a></li>#}
                                                {#<li><a href=\"products.html\">Pima Cotton</a></li>#}
                                                {#<li><a href=\"products.html\">Silk </a></li>#}

                                            {#</ul>#}
                                        {#</div>#}
                                    {#</div>#}
                                    {#<div class=\"col1\">#}
                                        {#<div class=\"h_nav\">#}
                                            {#<ul>#}
                                                {#<li><a href=\"products.html\">Bedskirt</a></li>#}
                                                {#<li><a href=\"products.html\">Blanket/Throw</a></li>#}
                                                {#<li><a href=\"products.html\">Collection/Duvet</a></li>#}
                                                {#<li><a href=\"products.html\">Comforter</a></li>#}
                                                {#<li><a href=\"products.html\">Comforter Set</a></li>#}
                                                {#<li><a href=\"products.html\">Decorative Pillow</a></li>#}
                                                {#<li><a href=\"products.html\">Mattress Pad </a></li>#}
                                                {#<li><a href=\"products.html\">Mattress Topper</a></li>#}
                                                {#<li><a href=\"products.html\">Pillow</a></li>#}
                                                {#<li><a href=\"products.html\">Pillow Protector</a></li>#}
                                            {#</ul>#}
                                        {#</div>#}
                                    {#</div>#}
                                {#</div>#}
                            {#</div>#}
                        {#</li>#}
                        {#<li class=\"grid\"><a class=\"color2\" href=\"#\">BEDSPREADS</a>#}
                            {#<div class=\"mepanel\">#}
                                {#<div class=\"row\">#}
                                    {#<div class=\"col1\">#}
                                        {#<div class=\"h_nav\">#}
                                            {#<ul>#}
                                                {#<li><a href=\"products.html\">Bedskirt</a></li>#}
                                                {#<li><a href=\"products.html\">Blanket/Throw</a></li>#}
                                                {#<li><a href=\"products.html\">Collection/Duvet</a></li>#}
                                                {#<li><a href=\"products.html\">Comforter</a></li>#}
                                                {#<li><a href=\"products.html\">Comforter Set</a></li>#}
                                                {#<li><a href=\"products.html\">Decorative Pillow</a></li>#}
                                                {#<li><a href=\"products.html\">Mattress Pad </a></li>#}
                                                {#<li><a href=\"products.html\">Mattress Topper</a></li>#}
                                                {#<li><a href=\"products.html\">Pillow</a></li>#}
                                                {#<li><a href=\"products.html\">Pillow Protector</a></li>#}

                                            {#</ul>#}
                                        {#</div>#}
                                    {#</div>#}
                                    {#<div class=\"col1\">#}
                                        {#<div class=\"h_nav\">#}
                                            {#<ul>#}
                                                {#<li><a href=\"products.html\">Alpaca</a></li>#}
                                                {#<li><a href=\"products.html\">Cashmere</a></li>#}
                                                {#<li><a href=\"products.html\">Cotton</a></li>#}
                                                {#<li><a href=\"products.html\">Cotton Blend</a></li>#}
                                                {#<li><a href=\"products.html\">Down</a></li>#}
                                                {#<li><a href=\"products.html\">Down Alternative</a></li>#}
                                                {#<li><a href=\"products.html\">Egyptian Cotton</a></li>#}
                                                {#<li><a href=\"products.html\">Modal</a></li>#}
                                                {#<li><a href=\"products.html\">Pima Cotton</a></li>#}
                                                {#<li><a href=\"products.html\">Silk </a></li>#}

                                            {#</ul>#}
                                        {#</div>#}
                                    {#</div>#}
                                    {#<div class=\"col1\">#}
                                        {#<div class=\"h_nav\">#}

                                            {#<ul>#}
                                                {#<li><a href=\"products.html\">Bedskirt</a></li>#}
                                                {#<li><a href=\"products.html\">Blanket/Throw</a></li>#}
                                                {#<li><a href=\"products.html\">Collection/Duvet</a></li>#}
                                                {#<li><a href=\"products.html\">Comforter</a></li>#}
                                                {#<li><a href=\"products.html\">Comforter Set</a></li>#}
                                                {#<li><a href=\"products.html\">Decorative Pillow</a></li>#}
                                                {#<li><a href=\"products.html\">Mattress Pad </a></li>#}
                                                {#<li><a href=\"products.html\">Mattress Topper</a></li>#}
                                                {#<li><a href=\"products.html\">Pillow</a></li>#}
                                                {#<li><a href=\"products.html\">Pillow Protector</a></li>#}
                                            {#</ul>#}
                                        {#</div>#}
                                    {#</div>#}
                                {#</div>#}
                            {#</div>#}
                        {#</li>#}
                        {#<li><a class=\"color4\" href=\"login.html\">Login</a></li>#}
                        <li><a class=\"color6\" href=\"contact.html\">Contact</a></li>
                    </ul>
                </div>

                <div class=\"clearfix\"> </div>
            </div>
        </div>
    </div>
{% endblock %}", "FrontBundle:Default:_header.html.twig", "D:\\Projects\\yourhome_v1\\src\\FrontBundle/Resources/views/Default/_header.html.twig");
    }
}
