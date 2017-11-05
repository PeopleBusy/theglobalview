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
        $__internal_e2f24f278a2c880d7a8d4340fec3d376619be43ecf758e72ae2b706bb84facff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2f24f278a2c880d7a8d4340fec3d376619be43ecf758e72ae2b706bb84facff->enter($__internal_e2f24f278a2c880d7a8d4340fec3d376619be43ecf758e72ae2b706bb84facff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_407f0c232e46f5b1d0a559e0124bdfc62a7819de9d015b55b63bdb10126d63e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_407f0c232e46f5b1d0a559e0124bdfc62a7819de9d015b55b63bdb10126d63e1->enter($__internal_407f0c232e46f5b1d0a559e0124bdfc62a7819de9d015b55b63bdb10126d63e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e2f24f278a2c880d7a8d4340fec3d376619be43ecf758e72ae2b706bb84facff->leave($__internal_e2f24f278a2c880d7a8d4340fec3d376619be43ecf758e72ae2b706bb84facff_prof);

        
        $__internal_407f0c232e46f5b1d0a559e0124bdfc62a7819de9d015b55b63bdb10126d63e1->leave($__internal_407f0c232e46f5b1d0a559e0124bdfc62a7819de9d015b55b63bdb10126d63e1_prof);

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
