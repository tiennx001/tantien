<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_1160145e5d0ec67b86387678099d1e691a884a537c39ac2f533b6f1e323dc054 extends Twig_Template
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
        $__internal_c6b0dccfd5bd8d9548f3f1fc3be58bcd5206a411e517518f0b3fd297317f49c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6b0dccfd5bd8d9548f3f1fc3be58bcd5206a411e517518f0b3fd297317f49c7->enter($__internal_c6b0dccfd5bd8d9548f3f1fc3be58bcd5206a411e517518f0b3fd297317f49c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_c6b0dccfd5bd8d9548f3f1fc3be58bcd5206a411e517518f0b3fd297317f49c7->leave($__internal_c6b0dccfd5bd8d9548f3f1fc3be58bcd5206a411e517518f0b3fd297317f49c7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "D:\\Projects\\yourhome_v1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
