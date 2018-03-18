<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_bf0b37de69e2f3e2f512d343fa1e0567025842dbf9be58a224270960117ca40b extends Twig_Template
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
        $__internal_b7bbc9f50b47dfb84ffe848b01c53ee4b232e14717229b230bb71f7df7f0fca2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7bbc9f50b47dfb84ffe848b01c53ee4b232e14717229b230bb71f7df7f0fca2->enter($__internal_b7bbc9f50b47dfb84ffe848b01c53ee4b232e14717229b230bb71f7df7f0fca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_dea0c3d22ec013bc177381cd78fc65bc8b05704472c9bbe42fe055bbe0269095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dea0c3d22ec013bc177381cd78fc65bc8b05704472c9bbe42fe055bbe0269095->enter($__internal_dea0c3d22ec013bc177381cd78fc65bc8b05704472c9bbe42fe055bbe0269095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b7bbc9f50b47dfb84ffe848b01c53ee4b232e14717229b230bb71f7df7f0fca2->leave($__internal_b7bbc9f50b47dfb84ffe848b01c53ee4b232e14717229b230bb71f7df7f0fca2_prof);

        
        $__internal_dea0c3d22ec013bc177381cd78fc65bc8b05704472c9bbe42fe055bbe0269095->leave($__internal_dea0c3d22ec013bc177381cd78fc65bc8b05704472c9bbe42fe055bbe0269095_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
