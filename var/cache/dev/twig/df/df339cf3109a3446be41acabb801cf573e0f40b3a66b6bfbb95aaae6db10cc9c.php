<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_aaf375094ff5668e0dfa485d63c74634f55fc2a0dec922e2802fe260e6362a06 extends Twig_Template
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
        $__internal_12601f2ba969301e345106f35ecee7c4731db8407a5aeb47e6b3f5a33ba9713f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12601f2ba969301e345106f35ecee7c4731db8407a5aeb47e6b3f5a33ba9713f->enter($__internal_12601f2ba969301e345106f35ecee7c4731db8407a5aeb47e6b3f5a33ba9713f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_3500ab4cb2ed5cc5f8f3faad3d7832a7b9f2f54cf6637b8b73c6ff37674c5d95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3500ab4cb2ed5cc5f8f3faad3d7832a7b9f2f54cf6637b8b73c6ff37674c5d95->enter($__internal_3500ab4cb2ed5cc5f8f3faad3d7832a7b9f2f54cf6637b8b73c6ff37674c5d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_12601f2ba969301e345106f35ecee7c4731db8407a5aeb47e6b3f5a33ba9713f->leave($__internal_12601f2ba969301e345106f35ecee7c4731db8407a5aeb47e6b3f5a33ba9713f_prof);

        
        $__internal_3500ab4cb2ed5cc5f8f3faad3d7832a7b9f2f54cf6637b8b73c6ff37674c5d95->leave($__internal_3500ab4cb2ed5cc5f8f3faad3d7832a7b9f2f54cf6637b8b73c6ff37674c5d95_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
