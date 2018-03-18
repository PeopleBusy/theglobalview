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
        $__internal_af880f3ef54178f4626f4d915b5675f735967770b4b9c56dd8e56ae7eb4321fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af880f3ef54178f4626f4d915b5675f735967770b4b9c56dd8e56ae7eb4321fa->enter($__internal_af880f3ef54178f4626f4d915b5675f735967770b4b9c56dd8e56ae7eb4321fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_44cdf1c6ff679d4c3c7f4742f9cb97debe75232c0d0c0e135ee5f57f29b84e87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44cdf1c6ff679d4c3c7f4742f9cb97debe75232c0d0c0e135ee5f57f29b84e87->enter($__internal_44cdf1c6ff679d4c3c7f4742f9cb97debe75232c0d0c0e135ee5f57f29b84e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_af880f3ef54178f4626f4d915b5675f735967770b4b9c56dd8e56ae7eb4321fa->leave($__internal_af880f3ef54178f4626f4d915b5675f735967770b4b9c56dd8e56ae7eb4321fa_prof);

        
        $__internal_44cdf1c6ff679d4c3c7f4742f9cb97debe75232c0d0c0e135ee5f57f29b84e87->leave($__internal_44cdf1c6ff679d4c3c7f4742f9cb97debe75232c0d0c0e135ee5f57f29b84e87_prof);

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
