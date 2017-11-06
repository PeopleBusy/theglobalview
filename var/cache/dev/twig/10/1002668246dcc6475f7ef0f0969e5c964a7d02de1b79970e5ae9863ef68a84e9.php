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
        $__internal_692edcf612f8e706682333519ee96f585cc3f94d975663e8d10f87d735f14c5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_692edcf612f8e706682333519ee96f585cc3f94d975663e8d10f87d735f14c5b->enter($__internal_692edcf612f8e706682333519ee96f585cc3f94d975663e8d10f87d735f14c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_687b57c4d67bfb7f9e1c5f578d5989ccd50962b0b40aa3b8dba02e3eeaa5569a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_687b57c4d67bfb7f9e1c5f578d5989ccd50962b0b40aa3b8dba02e3eeaa5569a->enter($__internal_687b57c4d67bfb7f9e1c5f578d5989ccd50962b0b40aa3b8dba02e3eeaa5569a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_692edcf612f8e706682333519ee96f585cc3f94d975663e8d10f87d735f14c5b->leave($__internal_692edcf612f8e706682333519ee96f585cc3f94d975663e8d10f87d735f14c5b_prof);

        
        $__internal_687b57c4d67bfb7f9e1c5f578d5989ccd50962b0b40aa3b8dba02e3eeaa5569a->leave($__internal_687b57c4d67bfb7f9e1c5f578d5989ccd50962b0b40aa3b8dba02e3eeaa5569a_prof);

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
