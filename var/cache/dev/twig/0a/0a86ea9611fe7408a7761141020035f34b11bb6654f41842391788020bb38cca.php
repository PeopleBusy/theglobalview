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
        $__internal_acf1162adec6e5478a02ab8590a171e6802704c30c460f26542991e3efac6479 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acf1162adec6e5478a02ab8590a171e6802704c30c460f26542991e3efac6479->enter($__internal_acf1162adec6e5478a02ab8590a171e6802704c30c460f26542991e3efac6479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_cd8b5f2226be92b1e1498e3aab8786f51acc6272f114884e8b4aae83e9b0cd0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd8b5f2226be92b1e1498e3aab8786f51acc6272f114884e8b4aae83e9b0cd0d->enter($__internal_cd8b5f2226be92b1e1498e3aab8786f51acc6272f114884e8b4aae83e9b0cd0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_acf1162adec6e5478a02ab8590a171e6802704c30c460f26542991e3efac6479->leave($__internal_acf1162adec6e5478a02ab8590a171e6802704c30c460f26542991e3efac6479_prof);

        
        $__internal_cd8b5f2226be92b1e1498e3aab8786f51acc6272f114884e8b4aae83e9b0cd0d->leave($__internal_cd8b5f2226be92b1e1498e3aab8786f51acc6272f114884e8b4aae83e9b0cd0d_prof);

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
