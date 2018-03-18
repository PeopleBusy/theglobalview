<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_95f3960d2ecc13233d7c5b465148685aafd81671e39054636612bedf73699f69 extends Twig_Template
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
        $__internal_e241b60526db476f98473d67edc6aecb1a0866510559abe7cf15e38b5f15ad98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e241b60526db476f98473d67edc6aecb1a0866510559abe7cf15e38b5f15ad98->enter($__internal_e241b60526db476f98473d67edc6aecb1a0866510559abe7cf15e38b5f15ad98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_7870fcbb4af4964dc5138299dba08aac6fa6da00f935ea5f9fc7da11c16461ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7870fcbb4af4964dc5138299dba08aac6fa6da00f935ea5f9fc7da11c16461ca->enter($__internal_7870fcbb4af4964dc5138299dba08aac6fa6da00f935ea5f9fc7da11c16461ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_e241b60526db476f98473d67edc6aecb1a0866510559abe7cf15e38b5f15ad98->leave($__internal_e241b60526db476f98473d67edc6aecb1a0866510559abe7cf15e38b5f15ad98_prof);

        
        $__internal_7870fcbb4af4964dc5138299dba08aac6fa6da00f935ea5f9fc7da11c16461ca->leave($__internal_7870fcbb4af4964dc5138299dba08aac6fa6da00f935ea5f9fc7da11c16461ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
