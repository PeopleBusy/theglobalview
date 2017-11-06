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
        $__internal_6343d4457c30404232e81896cd5537a5666dddf383f2f2841cd02f0fe72d4f05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6343d4457c30404232e81896cd5537a5666dddf383f2f2841cd02f0fe72d4f05->enter($__internal_6343d4457c30404232e81896cd5537a5666dddf383f2f2841cd02f0fe72d4f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_87e18dd1b6bda0ec675f4916e47d3695e7657762a69896ccb8e13130c343d65b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87e18dd1b6bda0ec675f4916e47d3695e7657762a69896ccb8e13130c343d65b->enter($__internal_87e18dd1b6bda0ec675f4916e47d3695e7657762a69896ccb8e13130c343d65b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6343d4457c30404232e81896cd5537a5666dddf383f2f2841cd02f0fe72d4f05->leave($__internal_6343d4457c30404232e81896cd5537a5666dddf383f2f2841cd02f0fe72d4f05_prof);

        
        $__internal_87e18dd1b6bda0ec675f4916e47d3695e7657762a69896ccb8e13130c343d65b->leave($__internal_87e18dd1b6bda0ec675f4916e47d3695e7657762a69896ccb8e13130c343d65b_prof);

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
