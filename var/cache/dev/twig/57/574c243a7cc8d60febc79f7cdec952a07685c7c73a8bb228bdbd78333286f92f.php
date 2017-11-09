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
        $__internal_0f55f8b305b13ea40803399faa7bbfb71e3eb728efb176587924704ab2c812e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f55f8b305b13ea40803399faa7bbfb71e3eb728efb176587924704ab2c812e5->enter($__internal_0f55f8b305b13ea40803399faa7bbfb71e3eb728efb176587924704ab2c812e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_6186b2b503c458f03a6e29908687964596c9212557e3f7538a3461856a8a3c6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6186b2b503c458f03a6e29908687964596c9212557e3f7538a3461856a8a3c6d->enter($__internal_6186b2b503c458f03a6e29908687964596c9212557e3f7538a3461856a8a3c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0f55f8b305b13ea40803399faa7bbfb71e3eb728efb176587924704ab2c812e5->leave($__internal_0f55f8b305b13ea40803399faa7bbfb71e3eb728efb176587924704ab2c812e5_prof);

        
        $__internal_6186b2b503c458f03a6e29908687964596c9212557e3f7538a3461856a8a3c6d->leave($__internal_6186b2b503c458f03a6e29908687964596c9212557e3f7538a3461856a8a3c6d_prof);

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
