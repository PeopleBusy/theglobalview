<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_67ac38eb8851a1e005ef822c718c50ff1a2b331fe31ad61881edc4b6ce05b9a8 extends Twig_Template
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
        $__internal_57dbf734d52d1d673ce141f1835d50b5d12994f65da938911bb709c6944c6bf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57dbf734d52d1d673ce141f1835d50b5d12994f65da938911bb709c6944c6bf9->enter($__internal_57dbf734d52d1d673ce141f1835d50b5d12994f65da938911bb709c6944c6bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_7799f794aa7602948c4b097060ab05c4c018596bb2b63bd7fe20ae7c4b992dbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7799f794aa7602948c4b097060ab05c4c018596bb2b63bd7fe20ae7c4b992dbd->enter($__internal_7799f794aa7602948c4b097060ab05c4c018596bb2b63bd7fe20ae7c4b992dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_57dbf734d52d1d673ce141f1835d50b5d12994f65da938911bb709c6944c6bf9->leave($__internal_57dbf734d52d1d673ce141f1835d50b5d12994f65da938911bb709c6944c6bf9_prof);

        
        $__internal_7799f794aa7602948c4b097060ab05c4c018596bb2b63bd7fe20ae7c4b992dbd->leave($__internal_7799f794aa7602948c4b097060ab05c4c018596bb2b63bd7fe20ae7c4b992dbd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
