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
        $__internal_9eaefadbc5b0a777ce91052671aa82b267f41e58dd3e4d81197554feb5fea442 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eaefadbc5b0a777ce91052671aa82b267f41e58dd3e4d81197554feb5fea442->enter($__internal_9eaefadbc5b0a777ce91052671aa82b267f41e58dd3e4d81197554feb5fea442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_b22a48724ca69d8cb77978aefad1907ad13790a7295880df1e1dbff24f0019a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b22a48724ca69d8cb77978aefad1907ad13790a7295880df1e1dbff24f0019a5->enter($__internal_b22a48724ca69d8cb77978aefad1907ad13790a7295880df1e1dbff24f0019a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_9eaefadbc5b0a777ce91052671aa82b267f41e58dd3e4d81197554feb5fea442->leave($__internal_9eaefadbc5b0a777ce91052671aa82b267f41e58dd3e4d81197554feb5fea442_prof);

        
        $__internal_b22a48724ca69d8cb77978aefad1907ad13790a7295880df1e1dbff24f0019a5->leave($__internal_b22a48724ca69d8cb77978aefad1907ad13790a7295880df1e1dbff24f0019a5_prof);

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
