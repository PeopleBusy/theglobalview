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
        $__internal_a567d6c436832254d756bf8a5e18c106656f3e3165eed57ffe0601b5fb1e33ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a567d6c436832254d756bf8a5e18c106656f3e3165eed57ffe0601b5fb1e33ab->enter($__internal_a567d6c436832254d756bf8a5e18c106656f3e3165eed57ffe0601b5fb1e33ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_dea39c8cdf0943fb62c3ecc1fee897bc2c31f83ecf3d131797e29a4d3dfe63e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dea39c8cdf0943fb62c3ecc1fee897bc2c31f83ecf3d131797e29a4d3dfe63e9->enter($__internal_dea39c8cdf0943fb62c3ecc1fee897bc2c31f83ecf3d131797e29a4d3dfe63e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_a567d6c436832254d756bf8a5e18c106656f3e3165eed57ffe0601b5fb1e33ab->leave($__internal_a567d6c436832254d756bf8a5e18c106656f3e3165eed57ffe0601b5fb1e33ab_prof);

        
        $__internal_dea39c8cdf0943fb62c3ecc1fee897bc2c31f83ecf3d131797e29a4d3dfe63e9->leave($__internal_dea39c8cdf0943fb62c3ecc1fee897bc2c31f83ecf3d131797e29a4d3dfe63e9_prof);

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
", "@Framework/Form/container_attributes.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
