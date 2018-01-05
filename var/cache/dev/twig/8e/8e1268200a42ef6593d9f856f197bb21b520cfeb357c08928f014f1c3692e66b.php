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
        $__internal_1735f2f2657052c04501e0e2475c1501fc6e27a24479d77a3505cae94411987b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1735f2f2657052c04501e0e2475c1501fc6e27a24479d77a3505cae94411987b->enter($__internal_1735f2f2657052c04501e0e2475c1501fc6e27a24479d77a3505cae94411987b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_1fa06294cb821b4d9669911df043174db4b922eaef2b65075c5765a34d0ecb2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fa06294cb821b4d9669911df043174db4b922eaef2b65075c5765a34d0ecb2b->enter($__internal_1fa06294cb821b4d9669911df043174db4b922eaef2b65075c5765a34d0ecb2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1735f2f2657052c04501e0e2475c1501fc6e27a24479d77a3505cae94411987b->leave($__internal_1735f2f2657052c04501e0e2475c1501fc6e27a24479d77a3505cae94411987b_prof);

        
        $__internal_1fa06294cb821b4d9669911df043174db4b922eaef2b65075c5765a34d0ecb2b->leave($__internal_1fa06294cb821b4d9669911df043174db4b922eaef2b65075c5765a34d0ecb2b_prof);

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
