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
        $__internal_e4bcca88d22b6c093845e0a4be65da0c8e8d2e5013105c88306f01e0c9b71ff1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4bcca88d22b6c093845e0a4be65da0c8e8d2e5013105c88306f01e0c9b71ff1->enter($__internal_e4bcca88d22b6c093845e0a4be65da0c8e8d2e5013105c88306f01e0c9b71ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_579308650e49b07e5d34e42f65152548a473524db408d4337896b1170104bfd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_579308650e49b07e5d34e42f65152548a473524db408d4337896b1170104bfd9->enter($__internal_579308650e49b07e5d34e42f65152548a473524db408d4337896b1170104bfd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_e4bcca88d22b6c093845e0a4be65da0c8e8d2e5013105c88306f01e0c9b71ff1->leave($__internal_e4bcca88d22b6c093845e0a4be65da0c8e8d2e5013105c88306f01e0c9b71ff1_prof);

        
        $__internal_579308650e49b07e5d34e42f65152548a473524db408d4337896b1170104bfd9->leave($__internal_579308650e49b07e5d34e42f65152548a473524db408d4337896b1170104bfd9_prof);

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
