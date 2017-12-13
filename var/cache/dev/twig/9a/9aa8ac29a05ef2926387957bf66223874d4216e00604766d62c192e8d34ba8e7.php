<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_445d360579886037163acb51777d1573b609e129b24cf7858b1fbc2af24e2785 extends Twig_Template
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
        $__internal_c425a13d4b4a592a690246fcc136cef09445e7e974b2302ef726dab2d0a09ac7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c425a13d4b4a592a690246fcc136cef09445e7e974b2302ef726dab2d0a09ac7->enter($__internal_c425a13d4b4a592a690246fcc136cef09445e7e974b2302ef726dab2d0a09ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_080c6add6e99592b90d5a38e2d84c49f0038d4ed340e3ef531b5b87ef02c3af1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_080c6add6e99592b90d5a38e2d84c49f0038d4ed340e3ef531b5b87ef02c3af1->enter($__internal_080c6add6e99592b90d5a38e2d84c49f0038d4ed340e3ef531b5b87ef02c3af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_c425a13d4b4a592a690246fcc136cef09445e7e974b2302ef726dab2d0a09ac7->leave($__internal_c425a13d4b4a592a690246fcc136cef09445e7e974b2302ef726dab2d0a09ac7_prof);

        
        $__internal_080c6add6e99592b90d5a38e2d84c49f0038d4ed340e3ef531b5b87ef02c3af1->leave($__internal_080c6add6e99592b90d5a38e2d84c49f0038d4ed340e3ef531b5b87ef02c3af1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
