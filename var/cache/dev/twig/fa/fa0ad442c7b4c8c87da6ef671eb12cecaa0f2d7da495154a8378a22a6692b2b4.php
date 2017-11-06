<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_dade7c19e62c9349ca5997ebda3952d28f8b85da060fff1725113890272baf96 extends Twig_Template
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
        $__internal_6a7843a2b8585d778dc1fa25cb797044c9ae5590e0a6c11227a62561e37d9fa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a7843a2b8585d778dc1fa25cb797044c9ae5590e0a6c11227a62561e37d9fa0->enter($__internal_6a7843a2b8585d778dc1fa25cb797044c9ae5590e0a6c11227a62561e37d9fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_539dc9b397019210e2f7a0c3b2ff3c171e14176dea1b0d70c4176ff244e0db7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_539dc9b397019210e2f7a0c3b2ff3c171e14176dea1b0d70c4176ff244e0db7f->enter($__internal_539dc9b397019210e2f7a0c3b2ff3c171e14176dea1b0d70c4176ff244e0db7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_6a7843a2b8585d778dc1fa25cb797044c9ae5590e0a6c11227a62561e37d9fa0->leave($__internal_6a7843a2b8585d778dc1fa25cb797044c9ae5590e0a6c11227a62561e37d9fa0_prof);

        
        $__internal_539dc9b397019210e2f7a0c3b2ff3c171e14176dea1b0d70c4176ff244e0db7f->leave($__internal_539dc9b397019210e2f7a0c3b2ff3c171e14176dea1b0d70c4176ff244e0db7f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
