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
        $__internal_d47f24bc6c372b844ccd097890646c5f67d7c43bb4585b0b313b6122a2d0b85e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d47f24bc6c372b844ccd097890646c5f67d7c43bb4585b0b313b6122a2d0b85e->enter($__internal_d47f24bc6c372b844ccd097890646c5f67d7c43bb4585b0b313b6122a2d0b85e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_511ba246157952538be31a8dcf73088d548248bf1b6d6de8e2929e4666b8b3c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_511ba246157952538be31a8dcf73088d548248bf1b6d6de8e2929e4666b8b3c5->enter($__internal_511ba246157952538be31a8dcf73088d548248bf1b6d6de8e2929e4666b8b3c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_d47f24bc6c372b844ccd097890646c5f67d7c43bb4585b0b313b6122a2d0b85e->leave($__internal_d47f24bc6c372b844ccd097890646c5f67d7c43bb4585b0b313b6122a2d0b85e_prof);

        
        $__internal_511ba246157952538be31a8dcf73088d548248bf1b6d6de8e2929e4666b8b3c5->leave($__internal_511ba246157952538be31a8dcf73088d548248bf1b6d6de8e2929e4666b8b3c5_prof);

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
