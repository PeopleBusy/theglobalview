<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_ee3b2e03b74483783f9efc53f41a8b3cc6071955fd55eeb04bd45e79e01bfb81 extends Twig_Template
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
        $__internal_0e494ab95ba63d284c6c677836e78ab20e1a045ffce4f332d80c95118cff6833 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e494ab95ba63d284c6c677836e78ab20e1a045ffce4f332d80c95118cff6833->enter($__internal_0e494ab95ba63d284c6c677836e78ab20e1a045ffce4f332d80c95118cff6833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_5e76bf4261f2275e32a21137ef98b8fd2cfb0d8e26c77bf93413fe64c62dfeee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e76bf4261f2275e32a21137ef98b8fd2cfb0d8e26c77bf93413fe64c62dfeee->enter($__internal_5e76bf4261f2275e32a21137ef98b8fd2cfb0d8e26c77bf93413fe64c62dfeee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_0e494ab95ba63d284c6c677836e78ab20e1a045ffce4f332d80c95118cff6833->leave($__internal_0e494ab95ba63d284c6c677836e78ab20e1a045ffce4f332d80c95118cff6833_prof);

        
        $__internal_5e76bf4261f2275e32a21137ef98b8fd2cfb0d8e26c77bf93413fe64c62dfeee->leave($__internal_5e76bf4261f2275e32a21137ef98b8fd2cfb0d8e26c77bf93413fe64c62dfeee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
