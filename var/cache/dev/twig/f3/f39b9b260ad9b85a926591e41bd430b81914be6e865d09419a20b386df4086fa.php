<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_7225fd618e7d506ab8c194c383c428cdca4c7438fc6b5508f3c2cf47c24e9962 extends Twig_Template
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
        $__internal_635eb29ec785c5e82cccb43989d67cc9795d10bc3b2fe9a70fdfd5833bcf5695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_635eb29ec785c5e82cccb43989d67cc9795d10bc3b2fe9a70fdfd5833bcf5695->enter($__internal_635eb29ec785c5e82cccb43989d67cc9795d10bc3b2fe9a70fdfd5833bcf5695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_5f656ad746f0c45a7ee4a2b152d86d08bbfdece5b71d140ec5ef8044640d029f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f656ad746f0c45a7ee4a2b152d86d08bbfdece5b71d140ec5ef8044640d029f->enter($__internal_5f656ad746f0c45a7ee4a2b152d86d08bbfdece5b71d140ec5ef8044640d029f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_635eb29ec785c5e82cccb43989d67cc9795d10bc3b2fe9a70fdfd5833bcf5695->leave($__internal_635eb29ec785c5e82cccb43989d67cc9795d10bc3b2fe9a70fdfd5833bcf5695_prof);

        
        $__internal_5f656ad746f0c45a7ee4a2b152d86d08bbfdece5b71d140ec5ef8044640d029f->leave($__internal_5f656ad746f0c45a7ee4a2b152d86d08bbfdece5b71d140ec5ef8044640d029f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/time_widget.html.php");
    }
}
