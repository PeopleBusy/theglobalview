<?php

/* GlobalViewBundle:Default/subcategory:subcategory.html.twig */
class __TwigTemplate_946a79929370df8181059f5895c7dccb83e45e4ea51133b85256b15c98c97cf1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin_base.html.twig", "GlobalViewBundle:Default/subcategory:subcategory.html.twig", 1);
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
        $__internal_0255b48aa885efe9dbf914a306a76b6a74d3819d605ed2d7228ed696157514e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0255b48aa885efe9dbf914a306a76b6a74d3819d605ed2d7228ed696157514e2->enter($__internal_0255b48aa885efe9dbf914a306a76b6a74d3819d605ed2d7228ed696157514e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default/subcategory:subcategory.html.twig"));

        $__internal_8658a03ab946fc95f6237a584bd1a3b799676674b032285fd3f3cd514d515cbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8658a03ab946fc95f6237a584bd1a3b799676674b032285fd3f3cd514d515cbe->enter($__internal_8658a03ab946fc95f6237a584bd1a3b799676674b032285fd3f3cd514d515cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default/subcategory:subcategory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0255b48aa885efe9dbf914a306a76b6a74d3819d605ed2d7228ed696157514e2->leave($__internal_0255b48aa885efe9dbf914a306a76b6a74d3819d605ed2d7228ed696157514e2_prof);

        
        $__internal_8658a03ab946fc95f6237a584bd1a3b799676674b032285fd3f3cd514d515cbe->leave($__internal_8658a03ab946fc95f6237a584bd1a3b799676674b032285fd3f3cd514d515cbe_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0615b2e208f0d216a079c3da43fb93ca9aa2188816b7fc8b6b6daefdb94c044c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0615b2e208f0d216a079c3da43fb93ca9aa2188816b7fc8b6b6daefdb94c044c->enter($__internal_0615b2e208f0d216a079c3da43fb93ca9aa2188816b7fc8b6b6daefdb94c044c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e1c74e8c04cf02fb4f2bfe6e83375862e6086b275f218b7369911e09f510e072 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1c74e8c04cf02fb4f2bfe6e83375862e6086b275f218b7369911e09f510e072->enter($__internal_e1c74e8c04cf02fb4f2bfe6e83375862e6086b275f218b7369911e09f510e072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Sous categories ";
        
        $__internal_e1c74e8c04cf02fb4f2bfe6e83375862e6086b275f218b7369911e09f510e072->leave($__internal_e1c74e8c04cf02fb4f2bfe6e83375862e6086b275f218b7369911e09f510e072_prof);

        
        $__internal_0615b2e208f0d216a079c3da43fb93ca9aa2188816b7fc8b6b6daefdb94c044c->leave($__internal_0615b2e208f0d216a079c3da43fb93ca9aa2188816b7fc8b6b6daefdb94c044c_prof);

    }

    // line 5
    public function block_admin_title($context, array $blocks = array())
    {
        $__internal_e374d15482b21bdbf6a358f5c1116f71b49a745d0249ea7389c65880cab6b269 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e374d15482b21bdbf6a358f5c1116f71b49a745d0249ea7389c65880cab6b269->enter($__internal_e374d15482b21bdbf6a358f5c1116f71b49a745d0249ea7389c65880cab6b269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_title"));

        $__internal_56e8d9bacca5619f6bcb43013cd816fecc44b205087795f7a22ec1cb43c8975d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56e8d9bacca5619f6bcb43013cd816fecc44b205087795f7a22ec1cb43c8975d->enter($__internal_56e8d9bacca5619f6bcb43013cd816fecc44b205087795f7a22ec1cb43c8975d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_title"));

        echo "Page sous-catégories";
        
        $__internal_56e8d9bacca5619f6bcb43013cd816fecc44b205087795f7a22ec1cb43c8975d->leave($__internal_56e8d9bacca5619f6bcb43013cd816fecc44b205087795f7a22ec1cb43c8975d_prof);

        
        $__internal_e374d15482b21bdbf6a358f5c1116f71b49a745d0249ea7389c65880cab6b269->leave($__internal_e374d15482b21bdbf6a358f5c1116f71b49a745d0249ea7389c65880cab6b269_prof);

    }

    // line 7
    public function block_admin_content($context, array $blocks = array())
    {
        $__internal_a5c63c190bbdf2d21e910c2fc204de6a9b5df1039de467bd390196033adbbff1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5c63c190bbdf2d21e910c2fc204de6a9b5df1039de467bd390196033adbbff1->enter($__internal_a5c63c190bbdf2d21e910c2fc204de6a9b5df1039de467bd390196033adbbff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_content"));

        $__internal_528c718357c7d324011201476b184cfb107954e53d45300aa5d068293e06d353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_528c718357c7d324011201476b184cfb107954e53d45300aa5d068293e06d353->enter($__internal_528c718357c7d324011201476b184cfb107954e53d45300aa5d068293e06d353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_content"));

        // line 8
        echo "    ";
        if (($context["erreurMsg"] ?? $this->getContext($context, "erreurMsg"))) {
            // line 9
            echo "            <div class=\"alert alert-danger\">
                    <strong>Erreur!</strong> ";
            // line 10
            echo twig_escape_filter($this->env, ($context["erreurMsg"] ?? $this->getContext($context, "erreurMsg")), "html", null, true);
            echo "
            </div>
    ";
        }
        // line 13
        echo "
    ";
        // line 14
        if (($context["successMsg"] ?? $this->getContext($context, "successMsg"))) {
            // line 15
            echo "            <div class=\"alert alert-success\">
                    <strong>Réussi!</strong> ";
            // line 16
            echo twig_escape_filter($this->env, ($context["successMsg"] ?? $this->getContext($context, "successMsg")), "html", null, true);
            echo "
            </div>
    ";
        }
        // line 19
        echo "

    ";
        // line 21
        if ((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) {
            // line 22
            echo "            <form method=\"post\" action=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_admin_subcategory_create");
            echo "\">
    ";
        }
        // line 24
        echo "
    ";
        // line 25
        if ((($context["mode"] ?? $this->getContext($context, "mode")) == "edit")) {
            // line 26
            echo "        <form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_admin_subcategory_update", array("id" => $this->getAttribute(($context["subcategory"] ?? $this->getContext($context, "subcategory")), "id", array()))), "html", null, true);
            echo "\">
    ";
        }
        // line 28
        echo "
    ";
        // line 29
        if ((($context["mode"] ?? $this->getContext($context, "mode")) == "delete")) {
            // line 30
            echo "        <form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_admin_subcategory_delete", array("id" => $this->getAttribute(($context["subcategory"] ?? $this->getContext($context, "subcategory")), "id", array()))), "html", null, true);
            echo "\">
    ";
        }
        // line 32
        echo "
                <div class=\"row\">
                        <div class=\"form-group col-md-4\">
                                <label>Catégories:</label>
                                <select class=\"form-control\" required name=\"category_id\">
                                        <option value=\"\">Choisir une catégorie</option>
                                    ";
        // line 38
        if ((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) {
            // line 39
            echo "
                                        ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["ca"]) {
                // line 41
                echo "
                                            <option value=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["ca"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ca"], "libelleFr", array()), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ca"], "libelleEn", array()), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ca"], "libelleDe", array()), "html", null, true);
                echo "</option>

                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ca'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "
                                    ";
        } else {
            // line 47
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["ca"]) {
                // line 48
                echo "
                                            ";
                // line 49
                if (($this->getAttribute($this->getAttribute(($context["subcategory"] ?? $this->getContext($context, "subcategory")), "category", array()), "id", array()) == $this->getAttribute($context["ca"], "id", array()))) {
                    // line 50
                    echo "                                                <option selected value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ca"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ca"], "libelleFr", array()), "html", null, true);
                    echo " / ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ca"], "libelleEn", array()), "html", null, true);
                    echo " / ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ca"], "libelleDe", array()), "html", null, true);
                    echo "</option>
                                            ";
                } else {
                    // line 52
                    echo "                                                <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ca"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ca"], "libelleFr", array()), "html", null, true);
                    echo " / ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ca"], "libelleEn", array()), "html", null, true);
                    echo " / ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ca"], "libelleDe", array()), "html", null, true);
                    echo "</option>
                                            ";
                }
                // line 54
                echo "
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ca'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                                    ";
        }
        // line 57
        echo "
                                </select>
                        </div>
                </div>


                <div class=\"input-group\">
                        <i class=\"fa fa-list\"></i>
                        <input type=\"text\" name=\"nom_fr\" placeholder=\"Nom de la sous-catégorie\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute(($context["subcategory"] ?? $this->getContext($context, "subcategory")), "nomFr", array()), "html", null, true);
        echo "\"  required>
                </div>
                <div class=\"input-group\">
                        <i class=\"fa fa-list\"></i>
                        <input type=\"text\" name=\"nom_en\" placeholder=\"Subcategory name\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute(($context["subcategory"] ?? $this->getContext($context, "subcategory")), "nomEn", array()), "html", null, true);
        echo "\" required>
                </div>
                <div class=\"input-group\">
                        <i class=\"fa fa-list\"></i>
                        <input type=\"text\" name=\"nom_de\" placeholder=\"Unterkategoriename\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute(($context["subcategory"] ?? $this->getContext($context, "subcategory")), "nomDe", array()), "html", null, true);
        echo "\"  required>
                </div>


                <button type=\"submit\" class=\"btn btn-primary\">Enregistrer / Modifier</button>
        </form>

        <br>

        <!--Bordered Table-->
        <table class=\"table table-hover table-striped table-bordered\">
                <thead>
                <tr>
                        <th>Catégorie</th>
                        <th>Nom/Francais</th>
                        <th>Name/Anglais</th>
                        <th>Name/Allemand</th>
                        <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["ca"]) {
            // line 95
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["ca"], "subcategories", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 96
                echo "                        <tr>
                            <td>";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute($context["ca"], "libelleFr", array()), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ca"], "libelleEn", array()), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ca"], "libelleDe", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "nomFr", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "nomEn", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "nomDe", array()), "html", null, true);
                echo "</td>
                            <td>
                                <a href=\"";
                // line 102
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_admin_subcategory_update", array("id" => $this->getAttribute($context["s"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-xs btn-success\">Modifier</a>
                                <a href=\"";
                // line 103
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_admin_subcategory_delete", array("id" => $this->getAttribute($context["s"], "id", array()))), "html", null, true);
                echo "\" class=\"hide btn btn-xs btn-primary\">Supprimer</a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ca'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "                </tbody>
        </table>

