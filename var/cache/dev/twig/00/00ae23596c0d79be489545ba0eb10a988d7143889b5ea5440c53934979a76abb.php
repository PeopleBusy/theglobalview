<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_95f3960d2ecc13233d7c5b465148685aafd81671e39054636612bedf73699f69 extends Twig_Template
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
        $__internal_4cfb9400814e66b8d4c3a737f9f968e4aeff179738aad10323ef19bb4a551fdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cfb9400814e66b8d4c3a737f9f968e4aeff179738aad10323ef19bb4a551fdf->enter($__internal_4cfb9400814e66b8d4c3a737f9f968e4aeff179738aad10323ef19bb4a551fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_e798e08db5642956c86c235ab54038591d16206300a5d9a0dbf585c05d0ade7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e798e08db5642956c86c235ab54038591d16206300a5d9a0dbf585c05d0ade7f->enter($__internal_e798e08db5642956c86c235ab54038591d16206300a5d9a0dbf585c05d0ade7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_4cfb9400814e66b8d4c3a737f9f968e4aeff179738aad10323ef19bb4a551fdf->leave($__internal_4cfb9400814e66b8d4c3a737f9f968e4aeff179738aad10323ef19bb4a551fdf_prof);

        
        $__internal_e798e08db5642956c86c235ab54038591d16206300a5d9a0dbf585c05d0ade7f->leave($__internal_e798e08db5642956c86c235ab54038591d16206300a5d9a0dbf585c05d0ade7f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
