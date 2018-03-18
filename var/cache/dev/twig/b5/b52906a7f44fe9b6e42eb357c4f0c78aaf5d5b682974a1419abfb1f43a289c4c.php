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
        $__internal_1f28876c77a821ad306772b7fd62248d39a1e1e0ae122b3ecffac4c48a8dde36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f28876c77a821ad306772b7fd62248d39a1e1e0ae122b3ecffac4c48a8dde36->enter($__internal_1f28876c77a821ad306772b7fd62248d39a1e1e0ae122b3ecffac4c48a8dde36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_6a9c7e8e0c029bb0eb0da4c0523c1b7b045872a40dca390877d9bf9011bbc78a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a9c7e8e0c029bb0eb0da4c0523c1b7b045872a40dca390877d9bf9011bbc78a->enter($__internal_6a9c7e8e0c029bb0eb0da4c0523c1b7b045872a40dca390877d9bf9011bbc78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_1f28876c77a821ad306772b7fd62248d39a1e1e0ae122b3ecffac4c48a8dde36->leave($__internal_1f28876c77a821ad306772b7fd62248d39a1e1e0ae122b3ecffac4c48a8dde36_prof);

        
        $__internal_6a9c7e8e0c029bb0eb0da4c0523c1b7b045872a40dca390877d9bf9011bbc78a->leave($__internal_6a9c7e8e0c029bb0eb0da4c0523c1b7b045872a40dca390877d9bf9011bbc78a_prof);

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
", "@Framework/Form/choice_options.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
