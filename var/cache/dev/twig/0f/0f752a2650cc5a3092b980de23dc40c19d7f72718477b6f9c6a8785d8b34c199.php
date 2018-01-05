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
        $__internal_723d2884a20cf30ab53c2544eedf5f08ad20ac414a457f768a6deedd278e7e9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_723d2884a20cf30ab53c2544eedf5f08ad20ac414a457f768a6deedd278e7e9e->enter($__internal_723d2884a20cf30ab53c2544eedf5f08ad20ac414a457f768a6deedd278e7e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_7188400988fb33c08da8291884c5a5cd137507741ed2b3298447c7b171bc0131 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7188400988fb33c08da8291884c5a5cd137507741ed2b3298447c7b171bc0131->enter($__internal_7188400988fb33c08da8291884c5a5cd137507741ed2b3298447c7b171bc0131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_723d2884a20cf30ab53c2544eedf5f08ad20ac414a457f768a6deedd278e7e9e->leave($__internal_723d2884a20cf30ab53c2544eedf5f08ad20ac414a457f768a6deedd278e7e9e_prof);

        
        $__internal_7188400988fb33c08da8291884c5a5cd137507741ed2b3298447c7b171bc0131->leave($__internal_7188400988fb33c08da8291884c5a5cd137507741ed2b3298447c7b171bc0131_prof);

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
