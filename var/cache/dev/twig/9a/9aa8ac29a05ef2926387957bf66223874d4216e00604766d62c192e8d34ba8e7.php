<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_445d360579886037163acb51777d1573b609e129b24cf7858b1fbc2af24e2785 extends Twig_Template
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
        $__internal_7270873ceae512f7b7e7221f3e2db24d07cf82e94fb7c0e6afd7201dcd151f11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7270873ceae512f7b7e7221f3e2db24d07cf82e94fb7c0e6afd7201dcd151f11->enter($__internal_7270873ceae512f7b7e7221f3e2db24d07cf82e94fb7c0e6afd7201dcd151f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_d18b1b491f9534e57066d30f765c950fa1cdaaa0e3c70cbc2f0be45c5d3c21f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d18b1b491f9534e57066d30f765c950fa1cdaaa0e3c70cbc2f0be45c5d3c21f2->enter($__internal_d18b1b491f9534e57066d30f765c950fa1cdaaa0e3c70cbc2f0be45c5d3c21f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_7270873ceae512f7b7e7221f3e2db24d07cf82e94fb7c0e6afd7201dcd151f11->leave($__internal_7270873ceae512f7b7e7221f3e2db24d07cf82e94fb7c0e6afd7201dcd151f11_prof);

        
        $__internal_d18b1b491f9534e57066d30f765c950fa1cdaaa0e3c70cbc2f0be45c5d3c21f2->leave($__internal_d18b1b491f9534e57066d30f765c950fa1cdaaa0e3c70cbc2f0be45c5d3c21f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
