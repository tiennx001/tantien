<?php

/* @SonataUser/Profile/edit_authentication_content.html.twig */
class __TwigTemplate_30832f1170f9977272eb32c63a2ae20196529a2bdbbf5eb70f3a85fd59c7babf extends Twig_Template
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
        $__internal_1d29cabe6afeda5cc49824641bdbc1f293c02fa5bc86b2cb655afa1330947182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d29cabe6afeda5cc49824641bdbc1f293c02fa5bc86b2cb655afa1330947182->enter($__internal_1d29cabe6afeda5cc49824641bdbc1f293c02fa5bc86b2cb655afa1330947182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Profile/edit_authentication_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_user_profile_edit_authentication");
        echo "\" method=\"POST\" class=\"form-horizontal\">
    ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

    <button type=\"submit\" name=\"submit\" class=\"btn btn-primary pull-right\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sonata_user_submit", array(), "SonataUserBundle"), "html", null, true);
        echo "</button>
</form>
";
        
        $__internal_1d29cabe6afeda5cc49824641bdbc1f293c02fa5bc86b2cb655afa1330947182->leave($__internal_1d29cabe6afeda5cc49824641bdbc1f293c02fa5bc86b2cb655afa1330947182_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Profile/edit_authentication_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 4,  27 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form action=\"{{ path('sonata_user_profile_edit_authentication') }}\" method=\"POST\" class=\"form-horizontal\">
    {{ form_widget(form) }}

    <button type=\"submit\" name=\"submit\" class=\"btn btn-primary pull-right\">{{ 'sonata_user_submit'|trans({}, 'SonataUserBundle') }}</button>
</form>
", "@SonataUser/Profile/edit_authentication_content.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\user-bundle\\Resources\\views\\Profile\\edit_authentication_content.html.twig");
    }
}
