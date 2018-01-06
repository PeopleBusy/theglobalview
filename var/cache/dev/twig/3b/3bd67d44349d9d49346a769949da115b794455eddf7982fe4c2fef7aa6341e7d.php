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
        $__internal_932c6786a09505063d039ffbed599ba338139a51b8b5998bb8215456594dc107 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_932c6786a09505063d039ffbed599ba338139a51b8b5998bb8215456594dc107->enter($__internal_932c6786a09505063d039ffbed599ba338139a51b8b5998bb8215456594dc107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_f9a1da3fe8c2c1c20b44c064a237c6a13346d51f4dbcf7715d0fcfd165a1d83b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9a1da3fe8c2c1c20b44c064a237c6a13346d51f4dbcf7715d0fcfd165a1d83b->enter($__internal_f9a1da3fe8c2c1c20b44c064a237c6a13346d51f4dbcf7715d0fcfd165a1d83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_932c6786a09505063d039ffbed599ba338139a51b8b5998bb8215456594dc107->leave($__internal_932c6786a09505063d039ffbed599ba338139a51b8b5998bb8215456594dc107_prof);

        
        $__internal_f9a1da3fe8c2c1c20b44c064a237c6a13346d51f4dbcf7715d0fcfd165a1d83b->leave($__internal_f9a1da3fe8c2c1c20b44c064a237c6a13346d51f4dbcf7715d0fcfd165a1d83b_prof);

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
", "@Framework/Form/textarea_widget.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
