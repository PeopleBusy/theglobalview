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
        $__internal_03116b083daf1ed4f56a20d6c1c95dafbc71e50e8db3ee7f0ccb75c62d363a3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03116b083daf1ed4f56a20d6c1c95dafbc71e50e8db3ee7f0ccb75c62d363a3c->enter($__internal_03116b083daf1ed4f56a20d6c1c95dafbc71e50e8db3ee7f0ccb75c62d363a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_b937bed857ed3718fdadfd8abc8f1314bc649a944fa71861912b9212be06ce70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b937bed857ed3718fdadfd8abc8f1314bc649a944fa71861912b9212be06ce70->enter($__internal_b937bed857ed3718fdadfd8abc8f1314bc649a944fa71861912b9212be06ce70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_03116b083daf1ed4f56a20d6c1c95dafbc71e50e8db3ee7f0ccb75c62d363a3c->leave($__internal_03116b083daf1ed4f56a20d6c1c95dafbc71e50e8db3ee7f0ccb75c62d363a3c_prof);

        
        $__internal_b937bed857ed3718fdadfd8abc8f1314bc649a944fa71861912b9212be06ce70->leave($__internal_b937bed857ed3718fdadfd8abc8f1314bc649a944fa71861912b9212be06ce70_prof);

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