";
        
        $__internal_528c718357c7d324011201476b184cfb107954e53d45300aa5d068293e06d353->leave($__internal_528c718357c7d324011201476b184cfb107954e53d45300aa5d068293e06d353_prof);

        
        $__internal_a5c63c190bbdf2d21e910c2fc204de6a9b5df1039de467bd390196033adbbff1->leave($__internal_a5c63c190bbdf2d21e910c2fc204de6a9b5df1039de467bd390196033adbbff1_prof);

    }

    public function getTemplateName()
    {
        return "GlobalViewBundle:Default/subcategory:subcategory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 108,  325 => 107,  315 => 103,  311 => 102,  306 => 100,  302 => 99,  298 => 98,  290 => 97,  287 => 96,  282 => 95,  278 => 94,  254 => 73,  247 => 69,  240 => 65,  230 => 57,  227 => 56,  220 => 54,  208 => 52,  196 => 50,  194 => 49,  191 => 48,  186 => 47,  182 => 45,  167 => 42,  164 => 41,  160 => 40,  157 => 39,  155 => 38,  147 => 32,  141 => 30,  139 => 29,  136 => 28,  130 => 26,  128 => 25,  125 => 24,  119 => 22,  117 => 21,  113 => 19,  107 => 16,  104 => 15,  102 => 14,  99 => 13,  93 => 10,  90 => 9,  87 => 8,  78 => 7,  60 => 5,  42 => 3,  11 => 1,);
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

{% block title %} Sous categories {% endblock %}

{% block admin_title %}Page sous-catégories{% endblock %}

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
            <form method=\"post\" action=\"{{ path('global_admin_subcategory_create') }}\">
    {% endif %}

    {% if mode == 'edit' %}
        <form method=\"post\" action=\"{{ path('global_admin_subcategory_update', {'id': subcategory.id}) }}\">
    {% endif %}

    {% if mode == 'delete' %}
        <form method=\"post\" action=\"{{ path('global_admin_subcategory_delete', {'id': subcategory.id}) }}\">
    {% endif %}

                <div class=\"row\">
                        <div class=\"form-group col-md-4\">
                                <label>Catégories:</label>
                                <select class=\"form-control\" required name=\"category_id\">
                                        <option value=\"\">Choisir une catégorie</option>
                                    {% if mode == 'new'  %}

                                        {% for ca in categories %}

                                            <option value=\"{{ ca.id }}\">{{ ca.libelleFr }} / {{ ca.libelleEn }} / {{ ca.libelleDe }}</option>

                                        {% endfor %}

                                    {% else %}
                                        {% for ca in categories %}

                                            {% if subcategory.category.id == ca.id %}
                                                <option selected value=\"{{ ca.id }}\">{{ ca.libelleFr }} / {{ ca.libelleEn }} / {{ ca.libelleDe }}</option>
                                            {% else %}
                                                <option value=\"{{ ca.id }}\">{{ ca.libelleFr }} / {{ ca.libelleEn }} / {{ ca.libelleDe }}</option>
                                            {% endif %}

                                        {% endfor %}
                                    {% endif %}

                                </select>
                        </div>
                </div>


                <div class=\"input-group\">
                        <i class=\"fa fa-list\"></i>
                        <input type=\"text\" name=\"nom_fr\" placeholder=\"Nom de la sous-catégorie\" value=\"{{ subcategory.nomFr }}\"  required>
                </div>
                <div class=\"input-group\">
                        <i class=\"fa fa-list\"></i>
                        <input type=\"text\" name=\"nom_en\" placeholder=\"Subcategory name\" value=\"{{ subcategory.nomEn }}\" required>
                </div>
                <div class=\"input-group\">
                        <i class=\"fa fa-list\"></i>
                        <input type=\"text\" name=\"nom_de\" placeholder=\"Unterkategoriename\" value=\"{{ subcategory.nomDe }}\"  required>
                </div>


                <button type=\"submit\" class=\"btn btn-primary\">Enregistrer / Modifier</button>
        </form>

        <br>

        <!--Bordered Table-->
        <table class=\"table table-hover table-striped table-bordered\">
                <thead>
                <tr>
                        <th>Catégorie</th>
                        <th>Nom/Francais</th>
                        <th>Name/Anglais</th>
                        <th>Name/Allemand</th>
                        <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                {% for ca in categories %}
                    {% for s in ca.subcategories %}
                        <tr>
                            <td>{{ ca.libelleFr }} / {{ ca.libelleEn }} / {{ ca.libelleDe }}</td>
                            <td>{{ s.nomFr }}</td>
                            <td>{{ s.nomEn }}</td>
                            <td>{{ s.nomDe }}</td>
                            <td>
                                <a href=\"{{ path('global_admin_subcategory_update', {'id' : s.id}) }}\" class=\"btn btn-xs btn-success\">Modifier</a>
                                <a href=\"{{ path('global_admin_subcategory_delete', {'id' : s.id}) }}\" class=\"hide btn btn-xs btn-primary\">Supprimer</a>
                            </td>
                        </tr>
                    {% endfor %}
                {% endfor %}
                </tbody>
        </table>

{% endblock %}", "GlobalViewBundle:Default/subcategory:subcategory.html.twig", "/Users/Rachid/SymfonyProjects/theglobalview/src/GlobalViewBundle/Resources/views/Default/subcategory/subcategory.html.twig");
    }
}
