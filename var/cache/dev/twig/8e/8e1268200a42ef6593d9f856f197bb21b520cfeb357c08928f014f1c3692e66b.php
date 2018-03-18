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
        $__internal_a6f2053f4be431209a095cb5c1e0379494b76ed2ae8047c118e4f44e3c2e59a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6f2053f4be431209a095cb5c1e0379494b76ed2ae8047c118e4f44e3c2e59a8->enter($__internal_a6f2053f4be431209a095cb5c1e0379494b76ed2ae8047c118e4f44e3c2e59a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_c15ed772f824accd1e3d42f946e869ca7afa4a01824cdd92823ae56d7281eca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c15ed772f824accd1e3d42f946e869ca7afa4a01824cdd92823ae56d7281eca7->enter($__internal_c15ed772f824accd1e3d42f946e869ca7afa4a01824cdd92823ae56d7281eca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a6f2053f4be431209a095cb5c1e0379494b76ed2ae8047c118e4f44e3c2e59a8->leave($__internal_a6f2053f4be431209a095cb5c1e0379494b76ed2ae8047c118e4f44e3c2e59a8_prof);

        
        $__internal_c15ed772f824accd1e3d42f946e869ca7afa4a01824cdd92823ae56d7281eca7->leave($__internal_c15ed772f824accd1e3d42f946e869ca7afa4a01824cdd92823ae56d7281eca7_prof);

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
", "@Framework/FormTable/hidden_row.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
