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
        $__internal_9041cca54e529b05b8924683e6d34c7c90481d00e707ef3f41f1a051da11df99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9041cca54e529b05b8924683e6d34c7c90481d00e707ef3f41f1a051da11df99->enter($__internal_9041cca54e529b05b8924683e6d34c7c90481d00e707ef3f41f1a051da11df99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_3f4d56f04ca91c2ea4449f1047f3beb3f3cb70b67267f8105c4193011f05d1b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f4d56f04ca91c2ea4449f1047f3beb3f3cb70b67267f8105c4193011f05d1b0->enter($__internal_3f4d56f04ca91c2ea4449f1047f3beb3f3cb70b67267f8105c4193011f05d1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9041cca54e529b05b8924683e6d34c7c90481d00e707ef3f41f1a051da11df99->leave($__internal_9041cca54e529b05b8924683e6d34c7c90481d00e707ef3f41f1a051da11df99_prof);

        
        $__internal_3f4d56f04ca91c2ea4449f1047f3beb3f3cb70b67267f8105c4193011f05d1b0->leave($__internal_3f4d56f04ca91c2ea4449f1047f3beb3f3cb70b67267f8105c4193011f05d1b0_prof);

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
