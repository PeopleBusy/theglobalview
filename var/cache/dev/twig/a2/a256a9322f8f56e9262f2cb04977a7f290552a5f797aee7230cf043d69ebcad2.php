<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_bf0b37de69e2f3e2f512d343fa1e0567025842dbf9be58a224270960117ca40b extends Twig_Template
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
        $__internal_2e235ac0fad5eb4607bea504620d231543783dd0b55931986ff57451bbb7bf17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e235ac0fad5eb4607bea504620d231543783dd0b55931986ff57451bbb7bf17->enter($__internal_2e235ac0fad5eb4607bea504620d231543783dd0b55931986ff57451bbb7bf17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_ba9e02671d53ae36da420bd277a64f2d8067630b6820e9c1fdb35817180863ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba9e02671d53ae36da420bd277a64f2d8067630b6820e9c1fdb35817180863ef->enter($__internal_ba9e02671d53ae36da420bd277a64f2d8067630b6820e9c1fdb35817180863ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2e235ac0fad5eb4607bea504620d231543783dd0b55931986ff57451bbb7bf17->leave($__internal_2e235ac0fad5eb4607bea504620d231543783dd0b55931986ff57451bbb7bf17_prof);

        
        $__internal_ba9e02671d53ae36da420bd277a64f2d8067630b6820e9c1fdb35817180863ef->leave($__internal_ba9e02671d53ae36da420bd277a64f2d8067630b6820e9c1fdb35817180863ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
