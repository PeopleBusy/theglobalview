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
        $__internal_de343fc29cce873517cfd6cca218b97c18535dabeaae008a757849ef24e951e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de343fc29cce873517cfd6cca218b97c18535dabeaae008a757849ef24e951e1->enter($__internal_de343fc29cce873517cfd6cca218b97c18535dabeaae008a757849ef24e951e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_f32dba60a3f6ad42263e47a8a30b4630f87c014608e44bf8864e460df7288ce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f32dba60a3f6ad42263e47a8a30b4630f87c014608e44bf8864e460df7288ce2->enter($__internal_f32dba60a3f6ad42263e47a8a30b4630f87c014608e44bf8864e460df7288ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_de343fc29cce873517cfd6cca218b97c18535dabeaae008a757849ef24e951e1->leave($__internal_de343fc29cce873517cfd6cca218b97c18535dabeaae008a757849ef24e951e1_prof);

        
        $__internal_f32dba60a3f6ad42263e47a8a30b4630f87c014608e44bf8864e460df7288ce2->leave($__internal_f32dba60a3f6ad42263e47a8a30b4630f87c014608e44bf8864e460df7288ce2_prof);

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
", "@Framework/Form/choice_attributes.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
