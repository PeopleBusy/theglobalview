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
        $__internal_0bda6e7e43fb2bce6dea3f170cfe1de8f74d1e6589948bdcb215dbd08a74aaee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bda6e7e43fb2bce6dea3f170cfe1de8f74d1e6589948bdcb215dbd08a74aaee->enter($__internal_0bda6e7e43fb2bce6dea3f170cfe1de8f74d1e6589948bdcb215dbd08a74aaee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_ced1e8752d33f58e1fa2a03c214434c3e4335a08e9c9c339c2b29782a2be0027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ced1e8752d33f58e1fa2a03c214434c3e4335a08e9c9c339c2b29782a2be0027->enter($__internal_ced1e8752d33f58e1fa2a03c214434c3e4335a08e9c9c339c2b29782a2be0027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_0bda6e7e43fb2bce6dea3f170cfe1de8f74d1e6589948bdcb215dbd08a74aaee->leave($__internal_0bda6e7e43fb2bce6dea3f170cfe1de8f74d1e6589948bdcb215dbd08a74aaee_prof);

        
        $__internal_ced1e8752d33f58e1fa2a03c214434c3e4335a08e9c9c339c2b29782a2be0027->leave($__internal_ced1e8752d33f58e1fa2a03c214434c3e4335a08e9c9c339c2b29782a2be0027_prof);

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
