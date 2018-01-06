<?php

/* GlobalViewBundle:Default:article_detail_fr.html.twig */
class __TwigTemplate_a25c98cbd80e62f75095165484f177e3db3a1a5158d25d6d222c5582df88846d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base_fr.html.twig", "GlobalViewBundle:Default:article_detail_fr.html.twig", 1);
        $this->blocks = array(
            'carousel_content' => array($this, 'block_carousel_content'),
            'article_content' => array($this, 'block_article_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base_fr.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_41726f5f3fa2b308d81700f0c9dbdb99d770b20b9afcd92b96f29ef7ebde32d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41726f5f3fa2b308d81700f0c9dbdb99d770b20b9afcd92b96f29ef7ebde32d0->enter($__internal_41726f5f3fa2b308d81700f0c9dbdb99d770b20b9afcd92b96f29ef7ebde32d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default:article_detail_fr.html.twig"));

        $__internal_6addd43596278da593db053a2a69c9e8192e3498beae1fca3d63da653b0db6cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6addd43596278da593db053a2a69c9e8192e3498beae1fca3d63da653b0db6cf->enter($__internal_6addd43596278da593db053a2a69c9e8192e3498beae1fca3d63da653b0db6cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default:article_detail_fr.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41726f5f3fa2b308d81700f0c9dbdb99d770b20b9afcd92b96f29ef7ebde32d0->leave($__internal_41726f5f3fa2b308d81700f0c9dbdb99d770b20b9afcd92b96f29ef7ebde32d0_prof);

        
        $__internal_6addd43596278da593db053a2a69c9e8192e3498beae1fca3d63da653b0db6cf->leave($__internal_6addd43596278da593db053a2a69c9e8192e3498beae1fca3d63da653b0db6cf_prof);

    }

    // line 3
    public function block_carousel_content($context, array $blocks = array())
    {
        $__internal_acac0e147a0bd861cf27938c86a13e667d42cb74fed378fe830fed20c589e753 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acac0e147a0bd861cf27938c86a13e667d42cb74fed378fe830fed20c589e753->enter($__internal_acac0e147a0bd861cf27938c86a13e667d42cb74fed378fe830fed20c589e753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carousel_content"));

        $__internal_3d523ce2afc0d4a8df961118f1d21fc36a7354850314f316b6f2f171fd05de34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d523ce2afc0d4a8df961118f1d21fc36a7354850314f316b6f2f171fd05de34->enter($__internal_3d523ce2afc0d4a8df961118f1d21fc36a7354850314f316b6f2f171fd05de34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carousel_content"));

        
        $__internal_3d523ce2afc0d4a8df961118f1d21fc36a7354850314f316b6f2f171fd05de34->leave($__internal_3d523ce2afc0d4a8df961118f1d21fc36a7354850314f316b6f2f171fd05de34_prof);

        
        $__internal_acac0e147a0bd861cf27938c86a13e667d42cb74fed378fe830fed20c589e753->leave($__internal_acac0e147a0bd861cf27938c86a13e667d42cb74fed378fe830fed20c589e753_prof);

    }

    // line 5
    public function block_article_content($context, array $blocks = array())
    {
        $__internal_3663aed90d36e15a7c2ff8734b9fcf97d3ba1841fc4e36708b08e1668356df80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3663aed90d36e15a7c2ff8734b9fcf97d3ba1841fc4e36708b08e1668356df80->enter($__internal_3663aed90d36e15a7c2ff8734b9fcf97d3ba1841fc4e36708b08e1668356df80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_content"));

        $__internal_92743cf0810f2a0ac8bebbc35a5c31144f8cc6b320907ce6aa14fff1a3950dc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92743cf0810f2a0ac8bebbc35a5c31144f8cc6b320907ce6aa14fff1a3950dc0->enter($__internal_92743cf0810f2a0ac8bebbc35a5c31144f8cc6b320907ce6aa14fff1a3950dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_content"));

        // line 6
        echo "
    <!-- ARTICLES V1 WIDGET -->
    <section class=\"widget articles-v1\">
        <!-- Widget Header -->
        <header class=\"clearfix\">
            <h4>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "titleFr", array()), "html", null, true);
        echo "</h4>
            <a href=\"#\" class=\"control\"><i class=\"fa fa-plus\"></i></a>
        </header>

        <!-- POST CONTENT -->
        <article class=\"article-large hentry\">
            <!--Image-->
            <div class=\"frame thick clearfix\">
                <a href=\"http://placehold.it/1024x512.jpg\" class=\"image\" data-lightbox title=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "titleFr", array()), "html", null, true);
        echo "\">
                    <figure class=\"image-holder\">
                        ";
        // line 21
        if ($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "imageUrl", array())) {
            // line 22
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("/uploads/articles/" . $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "imageUrl", array()))), "html", null, true);
            echo "\" width=\"730px\" height=\"370px\" />
                        ";
        } else {
            // line 24
            echo "                            <img src=\"http://placehold.it/730x370.jpg\" alt=\"\">
                        ";
        }
        // line 26
        echo "                    </figure>
                    <div class=\"image-light\"></div>
                </a>
                <div class=\"hide icons entry-footer\">
                    <span class=\"vcard\">
                        <a href=\"#\" class=\"url fn\" title=\"Siska\"><span class=\"hidden\">Siska</span><img src=\"http://placehold.it/75x75.jpg\" alt=\"Siska\"></a>
                    </span>
                    <a href=\"#\" title=\"Post format image\"><i class=\"dashicons dashicons-format-image\"></i></a>
                    <a href=\"#\" title=\"1,347 Comments\"><i class=\"fa fa-comments\"></i><span class=\"comment\">1,347</span></a>
                </div>
                <p class=\"post-meta entry-footer pull-right\">
                    <a href=\"#\" rel=\"bookmark\"><time class=\"entry-date published updated\" datetime=\"2014-01-08T11:42:20+00:00\">";
        // line 37
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "dateCreation", array()), "d/m/Y H:i:s"), "html", null, true);
        echo "</time></a>
                </p>
            </div>
            <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/shadow.png"), "html", null, true);
        echo "\" class=\"shadow\" alt=\"shadow\">

            <header class=\"hidden\">
                <h1 class=\"entry-title\">Quasi Architecto Beatae Vitae Dicta Sunt Explicabo Nemo Enim Ipsam Voluptatem</h1>
            </header>

            <div class=\"entry-content\">

                <a class=\"pull-right\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_view_posts_by_subcategory", array("id" => $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "subcategory", array()), "id", array()), "_locale" => "fr")), "html", null, true);
        echo "\">
                    <span class=\"fa fa-folder\"></span> ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "subcategory", array()), "nomEn", array()), "html", null, true);
        echo "</a>
                <p>
                    ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "descriptionFr", array()), "html", null, true);
        echo "
                </p>

                <div class=\"page-links hide\">
                    ";
        // line 55
        if (($context["pagination"] ?? $this->getContext($context, "pagination"))) {
            // line 56
            echo "                        ";
            $this->loadTemplate("GlobalViewBundle:Default:pagination.html.twig", "GlobalViewBundle:Default:article_detail_fr.html.twig", 56)->display($context);
            // line 57
            echo "                    ";
        }
        // line 58
        echo "                </div>

                <!-- SHARE POST -->
                <section class=\"share-post clearfix hide\">
                    <h5>Share:</h5>
                    <ul>
                        <li><a href=\"#\"><i class=\"sc-sm sc-facebook\"></i><span>426</span></a></li>
                        <li><a href=\"#\"><i class=\"sc-sm sc-twitter\"></i><span>526</span></a></li>
                        <li><a href=\"#\"><i class=\"sc-sm sc-pinterest\"></i><span>283</span></a></li>
                        <li><a href=\"#\"><i class=\"sc-sm sc-linkedin\"></i><span>329</span></a></li>
                        <li><a href=\"#\"><i class=\"sc-sm sc-googleplus\"></i><span>429</span></a></li>
                    </ul>
                </section>

            </div><!-- .entry-content -->

        </article><!-- .hentry -->



    </section>

    <!-- ADS -->
    <section class=\"widget\">
        <!-- Widget Header -->
        <header class=\"clearfix\"><h4>Publicités</h4></header>

        <!-- Widget Content -->
        <div class=\"frame thick\">
            <a href=\"http://themeforest.net/user/friskamax/portfolio?ref=friskamax\" target=\"_blank\">
                <img src=\"http://placehold.it/728x90/f0f0f9\" alt=\"ads\">
            </a>
        </div>
        <img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/shadow.png"), "html", null, true);
        echo "\" alt=\"shadow\" class=\"shadow\">
    </section>

