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
        $__internal_9fc9b97bdf3683c35cbfb900014c57ef450568e359cdd4d66da0d34698c4365e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fc9b97bdf3683c35cbfb900014c57ef450568e359cdd4d66da0d34698c4365e->enter($__internal_9fc9b97bdf3683c35cbfb900014c57ef450568e359cdd4d66da0d34698c4365e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_b06efceaf15e4c0018915ab7e28681183bf800538ba96f4625c423ffb054bb47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b06efceaf15e4c0018915ab7e28681183bf800538ba96f4625c423ffb054bb47->enter($__internal_b06efceaf15e4c0018915ab7e28681183bf800538ba96f4625c423ffb054bb47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_9fc9b97bdf3683c35cbfb900014c57ef450568e359cdd4d66da0d34698c4365e->leave($__internal_9fc9b97bdf3683c35cbfb900014c57ef450568e359cdd4d66da0d34698c4365e_prof);

        
        $__internal_b06efceaf15e4c0018915ab7e28681183bf800538ba96f4625c423ffb054bb47->leave($__internal_b06efceaf15e4c0018915ab7e28681183bf800538ba96f4625c423ffb054bb47_prof);

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
