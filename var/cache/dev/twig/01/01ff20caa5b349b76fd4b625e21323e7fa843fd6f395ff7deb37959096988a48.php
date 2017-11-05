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
        $__internal_d1ff622b51abc100980f6e015b6f9fed1a362890416119d98036ffa4da559c59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1ff622b51abc100980f6e015b6f9fed1a362890416119d98036ffa4da559c59->enter($__internal_d1ff622b51abc100980f6e015b6f9fed1a362890416119d98036ffa4da559c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_8df74598438e0b8927d38c5adf086670fc35212bb9dccea3c492ad9bd33b488d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8df74598438e0b8927d38c5adf086670fc35212bb9dccea3c492ad9bd33b488d->enter($__internal_8df74598438e0b8927d38c5adf086670fc35212bb9dccea3c492ad9bd33b488d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_d1ff622b51abc100980f6e015b6f9fed1a362890416119d98036ffa4da559c59->leave($__internal_d1ff622b51abc100980f6e015b6f9fed1a362890416119d98036ffa4da559c59_prof);

        
        $__internal_8df74598438e0b8927d38c5adf086670fc35212bb9dccea3c492ad9bd33b488d->leave($__internal_8df74598438e0b8927d38c5adf086670fc35212bb9dccea3c492ad9bd33b488d_prof);

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
