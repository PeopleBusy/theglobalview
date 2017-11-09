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
        $__internal_31e666c805b7cff88de5f1bd23f7447cbaa652f858c207a01c37c50d842d3f6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31e666c805b7cff88de5f1bd23f7447cbaa652f858c207a01c37c50d842d3f6d->enter($__internal_31e666c805b7cff88de5f1bd23f7447cbaa652f858c207a01c37c50d842d3f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_be936fbd9c42fe7366e7e6015af396bf84fa1fceb4478f525def2f375206c77c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be936fbd9c42fe7366e7e6015af396bf84fa1fceb4478f525def2f375206c77c->enter($__internal_be936fbd9c42fe7366e7e6015af396bf84fa1fceb4478f525def2f375206c77c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_31e666c805b7cff88de5f1bd23f7447cbaa652f858c207a01c37c50d842d3f6d->leave($__internal_31e666c805b7cff88de5f1bd23f7447cbaa652f858c207a01c37c50d842d3f6d_prof);

        
        $__internal_be936fbd9c42fe7366e7e6015af396bf84fa1fceb4478f525def2f375206c77c->leave($__internal_be936fbd9c42fe7366e7e6015af396bf84fa1fceb4478f525def2f375206c77c_prof);

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
