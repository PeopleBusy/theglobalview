<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_321b75fdb1648d51a4454a33d432fce75ea6f1f0e377efae9beab94272628bb3 extends Twig_Template
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
        $__internal_404df6c3d5cbd631f4e4263090270c39d0e292854a2da83b0dd469add661fb8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_404df6c3d5cbd631f4e4263090270c39d0e292854a2da83b0dd469add661fb8d->enter($__internal_404df6c3d5cbd631f4e4263090270c39d0e292854a2da83b0dd469add661fb8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_04b5368eff2198c001581847ae51fbe3649ade9f8244577beb3b403dd5108fce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04b5368eff2198c001581847ae51fbe3649ade9f8244577beb3b403dd5108fce->enter($__internal_04b5368eff2198c001581847ae51fbe3649ade9f8244577beb3b403dd5108fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_404df6c3d5cbd631f4e4263090270c39d0e292854a2da83b0dd469add661fb8d->leave($__internal_404df6c3d5cbd631f4e4263090270c39d0e292854a2da83b0dd469add661fb8d_prof);

        
        $__internal_04b5368eff2198c001581847ae51fbe3649ade9f8244577beb3b403dd5108fce->leave($__internal_04b5368eff2198c001581847ae51fbe3649ade9f8244577beb3b403dd5108fce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
