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
        $__internal_0eff91a1d0f9a8357cb2ec6bb0ea59861133db776a4cbf1e2b72ff8a3aa4f26c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eff91a1d0f9a8357cb2ec6bb0ea59861133db776a4cbf1e2b72ff8a3aa4f26c->enter($__internal_0eff91a1d0f9a8357cb2ec6bb0ea59861133db776a4cbf1e2b72ff8a3aa4f26c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_144a08f7213828fefcb839aa0a26a3b4f2f5b0f54fb5e6cfaf5c98d58878c3eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_144a08f7213828fefcb839aa0a26a3b4f2f5b0f54fb5e6cfaf5c98d58878c3eb->enter($__internal_144a08f7213828fefcb839aa0a26a3b4f2f5b0f54fb5e6cfaf5c98d58878c3eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_0eff91a1d0f9a8357cb2ec6bb0ea59861133db776a4cbf1e2b72ff8a3aa4f26c->leave($__internal_0eff91a1d0f9a8357cb2ec6bb0ea59861133db776a4cbf1e2b72ff8a3aa4f26c_prof);

        
        $__internal_144a08f7213828fefcb839aa0a26a3b4f2f5b0f54fb5e6cfaf5c98d58878c3eb->leave($__internal_144a08f7213828fefcb839aa0a26a3b4f2f5b0f54fb5e6cfaf5c98d58878c3eb_prof);

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
