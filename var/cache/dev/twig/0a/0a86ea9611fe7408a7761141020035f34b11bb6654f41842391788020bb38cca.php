<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_b441c44769e4f234cacf0cd2a188faa3a16d1ecb248352011d94543ab0af9b55 extends Twig_Template
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
        $__internal_99d8627e5dfe8cc598c96302cf2c31ae7d678ee39e2c7d984443d1ed085a3866 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99d8627e5dfe8cc598c96302cf2c31ae7d678ee39e2c7d984443d1ed085a3866->enter($__internal_99d8627e5dfe8cc598c96302cf2c31ae7d678ee39e2c7d984443d1ed085a3866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_d9de9eeb46bc2b2f7170e0ac2cd60e06dfb1cea915a2e138a84ece66374351ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9de9eeb46bc2b2f7170e0ac2cd60e06dfb1cea915a2e138a84ece66374351ae->enter($__internal_d9de9eeb46bc2b2f7170e0ac2cd60e06dfb1cea915a2e138a84ece66374351ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_99d8627e5dfe8cc598c96302cf2c31ae7d678ee39e2c7d984443d1ed085a3866->leave($__internal_99d8627e5dfe8cc598c96302cf2c31ae7d678ee39e2c7d984443d1ed085a3866_prof);

        
        $__internal_d9de9eeb46bc2b2f7170e0ac2cd60e06dfb1cea915a2e138a84ece66374351ae->leave($__internal_d9de9eeb46bc2b2f7170e0ac2cd60e06dfb1cea915a2e138a84ece66374351ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
