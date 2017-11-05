<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_d5e031b823b5997668afa9104abf0e58b87fc50e34b7986b7744f0bcdeb34556 extends Twig_Template
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
        $__internal_30c37d4112eab55e61c04fa3813b63e7b3ffdfb04c45edbd30470748284679d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30c37d4112eab55e61c04fa3813b63e7b3ffdfb04c45edbd30470748284679d7->enter($__internal_30c37d4112eab55e61c04fa3813b63e7b3ffdfb04c45edbd30470748284679d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_d11e675021987fa7736b2898da3c930918a2a86a03d7ef2909508bc57278c9dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d11e675021987fa7736b2898da3c930918a2a86a03d7ef2909508bc57278c9dc->enter($__internal_d11e675021987fa7736b2898da3c930918a2a86a03d7ef2909508bc57278c9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_30c37d4112eab55e61c04fa3813b63e7b3ffdfb04c45edbd30470748284679d7->leave($__internal_30c37d4112eab55e61c04fa3813b63e7b3ffdfb04c45edbd30470748284679d7_prof);

        
        $__internal_d11e675021987fa7736b2898da3c930918a2a86a03d7ef2909508bc57278c9dc->leave($__internal_d11e675021987fa7736b2898da3c930918a2a86a03d7ef2909508bc57278c9dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
