<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_009fdd1ed931772b756724cea1bd0a349dc53cf8163283810640a0e7ea0c784e extends Twig_Template
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
        $__internal_6f214b5af013b853910bbeb3df69fd6dbd97f5ecd8b62cfab0802a30a1cc3c79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f214b5af013b853910bbeb3df69fd6dbd97f5ecd8b62cfab0802a30a1cc3c79->enter($__internal_6f214b5af013b853910bbeb3df69fd6dbd97f5ecd8b62cfab0802a30a1cc3c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_cca58bf54f88ca85805813f1975e56e6e5fdc408a7b81693fe27a1963d0f9843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cca58bf54f88ca85805813f1975e56e6e5fdc408a7b81693fe27a1963d0f9843->enter($__internal_cca58bf54f88ca85805813f1975e56e6e5fdc408a7b81693fe27a1963d0f9843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_6f214b5af013b853910bbeb3df69fd6dbd97f5ecd8b62cfab0802a30a1cc3c79->leave($__internal_6f214b5af013b853910bbeb3df69fd6dbd97f5ecd8b62cfab0802a30a1cc3c79_prof);

        
        $__internal_cca58bf54f88ca85805813f1975e56e6e5fdc408a7b81693fe27a1963d0f9843->leave($__internal_cca58bf54f88ca85805813f1975e56e6e5fdc408a7b81693fe27a1963d0f9843_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
