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
        $__internal_32533f64f35ba1de65126aaccfc13deafd86eab251a8d5e9b8382e28205f15af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32533f64f35ba1de65126aaccfc13deafd86eab251a8d5e9b8382e28205f15af->enter($__internal_32533f64f35ba1de65126aaccfc13deafd86eab251a8d5e9b8382e28205f15af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_a5de85e22731e10b8db358f53d5667a2f534919717bce27c28055fe0577dd171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5de85e22731e10b8db358f53d5667a2f534919717bce27c28055fe0577dd171->enter($__internal_a5de85e22731e10b8db358f53d5667a2f534919717bce27c28055fe0577dd171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_32533f64f35ba1de65126aaccfc13deafd86eab251a8d5e9b8382e28205f15af->leave($__internal_32533f64f35ba1de65126aaccfc13deafd86eab251a8d5e9b8382e28205f15af_prof);

        
        $__internal_a5de85e22731e10b8db358f53d5667a2f534919717bce27c28055fe0577dd171->leave($__internal_a5de85e22731e10b8db358f53d5667a2f534919717bce27c28055fe0577dd171_prof);

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
