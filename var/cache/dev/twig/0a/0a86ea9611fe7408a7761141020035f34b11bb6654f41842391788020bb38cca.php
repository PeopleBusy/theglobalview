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
        $__internal_d024476f1ed65554b34abd1daad0a88dbb3b28f70ef8acb890956eb758a0cfb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d024476f1ed65554b34abd1daad0a88dbb3b28f70ef8acb890956eb758a0cfb0->enter($__internal_d024476f1ed65554b34abd1daad0a88dbb3b28f70ef8acb890956eb758a0cfb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_c3b4c888bfbb5f7c4bbe6d75e0ca758dc72f7f6c95a6850ce62c0abdf407c1b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3b4c888bfbb5f7c4bbe6d75e0ca758dc72f7f6c95a6850ce62c0abdf407c1b0->enter($__internal_c3b4c888bfbb5f7c4bbe6d75e0ca758dc72f7f6c95a6850ce62c0abdf407c1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d024476f1ed65554b34abd1daad0a88dbb3b28f70ef8acb890956eb758a0cfb0->leave($__internal_d024476f1ed65554b34abd1daad0a88dbb3b28f70ef8acb890956eb758a0cfb0_prof);

        
        $__internal_c3b4c888bfbb5f7c4bbe6d75e0ca758dc72f7f6c95a6850ce62c0abdf407c1b0->leave($__internal_c3b4c888bfbb5f7c4bbe6d75e0ca758dc72f7f6c95a6850ce62c0abdf407c1b0_prof);

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
", "@Framework/Form/button_row.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
