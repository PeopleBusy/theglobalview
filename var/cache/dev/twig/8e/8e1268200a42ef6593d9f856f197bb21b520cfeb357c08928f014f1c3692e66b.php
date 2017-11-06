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
        $__internal_3fffd4e861314eaba9cc86590ca98e260145d11af28200325c9fcaed20a9eaa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fffd4e861314eaba9cc86590ca98e260145d11af28200325c9fcaed20a9eaa9->enter($__internal_3fffd4e861314eaba9cc86590ca98e260145d11af28200325c9fcaed20a9eaa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_f6f3979a8a4e67963f6a82560701672f648f7f0199265fda36af687e07de1323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6f3979a8a4e67963f6a82560701672f648f7f0199265fda36af687e07de1323->enter($__internal_f6f3979a8a4e67963f6a82560701672f648f7f0199265fda36af687e07de1323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3fffd4e861314eaba9cc86590ca98e260145d11af28200325c9fcaed20a9eaa9->leave($__internal_3fffd4e861314eaba9cc86590ca98e260145d11af28200325c9fcaed20a9eaa9_prof);

        
        $__internal_f6f3979a8a4e67963f6a82560701672f648f7f0199265fda36af687e07de1323->leave($__internal_f6f3979a8a4e67963f6a82560701672f648f7f0199265fda36af687e07de1323_prof);

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
