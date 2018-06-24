<?php

/* @FOSUser/Resetting/request_content.html.twig */
class __TwigTemplate_f3bb22ad0b39ae976824b924c70fd24a2e87ae726cb777afeebc7b7097fa83c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    ";
        // line 2
        if (array_key_exists("invalid_username", $context)) {
            // line 3
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : null)), "FOSUserBundle"), "html", null, true);
            echo "</div>
    ";
        }
        // line 5
        echo "
    <div class=\"form-group\">
        <label for=\"username\" class=\"control-label required\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo " * </label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>

    <div class=\"form-actions form-group\">
        <div class=\"col-sm-offset-3 col-sm-9\">
            <input type=\"submit\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary\" />
        </div>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 13,  36 => 7,  32 => 5,  26 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSUser/Resetting/request_content.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\user-bundle\\Resources\\views\\Resetting\\request_content.html.twig");
    }
}
