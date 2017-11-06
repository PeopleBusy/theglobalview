<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_95f3960d2ecc13233d7c5b465148685aafd81671e39054636612bedf73699f69 extends Twig_Template
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
        $__internal_0340d5213275d98405ae4c0d315db9881f17ab0f81b218256888886aeb8993a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0340d5213275d98405ae4c0d315db9881f17ab0f81b218256888886aeb8993a4->enter($__internal_0340d5213275d98405ae4c0d315db9881f17ab0f81b218256888886aeb8993a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_44836847b10fafd29ae1b65e9d5a846e65d4e8779bcc79aedbf9a0ae804e6072 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44836847b10fafd29ae1b65e9d5a846e65d4e8779bcc79aedbf9a0ae804e6072->enter($__internal_44836847b10fafd29ae1b65e9d5a846e65d4e8779bcc79aedbf9a0ae804e6072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_0340d5213275d98405ae4c0d315db9881f17ab0f81b218256888886aeb8993a4->leave($__internal_0340d5213275d98405ae4c0d315db9881f17ab0f81b218256888886aeb8993a4_prof);

        
        $__internal_44836847b10fafd29ae1b65e9d5a846e65d4e8779bcc79aedbf9a0ae804e6072->leave($__internal_44836847b10fafd29ae1b65e9d5a846e65d4e8779bcc79aedbf9a0ae804e6072_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
