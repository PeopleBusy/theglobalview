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
        $__internal_b06bc47425238d3d89f8a22ab027854d3e589f56dba87d23d7e9c7306798565b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b06bc47425238d3d89f8a22ab027854d3e589f56dba87d23d7e9c7306798565b->enter($__internal_b06bc47425238d3d89f8a22ab027854d3e589f56dba87d23d7e9c7306798565b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_aaf2ad538264447d4709b422041c7903b7037c1c6abb6d81ed6491fcb1033e76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaf2ad538264447d4709b422041c7903b7037c1c6abb6d81ed6491fcb1033e76->enter($__internal_aaf2ad538264447d4709b422041c7903b7037c1c6abb6d81ed6491fcb1033e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_b06bc47425238d3d89f8a22ab027854d3e589f56dba87d23d7e9c7306798565b->leave($__internal_b06bc47425238d3d89f8a22ab027854d3e589f56dba87d23d7e9c7306798565b_prof);

        
        $__internal_aaf2ad538264447d4709b422041c7903b7037c1c6abb6d81ed6491fcb1033e76->leave($__internal_aaf2ad538264447d4709b422041c7903b7037c1c6abb6d81ed6491fcb1033e76_prof);

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
", "@Framework/Form/email_widget.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
