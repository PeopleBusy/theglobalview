<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_9c2cdc2492e49ef505e0a584297bc4b2f5f9b943f21527286cf18e0cfe027196 extends Twig_Template
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
        $__internal_66584fc70acedb0b1c82089ce5b8edf37e3185fb99315eb2cfcd9a49dc3d757f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66584fc70acedb0b1c82089ce5b8edf37e3185fb99315eb2cfcd9a49dc3d757f->enter($__internal_66584fc70acedb0b1c82089ce5b8edf37e3185fb99315eb2cfcd9a49dc3d757f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_c3861bda256e26d895286995b80f3cdc7657c198efb089dfe7ad3eec4bc63b2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3861bda256e26d895286995b80f3cdc7657c198efb089dfe7ad3eec4bc63b2e->enter($__internal_c3861bda256e26d895286995b80f3cdc7657c198efb089dfe7ad3eec4bc63b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_66584fc70acedb0b1c82089ce5b8edf37e3185fb99315eb2cfcd9a49dc3d757f->leave($__internal_66584fc70acedb0b1c82089ce5b8edf37e3185fb99315eb2cfcd9a49dc3d757f_prof);

        
        $__internal_c3861bda256e26d895286995b80f3cdc7657c198efb089dfe7ad3eec4bc63b2e->leave($__internal_c3861bda256e26d895286995b80f3cdc7657c198efb089dfe7ad3eec4bc63b2e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
