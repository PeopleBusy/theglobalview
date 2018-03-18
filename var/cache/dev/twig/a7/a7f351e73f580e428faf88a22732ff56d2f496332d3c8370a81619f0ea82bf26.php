<?php

/* GlobalViewBundle:Default:index_en.html.twig */
class __TwigTemplate_ea93d7465495d8310ccce037be68a9da310a4c5d4e278b4f8519ef8248c5180f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base_en.html.twig", "GlobalViewBundle:Default:index_en.html.twig", 1);
        $this->blocks = array(
            'article_content' => array($this, 'block_article_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base_en.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ccfcaee9a637ec7fc94861bc4c5d90e8bd9f5d1109ff8283daa5dbd142ce9950 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccfcaee9a637ec7fc94861bc4c5d90e8bd9f5d1109ff8283daa5dbd142ce9950->enter($__internal_ccfcaee9a637ec7fc94861bc4c5d90e8bd9f5d1109ff8283daa5dbd142ce9950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default:index_en.html.twig"));

        $__internal_666038c6715238d6b4cb26e95c1793eb31db41ab10b24494c2b7eac8de2c23ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_666038c6715238d6b4cb26e95c1793eb31db41ab10b24494c2b7eac8de2c23ca->enter($__internal_666038c6715238d6b4cb26e95c1793eb31db41ab10b24494c2b7eac8de2c23ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default:index_en.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccfcaee9a637ec7fc94861bc4c5d90e8bd9f5d1109ff8283daa5dbd142ce9950->leave($__internal_ccfcaee9a637ec7fc94861bc4c5d90e8bd9f5d1109ff8283daa5dbd142ce9950_prof);

        
        $__internal_666038c6715238d6b4cb26e95c1793eb31db41ab10b24494c2b7eac8de2c23ca->leave($__internal_666038c6715238d6b4cb26e95c1793eb31db41ab10b24494c2b7eac8de2c23ca_prof);

    }

    // line 3
    public function block_article_content($context, array $blocks = array())
    {
        $__internal_aa28c56cbf99749832cb6b7871ffdf342347c5cbd9f477085758761a1845997b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa28c56cbf99749832cb6b7871ffdf342347c5cbd9f477085758761a1845997b->enter($__internal_aa28c56cbf99749832cb6b7871ffdf342347c5cbd9f477085758761a1845997b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_content"));

        $__internal_29fa85435563b9699e0cf31dc89ee7534a8d64eaae828c49784f687000bcc297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29fa85435563b9699e0cf31dc89ee7534a8d64eaae828c49784f687000bcc297->enter($__internal_29fa85435563b9699e0cf31dc89ee7534a8d64eaae828c49784f687000bcc297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_content"));

        // line 4
        echo "
    <!-- ARTICLES V1 WIDGET -->
    <section class=\"widget articles-v1\">
        <!-- Widget Header -->
        <header class=\"clearfix\">
            <h4>Headline</h4>
            <a href=\"#\" class=\"control\"><i class=\"fa fa-plus\"></i></a>
        </header>

        <!-- Widget Contents: Articles-->
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 15
            echo "            <div class=\"article-medium\">
                <div class=\"row\">
                    <!--Image-->
                    <div class=\"col-sm-6\">
                        <div class=\"frame\">
                            <a class=\"image\" href=\"#\">
                                <figure class=\"image-holder\">
                                    ";
            // line 22
            if ($this->getAttribute($context["p"], "imageUrl", array())) {
                // line 23
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_view_post_detail", array("id" => $this->getAttribute($context["p"], "id", array()), "_locale" => "fr")), "html", null, true);
                echo "\">
                                            <img src=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("/uploads/articles/" . $this->getAttribute($context["p"], "imageUrl", array()))), "html", null, true);
                echo "\" width=\"350px\" height=\"185px\" />
                                        </a>
                                    ";
            } else {
                // line 27
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_view_post_detail", array("id" => $this->getAttribute($context["p"], "id", array()), "_locale" => "fr")), "html", null, true);
                echo "\">
                                            <img src=\"http://placehold.it/350x185\" alt=\"\">
                                        </a>
                                    ";
            }
            // line 31
            echo "                                </figure>
                                <div class=\"image-light\"></div>
                                <span class=\"dashicons dashicons-format-gallery\"></span>
                            </a>
                        </div>
                        <img src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/shadow.png"), "html", null, true);
            echo "\" class=\"shadow\" alt=\"shadow\">
                    </div>

                    <!--Content-->
                    <div class=\"col-sm-6\">
                        <h4><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_view_post_detail", array("id" => $this->getAttribute($context["p"], "id", array()), "_locale" => "en")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "titleEn", array()), "html", null, true);
            echo "</a></h4>
                        <p class=\"post-meta\">
                            <a href=\"#\"><span class=\"fa fa-clock-o\"></span> ";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["p"], "dateCreation", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</a> &nbsp;
                            <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_view_posts_by_subcategory", array("id" => $this->getAttribute($this->getAttribute($context["p"], "subcategory", array()), "id", array()), "_locale" => "en")), "html", null, true);
            echo "\"><span class=\"fa fa-folder\"></span> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "subcategory", array()), "nomEn", array()), "html", null, true);
            echo "</a> &nbsp;
                            <a class=\"hide\" href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a> &nbsp;
                            <a class=\"hide\" href=\"#\"><span class=\"fa fa-eye\"></span> 0</a>
                        </p>
                        <p>";
            // line 48
            echo (((twig_length_filter($this->env, $this->getAttribute($context["p"], "descriptionEn", array())) > 160)) ? ((twig_slice($this->env, $this->getAttribute($context["p"], "descriptionEn", array()), 0, 160) . "&hellip;")) : ($this->getAttribute($context["p"], "descriptionEn", array())));
            echo "</p>
                    </div>
                </div>
            </div>
            <hr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
        ";
        // line 55
        if (($context["pagination"] ?? $this->getContext($context, "pagination"))) {
            // line 56
            echo "            ";
            $this->loadTemplate("GlobalViewBundle:Default:pagination.html.twig", "GlobalViewBundle:Default:index_en.html.twig", 56)->display($context);
            // line 57
            echo "        ";
        }
        // line 58
        echo "    </section>

    <!-- ADS -->
    <section class=\"widget\">
        <!-- Widget Header -->
        <header class=\"clearfix\"><h4>Advertisement</h4></header>

        <!-- Widget Content -->
        <div class=\"frame thick\">
            <a href=\"http://themeforest.net/user/friskamax/portfolio?ref=friskamax\" target=\"_blank\">
                <img src=\"http://placehold.it/728x90/f0f0f9\" alt=\"ads\">
            </a>
        </div>
        <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/shadow.png"), "html", null, true);
        echo "\" alt=\"shadow\" class=\"shadow\">
    </section>

";
        
        $__internal_29fa85435563b9699e0cf31dc89ee7534a8d64eaae828c49784f687000bcc297->leave($__internal_29fa85435563b9699e0cf31dc89ee7534a8d64eaae828c49784f687000bcc297_prof);

        
        $__internal_aa28c56cbf99749832cb6b7871ffdf342347c5cbd9f477085758761a1845997b->leave($__internal_aa28c56cbf99749832cb6b7871ffdf342347c5cbd9f477085758761a1845997b_prof);

    }

    public function getTemplateName()
    {
        return "GlobalViewBundle:Default:index_en.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 71,  153 => 58,  150 => 57,  147 => 56,  145 => 55,  142 => 54,  130 => 48,  121 => 44,  117 => 43,  110 => 41,  102 => 36,  95 => 31,  87 => 27,  81 => 24,  76 => 23,  74 => 22,  65 => 15,  61 => 14,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base_en.html.twig\" %}

{% block article_content %}

    <!-- ARTICLES V1 WIDGET -->
    <section class=\"widget articles-v1\">
        <!-- Widget Header -->
        <header class=\"clearfix\">
            <h4>Headline</h4>
            <a href=\"#\" class=\"control\"><i class=\"fa fa-plus\"></i></a>
        </header>

        <!-- Widget Contents: Articles-->
        {% for p in posts %}
            <div class=\"article-medium\">
                <div class=\"row\">
                    <!--Image-->
                    <div class=\"col-sm-6\">
                        <div class=\"frame\">
                            <a class=\"image\" href=\"#\">
                                <figure class=\"image-holder\">
                                    {% if p.imageUrl %}
                                        <a href=\"{{ path('global_view_post_detail', {'id' : p.id, '_locale' : 'fr'}) }}\">
                                            <img src=\"{{ asset('/uploads/articles/' ~ p.imageUrl ) }}\" width=\"350px\" height=\"185px\" />
                                        </a>
                                    {% else %}
                                        <a href=\"{{ path('global_view_post_detail', {'id' : p.id, '_locale' : 'fr'}) }}\">
                                            <img src=\"http://placehold.it/350x185\" alt=\"\">
                                        </a>
                                    {% endif %}
                                </figure>
                                <div class=\"image-light\"></div>
                                <span class=\"dashicons dashicons-format-gallery\"></span>
                            </a>
                        </div>
                        <img src=\"{{ asset('/img/shadow.png') }}\" class=\"shadow\" alt=\"shadow\">
                    </div>

                    <!--Content-->
                    <div class=\"col-sm-6\">
                        <h4><a href=\"{{ path('global_view_post_detail', {'id' : p.id, '_locale' : 'en'}) }}\">{{ p.titleEn }}</a></h4>
                        <p class=\"post-meta\">
                            <a href=\"#\"><span class=\"fa fa-clock-o\"></span> {{ p.dateCreation | date('d/m/Y H:i:s') }}</a> &nbsp;
                            <a href=\"{{ path('global_view_posts_by_subcategory', {'id' : p.subcategory.id, '_locale' : 'en'}) }}\"><span class=\"fa fa-folder\"></span> {{ p.subcategory.nomEn }}</a> &nbsp;
                            <a class=\"hide\" href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a> &nbsp;
                            <a class=\"hide\" href=\"#\"><span class=\"fa fa-eye\"></span> 0</a>
                        </p>
                        <p>{{ (p.descriptionEn|length > 160 ? p.descriptionEn|slice(0, 160) ~ '&hellip;' : p.descriptionEn)|raw }}</p>
                    </div>
                </div>
            </div>
            <hr>
        {% endfor %}

        {% if pagination %}
            {% include 'GlobalViewBundle:Default:pagination.html.twig' %}
        {% endif %}
    </section>

    <!-- ADS -->
    <section class=\"widget\">
        <!-- Widget Header -->
        <header class=\"clearfix\"><h4>Advertisement</h4></header>

        <!-- Widget Content -->
        <div class=\"frame thick\">
            <a href=\"http://themeforest.net/user/friskamax/portfolio?ref=friskamax\" target=\"_blank\">
                <img src=\"http://placehold.it/728x90/f0f0f9\" alt=\"ads\">
            </a>
        </div>
        <img src=\"{{ asset('/img/shadow.png') }}\" alt=\"shadow\" class=\"shadow\">
    </section>

{% endblock %}", "GlobalViewBundle:Default:index_en.html.twig", "/Users/Rachid/SymfonyProjects/theglobalview/src/GlobalViewBundle/Resources/views/Default/index_en.html.twig");
    }
}
