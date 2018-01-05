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
        $__internal_c21d8d18d1b986255f65ff5932e1bb9e41083b3c109b78aab7f003a6f0da25bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c21d8d18d1b986255f65ff5932e1bb9e41083b3c109b78aab7f003a6f0da25bb->enter($__internal_c21d8d18d1b986255f65ff5932e1bb9e41083b3c109b78aab7f003a6f0da25bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_058747a7f15c69842a8e5919c4bc8a0c75d6dcc695bb308f57949eab5379b5e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_058747a7f15c69842a8e5919c4bc8a0c75d6dcc695bb308f57949eab5379b5e0->enter($__internal_058747a7f15c69842a8e5919c4bc8a0c75d6dcc695bb308f57949eab5379b5e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_c21d8d18d1b986255f65ff5932e1bb9e41083b3c109b78aab7f003a6f0da25bb->leave($__internal_c21d8d18d1b986255f65ff5932e1bb9e41083b3c109b78aab7f003a6f0da25bb_prof);

        
        $__internal_058747a7f15c69842a8e5919c4bc8a0c75d6dcc695bb308f57949eab5379b5e0->leave($__internal_058747a7f15c69842a8e5919c4bc8a0c75d6dcc695bb308f57949eab5379b5e0_prof);

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
