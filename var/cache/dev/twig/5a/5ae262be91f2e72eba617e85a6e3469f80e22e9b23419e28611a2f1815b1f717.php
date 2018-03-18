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
        $__internal_ec17bebc050f593e8d346e9fd4937da3a6d5be32cae1f07641ff0224a9bd7869 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec17bebc050f593e8d346e9fd4937da3a6d5be32cae1f07641ff0224a9bd7869->enter($__internal_ec17bebc050f593e8d346e9fd4937da3a6d5be32cae1f07641ff0224a9bd7869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_d99804f9f2c951ca7fbe42feb9bff5f140e9bf03bc7081ec59257d7374a135d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d99804f9f2c951ca7fbe42feb9bff5f140e9bf03bc7081ec59257d7374a135d5->enter($__internal_d99804f9f2c951ca7fbe42feb9bff5f140e9bf03bc7081ec59257d7374a135d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_ec17bebc050f593e8d346e9fd4937da3a6d5be32cae1f07641ff0224a9bd7869->leave($__internal_ec17bebc050f593e8d346e9fd4937da3a6d5be32cae1f07641ff0224a9bd7869_prof);

        
        $__internal_d99804f9f2c951ca7fbe42feb9bff5f140e9bf03bc7081ec59257d7374a135d5->leave($__internal_d99804f9f2c951ca7fbe42feb9bff5f140e9bf03bc7081ec59257d7374a135d5_prof);

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
