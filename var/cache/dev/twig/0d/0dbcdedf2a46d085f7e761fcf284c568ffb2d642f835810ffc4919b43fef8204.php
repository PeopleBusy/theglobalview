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
        $__internal_5cdf944be3f7e42f35501d7178268431163581903a83cbaf90eb0c14b02a5523 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cdf944be3f7e42f35501d7178268431163581903a83cbaf90eb0c14b02a5523->enter($__internal_5cdf944be3f7e42f35501d7178268431163581903a83cbaf90eb0c14b02a5523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default/post:post.html.twig"));

        $__internal_bf1f6ea9fe3cba971e7ff9ebe2ad963cb2fd0fde69a425bd7a9d7873336d03a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf1f6ea9fe3cba971e7ff9ebe2ad963cb2fd0fde69a425bd7a9d7873336d03a5->enter($__internal_bf1f6ea9fe3cba971e7ff9ebe2ad963cb2fd0fde69a425bd7a9d7873336d03a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default/post:post.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cdf944be3f7e42f35501d7178268431163581903a83cbaf90eb0c14b02a5523->leave($__internal_5cdf944be3f7e42f35501d7178268431163581903a83cbaf90eb0c14b02a5523_prof);

        
        $__internal_bf1f6ea9fe3cba971e7ff9ebe2ad963cb2fd0fde69a425bd7a9d7873336d03a5->leave($__internal_bf1f6ea9fe3cba971e7ff9ebe2ad963cb2fd0fde69a425bd7a9d7873336d03a5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d5c71271d1568b40e8b5b3ce7c3601c04e47ee86c5960605a8f77da2c6b8ea89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5c71271d1568b40e8b5b3ce7c3601c04e47ee86c5960605a8f77da2c6b8ea89->enter($__internal_d5c71271d1568b40e8b5b3ce7c3601c04e47ee86c5960605a8f77da2c6b8ea89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_50a871996776a878bf803a99faf1d282b0c75f56f3caf455dbd9b57690458028 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50a871996776a878bf803a99faf1d282b0c75f56f3caf455dbd9b57690458028->enter($__internal_50a871996776a878bf803a99faf1d282b0c75f56f3caf455dbd9b57690458028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Posts ";
        
        $__internal_50a871996776a878bf803a99faf1d282b0c75f56f3caf455dbd9b57690458028->leave($__internal_50a871996776a878bf803a99faf1d282b0c75f56f3caf455dbd9b57690458028_prof);

        
        $__internal_d5c71271d1568b40e8b5b3ce7c3601c04e47ee86c5960605a8f77da2c6b8ea89->leave($__internal_d5c71271d1568b40e8b5b3ce7c3601c04e47ee86c5960605a8f77da2c6b8ea89_prof);

    }

    // line 5
    public function block_admin_title($context, array $blocks = array())
    {
        $__internal_1590c623a8dd7a0e0383a4ac1e3abe02c101fa9b3a40b15148e3f0d729a97e0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1590c623a8dd7a0e0383a4ac1e3abe02c101fa9b3a40b15148e3f0d729a97e0b->enter($__internal_1590c623a8dd7a0e0383a4ac1e3abe02c101fa9b3a40b15148e3f0d729a97e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_title"));

        $__internal_9792ca5a61233bdc99b8256ba1a3665d8bd5ba887f43ca0975c09368e2dd0a8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9792ca5a61233bdc99b8256ba1a3665d8bd5ba887f43ca0975c09368e2dd0a8a->enter($__internal_9792ca5a61233bdc99b8256ba1a3665d8bd5ba887f43ca0975c09368e2dd0a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_title"));

        echo "Page Posts";
        
        $__internal_9792ca5a61233bdc99b8256ba1a3665d8bd5ba887f43ca0975c09368e2dd0a8a->leave($__internal_9792ca5a61233bdc99b8256ba1a3665d8bd5ba887f43ca0975c09368e2dd0a8a_prof);

        
        $__internal_1590c623a8dd7a0e0383a4ac1e3abe02c101fa9b3a40b15148e3f0d729a97e0b->leave($__internal_1590c623a8dd7a0e0383a4ac1e3abe02c101fa9b3a40b15148e3f0d729a97e0b_prof);

    }

    // line 7
    public function block_admin_content($context, array $blocks = array())
    {
        $__internal_55ad1bebe45785c8db1f0d6d00936cd9e7c57f6fbbc6f492cac89e4bfc00d81f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55ad1bebe45785c8db1f0d6d00936cd9e7c57f6fbbc6f492cac89e4bfc00d81f->enter($__internal_55ad1bebe45785c8db1f0d6d00936cd9e7c57f6fbbc6f492cac89e4bfc00d81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_content"));

        $__internal_a159f4fae8de52d8aadeacb13d8151cb5b62e5dc6489610f40059d5b3160cd94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a159f4fae8de52d8aadeacb13d8151cb5b62e5dc6489610f40059d5b3160cd94->enter($__internal_a159f4fae8de52d8aadeacb13d8151cb5b62e5dc6489610f40059d5b3160cd94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_content"));

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
            echo "\" enctype=\"multipart/form-data\">
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
            echo "\" enctype=\"multipart/form-data\">
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
            echo "\" enctype=\"multipart/form-data\">
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
                                <input type=\"file\" class=\"form-control\" name=\"image_url\" id=\"article-img\"  accept=\"image/*\"/>

                        </div>

                        <div class=\"form-group col-md-4\">
                            ";
        // line 64
        if ($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "imageUrl", array())) {
            // line 65
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("/uploads/articles/" . $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "imageUrl", array()))), "html", null, true);
            echo "\" id=\"article-img-tag\" width=\"200px\" />
                            ";
        } else {
            // line 67
            echo "                                <img src=\"\" id=\"article-img-tag\" width=\"200px\" />
                            ";
        }
        // line 69
        echo "                        </div>
                </div>


                <div class=\"input-group\">
                        <i class=\"fa fa-list\"></i>
                        <input type=\"text\" name=\"title_fr\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "titleFr", array()), "html", null, true);
        echo "\" placeholder=\"Titre du post\"  required>
                </div>
                <div class=\"input-group\">
                        <i class=\"fa fa-list\"></i>
                        <input type=\"text\" name=\"title_en\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "titleEn", array()), "html", null, true);
        echo "\" placeholder=\"Post title\"  required>
                </div>
                <div class=\"input-group\">
                        <i class=\"fa fa-list\"></i>
                        <input type=\"text\" name=\"title_de\" value=\"";
        // line 83
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
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "descriptionFr", array()), "html", null, true);
        echo "</textarea>
                        </div>

                        <div class=\"form-group col-md-4\">
                                <label>Post description:</label>
                                <textarea name=\"description_en\" placeholder=\"Post description\" rows=\"6\"  required>";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "descriptionEn", array()), "html", null, true);
        echo "</textarea>
                        </div>

                        <div class=\"form-group col-md-4\">
                                <label>Post Beschreibung:</label>
                                <textarea name=\"description_de\" placeholder=\"Post Beschreibung\" rows=\"6\"  required>";
        // line 103
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
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 127
            echo "                        <tr>
                            <td>";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "subcategory", array()), "nomFr", array()), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "subcategory", array()), "nomEn", array()), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "subcategory", array()), "nomDe", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "titleFr", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "titleEn", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "titleDe", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 132
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["p"], "dateCreation", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_admin_post_details", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "\" class=\"hide btn btn-xs btn-info\">Détails</a>
                                <a href=\"";
            // line 135
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_admin_post_update", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-success\">Modifier</a>
                                <a href=\"";
            // line 136
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_admin_post_details", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "\" class=\"hide btn btn-xs btn-primary\">Supprimer</a>
                            </td>
                        </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "                </tbody>
        </table>

    ";
        // line 143
        $this->loadTemplate("GlobalViewBundle:Default:pagination.html.twig", "GlobalViewBundle:Default/post:post.html.twig", 143)->display($context);
        // line 144
        echo "
";
        
        $__internal_a159f4fae8de52d8aadeacb13d8151cb5b62e5dc6489610f40059d5b3160cd94->leave($__internal_a159f4fae8de52d8aadeacb13d8151cb5b62e5dc6489610f40059d5b3160cd94_prof);

        
        $__internal_55ad1bebe45785c8db1f0d6d00936cd9e7c57f6fbbc6f492cac89e4bfc00d81f->leave($__internal_55ad1bebe45785c8db1f0d6d00936cd9e7c57f6fbbc6f492cac89e4bfc00d81f_prof);

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
        return array (  384 => 144,  382 => 143,  377 => 140,  367 => 136,  363 => 135,  359 => 134,  354 => 132,  350 => 131,  346 => 130,  342 => 129,  334 => 128,  331 => 127,  327 => 126,  301 => 103,  293 => 98,  285 => 93,  272 => 83,  265 => 79,  258 => 75,  250 => 69,  246 => 67,  240 => 65,  238 => 64,  226 => 54,  223 => 53,  216 => 51,  204 => 49,  192 => 47,  190 => 46,  187 => 45,  182 => 44,  179 => 43,  164 => 41,  159 => 40,  157 => 39,  149 => 33,  143 => 31,  141 => 30,  138 => 29,  132 => 27,  130 => 26,  127 => 25,  121 => 23,  119 => 22,  115 => 20,  109 => 17,  106 => 16,  104 => 15,  101 => 14,  95 => 11,  92 => 10,  90 => 9,  87 => 8,  78 => 7,  60 => 5,  42 => 3,  11 => 1,);
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
            <form method=\"post\" action=\"{{ path('global_admin_post_create') }}\" enctype=\"multipart/form-data\">
    {% endif %}

    {% if mode == 'edit' %}
        <form method=\"post\" action=\"{{ path('global_admin_post_update', {'id': post.id}) }}\" enctype=\"multipart/form-data\">
    {% endif %}

    {% if mode == 'delete' %}
        <form method=\"post\" action=\"{{ path('global_admin_post_delete', {'id': post.id}) }}\" enctype=\"multipart/form-data\">
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
                                <input type=\"file\" class=\"form-control\" name=\"image_url\" id=\"article-img\"  accept=\"image/*\"/>

                        </div>

                        <div class=\"form-group col-md-4\">
                            {% if post.imageUrl %}
                                <img src=\"{{ asset('/uploads/articles/' ~ post.imageUrl ) }}\" id=\"article-img-tag\" width=\"200px\" />
                            {% else %}
                                <img src=\"\" id=\"article-img-tag\" width=\"200px\" />
                            {% endif %}
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
                                <a href=\"{{ path('global_admin_post_details', {'id' : p.id}) }}\" class=\"hide btn btn-xs btn-info\">Détails</a>
                                <a href=\"{{ path('global_admin_post_update', {'id' : p.id}) }}\" class=\"btn btn-xs btn-success\">Modifier</a>
                                <a href=\"{{ path('global_admin_post_details', {'id' : p.id}) }}\" class=\"hide btn btn-xs btn-primary\">Supprimer</a>
                            </td>
                        </tr>
                {% endfor %}
                </tbody>
        </table>

    {% include 'GlobalViewBundle:Default:pagination.html.twig' %}

{% endblock %}", "GlobalViewBundle:Default/post:post.html.twig", "/Users/Rachid/SymfonyProjects/theglobalview/src/GlobalViewBundle/Resources/views/Default/post/post.html.twig");
    }
}
