<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_c9a5374bd830ac0c18df72a97809279c948f553f93862bbd9587e96ef7da33fb extends Twig_Template
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
        $__internal_cee64733474c113a97b7880d33b194ff89d04d5cf7111931b5bf4224a066d586 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cee64733474c113a97b7880d33b194ff89d04d5cf7111931b5bf4224a066d586->enter($__internal_cee64733474c113a97b7880d33b194ff89d04d5cf7111931b5bf4224a066d586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_165b4cf12b2c61a20a4ede750d1f3cf185f5a8b0c1c80ede814c3f58d9432f2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_165b4cf12b2c61a20a4ede750d1f3cf185f5a8b0c1c80ede814c3f58d9432f2d->enter($__internal_165b4cf12b2c61a20a4ede750d1f3cf185f5a8b0c1c80ede814c3f58d9432f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_cee64733474c113a97b7880d33b194ff89d04d5cf7111931b5bf4224a066d586->leave($__internal_cee64733474c113a97b7880d33b194ff89d04d5cf7111931b5bf4224a066d586_prof);

        
        $__internal_165b4cf12b2c61a20a4ede750d1f3cf185f5a8b0c1c80ede814c3f58d9432f2d->leave($__internal_165b4cf12b2c61a20a4ede750d1f3cf185f5a8b0c1c80ede814c3f58d9432f2d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
