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
        $__internal_08da6d2a8a5410791049eea853b920209819896ab17bb24a64744eee9239b7a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08da6d2a8a5410791049eea853b920209819896ab17bb24a64744eee9239b7a6->enter($__internal_08da6d2a8a5410791049eea853b920209819896ab17bb24a64744eee9239b7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_b7c01bf1d4332132e47560bca344ebe5a8cc576f0e805c4a267c7891a470c4e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7c01bf1d4332132e47560bca344ebe5a8cc576f0e805c4a267c7891a470c4e6->enter($__internal_b7c01bf1d4332132e47560bca344ebe5a8cc576f0e805c4a267c7891a470c4e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_08da6d2a8a5410791049eea853b920209819896ab17bb24a64744eee9239b7a6->leave($__internal_08da6d2a8a5410791049eea853b920209819896ab17bb24a64744eee9239b7a6_prof);

        
        $__internal_b7c01bf1d4332132e47560bca344ebe5a8cc576f0e805c4a267c7891a470c4e6->leave($__internal_b7c01bf1d4332132e47560bca344ebe5a8cc576f0e805c4a267c7891a470c4e6_prof);

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
