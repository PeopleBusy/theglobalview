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
        $__internal_4bdddac20b248c32fc2330247cb4db2255414145029939b5c53beec7b3c9968e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bdddac20b248c32fc2330247cb4db2255414145029939b5c53beec7b3c9968e->enter($__internal_4bdddac20b248c32fc2330247cb4db2255414145029939b5c53beec7b3c9968e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_b31476457da3e69b878b21a05f04133d2bf36a3ebeaf8ba63ba9b09103a22d73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b31476457da3e69b878b21a05f04133d2bf36a3ebeaf8ba63ba9b09103a22d73->enter($__internal_b31476457da3e69b878b21a05f04133d2bf36a3ebeaf8ba63ba9b09103a22d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_4bdddac20b248c32fc2330247cb4db2255414145029939b5c53beec7b3c9968e->leave($__internal_4bdddac20b248c32fc2330247cb4db2255414145029939b5c53beec7b3c9968e_prof);

        
        $__internal_b31476457da3e69b878b21a05f04133d2bf36a3ebeaf8ba63ba9b09103a22d73->leave($__internal_b31476457da3e69b878b21a05f04133d2bf36a3ebeaf8ba63ba9b09103a22d73_prof);

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
", "@Framework/Form/textarea_widget.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
