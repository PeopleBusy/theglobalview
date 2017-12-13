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
        $__internal_1370866ea046cc3d04250e195e24217a80650845b60832cc6437a2c7c0c89fe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1370866ea046cc3d04250e195e24217a80650845b60832cc6437a2c7c0c89fe0->enter($__internal_1370866ea046cc3d04250e195e24217a80650845b60832cc6437a2c7c0c89fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default/subcategory:subcategory.html.twig"));

        $__internal_defafc5ebf91a97448e7a7dbcd5604e2006e9e2f18d30641220b45d7ded9f4fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_defafc5ebf91a97448e7a7dbcd5604e2006e9e2f18d30641220b45d7ded9f4fe->enter($__internal_defafc5ebf91a97448e7a7dbcd5604e2006e9e2f18d30641220b45d7ded9f4fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default/subcategory:subcategory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1370866ea046cc3d04250e195e24217a80650845b60832cc6437a2c7c0c89fe0->leave($__internal_1370866ea046cc3d04250e195e24217a80650845b60832cc6437a2c7c0c89fe0_prof);

        
        $__internal_defafc5ebf91a97448e7a7dbcd5604e2006e9e2f18d30641220b45d7ded9f4fe->leave($__internal_defafc5ebf91a97448e7a7dbcd5604e2006e9e2f18d30641220b45d7ded9f4fe_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b0b8646dac2e92ddaeb1263da9b964ca53eb538910b7d530f6c6e5d15247f84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b0b8646dac2e92ddaeb1263da9b964ca53eb538910b7d530f6c6e5d15247f84->enter($__internal_1b0b8646dac2e92ddaeb1263da9b964ca53eb538910b7d530f6c6e5d15247f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7bf24f4cd9557a9ced76f0383fa1573f411164a1234f6589793526c9ea3f318e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bf24f4cd9557a9ced76f0383fa1573f411164a1234f6589793526c9ea3f318e->enter($__internal_7bf24f4cd9557a9ced76f0383fa1573f411164a1234f6589793526c9ea3f318e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Sous categories ";
        
        $__internal_7bf24f4cd9557a9ced76f0383fa1573f411164a1234f6589793526c9ea3f318e->leave($__internal_7bf24f4cd9557a9ced76f0383fa1573f411164a1234f6589793526c9ea3f318e_prof);

        
        $__internal_1b0b8646dac2e92ddaeb1263da9b964ca53eb538910b7d530f6c6e5d15247f84->leave($__internal_1b0b8646dac2e92ddaeb1263da9b964ca53eb538910b7d530f6c6e5d15247f84_prof);

    }

    // line 5
    public function block_admin_title($context, array $blocks = array())
    {
        $__internal_9f0a06133bb3ac9b05b714039f8d79820534d7ae89100114d30a603a66ae00b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f0a06133bb3ac9b05b714039f8d79820534d7ae89100114d30a603a66ae00b4->enter($__internal_9f0a06133bb3ac9b05b714039f8d79820534d7ae89100114d30a603a66ae00b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_title"));

        $__internal_510b2c6d5914bb7e64e24c8e85e44bf8dcfc8d83dd180de0f13723542439c9a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_510b2c6d5914bb7e64e24c8e85e44bf8dcfc8d83dd180de0f13723542439c9a6->enter($__internal_510b2c6d5914bb7e64e24c8e85e44bf8dcfc8d83dd180de0f13723542439c9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_title"));

        echo "Page sous-catégories";
        
        $__internal_510b2c6d5914bb7e64e24c8e85e44bf8dcfc8d83dd180de0f13723542439c9a6->leave($__internal_510b2c6d5914bb7e64e24c8e85e44bf8dcfc8d83dd180de0f13723542439c9a6_prof);

        
        $__internal_9f0a06133bb3ac9b05b714039f8d79820534d7ae89100114d30a603a66ae00b4->leave($__internal_9f0a06133bb3ac9b05b714039f8d79820534d7ae89100114d30a603a66ae00b4_prof);

    }

    // line 7
    public function block_admin_content($context, array $blocks = array())
    {
        $__internal_145912cc27320b39a93459b78aa798f4eebf0c5148de2e6a5f3226a634ad2928 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_145912cc27320b39a93459b78aa798f4eebf0c5148de2e6a5f3226a634ad2928->enter($__internal_145912cc27320b39a93459b78aa798f4eebf0c5148de2e6a5f3226a634ad2928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_content"));

        $__internal_5f0afc32ef29e83e32b923e8a29fabe34a4b1c9d8d0f8a26ea7d06cadc387819 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f0afc32ef29e83e32b923e8a29fabe34a4b1c9d8d0f8a26ea7d06cadc387819->enter($__internal_5f0afc32ef29e83e32b923e8a29fabe34a4b1c9d8d0f8a26ea7d06cadc387819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_content"));

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
        
        $__internal_5f0afc32ef29e83e32b923e8a29fabe34a4b1c9d8d0f8a26ea7d06cadc387819->leave($__internal_5f0afc32ef29e83e32b923e8a29fabe34a4b1c9d8d0f8a26ea7d06cadc387819_prof);

        
        $__internal_145912cc27320b39a93459b78aa798f4eebf0c5148de2e6a5f3226a634ad2928->leave($__internal_145912cc27320b39a93459b78aa798f4eebf0c5148de2e6a5f3226a634ad2928_prof);

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

{% endblock %}", "GlobalViewBundle:Default/subcategory:subcategory.html.twig", "/Users/rachid/Documents/Projet Client/theglobalview/src/GlobalViewBundle/Resources/views/Default/subcategory/subcategory.html.twig");
    }
}
