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
        $__internal_e6203fb16496493cacda71abc15cce459e6972a058f7f60dea2bc12eab947463 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6203fb16496493cacda71abc15cce459e6972a058f7f60dea2bc12eab947463->enter($__internal_e6203fb16496493cacda71abc15cce459e6972a058f7f60dea2bc12eab947463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_1611215fafa981e063c9e7b64e74907889aac2913592cd2954d1f701c87be4d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1611215fafa981e063c9e7b64e74907889aac2913592cd2954d1f701c87be4d9->enter($__internal_1611215fafa981e063c9e7b64e74907889aac2913592cd2954d1f701c87be4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_e6203fb16496493cacda71abc15cce459e6972a058f7f60dea2bc12eab947463->leave($__internal_e6203fb16496493cacda71abc15cce459e6972a058f7f60dea2bc12eab947463_prof);

        
        $__internal_1611215fafa981e063c9e7b64e74907889aac2913592cd2954d1f701c87be4d9->leave($__internal_1611215fafa981e063c9e7b64e74907889aac2913592cd2954d1f701c87be4d9_prof);

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
", "@Framework/Form/form_enctype.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
