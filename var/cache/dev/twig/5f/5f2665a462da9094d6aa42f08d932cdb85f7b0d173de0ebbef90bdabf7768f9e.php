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
        $__internal_19e2a437eff53aca0663cd39a89782b1dc823fc66320f552f25622affb4d2e9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19e2a437eff53aca0663cd39a89782b1dc823fc66320f552f25622affb4d2e9f->enter($__internal_19e2a437eff53aca0663cd39a89782b1dc823fc66320f552f25622affb4d2e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_37755fd6419bd5e237ad2adcb3b2b8f6eae6eb6bc16441baa7cbba9d2d31151f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37755fd6419bd5e237ad2adcb3b2b8f6eae6eb6bc16441baa7cbba9d2d31151f->enter($__internal_37755fd6419bd5e237ad2adcb3b2b8f6eae6eb6bc16441baa7cbba9d2d31151f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_19e2a437eff53aca0663cd39a89782b1dc823fc66320f552f25622affb4d2e9f->leave($__internal_19e2a437eff53aca0663cd39a89782b1dc823fc66320f552f25622affb4d2e9f_prof);

        
        $__internal_37755fd6419bd5e237ad2adcb3b2b8f6eae6eb6bc16441baa7cbba9d2d31151f->leave($__internal_37755fd6419bd5e237ad2adcb3b2b8f6eae6eb6bc16441baa7cbba9d2d31151f_prof);

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
", "@Framework/Form/hidden_widget.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
