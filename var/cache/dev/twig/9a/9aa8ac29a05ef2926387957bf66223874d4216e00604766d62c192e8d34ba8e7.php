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
        $__internal_8b091195f6c866eab583c76de88971beb6878220c27928e36f31255567738f1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b091195f6c866eab583c76de88971beb6878220c27928e36f31255567738f1c->enter($__internal_8b091195f6c866eab583c76de88971beb6878220c27928e36f31255567738f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_e3ebb60d77726683471ace07b84547820c07d531b0ba6b61dc3b2d7869e8e309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3ebb60d77726683471ace07b84547820c07d531b0ba6b61dc3b2d7869e8e309->enter($__internal_e3ebb60d77726683471ace07b84547820c07d531b0ba6b61dc3b2d7869e8e309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_8b091195f6c866eab583c76de88971beb6878220c27928e36f31255567738f1c->leave($__internal_8b091195f6c866eab583c76de88971beb6878220c27928e36f31255567738f1c_prof);

        
        $__internal_e3ebb60d77726683471ace07b84547820c07d531b0ba6b61dc3b2d7869e8e309->leave($__internal_e3ebb60d77726683471ace07b84547820c07d531b0ba6b61dc3b2d7869e8e309_prof);

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
", "@Framework/Form/container_attributes.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
