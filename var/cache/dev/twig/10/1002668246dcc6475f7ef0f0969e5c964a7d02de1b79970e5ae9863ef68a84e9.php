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
        $__internal_d499f41cfa0657076aabd19461226695124c66f1cb7537b56a6ca3da77dbb105 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d499f41cfa0657076aabd19461226695124c66f1cb7537b56a6ca3da77dbb105->enter($__internal_d499f41cfa0657076aabd19461226695124c66f1cb7537b56a6ca3da77dbb105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_60547f0d01c9c85b0a36ff9fed7108e73b57ca9cc8ede0461fa7a8fd13a3d18c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60547f0d01c9c85b0a36ff9fed7108e73b57ca9cc8ede0461fa7a8fd13a3d18c->enter($__internal_60547f0d01c9c85b0a36ff9fed7108e73b57ca9cc8ede0461fa7a8fd13a3d18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_d499f41cfa0657076aabd19461226695124c66f1cb7537b56a6ca3da77dbb105->leave($__internal_d499f41cfa0657076aabd19461226695124c66f1cb7537b56a6ca3da77dbb105_prof);

        
        $__internal_60547f0d01c9c85b0a36ff9fed7108e73b57ca9cc8ede0461fa7a8fd13a3d18c->leave($__internal_60547f0d01c9c85b0a36ff9fed7108e73b57ca9cc8ede0461fa7a8fd13a3d18c_prof);

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
", "@Framework/Form/email_widget.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
