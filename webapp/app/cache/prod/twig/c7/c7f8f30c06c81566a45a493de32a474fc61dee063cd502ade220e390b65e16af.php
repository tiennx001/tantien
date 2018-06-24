<?php

/* FrontBundle:Default:_header.html.twig */
class __TwigTemplate_158287cb4a057c9ca5df79d48469f6a07438064627fb2890c194362f74bbb28b extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:_header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  323 => 166,  321 => 165,  319 => 164,  317 => 163,  315 => 162,  313 => 161,  311 => 160,  309 => 159,  307 => 158,  305 => 157,  303 => 156,  301 => 155,  299 => 154,  297 => 153,  295 => 152,  293 => 151,  291 => 150,  289 => 149,  286 => 147,  284 => 146,  282 => 145,  280 => 144,  278 => 143,  275 => 141,  273 => 140,  271 => 139,  269 => 138,  267 => 137,  265 => 136,  263 => 135,  261 => 134,  259 => 133,  257 => 132,  255 => 131,  253 => 130,  251 => 129,  249 => 128,  247 => 127,  245 => 126,  242 => 124,  240 => 123,  238 => 122,  236 => 121,  234 => 120,  232 => 119,  230 => 118,  228 => 117,  226 => 116,  224 => 115,  222 => 114,  220 => 113,  218 => 112,  216 => 111,  214 => 110,  212 => 109,  210 => 108,  208 => 107,  206 => 106,  204 => 105,  202 => 104,  200 => 103,  198 => 102,  196 => 101,  194 => 100,  192 => 99,  190 => 98,  188 => 97,  186 => 96,  184 => 95,  182 => 94,  180 => 93,  178 => 92,  176 => 91,  174 => 90,  172 => 89,  170 => 88,  168 => 87,  165 => 85,  163 => 84,  161 => 83,  159 => 82,  157 => 81,  155 => 80,  153 => 79,  151 => 78,  149 => 77,  147 => 76,  145 => 75,  143 => 74,  141 => 73,  139 => 72,  137 => 71,  135 => 70,  133 => 69,  131 => 68,  129 => 67,  127 => 66,  125 => 65,  123 => 64,  121 => 63,  119 => 62,  117 => 61,  113 => 59,  109 => 58,  105 => 57,  98 => 53,  88 => 45,  86 => 44,  83 => 42,  81 => 41,  79 => 40,  77 => 39,  75 => 38,  73 => 37,  71 => 36,  69 => 35,  60 => 28,  56 => 27,  44 => 18,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle:Default:_header.html.twig", "D:\\Projects\\yourhome_v1\\src\\FrontBundle/Resources/views/Default/_header.html.twig");
    }
}
