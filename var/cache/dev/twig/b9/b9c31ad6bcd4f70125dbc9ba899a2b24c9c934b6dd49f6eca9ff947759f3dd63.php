<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_a80df5f5f417cf09690c0e3a3f949abbe3bdfb2f0ec68c04ad002d6bb60de0b5 extends Twig_Template
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
        $__internal_703be8c285124d3a69c30f407a106ac63fa9475d1cf739a56622cdf1e6ae16df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_703be8c285124d3a69c30f407a106ac63fa9475d1cf739a56622cdf1e6ae16df->enter($__internal_703be8c285124d3a69c30f407a106ac63fa9475d1cf739a56622cdf1e6ae16df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_84fc0df86ec3a579f8539938fa9228fe8fdb30fd7f83447fc6753c917eeaeaef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84fc0df86ec3a579f8539938fa9228fe8fdb30fd7f83447fc6753c917eeaeaef->enter($__internal_84fc0df86ec3a579f8539938fa9228fe8fdb30fd7f83447fc6753c917eeaeaef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_703be8c285124d3a69c30f407a106ac63fa9475d1cf739a56622cdf1e6ae16df->leave($__internal_703be8c285124d3a69c30f407a106ac63fa9475d1cf739a56622cdf1e6ae16df_prof);

        
        $__internal_84fc0df86ec3a579f8539938fa9228fe8fdb30fd7f83447fc6753c917eeaeaef->leave($__internal_84fc0df86ec3a579f8539938fa9228fe8fdb30fd7f83447fc6753c917eeaeaef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
