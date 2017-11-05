<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_b4b111d021ed83cca877b45db787a66bcbbe3e5d57b032e913aaedce511fbf82 extends Twig_Template
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
        $__internal_04f8633430e0f06ffc505556cc8b99264e802ec33ae298ff396c1cfe4944a2cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04f8633430e0f06ffc505556cc8b99264e802ec33ae298ff396c1cfe4944a2cc->enter($__internal_04f8633430e0f06ffc505556cc8b99264e802ec33ae298ff396c1cfe4944a2cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_f1092d37bdedf2f5b614063723fc49dfb9fff3b20c53ee02fd78a22220a79042 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1092d37bdedf2f5b614063723fc49dfb9fff3b20c53ee02fd78a22220a79042->enter($__internal_f1092d37bdedf2f5b614063723fc49dfb9fff3b20c53ee02fd78a22220a79042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_04f8633430e0f06ffc505556cc8b99264e802ec33ae298ff396c1cfe4944a2cc->leave($__internal_04f8633430e0f06ffc505556cc8b99264e802ec33ae298ff396c1cfe4944a2cc_prof);

        
        $__internal_f1092d37bdedf2f5b614063723fc49dfb9fff3b20c53ee02fd78a22220a79042->leave($__internal_f1092d37bdedf2f5b614063723fc49dfb9fff3b20c53ee02fd78a22220a79042_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
