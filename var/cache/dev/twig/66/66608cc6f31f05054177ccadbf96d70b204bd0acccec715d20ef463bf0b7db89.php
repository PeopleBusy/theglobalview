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
        $__internal_edb0429a74d7724e5f526192a77e286ec0088f6ef39cc89f9fb7ede5a5c88edb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edb0429a74d7724e5f526192a77e286ec0088f6ef39cc89f9fb7ede5a5c88edb->enter($__internal_edb0429a74d7724e5f526192a77e286ec0088f6ef39cc89f9fb7ede5a5c88edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_ff3f065802de542dbeab1711af66199b3408e51181bc93b37bfd3a843a56e1e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff3f065802de542dbeab1711af66199b3408e51181bc93b37bfd3a843a56e1e5->enter($__internal_ff3f065802de542dbeab1711af66199b3408e51181bc93b37bfd3a843a56e1e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_edb0429a74d7724e5f526192a77e286ec0088f6ef39cc89f9fb7ede5a5c88edb->leave($__internal_edb0429a74d7724e5f526192a77e286ec0088f6ef39cc89f9fb7ede5a5c88edb_prof);

        
        $__internal_ff3f065802de542dbeab1711af66199b3408e51181bc93b37bfd3a843a56e1e5->leave($__internal_ff3f065802de542dbeab1711af66199b3408e51181bc93b37bfd3a843a56e1e5_prof);

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
