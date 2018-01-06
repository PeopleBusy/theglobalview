<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_0fb3c1f5b31c2467fbe49919988672ecdbdffa2b04d86d8a2661ea3c14eceb21 extends Twig_Template
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
        $__internal_77682eac69508120098a470e934607c011f6ee1f44adeb12216955e8ffe2dc48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77682eac69508120098a470e934607c011f6ee1f44adeb12216955e8ffe2dc48->enter($__internal_77682eac69508120098a470e934607c011f6ee1f44adeb12216955e8ffe2dc48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_6ca57d038302007b1112be79b1722cba2ee13a0e9448f6fbbec7e09d7acc81a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ca57d038302007b1112be79b1722cba2ee13a0e9448f6fbbec7e09d7acc81a8->enter($__internal_6ca57d038302007b1112be79b1722cba2ee13a0e9448f6fbbec7e09d7acc81a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_77682eac69508120098a470e934607c011f6ee1f44adeb12216955e8ffe2dc48->leave($__internal_77682eac69508120098a470e934607c011f6ee1f44adeb12216955e8ffe2dc48_prof);

        
        $__internal_6ca57d038302007b1112be79b1722cba2ee13a0e9448f6fbbec7e09d7acc81a8->leave($__internal_6ca57d038302007b1112be79b1722cba2ee13a0e9448f6fbbec7e09d7acc81a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
