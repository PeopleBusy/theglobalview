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
        $__internal_88b43ee0db7f04dca5afb16e10bd29eeda7ec1e8bd29a5abb6f9df3e48f694cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88b43ee0db7f04dca5afb16e10bd29eeda7ec1e8bd29a5abb6f9df3e48f694cd->enter($__internal_88b43ee0db7f04dca5afb16e10bd29eeda7ec1e8bd29a5abb6f9df3e48f694cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_11732923e98052767b24cea218810c91cb906ace31f51b124074923ef7feacd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11732923e98052767b24cea218810c91cb906ace31f51b124074923ef7feacd3->enter($__internal_11732923e98052767b24cea218810c91cb906ace31f51b124074923ef7feacd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_88b43ee0db7f04dca5afb16e10bd29eeda7ec1e8bd29a5abb6f9df3e48f694cd->leave($__internal_88b43ee0db7f04dca5afb16e10bd29eeda7ec1e8bd29a5abb6f9df3e48f694cd_prof);

        
        $__internal_11732923e98052767b24cea218810c91cb906ace31f51b124074923ef7feacd3->leave($__internal_11732923e98052767b24cea218810c91cb906ace31f51b124074923ef7feacd3_prof);

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
