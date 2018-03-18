<?php

/* GlobalViewBundle:Default/category:category.html.twig */
class __TwigTemplate_977fc1e0db159c15ca8d5dbf17f19f5052234354da67bf43b67f433c24d47acf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin_base.html.twig", "GlobalViewBundle:Default/category:category.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'admin_title' => array($this, 'block_admin_title'),
            'admin_content' => array($this, 'block_admin_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::admin_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71fbef375b5d00beb8c1c8caa52f072cbc5a0b0cf1d0a91b7a3ed1571d9c58ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71fbef375b5d00beb8c1c8caa52f072cbc5a0b0cf1d0a91b7a3ed1571d9c58ac->enter($__internal_71fbef375b5d00beb8c1c8caa52f072cbc5a0b0cf1d0a91b7a3ed1571d9c58ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default/category:category.html.twig"));

        $__internal_3194028d99798dc335d039ddabe902a926868de3a21c75cd2ced06eb7f5437b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3194028d99798dc335d039ddabe902a926868de3a21c75cd2ced06eb7f5437b8->enter($__internal_3194028d99798dc335d039ddabe902a926868de3a21c75cd2ced06eb7f5437b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default/category:category.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71fbef375b5d00beb8c1c8caa52f072cbc5a0b0cf1d0a91b7a3ed1571d9c58ac->leave($__internal_71fbef375b5d00beb8c1c8caa52f072cbc5a0b0cf1d0a91b7a3ed1571d9c58ac_prof);

        
        $__internal_3194028d99798dc335d039ddabe902a926868de3a21c75cd2ced06eb7f5437b8->leave($__internal_3194028d99798dc335d039ddabe902a926868de3a21c75cd2ced06eb7f5437b8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b59a3a7aba0346cb1a7648ebcf12009ae58d16710b6b84ef32297ba49ea51c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b59a3a7aba0346cb1a7648ebcf12009ae58d16710b6b84ef32297ba49ea51c6->enter($__internal_0b59a3a7aba0346cb1a7648ebcf12009ae58d16710b6b84ef32297ba49ea51c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_269ad987e544f527daf9b11c460cd9545ea9e939d421ae7e26bc78d92b8edc57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_269ad987e544f527daf9b11c460cd9545ea9e939d421ae7e26bc78d92b8edc57->enter($__internal_269ad987e544f527daf9b11c460cd9545ea9e939d421ae7e26bc78d92b8edc57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Categories ";
        
        $__internal_269ad987e544f527daf9b11c460cd9545ea9e939d421ae7e26bc78d92b8edc57->leave($__internal_269ad987e544f527daf9b11c460cd9545ea9e939d421ae7e26bc78d92b8edc57_prof);

        
        $__internal_0b59a3a7aba0346cb1a7648ebcf12009ae58d16710b6b84ef32297ba49ea51c6->leave($__internal_0b59a3a7aba0346cb1a7648ebcf12009ae58d16710b6b84ef32297ba49ea51c6_prof);

    }

    // line 5
    public function block_admin_title($context, array $blocks = array())
    {
        $__internal_2a4bd0983fce3a9e1fd3c449df5635542fbd294851c641d1e3d940d885a650b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a4bd0983fce3a9e1fd3c449df5635542fbd294851c641d1e3d940d885a650b3->enter($__internal_2a4bd0983fce3a9e1fd3c449df5635542fbd294851c641d1e3d940d885a650b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_title"));

        $__internal_8e8b1170f5be1bac23f2792c5069e132493bac5ac1a9664b34676aa12b947ca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e8b1170f5be1bac23f2792c5069e132493bac5ac1a9664b34676aa12b947ca2->enter($__internal_8e8b1170f5be1bac23f2792c5069e132493bac5ac1a9664b34676aa12b947ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_title"));

        echo "Page catégories";
        
        $__internal_8e8b1170f5be1bac23f2792c5069e132493bac5ac1a9664b34676aa12b947ca2->leave($__internal_8e8b1170f5be1bac23f2792c5069e132493bac5ac1a9664b34676aa12b947ca2_prof);

        
        $__internal_2a4bd0983fce3a9e1fd3c449df5635542fbd294851c641d1e3d940d885a650b3->leave($__internal_2a4bd0983fce3a9e1fd3c449df5635542fbd294851c641d1e3d940d885a650b3_prof);

    }

    // line 7
    public function block_admin_content($context, array $blocks = array())
    {
        $__internal_dc750022291efbf0859496a00b764b57cb5328f360b6fd434e51b9abc6285759 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc750022291efbf0859496a00b764b57cb5328f360b6fd434e51b9abc6285759->enter($__internal_dc750022291efbf0859496a00b764b57cb5328f360b6fd434e51b9abc6285759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_content"));

        $__internal_95bbebeac25fe5e4ab90dee6ecd228f9d1dd7d7a2ad5c79ec9ca4b8380b77cb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95bbebeac25fe5e4ab90dee6ecd228f9d1dd7d7a2ad5c79ec9ca4b8380b77cb9->enter($__internal_95bbebeac25fe5e4ab90dee6ecd228f9d1dd7d7a2ad5c79ec9ca4b8380b77cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_content"));

        // line 8
        echo "
        ";
        // line 9
        if (($context["erreurMsg"] ?? $this->getContext($context, "erreurMsg"))) {
            // line 10
            echo "                <div class=\"alert alert-danger\">
                        <strong>Erreur!</strong> ";
            // line 11
            echo twig_escape_filter($this->env, ($context["erreurMsg"] ?? $this->getContext($context, "erreurMsg")), "html", null, true);
            echo "
                </div>
        ";
        }
        // line 14
        echo "
        ";
        // line 15
        if (($context["successMsg"] ?? $this->getContext($context, "successMsg"))) {
            // line 16
            echo "                <div class=\"alert alert-success\">
                        <strong>Réussi!</strong> ";
            // line 17
            echo twig_escape_filter($this->env, ($context["successMsg"] ?? $this->getContext($context, "successMsg")), "html", null, true);
            echo "
                </div>
        ";
        }
        // line 20
        echo "

        ";
        // line 22
        if ((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) {
            // line 23
            echo "                <form method=\"post\" action=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_admin_category_create");
            echo "\">
        ";
        }
        // line 25
        echo "
        ";
        // line 26
        if ((($context["mode"] ?? $this->getContext($context, "mode")) == "edit")) {
            // line 27
            echo "                <form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_admin_category_update", array("id" => $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "id", array()))), "html", null, true);
            echo "\">
        ";
        }
        // line 29
        echo "
        ";
        // line 30
        if ((($context["mode"] ?? $this->getContext($context, "mode")) == "delete")) {
            // line 31
            echo "                <form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_admin_category_delete", array("id" => $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "id", array()))), "html", null, true);
            echo "\">
        ";
        }
        // line 33
        echo "


                <div class=\"input-group\">
                        <i class=\"fa fa-list\"></i>
                        <input type=\"text\" name=\"libelle_fr\" placeholder=\"Nom de la catégorie\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "libelleFr", array()), "html", null, true);
        echo "\"  required>
                </div>
                <div class=\"input-group\">
                        <i class=\"fa fa-list\"></i>
                        <input type=\"text\" name=\"libelle_en\" placeholder=\"Category name\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "libelleEn", array()), "html", null, true);
        echo "\"   required>
                </div>
                <div class=\"input-group\">
                        <i class=\"fa fa-list\"></i>
                        <input type=\"text\" name=\"libelle_de\" placeholder=\"Kategoriename\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "libelleDe", array()), "html", null, true);
        echo "\"   required>
                </div>

                <button type=\"submit\" class=\"btn btn-primary\">Enregistrer / Modifier</button>
        </form>

        <br>

        ";
        // line 54
        if ( !twig_test_empty(($context["categories"] ?? $this->getContext($context, "categories")))) {
            // line 55
            echo "
                <!--Bordered Table-->
                <table class=\"table table-hover table-striped table-bordered\">
                        <thead>
                        <tr>
                                <th>Nom/Francais</th>
                                <th>Name/Anglais</th>
                                <th>Name/Allemand</th>
                                <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["ca"]) {
                // line 68
                echo "                                <tr>
                                        <td>";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["ca"], "libelleFr", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($context["ca"], "libelleEn", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["ca"], "libelleDe", array()), "html", null, true);
                echo "</td>
                                        <td>
                                                <a href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_admin_category_update", array("id" => $this->getAttribute($context["ca"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-xs btn-success\">Modifier</a>
                                                <a href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_admin_category_delete", array("id" => $this->getAttribute($context["ca"], "id", array()))), "html", null, true);
                echo "\" class=\"hide btn btn-xs btn-primary\">Supprimer</a>
                                        </td>
                                </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ca'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "                        </tbody>
                </table>

        ";
        }
        // line 82
        echo "
";
        
        $__internal_95bbebeac25fe5e4ab90dee6ecd228f9d1dd7d7a2ad5c79ec9ca4b8380b77cb9->leave($__internal_95bbebeac25fe5e4ab90dee6ecd228f9d1dd7d7a2ad5c79ec9ca4b8380b77cb9_prof);

        
        $__internal_dc750022291efbf0859496a00b764b57cb5328f360b6fd434e51b9abc6285759->leave($__internal_dc750022291efbf0859496a00b764b57cb5328f360b6fd434e51b9abc6285759_prof);

    }

    public function getTemplateName()
    {
        return "GlobalViewBundle:Default/category:category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 82,  231 => 78,  221 => 74,  217 => 73,  212 => 71,  208 => 70,  204 => 69,  201 => 68,  197 => 67,  183 => 55,  181 => 54,  170 => 46,  163 => 42,  156 => 38,  149 => 33,  143 => 31,  141 => 30,  138 => 29,  132 => 27,  130 => 26,  127 => 25,  121 => 23,  119 => 22,  115 => 20,  109 => 17,  106 => 16,  104 => 15,  101 => 14,  95 => 11,  92 => 10,  90 => 9,  87 => 8,  78 => 7,  60 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::admin_base.html.twig\" %}

{% block title %} Categories {% endblock %}

{% block admin_title %}Page catégories{% endblock %}

{% block admin_content %}

        {% if erreurMsg %}
                <div class=\"alert alert-danger\">
                        <strong>Erreur!</strong> {{ erreurMsg }}
                </div>
        {% endif %}

        {% if successMsg %}
                <div class=\"alert alert-success\">
                        <strong>Réussi!</strong> {{ successMsg }}
                </div>
        {% endif %}


        {% if mode == 'new' %}
                <form method=\"post\" action=\"{{ path('global_admin_category_create') }}\">
        {% endif %}

        {% if mode == 'edit' %}
                <form method=\"post\" action=\"{{ path('global_admin_category_update', {'id': category.id}) }}\">
        {% endif %}

        {% if mode == 'delete' %}
                <form method=\"post\" action=\"{{ path('global_admin_category_delete', {'id': category.id}) }}\">
        {% endif %}



                <div class=\"input-group\">
                        <i class=\"fa fa-list\"></i>
                        <input type=\"text\" name=\"libelle_fr\" placeholder=\"Nom de la catégorie\" value=\"{{ category.libelleFr }}\"  required>
                </div>
                <div class=\"input-group\">
                        <i class=\"fa fa-list\"></i>
                        <input type=\"text\" name=\"libelle_en\" placeholder=\"Category name\" value=\"{{ category.libelleEn }}\"   required>
                </div>
                <div class=\"input-group\">
                        <i class=\"fa fa-list\"></i>
                        <input type=\"text\" name=\"libelle_de\" placeholder=\"Kategoriename\" value=\"{{ category.libelleDe }}\"   required>
                </div>

                <button type=\"submit\" class=\"btn btn-primary\">Enregistrer / Modifier</button>
        </form>

        <br>

        {% if categories is not empty %}

                <!--Bordered Table-->
                <table class=\"table table-hover table-striped table-bordered\">
                        <thead>
                        <tr>
                                <th>Nom/Francais</th>
                                <th>Name/Anglais</th>
                                <th>Name/Allemand</th>
                                <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for ca in categories %}
                                <tr>
                                        <td>{{ ca.libelleFr }}</td>
                                        <td>{{ ca.libelleEn }}</td>
                                        <td>{{ ca.libelleDe }}</td>
                                        <td>
                                                <a href=\"{{ path('global_admin_category_update', {'id' : ca.id}) }}\" class=\"btn btn-xs btn-success\">Modifier</a>
                                                <a href=\"{{ path('global_admin_category_delete', {'id' : ca.id}) }}\" class=\"hide btn btn-xs btn-primary\">Supprimer</a>
                                        </td>
                                </tr>
                        {% endfor %}
                        </tbody>
                </table>

        {% endif %}

{% endblock %}", "GlobalViewBundle:Default/category:category.html.twig", "/Users/Rachid/SymfonyProjects/theglobalview/src/GlobalViewBundle/Resources/views/Default/category/category.html.twig");
    }
}
