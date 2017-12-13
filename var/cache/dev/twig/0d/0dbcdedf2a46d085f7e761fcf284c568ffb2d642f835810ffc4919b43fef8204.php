<?php

/* GlobalViewBundle:Default/post:post.html.twig */
class __TwigTemplate_eed0c47cf3e26dc0c6d5fa6b642bfcd3692f93f0df5aabf803c48288cd4b62c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin_base.html.twig", "GlobalViewBundle:Default/post:post.html.twig", 1);
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
        $__internal_2a962b8d177135481f1ffed7f14dab65035df95282fef28861206fc7325d9fea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a962b8d177135481f1ffed7f14dab65035df95282fef28861206fc7325d9fea->enter($__internal_2a962b8d177135481f1ffed7f14dab65035df95282fef28861206fc7325d9fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default/post:post.html.twig"));

        $__internal_ed94c27f67ba39a486c66789d4fac06b5d0182a2531af539269f4cd67d8e8b0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed94c27f67ba39a486c66789d4fac06b5d0182a2531af539269f4cd67d8e8b0e->enter($__internal_ed94c27f67ba39a486c66789d4fac06b5d0182a2531af539269f4cd67d8e8b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default/post:post.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a962b8d177135481f1ffed7f14dab65035df95282fef28861206fc7325d9fea->leave($__internal_2a962b8d177135481f1ffed7f14dab65035df95282fef28861206fc7325d9fea_prof);

        
        $__internal_ed94c27f67ba39a486c66789d4fac06b5d0182a2531af539269f4cd67d8e8b0e->leave($__internal_ed94c27f67ba39a486c66789d4fac06b5d0182a2531af539269f4cd67d8e8b0e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_274fcbe4070fa2e3413fb6dd6ca32cf6c800b85e6ddd479dc7b94411fe4eb3e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_274fcbe4070fa2e3413fb6dd6ca32cf6c800b85e6ddd479dc7b94411fe4eb3e5->enter($__internal_274fcbe4070fa2e3413fb6dd6ca32cf6c800b85e6ddd479dc7b94411fe4eb3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f5f33d557e4a6e5f21c5c9667e85558bd0e9add6ce0c97565a61b40f5352bf0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5f33d557e4a6e5f21c5c9667e85558bd0e9add6ce0c97565a61b40f5352bf0c->enter($__internal_f5f33d557e4a6e5f21c5c9667e85558bd0e9add6ce0c97565a61b40f5352bf0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Posts ";
        
        $__internal_f5f33d557e4a6e5f21c5c9667e85558bd0e9add6ce0c97565a61b40f5352bf0c->leave($__internal_f5f33d557e4a6e5f21c5c9667e85558bd0e9add6ce0c97565a61b40f5352bf0c_prof);

        
        $__internal_274fcbe4070fa2e3413fb6dd6ca32cf6c800b85e6ddd479dc7b94411fe4eb3e5->leave($__internal_274fcbe4070fa2e3413fb6dd6ca32cf6c800b85e6ddd479dc7b94411fe4eb3e5_prof);

    }

    // line 5
    public function block_admin_title($context, array $blocks = array())
    {
        $__internal_d9ab705d7c13f3fb063bc08a495e9c649bf4a02a6d66d5ebc9827932484164d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9ab705d7c13f3fb063bc08a495e9c649bf4a02a6d66d5ebc9827932484164d7->enter($__internal_d9ab705d7c13f3fb063bc08a495e9c649bf4a02a6d66d5ebc9827932484164d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_title"));

        $__internal_4f698f136b928a5e7d45d8750ee42b49ece947597f2f2792786668798a5ede2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f698f136b928a5e7d45d8750ee42b49ece947597f2f2792786668798a5ede2c->enter($__internal_4f698f136b928a5e7d45d8750ee42b49ece947597f2f2792786668798a5ede2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_title"));

        echo "Page Posts";
        
        $__internal_4f698f136b928a5e7d45d8750ee42b49ece947597f2f2792786668798a5ede2c->leave($__internal_4f698f136b928a5e7d45d8750ee42b49ece947597f2f2792786668798a5ede2c_prof);

        
        $__internal_d9ab705d7c13f3fb063bc08a495e9c649bf4a02a6d66d5ebc9827932484164d7->leave($__internal_d9ab705d7c13f3fb063bc08a495e9c649bf4a02a6d66d5ebc9827932484164d7_prof);

    }

    // line 7
    public function block_admin_content($context, array $blocks = array())
    {
        $__internal_63a60d46fe7f07d0ff3b06936cda7dcd85886e3b91948d6e83faa02b32757b1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63a60d46fe7f07d0ff3b06936cda7dcd85886e3b91948d6e83faa02b32757b1c->enter($__internal_63a60d46fe7f07d0ff3b06936cda7dcd85886e3b91948d6e83faa02b32757b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_content"));

        $__internal_938a3b10aee0d51560f5e399e64b61a6d055aa51f1618fb29fd4c6e68b2c305b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_938a3b10aee0d51560f5e399e64b61a6d055aa51f1618fb29fd4c6e68b2c305b->enter($__internal_938a3b10aee0d51560f5e399e64b61a6d055aa51f1618fb29fd4c6e68b2c305b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_content"));

        // line 8
        echo "
    ";
        // line 9
        if (($context["erreurMsg"] ?? $this->getContext($context, "erreurMsg"))) {
            // line 10
            echo "            <div class=\"alert alert-danger\">
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
            echo "            <div class=\"alert alert-success\">
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
            echo "            <form method=\"post\" action=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_admin_post_create");
            echo "\">
    ";
        }
        // line 25
        echo "
    ";
        // line 26
        if ((($context["mode"] ?? $this->getContext($context, "mode")) == "edit")) {
            // line 27
            echo "        <form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_admin_post_update", array("id" => $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()))), "html", null, true);
            echo "\">
    ";
        }
        // line 29
        echo "
    ";
        // line 30
        if ((($context["mode"] ?? $this->getContext($context, "mode")) == "delete")) {
            // line 31
            echo "        <form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_admin_post_delete", array("id" => $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()))), "html", null, true);
            echo "\">
    ";
        }
        // line 33
        echo "
                <div class=\"row\">
                        <div class=\"form-group col-md-4\">
                                <label>Sous-catégories:</label>
                                <select class=\"form-control\" required name=\"subcategory_id\">
                                        <option value=\"\">Choisir</option>
                                    ";
        // line 39
        if ((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) {
            // line 40
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subcategories"] ?? $this->getContext($context, "subcategories")));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 41
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "nomFr", array()), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "nomEn", array()), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "nomDe", array()), "html", null, true);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                                    ";
        } else {
            // line 44
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subcategories"] ?? $this->getContext($context, "subcategories")));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 45
                echo "
                                            ";
                // line 46
                if (($this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "subcategory", array()), "id", array()) == $this->getAttribute($context["s"], "id", array()))) {
                    // line 47
                    echo "                                                <option selected value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "nomFr", array()), "html", null, true);
                    echo " / ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "nomEn", array()), "html", null, true);
                    echo " / ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "nomDe", array()), "html", null, true);
                    echo "</option>
                                            ";
                } else {
                    // line 49
                    echo "                                                <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "nomFr", array()), "html", null, true);
                    echo " / ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "nomEn", array()), "html", null, true);
                    echo " / ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "nomDe", array()), "html", null, true);
                    echo "</option>
                                            ";
                }
                // line 51
                echo "
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                                    ";
        }
        // line 54
        echo "
                                </select>
                        </div>
                        <div class=\"form-group col-md-4\">
                                <label>Image:</label>
                                <input type=\"file\" class=\"form-control\" name=\"image_url\"/>
                        </div>

                        <div class=\"form-group col-md-4\">
                                Preview Image
                        </div>
                </div>


                <div class=\"input-group\">
                        <i class=\"fa fa-list\"></i>
                        <input type=\"text\" name=\"title_fr\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "titleFr", array()), "html", null, true);
        echo "\" placeholder=\"Titre du post\"  required>
                </div>
                <div class=\"input-group\">
                        <i class=\"fa fa-list\"></i>
                        <input type=\"text\" name=\"title_en\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "titleEn", array()), "html", null, true);
        echo "\" placeholder=\"Post title\"  required>
                </div>
                <div class=\"input-group\">
                        <i class=\"fa fa-list\"></i>
                        <input type=\"text\" name=\"title_de\" value=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "titleDe", array()), "html", null, true);
        echo "\" placeholder=\"Post titel\"  required>
                </div>

                <br>
                <br>
                <br>

                <div class=\"row\">
                        <div class=\"form-group col-md-4\">
                                <label>Description du post:</label>
                                <textarea name=\"description_fr\" placeholder=\"Description du post\" rows=\"6\"  required>";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "descriptionFr", array()), "html", null, true);
        echo "</textarea>
                        </div>

                        <div class=\"form-group col-md-4\">
                                <label>Post description:</label>
                                <textarea name=\"description_en\" placeholder=\"Post description\" rows=\"6\"  required>";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "descriptionEn", array()), "html", null, true);
        echo "</textarea>
                        </div>

                        <div class=\"form-group col-md-4\">
                                <label>Post Beschreibung:</label>
                                <textarea name=\"description_de\" placeholder=\"Post Beschreibung\" rows=\"6\"  required>";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "descriptionDe", array()), "html", null, true);
        echo "</textarea>
                        </div>
                </div>


                <button type=\"submit\" class=\"btn btn-primary\">Enregistrer / Modifier</button>
        </form>

        <br>

        <!--Bordered Table-->
        <table class=\"table table-hover table-striped table-bordered\">
                <thead>
                <tr>
                        <th>Sous-catégorie</th>
                        <th>Titre/Francais</th>
                        <th>Title/Anglais</th>
                        <th>Titel/Allemand</th>
                        <th>Date de publication</th>
                        <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 122
            echo "                        <tr>
                            <td>";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "subcategory", array()), "nomFr", array()), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "subcategory", array()), "nomEn", array()), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "subcategory", array()), "nomDe", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "titleFr", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "titleEn", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "titleDe", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 127
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["p"], "dateCreation", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_admin_post_details", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-info\">Détails</a>
                                <a href=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_admin_post_update", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-success\">Modifier</a>
                                <a href=\"";
            // line 131
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_admin_post_details", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-primary\">Supprimer</a>
                            </td>
                        </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "                </tbody>
        </table>

