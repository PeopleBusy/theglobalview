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
        $__internal_eb74a3cc5400c3b5ea85f76974c187591e1bd12a8d140d6b36aaab93a35abedd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb74a3cc5400c3b5ea85f76974c187591e1bd12a8d140d6b36aaab93a35abedd->enter($__internal_eb74a3cc5400c3b5ea85f76974c187591e1bd12a8d140d6b36aaab93a35abedd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_f498df4385de10283dca82ee89b059ada89711f3cb29c56922f866bbf4dfab86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f498df4385de10283dca82ee89b059ada89711f3cb29c56922f866bbf4dfab86->enter($__internal_f498df4385de10283dca82ee89b059ada89711f3cb29c56922f866bbf4dfab86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_eb74a3cc5400c3b5ea85f76974c187591e1bd12a8d140d6b36aaab93a35abedd->leave($__internal_eb74a3cc5400c3b5ea85f76974c187591e1bd12a8d140d6b36aaab93a35abedd_prof);

        
        $__internal_f498df4385de10283dca82ee89b059ada89711f3cb29c56922f866bbf4dfab86->leave($__internal_f498df4385de10283dca82ee89b059ada89711f3cb29c56922f866bbf4dfab86_prof);

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
", "@Framework/Form/widget_attributes.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
