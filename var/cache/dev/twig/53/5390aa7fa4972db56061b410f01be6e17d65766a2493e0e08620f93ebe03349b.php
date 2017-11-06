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
        $__internal_80bac2d7da459e21e5135d639d0f420d0a8c81234690bff9e9d69fb81774c3fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80bac2d7da459e21e5135d639d0f420d0a8c81234690bff9e9d69fb81774c3fa->enter($__internal_80bac2d7da459e21e5135d639d0f420d0a8c81234690bff9e9d69fb81774c3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_59db1d86293c84e7614360843ab961c1bb08cf71f6a733e0dcd212527f57454c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59db1d86293c84e7614360843ab961c1bb08cf71f6a733e0dcd212527f57454c->enter($__internal_59db1d86293c84e7614360843ab961c1bb08cf71f6a733e0dcd212527f57454c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_80bac2d7da459e21e5135d639d0f420d0a8c81234690bff9e9d69fb81774c3fa->leave($__internal_80bac2d7da459e21e5135d639d0f420d0a8c81234690bff9e9d69fb81774c3fa_prof);

        
        $__internal_59db1d86293c84e7614360843ab961c1bb08cf71f6a733e0dcd212527f57454c->leave($__internal_59db1d86293c84e7614360843ab961c1bb08cf71f6a733e0dcd212527f57454c_prof);

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
