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
        $__internal_27d52b1a954ab9130cad699d0abe78d30510d3e5eb85c1305578cb7d8c3d6fc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27d52b1a954ab9130cad699d0abe78d30510d3e5eb85c1305578cb7d8c3d6fc3->enter($__internal_27d52b1a954ab9130cad699d0abe78d30510d3e5eb85c1305578cb7d8c3d6fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_2071ea04e3ccf41b341aad53112f615cbb6d3d91731d23aad69f59f8bdf4b892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2071ea04e3ccf41b341aad53112f615cbb6d3d91731d23aad69f59f8bdf4b892->enter($__internal_2071ea04e3ccf41b341aad53112f615cbb6d3d91731d23aad69f59f8bdf4b892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_27d52b1a954ab9130cad699d0abe78d30510d3e5eb85c1305578cb7d8c3d6fc3->leave($__internal_27d52b1a954ab9130cad699d0abe78d30510d3e5eb85c1305578cb7d8c3d6fc3_prof);

        
        $__internal_2071ea04e3ccf41b341aad53112f615cbb6d3d91731d23aad69f59f8bdf4b892->leave($__internal_2071ea04e3ccf41b341aad53112f615cbb6d3d91731d23aad69f59f8bdf4b892_prof);

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
