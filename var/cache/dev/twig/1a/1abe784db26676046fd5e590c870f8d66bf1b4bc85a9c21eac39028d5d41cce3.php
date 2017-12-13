<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_fd30ac2723f65fa427fc1bec979d18dca99ab79db3dd9dd951b5929657d48bc8 extends Twig_Template
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
        $__internal_7052dd1ecf1d53b5c8b3712cec06f533e404378143a8e9890215aa1f17a01b5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7052dd1ecf1d53b5c8b3712cec06f533e404378143a8e9890215aa1f17a01b5f->enter($__internal_7052dd1ecf1d53b5c8b3712cec06f533e404378143a8e9890215aa1f17a01b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_5f8529568db900b9b9da02473ab8119ff726df463ad93efd0ab5ee5bb17b2500 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f8529568db900b9b9da02473ab8119ff726df463ad93efd0ab5ee5bb17b2500->enter($__internal_5f8529568db900b9b9da02473ab8119ff726df463ad93efd0ab5ee5bb17b2500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_7052dd1ecf1d53b5c8b3712cec06f533e404378143a8e9890215aa1f17a01b5f->leave($__internal_7052dd1ecf1d53b5c8b3712cec06f533e404378143a8e9890215aa1f17a01b5f_prof);

        
        $__internal_5f8529568db900b9b9da02473ab8119ff726df463ad93efd0ab5ee5bb17b2500->leave($__internal_5f8529568db900b9b9da02473ab8119ff726df463ad93efd0ab5ee5bb17b2500_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
