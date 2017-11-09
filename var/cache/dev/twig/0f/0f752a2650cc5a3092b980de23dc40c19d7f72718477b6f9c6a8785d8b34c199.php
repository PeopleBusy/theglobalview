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
        $__internal_b0799e8580395e5d8b7f9bbb71af836c25cc9e30aad71842f754f12f76991419 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0799e8580395e5d8b7f9bbb71af836c25cc9e30aad71842f754f12f76991419->enter($__internal_b0799e8580395e5d8b7f9bbb71af836c25cc9e30aad71842f754f12f76991419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_a4ab174f36f0ac31448fc5cd270fb9e63a05a24d863c4df1e7b06ab6afc3cc09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4ab174f36f0ac31448fc5cd270fb9e63a05a24d863c4df1e7b06ab6afc3cc09->enter($__internal_a4ab174f36f0ac31448fc5cd270fb9e63a05a24d863c4df1e7b06ab6afc3cc09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b0799e8580395e5d8b7f9bbb71af836c25cc9e30aad71842f754f12f76991419->leave($__internal_b0799e8580395e5d8b7f9bbb71af836c25cc9e30aad71842f754f12f76991419_prof);

        
        $__internal_a4ab174f36f0ac31448fc5cd270fb9e63a05a24d863c4df1e7b06ab6afc3cc09->leave($__internal_a4ab174f36f0ac31448fc5cd270fb9e63a05a24d863c4df1e7b06ab6afc3cc09_prof);

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
