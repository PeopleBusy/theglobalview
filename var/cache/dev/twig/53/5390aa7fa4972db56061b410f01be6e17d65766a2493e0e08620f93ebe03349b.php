<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_009fdd1ed931772b756724cea1bd0a349dc53cf8163283810640a0e7ea0c784e extends Twig_Template
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
        $__internal_a9e772adc4c489b79f8947b7c47968c02492ff99d418462ce162042a0be79b9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9e772adc4c489b79f8947b7c47968c02492ff99d418462ce162042a0be79b9e->enter($__internal_a9e772adc4c489b79f8947b7c47968c02492ff99d418462ce162042a0be79b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_81facdc5cebdc80383dc316176b23874244ac2e70650cdeae77894b63e53f6b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81facdc5cebdc80383dc316176b23874244ac2e70650cdeae77894b63e53f6b9->enter($__internal_81facdc5cebdc80383dc316176b23874244ac2e70650cdeae77894b63e53f6b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_a9e772adc4c489b79f8947b7c47968c02492ff99d418462ce162042a0be79b9e->leave($__internal_a9e772adc4c489b79f8947b7c47968c02492ff99d418462ce162042a0be79b9e_prof);

        
        $__internal_81facdc5cebdc80383dc316176b23874244ac2e70650cdeae77894b63e53f6b9->leave($__internal_81facdc5cebdc80383dc316176b23874244ac2e70650cdeae77894b63e53f6b9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
