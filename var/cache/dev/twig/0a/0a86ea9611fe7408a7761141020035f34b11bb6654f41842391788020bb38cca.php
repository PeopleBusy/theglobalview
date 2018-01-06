<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_b441c44769e4f234cacf0cd2a188faa3a16d1ecb248352011d94543ab0af9b55 extends Twig_Template
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
        $__internal_fb1f1f85764a95b839808fa0fa36d1e486cec63e0f07b903e1b2fe9f83bae07d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb1f1f85764a95b839808fa0fa36d1e486cec63e0f07b903e1b2fe9f83bae07d->enter($__internal_fb1f1f85764a95b839808fa0fa36d1e486cec63e0f07b903e1b2fe9f83bae07d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_8bbfb198212f78e62aeb28fa92a0de60e61fea42c7728c88da89122ad5407dcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bbfb198212f78e62aeb28fa92a0de60e61fea42c7728c88da89122ad5407dcc->enter($__internal_8bbfb198212f78e62aeb28fa92a0de60e61fea42c7728c88da89122ad5407dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_fb1f1f85764a95b839808fa0fa36d1e486cec63e0f07b903e1b2fe9f83bae07d->leave($__internal_fb1f1f85764a95b839808fa0fa36d1e486cec63e0f07b903e1b2fe9f83bae07d_prof);

        
        $__internal_8bbfb198212f78e62aeb28fa92a0de60e61fea42c7728c88da89122ad5407dcc->leave($__internal_8bbfb198212f78e62aeb28fa92a0de60e61fea42c7728c88da89122ad5407dcc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
