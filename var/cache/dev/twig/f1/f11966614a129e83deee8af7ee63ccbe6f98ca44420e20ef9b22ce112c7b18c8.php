<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_fc97d65f1b7641afc459f1132aac8ba9fe971f6e8e2ceaf492650970eb1ca672 extends Twig_Template
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
        $__internal_bbe1b1dca0998d37d0a62c0a3c3046be31016b5d8dc22242222e45aa8cce901c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbe1b1dca0998d37d0a62c0a3c3046be31016b5d8dc22242222e45aa8cce901c->enter($__internal_bbe1b1dca0998d37d0a62c0a3c3046be31016b5d8dc22242222e45aa8cce901c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_9f76512ea50784bcc45e5fafb7e72b20eec60f7534531ff9baec86ccaaaf1e02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f76512ea50784bcc45e5fafb7e72b20eec60f7534531ff9baec86ccaaaf1e02->enter($__internal_9f76512ea50784bcc45e5fafb7e72b20eec60f7534531ff9baec86ccaaaf1e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_bbe1b1dca0998d37d0a62c0a3c3046be31016b5d8dc22242222e45aa8cce901c->leave($__internal_bbe1b1dca0998d37d0a62c0a3c3046be31016b5d8dc22242222e45aa8cce901c_prof);

        
        $__internal_9f76512ea50784bcc45e5fafb7e72b20eec60f7534531ff9baec86ccaaaf1e02->leave($__internal_9f76512ea50784bcc45e5fafb7e72b20eec60f7534531ff9baec86ccaaaf1e02_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
