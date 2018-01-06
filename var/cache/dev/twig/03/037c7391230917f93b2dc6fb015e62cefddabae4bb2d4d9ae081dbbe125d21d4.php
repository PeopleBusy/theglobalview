<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_a0c1f4add1c314d2eb65968091d183b16c6c2dfed7e790e2a48d341a146cf5fc extends Twig_Template
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
        $__internal_4ee6151deb819e217aab67e3e766bf4d1805519585fbd0e27545bd8e9dff6bee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ee6151deb819e217aab67e3e766bf4d1805519585fbd0e27545bd8e9dff6bee->enter($__internal_4ee6151deb819e217aab67e3e766bf4d1805519585fbd0e27545bd8e9dff6bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_6f7f6fc357abddd5daeca407b23cb1e675b8f6b4b84a3b64bc4c7661bbddf529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f7f6fc357abddd5daeca407b23cb1e675b8f6b4b84a3b64bc4c7661bbddf529->enter($__internal_6f7f6fc357abddd5daeca407b23cb1e675b8f6b4b84a3b64bc4c7661bbddf529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_4ee6151deb819e217aab67e3e766bf4d1805519585fbd0e27545bd8e9dff6bee->leave($__internal_4ee6151deb819e217aab67e3e766bf4d1805519585fbd0e27545bd8e9dff6bee_prof);

        
        $__internal_6f7f6fc357abddd5daeca407b23cb1e675b8f6b4b84a3b64bc4c7661bbddf529->leave($__internal_6f7f6fc357abddd5daeca407b23cb1e675b8f6b4b84a3b64bc4c7661bbddf529_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
