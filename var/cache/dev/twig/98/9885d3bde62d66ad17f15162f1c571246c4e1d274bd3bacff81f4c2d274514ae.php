<?php

/* @Framework/Form/date_widget.html.php */
class __TwigTemplate_8a7bc4a1e8aa9a90bba56a2e0294ff77f5bbe4ff710f066ef008b487efdea128 extends Twig_Template
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
        $__internal_8c4c376160a70ac34bc0a9ace144ff0e689c0c083c35d2e10fea47f7dfea09a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c4c376160a70ac34bc0a9ace144ff0e689c0c083c35d2e10fea47f7dfea09a0->enter($__internal_8c4c376160a70ac34bc0a9ace144ff0e689c0c083c35d2e10fea47f7dfea09a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        $__internal_997fdce17dd2a2d1cbfbe0a8959f5c076a841110ea2b4a9a1c447103135c077d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_997fdce17dd2a2d1cbfbe0a8959f5c076a841110ea2b4a9a1c447103135c077d->enter($__internal_997fdce17dd2a2d1cbfbe0a8959f5c076a841110ea2b4a9a1c447103135c077d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('";
        // line 5
        echo twig_escape_filter($this->env, ($context["year"] ?? $this->getContext($context, "year")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, ($context["month"] ?? $this->getContext($context, "month")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, ($context["day"] ?? $this->getContext($context, "day")), "html", null, true);
        echo "'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
";
        
        $__internal_8c4c376160a70ac34bc0a9ace144ff0e689c0c083c35d2e10fea47f7dfea09a0->leave($__internal_8c4c376160a70ac34bc0a9ace144ff0e689c0c083c35d2e10fea47f7dfea09a0_prof);

        
        $__internal_997fdce17dd2a2d1cbfbe0a8959f5c076a841110ea2b4a9a1c447103135c077d->leave($__internal_997fdce17dd2a2d1cbfbe0a8959f5c076a841110ea2b4a9a1c447103135c077d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/date_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  25 => 1,);
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
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('{{ year }}', '{{ month }}', '{{ day }}'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
", "@Framework/Form/date_widget.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/date_widget.html.php");
    }
}
