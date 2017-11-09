<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_b4b111d021ed83cca877b45db787a66bcbbe3e5d57b032e913aaedce511fbf82 extends Twig_Template
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
        $__internal_906d83532f452609c266f117510facf3f669364b2c40ab6e6b10fb5ba7df743f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_906d83532f452609c266f117510facf3f669364b2c40ab6e6b10fb5ba7df743f->enter($__internal_906d83532f452609c266f117510facf3f669364b2c40ab6e6b10fb5ba7df743f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_ab079bd0f033daa72751fa12ce9b8d45ce1c5d92cf9d33089e00a39f221df5ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab079bd0f033daa72751fa12ce9b8d45ce1c5d92cf9d33089e00a39f221df5ff->enter($__internal_ab079bd0f033daa72751fa12ce9b8d45ce1c5d92cf9d33089e00a39f221df5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_906d83532f452609c266f117510facf3f669364b2c40ab6e6b10fb5ba7df743f->leave($__internal_906d83532f452609c266f117510facf3f669364b2c40ab6e6b10fb5ba7df743f_prof);

        
        $__internal_ab079bd0f033daa72751fa12ce9b8d45ce1c5d92cf9d33089e00a39f221df5ff->leave($__internal_ab079bd0f033daa72751fa12ce9b8d45ce1c5d92cf9d33089e00a39f221df5ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
