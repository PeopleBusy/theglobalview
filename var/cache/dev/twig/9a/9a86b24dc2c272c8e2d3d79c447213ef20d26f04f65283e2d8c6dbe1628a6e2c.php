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
        $__internal_059cb7f036e07f20963f8279ef0e4c81273d0524ed89f330a55d59bbea4d583a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_059cb7f036e07f20963f8279ef0e4c81273d0524ed89f330a55d59bbea4d583a->enter($__internal_059cb7f036e07f20963f8279ef0e4c81273d0524ed89f330a55d59bbea4d583a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_7eb69aae559c164f70ed705762ed2691e06326be71f87fa7cdc29da7f3545d6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eb69aae559c164f70ed705762ed2691e06326be71f87fa7cdc29da7f3545d6f->enter($__internal_7eb69aae559c164f70ed705762ed2691e06326be71f87fa7cdc29da7f3545d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_059cb7f036e07f20963f8279ef0e4c81273d0524ed89f330a55d59bbea4d583a->leave($__internal_059cb7f036e07f20963f8279ef0e4c81273d0524ed89f330a55d59bbea4d583a_prof);

        
        $__internal_7eb69aae559c164f70ed705762ed2691e06326be71f87fa7cdc29da7f3545d6f->leave($__internal_7eb69aae559c164f70ed705762ed2691e06326be71f87fa7cdc29da7f3545d6f_prof);

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
