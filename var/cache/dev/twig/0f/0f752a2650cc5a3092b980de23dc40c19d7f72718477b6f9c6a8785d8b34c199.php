<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_0fb3c1f5b31c2467fbe49919988672ecdbdffa2b04d86d8a2661ea3c14eceb21 extends Twig_Template
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
        $__internal_1de2851c8a5e8ea4163db2acc3eb5d6dd69d945ad06e9bc2abbee19efb8a73a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1de2851c8a5e8ea4163db2acc3eb5d6dd69d945ad06e9bc2abbee19efb8a73a8->enter($__internal_1de2851c8a5e8ea4163db2acc3eb5d6dd69d945ad06e9bc2abbee19efb8a73a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_7f1df675bdbd7ceb1942d2ab16da452b20be1a4344b14b779320f97dd9963186 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f1df675bdbd7ceb1942d2ab16da452b20be1a4344b14b779320f97dd9963186->enter($__internal_7f1df675bdbd7ceb1942d2ab16da452b20be1a4344b14b779320f97dd9963186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_1de2851c8a5e8ea4163db2acc3eb5d6dd69d945ad06e9bc2abbee19efb8a73a8->leave($__internal_1de2851c8a5e8ea4163db2acc3eb5d6dd69d945ad06e9bc2abbee19efb8a73a8_prof);

        
        $__internal_7f1df675bdbd7ceb1942d2ab16da452b20be1a4344b14b779320f97dd9963186->leave($__internal_7f1df675bdbd7ceb1942d2ab16da452b20be1a4344b14b779320f97dd9963186_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
