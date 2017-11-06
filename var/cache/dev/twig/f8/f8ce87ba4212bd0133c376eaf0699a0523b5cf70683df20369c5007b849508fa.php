<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_c8571185cd4f2d0c95a37cea524ab089e387cddf2f235fe4a9f624dc7de1003e extends Twig_Template
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
        $__internal_d3420b6fd65effe196fe868582dc3586353a4b6b28358e459b78c27885343296 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3420b6fd65effe196fe868582dc3586353a4b6b28358e459b78c27885343296->enter($__internal_d3420b6fd65effe196fe868582dc3586353a4b6b28358e459b78c27885343296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_b274192b020770a3e2834997d8fbd946362867dbcffe52d7dd94f55bc6a6e43f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b274192b020770a3e2834997d8fbd946362867dbcffe52d7dd94f55bc6a6e43f->enter($__internal_b274192b020770a3e2834997d8fbd946362867dbcffe52d7dd94f55bc6a6e43f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_d3420b6fd65effe196fe868582dc3586353a4b6b28358e459b78c27885343296->leave($__internal_d3420b6fd65effe196fe868582dc3586353a4b6b28358e459b78c27885343296_prof);

        
        $__internal_b274192b020770a3e2834997d8fbd946362867dbcffe52d7dd94f55bc6a6e43f->leave($__internal_b274192b020770a3e2834997d8fbd946362867dbcffe52d7dd94f55bc6a6e43f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
