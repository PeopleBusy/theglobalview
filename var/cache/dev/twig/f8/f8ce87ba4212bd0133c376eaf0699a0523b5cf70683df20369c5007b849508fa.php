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
        $__internal_8cc7122791c26ca6f5d5d5b8b07170f05313edb65c694701bf1a57f137e58ee8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cc7122791c26ca6f5d5d5b8b07170f05313edb65c694701bf1a57f137e58ee8->enter($__internal_8cc7122791c26ca6f5d5d5b8b07170f05313edb65c694701bf1a57f137e58ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_515521fd9a2afe4006c0ccd68fafe7b7bdef3a16c5b2cadcd8b925a61705bb42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_515521fd9a2afe4006c0ccd68fafe7b7bdef3a16c5b2cadcd8b925a61705bb42->enter($__internal_515521fd9a2afe4006c0ccd68fafe7b7bdef3a16c5b2cadcd8b925a61705bb42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_8cc7122791c26ca6f5d5d5b8b07170f05313edb65c694701bf1a57f137e58ee8->leave($__internal_8cc7122791c26ca6f5d5d5b8b07170f05313edb65c694701bf1a57f137e58ee8_prof);

        
        $__internal_515521fd9a2afe4006c0ccd68fafe7b7bdef3a16c5b2cadcd8b925a61705bb42->leave($__internal_515521fd9a2afe4006c0ccd68fafe7b7bdef3a16c5b2cadcd8b925a61705bb42_prof);

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
