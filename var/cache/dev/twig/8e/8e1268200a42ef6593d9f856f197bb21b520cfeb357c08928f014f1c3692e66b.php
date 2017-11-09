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
        $__internal_a77edf3b9e1f6e13bc9bce3e002a1aa3a8f3d53360396e7413bbdf4fd539e014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a77edf3b9e1f6e13bc9bce3e002a1aa3a8f3d53360396e7413bbdf4fd539e014->enter($__internal_a77edf3b9e1f6e13bc9bce3e002a1aa3a8f3d53360396e7413bbdf4fd539e014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_0c6e3356348ed17aa0d7f9281680f67e61963e269a6dc52c94bb26c85d93e3d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c6e3356348ed17aa0d7f9281680f67e61963e269a6dc52c94bb26c85d93e3d2->enter($__internal_0c6e3356348ed17aa0d7f9281680f67e61963e269a6dc52c94bb26c85d93e3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a77edf3b9e1f6e13bc9bce3e002a1aa3a8f3d53360396e7413bbdf4fd539e014->leave($__internal_a77edf3b9e1f6e13bc9bce3e002a1aa3a8f3d53360396e7413bbdf4fd539e014_prof);

        
        $__internal_0c6e3356348ed17aa0d7f9281680f67e61963e269a6dc52c94bb26c85d93e3d2->leave($__internal_0c6e3356348ed17aa0d7f9281680f67e61963e269a6dc52c94bb26c85d93e3d2_prof);

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
