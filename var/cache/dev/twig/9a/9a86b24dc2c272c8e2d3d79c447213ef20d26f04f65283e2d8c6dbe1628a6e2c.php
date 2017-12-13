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
        $__internal_88ad4e9b8b72c1c8c1dd2f6bdda76bb77d3031f5647f5181c3b3b95619b8189d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88ad4e9b8b72c1c8c1dd2f6bdda76bb77d3031f5647f5181c3b3b95619b8189d->enter($__internal_88ad4e9b8b72c1c8c1dd2f6bdda76bb77d3031f5647f5181c3b3b95619b8189d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_26a8ece30988c4de9742d40fae576dcdcbfe240e15664f7cf41bdb5e9e6a2c50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26a8ece30988c4de9742d40fae576dcdcbfe240e15664f7cf41bdb5e9e6a2c50->enter($__internal_26a8ece30988c4de9742d40fae576dcdcbfe240e15664f7cf41bdb5e9e6a2c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_88ad4e9b8b72c1c8c1dd2f6bdda76bb77d3031f5647f5181c3b3b95619b8189d->leave($__internal_88ad4e9b8b72c1c8c1dd2f6bdda76bb77d3031f5647f5181c3b3b95619b8189d_prof);

        
        $__internal_26a8ece30988c4de9742d40fae576dcdcbfe240e15664f7cf41bdb5e9e6a2c50->leave($__internal_26a8ece30988c4de9742d40fae576dcdcbfe240e15664f7cf41bdb5e9e6a2c50_prof);

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
