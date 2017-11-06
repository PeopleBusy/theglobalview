<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_fd30ac2723f65fa427fc1bec979d18dca99ab79db3dd9dd951b5929657d48bc8 extends Twig_Template
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
        $__internal_4b85f56461cad0bd48c85e303363899eb7ceb9a494cf4162f650ed178de5c757 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b85f56461cad0bd48c85e303363899eb7ceb9a494cf4162f650ed178de5c757->enter($__internal_4b85f56461cad0bd48c85e303363899eb7ceb9a494cf4162f650ed178de5c757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_291ee8e0972760849f006a88a0d05f6a729325065e7fe32b7c17109fad0da908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_291ee8e0972760849f006a88a0d05f6a729325065e7fe32b7c17109fad0da908->enter($__internal_291ee8e0972760849f006a88a0d05f6a729325065e7fe32b7c17109fad0da908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_4b85f56461cad0bd48c85e303363899eb7ceb9a494cf4162f650ed178de5c757->leave($__internal_4b85f56461cad0bd48c85e303363899eb7ceb9a494cf4162f650ed178de5c757_prof);

        
        $__internal_291ee8e0972760849f006a88a0d05f6a729325065e7fe32b7c17109fad0da908->leave($__internal_291ee8e0972760849f006a88a0d05f6a729325065e7fe32b7c17109fad0da908_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
