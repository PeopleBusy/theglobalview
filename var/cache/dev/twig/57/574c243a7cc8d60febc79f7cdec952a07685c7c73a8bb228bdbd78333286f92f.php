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
        $__internal_1d2e048aca1d93345de8ab24aa417a3aa097fef4ccd5d7dc559d54fc46657bbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d2e048aca1d93345de8ab24aa417a3aa097fef4ccd5d7dc559d54fc46657bbe->enter($__internal_1d2e048aca1d93345de8ab24aa417a3aa097fef4ccd5d7dc559d54fc46657bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_64dd489d08abc35a3974d1744bd5d9f4f4672cb18f06146e1676a0e008ee5899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64dd489d08abc35a3974d1744bd5d9f4f4672cb18f06146e1676a0e008ee5899->enter($__internal_64dd489d08abc35a3974d1744bd5d9f4f4672cb18f06146e1676a0e008ee5899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1d2e048aca1d93345de8ab24aa417a3aa097fef4ccd5d7dc559d54fc46657bbe->leave($__internal_1d2e048aca1d93345de8ab24aa417a3aa097fef4ccd5d7dc559d54fc46657bbe_prof);

        
        $__internal_64dd489d08abc35a3974d1744bd5d9f4f4672cb18f06146e1676a0e008ee5899->leave($__internal_64dd489d08abc35a3974d1744bd5d9f4f4672cb18f06146e1676a0e008ee5899_prof);

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
", "@Framework/FormTable/button_row.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
