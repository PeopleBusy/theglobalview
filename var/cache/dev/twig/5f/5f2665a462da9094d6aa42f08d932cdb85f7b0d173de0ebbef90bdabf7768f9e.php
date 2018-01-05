<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_84a08d5aff659eb1162de69ab3af959857724d7b5a48bfe7bcead5a0bc9cc294 extends Twig_Template
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
        $__internal_c96485dde90b9f130550747db22b6f04f24d6fd505895cbc0b33581821767f5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c96485dde90b9f130550747db22b6f04f24d6fd505895cbc0b33581821767f5b->enter($__internal_c96485dde90b9f130550747db22b6f04f24d6fd505895cbc0b33581821767f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_a37f09035c37273ea0cbeab4e0c69601a2193f92c059ef64da477cddd5c28c91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a37f09035c37273ea0cbeab4e0c69601a2193f92c059ef64da477cddd5c28c91->enter($__internal_a37f09035c37273ea0cbeab4e0c69601a2193f92c059ef64da477cddd5c28c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_c96485dde90b9f130550747db22b6f04f24d6fd505895cbc0b33581821767f5b->leave($__internal_c96485dde90b9f130550747db22b6f04f24d6fd505895cbc0b33581821767f5b_prof);

        
        $__internal_a37f09035c37273ea0cbeab4e0c69601a2193f92c059ef64da477cddd5c28c91->leave($__internal_a37f09035c37273ea0cbeab4e0c69601a2193f92c059ef64da477cddd5c28c91_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
