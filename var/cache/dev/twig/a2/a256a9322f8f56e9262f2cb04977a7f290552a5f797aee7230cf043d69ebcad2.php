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
        $__internal_cf4a61d4168d83100ef1981bab5f617408ddf4e64ac74dd3f5f86749be964e71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf4a61d4168d83100ef1981bab5f617408ddf4e64ac74dd3f5f86749be964e71->enter($__internal_cf4a61d4168d83100ef1981bab5f617408ddf4e64ac74dd3f5f86749be964e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_54a6a8d846b69c4106bc03287d93e703776f6f54eefd908301959f2b130b2cf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54a6a8d846b69c4106bc03287d93e703776f6f54eefd908301959f2b130b2cf0->enter($__internal_54a6a8d846b69c4106bc03287d93e703776f6f54eefd908301959f2b130b2cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_cf4a61d4168d83100ef1981bab5f617408ddf4e64ac74dd3f5f86749be964e71->leave($__internal_cf4a61d4168d83100ef1981bab5f617408ddf4e64ac74dd3f5f86749be964e71_prof);

        
        $__internal_54a6a8d846b69c4106bc03287d93e703776f6f54eefd908301959f2b130b2cf0->leave($__internal_54a6a8d846b69c4106bc03287d93e703776f6f54eefd908301959f2b130b2cf0_prof);

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
