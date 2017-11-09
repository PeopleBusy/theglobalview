<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_5c1e5f51ec4dc8134400c08956b453f541a2cf9286369d3e450578a287b0fc80 extends Twig_Template
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
        $__internal_895a575b2bd9b221a03d38658597fad0f4dddf264a85037cf45b423a54b664f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_895a575b2bd9b221a03d38658597fad0f4dddf264a85037cf45b423a54b664f0->enter($__internal_895a575b2bd9b221a03d38658597fad0f4dddf264a85037cf45b423a54b664f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_2d885906193f6eb7e3238cd59d4af095a9fa35bff7f6f751d6f67c2eab574023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d885906193f6eb7e3238cd59d4af095a9fa35bff7f6f751d6f67c2eab574023->enter($__internal_2d885906193f6eb7e3238cd59d4af095a9fa35bff7f6f751d6f67c2eab574023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_895a575b2bd9b221a03d38658597fad0f4dddf264a85037cf45b423a54b664f0->leave($__internal_895a575b2bd9b221a03d38658597fad0f4dddf264a85037cf45b423a54b664f0_prof);

        
        $__internal_2d885906193f6eb7e3238cd59d4af095a9fa35bff7f6f751d6f67c2eab574023->leave($__internal_2d885906193f6eb7e3238cd59d4af095a9fa35bff7f6f751d6f67c2eab574023_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
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
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}
