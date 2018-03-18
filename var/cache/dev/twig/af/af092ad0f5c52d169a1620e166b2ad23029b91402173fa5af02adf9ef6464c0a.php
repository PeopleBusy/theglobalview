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
        $__internal_23b5d5a5c2a429b9d2ddc30851d4b6c41ac4d4c896eb0a68df2b6ccd6150ba79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23b5d5a5c2a429b9d2ddc30851d4b6c41ac4d4c896eb0a68df2b6ccd6150ba79->enter($__internal_23b5d5a5c2a429b9d2ddc30851d4b6c41ac4d4c896eb0a68df2b6ccd6150ba79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_f873fed0c6c64cd2758bbb155506bc9d0fb33d6b1acc7b0e98a0367dbe8a2723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f873fed0c6c64cd2758bbb155506bc9d0fb33d6b1acc7b0e98a0367dbe8a2723->enter($__internal_f873fed0c6c64cd2758bbb155506bc9d0fb33d6b1acc7b0e98a0367dbe8a2723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_23b5d5a5c2a429b9d2ddc30851d4b6c41ac4d4c896eb0a68df2b6ccd6150ba79->leave($__internal_23b5d5a5c2a429b9d2ddc30851d4b6c41ac4d4c896eb0a68df2b6ccd6150ba79_prof);

        
        $__internal_f873fed0c6c64cd2758bbb155506bc9d0fb33d6b1acc7b0e98a0367dbe8a2723->leave($__internal_f873fed0c6c64cd2758bbb155506bc9d0fb33d6b1acc7b0e98a0367dbe8a2723_prof);

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
", "@Framework/Form/widget_container_attributes.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
