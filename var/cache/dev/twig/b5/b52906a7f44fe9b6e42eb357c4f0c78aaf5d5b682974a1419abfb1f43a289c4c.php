<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_67ac38eb8851a1e005ef822c718c50ff1a2b331fe31ad61881edc4b6ce05b9a8 extends Twig_Template
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
        $__internal_57ec90d32448be6e4b60cab636613df428b2076e2bf5b639d54a8ae4d96021a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57ec90d32448be6e4b60cab636613df428b2076e2bf5b639d54a8ae4d96021a2->enter($__internal_57ec90d32448be6e4b60cab636613df428b2076e2bf5b639d54a8ae4d96021a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_5d8be2704474d2903fa07fc8f912f648521ecbf38597f91f0b825f57be86eded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d8be2704474d2903fa07fc8f912f648521ecbf38597f91f0b825f57be86eded->enter($__internal_5d8be2704474d2903fa07fc8f912f648521ecbf38597f91f0b825f57be86eded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_57ec90d32448be6e4b60cab636613df428b2076e2bf5b639d54a8ae4d96021a2->leave($__internal_57ec90d32448be6e4b60cab636613df428b2076e2bf5b639d54a8ae4d96021a2_prof);

        
        $__internal_5d8be2704474d2903fa07fc8f912f648521ecbf38597f91f0b825f57be86eded->leave($__internal_5d8be2704474d2903fa07fc8f912f648521ecbf38597f91f0b825f57be86eded_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
