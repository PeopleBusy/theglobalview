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
        $__internal_6ab62c16846e92c633e3e9166d2d4449f9b4a3b2536cbc199c4e8ceffdc4d392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ab62c16846e92c633e3e9166d2d4449f9b4a3b2536cbc199c4e8ceffdc4d392->enter($__internal_6ab62c16846e92c633e3e9166d2d4449f9b4a3b2536cbc199c4e8ceffdc4d392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_c836c6c749ecf3dcde243557b1c59830e2ab8567b1833c7da2f51a886afed02a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c836c6c749ecf3dcde243557b1c59830e2ab8567b1833c7da2f51a886afed02a->enter($__internal_c836c6c749ecf3dcde243557b1c59830e2ab8567b1833c7da2f51a886afed02a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6ab62c16846e92c633e3e9166d2d4449f9b4a3b2536cbc199c4e8ceffdc4d392->leave($__internal_6ab62c16846e92c633e3e9166d2d4449f9b4a3b2536cbc199c4e8ceffdc4d392_prof);

        
        $__internal_c836c6c749ecf3dcde243557b1c59830e2ab8567b1833c7da2f51a886afed02a->leave($__internal_c836c6c749ecf3dcde243557b1c59830e2ab8567b1833c7da2f51a886afed02a_prof);

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
