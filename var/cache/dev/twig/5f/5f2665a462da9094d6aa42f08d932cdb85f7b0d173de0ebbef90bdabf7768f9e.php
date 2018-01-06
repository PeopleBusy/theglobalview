<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_84a08d5aff659eb1162de69ab3af959857724d7b5a48bfe7bcead5a0bc9cc294 extends Twig_Template
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
        $__internal_b8b11b6b2abc7566da8aa1369397fdd1131930215ec649d30d5e5d5d0153e321 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8b11b6b2abc7566da8aa1369397fdd1131930215ec649d30d5e5d5d0153e321->enter($__internal_b8b11b6b2abc7566da8aa1369397fdd1131930215ec649d30d5e5d5d0153e321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_f09e27b4d1b9878a67efc083d5dc905068d22db66d4bdb0e61cd7ccff49146f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f09e27b4d1b9878a67efc083d5dc905068d22db66d4bdb0e61cd7ccff49146f9->enter($__internal_f09e27b4d1b9878a67efc083d5dc905068d22db66d4bdb0e61cd7ccff49146f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_b8b11b6b2abc7566da8aa1369397fdd1131930215ec649d30d5e5d5d0153e321->leave($__internal_b8b11b6b2abc7566da8aa1369397fdd1131930215ec649d30d5e5d5d0153e321_prof);

        
        $__internal_f09e27b4d1b9878a67efc083d5dc905068d22db66d4bdb0e61cd7ccff49146f9->leave($__internal_f09e27b4d1b9878a67efc083d5dc905068d22db66d4bdb0e61cd7ccff49146f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
