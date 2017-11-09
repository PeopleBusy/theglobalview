<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_efca0a0dfdf7562edb3926b8578c80fe5a6955488f21a924dafba193be2765e2 extends Twig_Template
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
        $__internal_a96d29633bb611f6185febf00f9fc31e498c843828557199c245efd81079326b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a96d29633bb611f6185febf00f9fc31e498c843828557199c245efd81079326b->enter($__internal_a96d29633bb611f6185febf00f9fc31e498c843828557199c245efd81079326b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_10cb395659007a6f33abee82e6b5602866af77ae39881dbdb4f6fffe26c6d6df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10cb395659007a6f33abee82e6b5602866af77ae39881dbdb4f6fffe26c6d6df->enter($__internal_10cb395659007a6f33abee82e6b5602866af77ae39881dbdb4f6fffe26c6d6df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_a96d29633bb611f6185febf00f9fc31e498c843828557199c245efd81079326b->leave($__internal_a96d29633bb611f6185febf00f9fc31e498c843828557199c245efd81079326b_prof);

        
        $__internal_10cb395659007a6f33abee82e6b5602866af77ae39881dbdb4f6fffe26c6d6df->leave($__internal_10cb395659007a6f33abee82e6b5602866af77ae39881dbdb4f6fffe26c6d6df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
