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
        $__internal_a7e6a7d3c6c250f7bb87fc9b7dcdeadf787c5614f02ce5ba02870017012496f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7e6a7d3c6c250f7bb87fc9b7dcdeadf787c5614f02ce5ba02870017012496f8->enter($__internal_a7e6a7d3c6c250f7bb87fc9b7dcdeadf787c5614f02ce5ba02870017012496f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_c4a2ab6708dca8818d7ef239a8b520b8cc2bbed7c26e077dff37d7720d6f86f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4a2ab6708dca8818d7ef239a8b520b8cc2bbed7c26e077dff37d7720d6f86f7->enter($__internal_c4a2ab6708dca8818d7ef239a8b520b8cc2bbed7c26e077dff37d7720d6f86f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_a7e6a7d3c6c250f7bb87fc9b7dcdeadf787c5614f02ce5ba02870017012496f8->leave($__internal_a7e6a7d3c6c250f7bb87fc9b7dcdeadf787c5614f02ce5ba02870017012496f8_prof);

        
        $__internal_c4a2ab6708dca8818d7ef239a8b520b8cc2bbed7c26e077dff37d7720d6f86f7->leave($__internal_c4a2ab6708dca8818d7ef239a8b520b8cc2bbed7c26e077dff37d7720d6f86f7_prof);

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
", "@Framework/Form/url_widget.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
