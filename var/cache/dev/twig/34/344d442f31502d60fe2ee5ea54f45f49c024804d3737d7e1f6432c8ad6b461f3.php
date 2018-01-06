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
        $__internal_aa4e3ddc5ea02a9d2a8ad57f0d8442cbbbd811c41cfd29eac345834f093b64bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa4e3ddc5ea02a9d2a8ad57f0d8442cbbbd811c41cfd29eac345834f093b64bc->enter($__internal_aa4e3ddc5ea02a9d2a8ad57f0d8442cbbbd811c41cfd29eac345834f093b64bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default/category:category.html.twig"));

        $__internal_367b9e6b74d1d0affd8c3c2fbe7fcb71f15ff74598c4f6a2cf0d9411c673ada3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_367b9e6b74d1d0affd8c3c2fbe7fcb71f15ff74598c4f6a2cf0d9411c673ada3->enter($__internal_367b9e6b74d1d0affd8c3c2fbe7fcb71f15ff74598c4f6a2cf0d9411c673ada3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default/category:category.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa4e3ddc5ea02a9d2a8ad57f0d8442cbbbd811c41cfd29eac345834f093b64bc->leave($__internal_aa4e3ddc5ea02a9d2a8ad57f0d8442cbbbd811c41cfd29eac345834f093b64bc_prof);

        
        $__internal_367b9e6b74d1d0affd8c3c2fbe7fcb71f15ff74598c4f6a2cf0d9411c673ada3->leave($__internal_367b9e6b74d1d0affd8c3c2fbe7fcb71f15ff74598c4f6a2cf0d9411c673ada3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fda7ea9097427cbb280a4cdeb077fc8e9f77f87bd66ca7e491bfc75abcd30808 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fda7ea9097427cbb280a4cdeb077fc8e9f77f87bd66ca7e491bfc75abcd30808->enter($__internal_fda7ea9097427cbb280a4cdeb077fc8e9f77f87bd66ca7e491bfc75abcd30808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_888ce9386dae9175465e0b66240bdc7b041a186b525ecc549db25b36c5ae2e13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_888ce9386dae9175465e0b66240bdc7b041a186b525ecc549db25b36c5ae2e13->enter($__internal_888ce9386dae9175465e0b66240bdc7b041a186b525ecc549db25b36c5ae2e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Categories ";
        
        $__internal_888ce9386dae9175465e0b66240bdc7b041a186b525ecc549db25b36c5ae2e13->leave($__internal_888ce9386dae9175465e0b66240bdc7b041a186b525ecc549db25b36c5ae2e13_prof);

        
        $__internal_fda7ea9097427cbb280a4cdeb077fc8e9f77f87bd66ca7e491bfc75abcd30808->leave($__internal_fda7ea9097427cbb280a4cdeb077fc8e9f77f87bd66ca7e491bfc75abcd30808_prof);

    }

    // line 5
    public function block_admin_title($context, array $blocks = array())
    {
        $__internal_bf76e15a33478314f8e3e6b1cf69b466c77b4ed99ba86a8729e52ba5b59b5b99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf76e15a33478314f8e3e6b1cf69b466c77b4ed99ba86a8729e52ba5b59b5b99->enter($__internal_bf76e15a33478314f8e3e6b1cf69b466c77b4ed99ba86a8729e52ba5b59b5b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_title"));

        $__internal_f2cdba5c2aab28a9e1c15ba50e2d8ac097d051711acc824f48a760eef484d34c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2cdba5c2aab28a9e1c15ba50e2d8ac097d051711acc824f48a760eef484d34c->enter($__internal_f2cdba5c2aab28a9e1c15ba50e2d8ac097d051711acc824f48a760eef484d34c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_title"));

        echo "Page catégories";
        
        $__internal_f2cdba5c2aab28a9e1c15ba50e2d8ac097d051711acc824f48a760eef484d34c->leave($__internal_f2cdba5c2aab28a9e1c15ba50e2d8ac097d051711acc824f48a760eef484d34c_prof);

        
        $__internal_bf76e15a33478314f8e3e6b1cf69b466c77b4ed99ba86a8729e52ba5b59b5b99->leave($__internal_bf76e15a33478314f8e3e6b1cf69b466c77b4ed99ba86a8729e52ba5b59b5b99_prof);

    }

    // line 7
    public function block_admin_content($context, array $blocks = array())
    {
        $__internal_8838eef4428da8034e3d9a98ece19e6ee83a43694a16456da2d1008ef4030e47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8838eef4428da8034e3d9a98ece19e6ee83a43694a16456da2d1008ef4030e47->enter($__internal_8838eef4428da8034e3d9a98ece19e6ee83a43694a16456da2d1008ef4030e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_content"));

        $__internal_714a920436c725e5b6a0c1da9108c1c5a33946d7b11de98702a5d809185da85a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_714a920436c725e5b6a0c1da9108c1c5a33946d7b11de98702a5d809185da85a->enter($__internal_714a920436c725e5b6a0c1da9108c1c5a33946d7b11de98702a5d809185da85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_content"));

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
        
        $__internal_714a920436c725e5b6a0c1da9108c1c5a33946d7b11de98702a5d809185da85a->leave($__internal_714a920436c725e5b6a0c1da9108c1c5a33946d7b11de98702a5d809185da85a_prof);

        
        $__internal_8838eef4428da8034e3d9a98ece19e6ee83a43694a16456da2d1008ef4030e47->leave($__internal_8838eef4428da8034e3d9a98ece19e6ee83a43694a16456da2d1008ef4030e47_prof);

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
