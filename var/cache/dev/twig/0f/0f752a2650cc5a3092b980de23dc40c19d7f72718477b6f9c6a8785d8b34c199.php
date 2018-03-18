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
        $__internal_fe136979b25ee45534c59459a9ff50081340e11a14ab4df38bd7ca9ef5219d16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe136979b25ee45534c59459a9ff50081340e11a14ab4df38bd7ca9ef5219d16->enter($__internal_fe136979b25ee45534c59459a9ff50081340e11a14ab4df38bd7ca9ef5219d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_ec892a6d16479090ce2adaeecdaa97a2f84f8fae62c16272d8090bc9a129c25b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec892a6d16479090ce2adaeecdaa97a2f84f8fae62c16272d8090bc9a129c25b->enter($__internal_ec892a6d16479090ce2adaeecdaa97a2f84f8fae62c16272d8090bc9a129c25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_fe136979b25ee45534c59459a9ff50081340e11a14ab4df38bd7ca9ef5219d16->leave($__internal_fe136979b25ee45534c59459a9ff50081340e11a14ab4df38bd7ca9ef5219d16_prof);

        
        $__internal_ec892a6d16479090ce2adaeecdaa97a2f84f8fae62c16272d8090bc9a129c25b->leave($__internal_ec892a6d16479090ce2adaeecdaa97a2f84f8fae62c16272d8090bc9a129c25b_prof);

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
", "@Framework/Form/form_row.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
