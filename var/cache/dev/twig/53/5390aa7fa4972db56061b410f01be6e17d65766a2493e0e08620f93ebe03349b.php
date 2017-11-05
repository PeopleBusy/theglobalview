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
        $__internal_716d7fec1e603512b4bc1b823e0700f1c9243347d32045b3a9e58909eb8d538a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_716d7fec1e603512b4bc1b823e0700f1c9243347d32045b3a9e58909eb8d538a->enter($__internal_716d7fec1e603512b4bc1b823e0700f1c9243347d32045b3a9e58909eb8d538a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_a9cf2c88aec7a901ba7062a1b2b3d6a1f487fb7451b02ed3aab0511d00ace671 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9cf2c88aec7a901ba7062a1b2b3d6a1f487fb7451b02ed3aab0511d00ace671->enter($__internal_a9cf2c88aec7a901ba7062a1b2b3d6a1f487fb7451b02ed3aab0511d00ace671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_716d7fec1e603512b4bc1b823e0700f1c9243347d32045b3a9e58909eb8d538a->leave($__internal_716d7fec1e603512b4bc1b823e0700f1c9243347d32045b3a9e58909eb8d538a_prof);

        
        $__internal_a9cf2c88aec7a901ba7062a1b2b3d6a1f487fb7451b02ed3aab0511d00ace671->leave($__internal_a9cf2c88aec7a901ba7062a1b2b3d6a1f487fb7451b02ed3aab0511d00ace671_prof);

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
