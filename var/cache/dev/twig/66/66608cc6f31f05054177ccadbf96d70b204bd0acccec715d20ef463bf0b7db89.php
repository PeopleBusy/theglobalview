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
        $__internal_c900e113e61ff1c6ecf3c8b91321374b6ad3dc246347b6dc6ead623db42f211e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c900e113e61ff1c6ecf3c8b91321374b6ad3dc246347b6dc6ead623db42f211e->enter($__internal_c900e113e61ff1c6ecf3c8b91321374b6ad3dc246347b6dc6ead623db42f211e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_e2774a3ae9eca83313786c3aebc1d6b06ef04694b019b2a70b9be404b51f06f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2774a3ae9eca83313786c3aebc1d6b06ef04694b019b2a70b9be404b51f06f9->enter($__internal_e2774a3ae9eca83313786c3aebc1d6b06ef04694b019b2a70b9be404b51f06f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_c900e113e61ff1c6ecf3c8b91321374b6ad3dc246347b6dc6ead623db42f211e->leave($__internal_c900e113e61ff1c6ecf3c8b91321374b6ad3dc246347b6dc6ead623db42f211e_prof);

        
        $__internal_e2774a3ae9eca83313786c3aebc1d6b06ef04694b019b2a70b9be404b51f06f9->leave($__internal_e2774a3ae9eca83313786c3aebc1d6b06ef04694b019b2a70b9be404b51f06f9_prof);

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
