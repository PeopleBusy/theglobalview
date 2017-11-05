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
        $__internal_25c96c3f0921ff5a5e6e8647eee35b0856d63da6b381583e4c5c008b0bc30bec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25c96c3f0921ff5a5e6e8647eee35b0856d63da6b381583e4c5c008b0bc30bec->enter($__internal_25c96c3f0921ff5a5e6e8647eee35b0856d63da6b381583e4c5c008b0bc30bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_0623254b56c27e6bc17770a511d0a57dc711e5e93c46f90ad5885a1034bca794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0623254b56c27e6bc17770a511d0a57dc711e5e93c46f90ad5885a1034bca794->enter($__internal_0623254b56c27e6bc17770a511d0a57dc711e5e93c46f90ad5885a1034bca794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_25c96c3f0921ff5a5e6e8647eee35b0856d63da6b381583e4c5c008b0bc30bec->leave($__internal_25c96c3f0921ff5a5e6e8647eee35b0856d63da6b381583e4c5c008b0bc30bec_prof);

        
        $__internal_0623254b56c27e6bc17770a511d0a57dc711e5e93c46f90ad5885a1034bca794->leave($__internal_0623254b56c27e6bc17770a511d0a57dc711e5e93c46f90ad5885a1034bca794_prof);

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
