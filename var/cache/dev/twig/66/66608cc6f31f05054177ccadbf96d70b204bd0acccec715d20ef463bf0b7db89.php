<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_2ed52de9cd7e60542e118853214a79418ea157ef1d91b7b83fc071de4051ebca extends Twig_Template
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
        $__internal_a60e8bc6d9bc3f29ef605b8f801417c0e00a28b16881baba17b1edd494b838b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a60e8bc6d9bc3f29ef605b8f801417c0e00a28b16881baba17b1edd494b838b7->enter($__internal_a60e8bc6d9bc3f29ef605b8f801417c0e00a28b16881baba17b1edd494b838b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_e2506941091f272e62a419a1b18066eb08e3c627e9bb4f22fed376615000e662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2506941091f272e62a419a1b18066eb08e3c627e9bb4f22fed376615000e662->enter($__internal_e2506941091f272e62a419a1b18066eb08e3c627e9bb4f22fed376615000e662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_a60e8bc6d9bc3f29ef605b8f801417c0e00a28b16881baba17b1edd494b838b7->leave($__internal_a60e8bc6d9bc3f29ef605b8f801417c0e00a28b16881baba17b1edd494b838b7_prof);

        
        $__internal_e2506941091f272e62a419a1b18066eb08e3c627e9bb4f22fed376615000e662->leave($__internal_e2506941091f272e62a419a1b18066eb08e3c627e9bb4f22fed376615000e662_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
