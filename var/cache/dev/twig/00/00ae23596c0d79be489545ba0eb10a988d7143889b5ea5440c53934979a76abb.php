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
        $__internal_349902d63c964b280d91d6e3796ee9e8bbb2028bb64d9902b7cc29a3b1f8fbcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_349902d63c964b280d91d6e3796ee9e8bbb2028bb64d9902b7cc29a3b1f8fbcc->enter($__internal_349902d63c964b280d91d6e3796ee9e8bbb2028bb64d9902b7cc29a3b1f8fbcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_36f2d6ac9d9dfd4d7beb2d3a95c9aebda41d0b1a69f0f796555c5454ef4e1df0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36f2d6ac9d9dfd4d7beb2d3a95c9aebda41d0b1a69f0f796555c5454ef4e1df0->enter($__internal_36f2d6ac9d9dfd4d7beb2d3a95c9aebda41d0b1a69f0f796555c5454ef4e1df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_349902d63c964b280d91d6e3796ee9e8bbb2028bb64d9902b7cc29a3b1f8fbcc->leave($__internal_349902d63c964b280d91d6e3796ee9e8bbb2028bb64d9902b7cc29a3b1f8fbcc_prof);

        
        $__internal_36f2d6ac9d9dfd4d7beb2d3a95c9aebda41d0b1a69f0f796555c5454ef4e1df0->leave($__internal_36f2d6ac9d9dfd4d7beb2d3a95c9aebda41d0b1a69f0f796555c5454ef4e1df0_prof);

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
