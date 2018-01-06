<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_aaf375094ff5668e0dfa485d63c74634f55fc2a0dec922e2802fe260e6362a06 extends Twig_Template
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
        $__internal_cf612a42b8e791d1f1277dbb53762478ba715fbaa8384c1cb0594a6768951504 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf612a42b8e791d1f1277dbb53762478ba715fbaa8384c1cb0594a6768951504->enter($__internal_cf612a42b8e791d1f1277dbb53762478ba715fbaa8384c1cb0594a6768951504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_a0a03c37e72495cbfa1a0f5459674ec934e63ed3ecfbcbc967654d97c171f466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0a03c37e72495cbfa1a0f5459674ec934e63ed3ecfbcbc967654d97c171f466->enter($__internal_a0a03c37e72495cbfa1a0f5459674ec934e63ed3ecfbcbc967654d97c171f466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_cf612a42b8e791d1f1277dbb53762478ba715fbaa8384c1cb0594a6768951504->leave($__internal_cf612a42b8e791d1f1277dbb53762478ba715fbaa8384c1cb0594a6768951504_prof);

        
        $__internal_a0a03c37e72495cbfa1a0f5459674ec934e63ed3ecfbcbc967654d97c171f466->leave($__internal_a0a03c37e72495cbfa1a0f5459674ec934e63ed3ecfbcbc967654d97c171f466_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