";
        
        $__internal_92743cf0810f2a0ac8bebbc35a5c31144f8cc6b320907ce6aa14fff1a3950dc0->leave($__internal_92743cf0810f2a0ac8bebbc35a5c31144f8cc6b320907ce6aa14fff1a3950dc0_prof);

        
        $__internal_3663aed90d36e15a7c2ff8734b9fcf97d3ba1841fc4e36708b08e1668356df80->leave($__internal_3663aed90d36e15a7c2ff8734b9fcf97d3ba1841fc4e36708b08e1668356df80_prof);

    }

    public function getTemplateName()
    {
        return "GlobalViewBundle:Default:article_detail_fr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 91,  156 => 58,  153 => 57,  150 => 56,  148 => 55,  141 => 51,  136 => 49,  132 => 48,  121 => 40,  115 => 37,  102 => 26,  98 => 24,  92 => 22,  90 => 21,  85 => 19,  74 => 11,  67 => 6,  58 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base_fr.html.twig\" %}

{% block carousel_content %}{% endblock %}

{% block article_content %}

    <!-- ARTICLES V1 WIDGET -->
    <section class=\"widget articles-v1\">
        <!-- Widget Header -->
        <header class=\"clearfix\">
            <h4>{{ post.titleFr }}</h4>
            <a href=\"#\" class=\"control\"><i class=\"fa fa-plus\"></i></a>
        </header>

        <!-- POST CONTENT -->
        <article class=\"article-large hentry\">
            <!--Image-->
            <div class=\"frame thick clearfix\">
                <a href=\"http://placehold.it/1024x512.jpg\" class=\"image\" data-lightbox title=\"{{ post.titleFr }}\">
                    <figure class=\"image-holder\">
                        {% if post.imageUrl %}
                            <img src=\"{{ asset('/uploads/articles/' ~ post.imageUrl ) }}\" width=\"730px\" height=\"370px\" />
                        {% else %}
                            <img src=\"http://placehold.it/730x370.jpg\" alt=\"\">
                        {% endif %}
                    </figure>
                    <div class=\"image-light\"></div>
                </a>
                <div class=\"hide icons entry-footer\">
                    <span class=\"vcard\">
                        <a href=\"#\" class=\"url fn\" title=\"Siska\"><span class=\"hidden\">Siska</span><img src=\"http://placehold.it/75x75.jpg\" alt=\"Siska\"></a>
                    </span>
                    <a href=\"#\" title=\"Post format image\"><i class=\"dashicons dashicons-format-image\"></i></a>
                    <a href=\"#\" title=\"1,347 Comments\"><i class=\"fa fa-comments\"></i><span class=\"comment\">1,347</span></a>
                </div>
                <p class=\"post-meta entry-footer pull-right\">
                    <a href=\"#\" rel=\"bookmark\"><time class=\"entry-date published updated\" datetime=\"2014-01-08T11:42:20+00:00\">{{ post.dateCreation | date('d/m/Y H:i:s') }}</time></a>
                </p>
            </div>
            <img src=\"{{ asset('/img/shadow.png') }}\" class=\"shadow\" alt=\"shadow\">

            <header class=\"hidden\">
                <h1 class=\"entry-title\">Quasi Architecto Beatae Vitae Dicta Sunt Explicabo Nemo Enim Ipsam Voluptatem</h1>
            </header>

            <div class=\"entry-content\">

                <a class=\"pull-right\" href=\"{{ path('global_view_posts_by_subcategory', {'id' : post.subcategory.id, '_locale' : 'fr'}) }}\">
                    <span class=\"fa fa-folder\"></span> {{ post.subcategory.nomEn }}</a>
                <p>
                    {{ post.descriptionFr }}
                </p>

                <div class=\"page-links hide\">
                    {% if pagination %}
                        {% include 'GlobalViewBundle:Default:pagination.html.twig' %}
                    {% endif %}
                </div>

                <!-- SHARE POST -->
                <section class=\"share-post clearfix hide\">
                    <h5>Share:</h5>
                    <ul>
                        <li><a href=\"#\"><i class=\"sc-sm sc-facebook\"></i><span>426</span></a></li>
                        <li><a href=\"#\"><i class=\"sc-sm sc-twitter\"></i><span>526</span></a></li>
                        <li><a href=\"#\"><i class=\"sc-sm sc-pinterest\"></i><span>283</span></a></li>
                        <li><a href=\"#\"><i class=\"sc-sm sc-linkedin\"></i><span>329</span></a></li>
                        <li><a href=\"#\"><i class=\"sc-sm sc-googleplus\"></i><span>429</span></a></li>
                    </ul>
                </section>

            </div><!-- .entry-content -->

        </article><!-- .hentry -->



    </section>

    <!-- ADS -->
    <section class=\"widget\">
        <!-- Widget Header -->
        <header class=\"clearfix\"><h4>Publicités</h4></header>

        <!-- Widget Content -->
        <div class=\"frame thick\">
            <a href=\"http://themeforest.net/user/friskamax/portfolio?ref=friskamax\" target=\"_blank\">
                <img src=\"http://placehold.it/728x90/f0f0f9\" alt=\"ads\">
            </a>
        </div>
        <img src=\"{{ asset('/img/shadow.png') }}\" alt=\"shadow\" class=\"shadow\">
    </section>

{% endblock %}", "GlobalViewBundle:Default:article_detail_fr.html.twig", "/Users/Rachid/SymfonyProjects/theglobalview/src/GlobalViewBundle/Resources/views/Default/article_detail_fr.html.twig");
    }
}