";
        
        $__internal_938a3b10aee0d51560f5e399e64b61a6d055aa51f1618fb29fd4c6e68b2c305b->leave($__internal_938a3b10aee0d51560f5e399e64b61a6d055aa51f1618fb29fd4c6e68b2c305b_prof);

        
        $__internal_63a60d46fe7f07d0ff3b06936cda7dcd85886e3b91948d6e83faa02b32757b1c->leave($__internal_63a60d46fe7f07d0ff3b06936cda7dcd85886e3b91948d6e83faa02b32757b1c_prof);

    }

    public function getTemplateName()
    {
        return "GlobalViewBundle:Default/post:post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 135,  353 => 131,  349 => 130,  345 => 129,  340 => 127,  336 => 126,  332 => 125,  328 => 124,  320 => 123,  317 => 122,  313 => 121,  287 => 98,  279 => 93,  271 => 88,  258 => 78,  251 => 74,  244 => 70,  226 => 54,  223 => 53,  216 => 51,  204 => 49,  192 => 47,  190 => 46,  187 => 45,  182 => 44,  179 => 43,  164 => 41,  159 => 40,  157 => 39,  149 => 33,  143 => 31,  141 => 30,  138 => 29,  132 => 27,  130 => 26,  127 => 25,  121 => 23,  119 => 22,  115 => 20,  109 => 17,  106 => 16,  104 => 15,  101 => 14,  95 => 11,  92 => 10,  90 => 9,  87 => 8,  78 => 7,  60 => 5,  42 => 3,  11 => 1,);
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

{% block title %} Posts {% endblock %}

{% block admin_title %}Page Posts{% endblock %}

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
            <form method=\"post\" action=\"{{ path('global_admin_post_create') }}\">
    {% endif %}

    {% if mode == 'edit' %}
        <form method=\"post\" action=\"{{ path('global_admin_post_update', {'id': post.id}) }}\">
    {% endif %}

    {% if mode == 'delete' %}
        <form method=\"post\" action=\"{{ path('global_admin_post_delete', {'id': post.id}) }}\">
    {% endif %}

                <div class=\"row\">
                        <div class=\"form-group col-md-4\">
                                <label>Sous-catégories:</label>
                                <select class=\"form-control\" required name=\"subcategory_id\">
                                        <option value=\"\">Choisir</option>
                                    {% if mode == 'new'  %}
                                        {% for s in subcategories %}
                                            <option value=\"{{ s.id }}\">{{ s.nomFr }} / {{ s.nomEn }} / {{ s.nomDe }}</option>
                                        {% endfor %}
                                    {% else %}
                                        {% for s in subcategories %}

                                            {% if post.subcategory.id == s.id %}
                                                <option selected value=\"{{ s.id }}\">{{ s.nomFr }} / {{ s.nomEn }} / {{ s.nomDe }}</option>
                                            {% else %}
                                                <option value=\"{{ s.id }}\">{{ s.nomFr }} / {{ s.nomEn }} / {{ s.nomDe }}</option>
                                            {% endif %}

                                        {% endfor %}
                                    {% endif %}

                                </select>
                        </div>
                        <div class=\"form-group col-md-4\">
                                <label>Image:</label>
                                <input type=\"file\" class=\"form-control\" name=\"image_url\"/>
                        </div>

                        <div class=\"form-group col-md-4\">
                                Preview Image
                        </div>
                </div>


                <div class=\"input-group\">
                        <i class=\"fa fa-list\"></i>
                        <input type=\"text\" name=\"title_fr\" value=\"{{ post.titleFr }}\" placeholder=\"Titre du post\"  required>
                </div>
                <div class=\"input-group\">
                        <i class=\"fa fa-list\"></i>
                        <input type=\"text\" name=\"title_en\" value=\"{{ post.titleEn }}\" placeholder=\"Post title\"  required>
                </div>
                <div class=\"input-group\">
                        <i class=\"fa fa-list\"></i>
                        <input type=\"text\" name=\"title_de\" value=\"{{ post.titleDe }}\" placeholder=\"Post titel\"  required>
                </div>

                <br>
                <br>
                <br>

                <div class=\"row\">
                        <div class=\"form-group col-md-4\">
                                <label>Description du post:</label>
                                <textarea name=\"description_fr\" placeholder=\"Description du post\" rows=\"6\"  required>{{ post.descriptionFr }}</textarea>
                        </div>

                        <div class=\"form-group col-md-4\">
                                <label>Post description:</label>
                                <textarea name=\"description_en\" placeholder=\"Post description\" rows=\"6\"  required>{{ post.descriptionEn }}</textarea>
                        </div>

                        <div class=\"form-group col-md-4\">
                                <label>Post Beschreibung:</label>
                                <textarea name=\"description_de\" placeholder=\"Post Beschreibung\" rows=\"6\"  required>{{ post.descriptionDe }}</textarea>
                        </div>
                </div>


                <button type=\"submit\" class=\"btn btn-primary\">Enregistrer / Modifier</button>
        </form>

        <br>

        <!--Bordered Table-->
        <table class=\"table table-hover table-striped table-bordered\">
                <thead>
                <tr>
                        <th>Sous-catégorie</th>
                        <th>Titre/Francais</th>
                        <th>Title/Anglais</th>
                        <th>Titel/Allemand</th>
                        <th>Date de publication</th>
                        <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                {% for p in posts %}
                        <tr>
                            <td>{{ p.subcategory.nomFr }} / {{ p.subcategory.nomEn }} / {{ p.subcategory.nomDe }}</td>
                            <td>{{ p.titleFr }}</td>
                            <td>{{ p.titleEn }}</td>
                            <td>{{ p.titleDe }}</td>
                            <td>{{ p.dateCreation | date('d/m/Y H:i:s') }}</td>
                            <td>
                                <a href=\"{{ path('global_admin_post_details', {'id' : p.id}) }}\" class=\"btn btn-xs btn-info\">Détails</a>
                                <a href=\"{{ path('global_admin_post_update', {'id' : p.id}) }}\" class=\"btn btn-xs btn-success\">Modifier</a>
                                <a href=\"{{ path('global_admin_post_details', {'id' : p.id}) }}\" class=\"btn btn-xs btn-primary\">Supprimer</a>
                            </td>
                        </tr>
                {% endfor %}
                </tbody>
        </table>

{% endblock %}", "GlobalViewBundle:Default/post:post.html.twig", "/Users/rachid/Documents/Projet Client/theglobalview/src/GlobalViewBundle/Resources/views/Default/post/post.html.twig");
    }
}
