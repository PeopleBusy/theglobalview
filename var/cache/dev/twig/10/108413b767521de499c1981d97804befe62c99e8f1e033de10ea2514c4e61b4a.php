<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_3e667b6f2f794c6d2d926d7bc9a1c996ed0f379874fee82edcc8529ebb5d41be extends Twig_Template
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
        $__internal_b7b913a7689c2f11365defb58e1b9d850e335a89bbc6d7f23f63f315efb7b177 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7b913a7689c2f11365defb58e1b9d850e335a89bbc6d7f23f63f315efb7b177->enter($__internal_b7b913a7689c2f11365defb58e1b9d850e335a89bbc6d7f23f63f315efb7b177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_9e1a7f03e7433906b6cd707cb0012b81aaed94abc7f5cfd66fdf7331f54e7b21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e1a7f03e7433906b6cd707cb0012b81aaed94abc7f5cfd66fdf7331f54e7b21->enter($__internal_9e1a7f03e7433906b6cd707cb0012b81aaed94abc7f5cfd66fdf7331f54e7b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_b7b913a7689c2f11365defb58e1b9d850e335a89bbc6d7f23f63f315efb7b177->leave($__internal_b7b913a7689c2f11365defb58e1b9d850e335a89bbc6d7f23f63f315efb7b177_prof);

        
        $__internal_9e1a7f03e7433906b6cd707cb0012b81aaed94abc7f5cfd66fdf7331f54e7b21->leave($__internal_9e1a7f03e7433906b6cd707cb0012b81aaed94abc7f5cfd66fdf7331f54e7b21_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
