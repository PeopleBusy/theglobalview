<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_0ba95a9347fc2cd647874fd1690a4387da35ae3de9097213c51cadb78be49048 extends Twig_Template
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
        $__internal_50c0f6132fffc7375f2cc790ea6deefbf8eb9059fb546df3574901e0390b0aa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50c0f6132fffc7375f2cc790ea6deefbf8eb9059fb546df3574901e0390b0aa0->enter($__internal_50c0f6132fffc7375f2cc790ea6deefbf8eb9059fb546df3574901e0390b0aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_be28064ee28574d64ad5109be67b23fc97050540dbe30d417d53c03c54241836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be28064ee28574d64ad5109be67b23fc97050540dbe30d417d53c03c54241836->enter($__internal_be28064ee28574d64ad5109be67b23fc97050540dbe30d417d53c03c54241836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_50c0f6132fffc7375f2cc790ea6deefbf8eb9059fb546df3574901e0390b0aa0->leave($__internal_50c0f6132fffc7375f2cc790ea6deefbf8eb9059fb546df3574901e0390b0aa0_prof);

        
        $__internal_be28064ee28574d64ad5109be67b23fc97050540dbe30d417d53c03c54241836->leave($__internal_be28064ee28574d64ad5109be67b23fc97050540dbe30d417d53c03c54241836_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
