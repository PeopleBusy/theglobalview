<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_cc9e649c7733d9abb662a7b19c999c02ea44a19113343cecbbca2715c6326dd8 extends Twig_Template
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
        $__internal_febce5ee83aa8ceb66c608d64bf57d95528dbd5af769b81bf6b759f0620607fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_febce5ee83aa8ceb66c608d64bf57d95528dbd5af769b81bf6b759f0620607fc->enter($__internal_febce5ee83aa8ceb66c608d64bf57d95528dbd5af769b81bf6b759f0620607fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_700bd693ee5b71b1e713cbb4235c5821af7fde8749fcefd878d7382ba550fa71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_700bd693ee5b71b1e713cbb4235c5821af7fde8749fcefd878d7382ba550fa71->enter($__internal_700bd693ee5b71b1e713cbb4235c5821af7fde8749fcefd878d7382ba550fa71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_febce5ee83aa8ceb66c608d64bf57d95528dbd5af769b81bf6b759f0620607fc->leave($__internal_febce5ee83aa8ceb66c608d64bf57d95528dbd5af769b81bf6b759f0620607fc_prof);

        
        $__internal_700bd693ee5b71b1e713cbb4235c5821af7fde8749fcefd878d7382ba550fa71->leave($__internal_700bd693ee5b71b1e713cbb4235c5821af7fde8749fcefd878d7382ba550fa71_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
