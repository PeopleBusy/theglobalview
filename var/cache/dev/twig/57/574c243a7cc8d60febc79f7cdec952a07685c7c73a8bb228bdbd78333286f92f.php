<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_d5e031b823b5997668afa9104abf0e58b87fc50e34b7986b7744f0bcdeb34556 extends Twig_Template
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
        $__internal_e9915339d06063e0458489a3ab91b5e94f4fc1084eb70fa51e88a1dd7ddc69d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9915339d06063e0458489a3ab91b5e94f4fc1084eb70fa51e88a1dd7ddc69d0->enter($__internal_e9915339d06063e0458489a3ab91b5e94f4fc1084eb70fa51e88a1dd7ddc69d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_a20e1691dee1590be07ce65d8b03a6a7be6a6d1ff0c0dddb3303e88809891b81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a20e1691dee1590be07ce65d8b03a6a7be6a6d1ff0c0dddb3303e88809891b81->enter($__internal_a20e1691dee1590be07ce65d8b03a6a7be6a6d1ff0c0dddb3303e88809891b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e9915339d06063e0458489a3ab91b5e94f4fc1084eb70fa51e88a1dd7ddc69d0->leave($__internal_e9915339d06063e0458489a3ab91b5e94f4fc1084eb70fa51e88a1dd7ddc69d0_prof);

        
        $__internal_a20e1691dee1590be07ce65d8b03a6a7be6a6d1ff0c0dddb3303e88809891b81->leave($__internal_a20e1691dee1590be07ce65d8b03a6a7be6a6d1ff0c0dddb3303e88809891b81_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
