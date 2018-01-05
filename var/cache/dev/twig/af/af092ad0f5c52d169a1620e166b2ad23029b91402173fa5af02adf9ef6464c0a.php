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
        $__internal_b698971251b31001e471c00d68c16ec366c07f5ba4ac377ba731c0e86ea56c6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b698971251b31001e471c00d68c16ec366c07f5ba4ac377ba731c0e86ea56c6d->enter($__internal_b698971251b31001e471c00d68c16ec366c07f5ba4ac377ba731c0e86ea56c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_0f4c518d9a3e80a0105be70889f48c12109466524e6e61f28d68c6f4a72b09e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f4c518d9a3e80a0105be70889f48c12109466524e6e61f28d68c6f4a72b09e2->enter($__internal_0f4c518d9a3e80a0105be70889f48c12109466524e6e61f28d68c6f4a72b09e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_b698971251b31001e471c00d68c16ec366c07f5ba4ac377ba731c0e86ea56c6d->leave($__internal_b698971251b31001e471c00d68c16ec366c07f5ba4ac377ba731c0e86ea56c6d_prof);

        
        $__internal_0f4c518d9a3e80a0105be70889f48c12109466524e6e61f28d68c6f4a72b09e2->leave($__internal_0f4c518d9a3e80a0105be70889f48c12109466524e6e61f28d68c6f4a72b09e2_prof);

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
