<?php

/* ::base_en.html.twig */
class __TwigTemplate_1fa0a6eccd1a72e4800d5a99ec57a71c221fbf600697c4c12d133f36b8ca131e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'article_content' => array($this, 'block_article_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_951080f05bcd653fc0c68269a90d4e296a6b275586aa26b0365ed3b20d75b45a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_951080f05bcd653fc0c68269a90d4e296a6b275586aa26b0365ed3b20d75b45a->enter($__internal_951080f05bcd653fc0c68269a90d4e296a6b275586aa26b0365ed3b20d75b45a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base_en.html.twig"));

        $__internal_eff397fbd5344f123894394528ba20ba0a134bdfee8736e23e39b09e5d5bb92c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eff397fbd5344f123894394528ba20ba0a134bdfee8736e23e39b09e5d5bb92c->enter($__internal_eff397fbd5344f123894394528ba20ba0a134bdfee8736e23e39b09e5d5bb92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base_en.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html id=\"home-version-2\" class=\"boxed-style\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        <!--Import Google font-->
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>

        <!-- Stylesheets -->
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/style.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Flags icons css -->
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/flags/css/flag-icon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!--Modernizr-->
        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/modernizr.min.js"), "html", null, true);
        echo "\"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries
             ie8.css and ie8.js custom style  and script that needed for IE8. -->
        <!--[if lt IE 9]>
        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/ie8.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
        <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/ie8.js"), "html", null, true);
        echo "\"></script>
        <![endif]-->

        ";
        // line 32
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 33
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "
        <!--HEADER
                ==========-->
        <header>
            <!-- TOP NAVBAR
            =============== -->
            <nav class=\"navbar navbar-inverse\" id=\"top-nav\" role=\"navigation\">
                <div class=\"container\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#top-nav-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"top-nav-collapse\">
                        <ul class=\"nav navbar-nav\">
                            <li><a href=\"#\">";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("toplink.home"), "html", null, true);
        echo "</a></li>
                            <li><a href=\"#\">";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("toplink.about"), "html", null, true);
        echo "</a></li>
                            <li><a href=\"#\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("toplink.contact"), "html", null, true);
        echo "</a></li>
                        </ul>

                        <form class=\"navbar-form navbar-right\" role=\"search\">
                            <label class=\"sr-only\" for=\"top_search_form\">Search for</label>
                            <input id=\"top_search_form\" type=\"search\" placeholder=\"Search\">
                            <button type=\"submit\" >
                                <span class=\"fa fa-search\"></span>
                                <span class=\"sr-only\">Search/submit</span>
                            </button>
                        </form>

                        <ul class=\"nav navbar-nav navbar-right\">
                            <li><a href=\"#\" title=\"Facebook\"><span class=\"sc-sm sc-dark sc-facebook\"></span></a></li>
                            <li><a href=\"#\" title=\"Twitter\"><span class=\"sc-sm sc-dark sc-twitter\"></span></a></li>
                            <li><a href=\"#\" title=\"Google+\"><span class=\"sc-sm sc-dark sc-googleplus\"></span></a></li>
                            <li><a href=\"#\" title=\"RSS\"><span class=\"sc-sm sc-dark sc-rss\"></span></a></li>
                        </ul>
                    </div>
                </div>
            </nav><!-- #top-nav -->

            <!-- MAIN NAVBAR
            ================ -->
            <nav class=\"navbar navbar-default\" id=\"main-nav\" role=\"navigation\">
                <div class=\"container\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-nav-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        ";
        // line 94
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "getLocale", array(), "method") == "en")) {
            // line 95
            echo "                            <a class=\"navbar-brand\" href=\"#\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/logo_en.png"), "html", null, true);
            echo "\" alt=\"logo\"></a>
                        ";
        }
        // line 97
        echo "
                        ";
        // line 98
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "getLocale", array(), "method") == "fr")) {
            // line 99
            echo "                            <a class=\"navbar-brand\" href=\"#\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/logo_fr.png"), "html", null, true);
            echo "\" alt=\"logo\"></a>
                        ";
        }
        // line 101
        echo "
                        ";
        // line 102
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "getLocale", array(), "method") == "de")) {
            // line 103
            echo "                            <a class=\"navbar-brand\" href=\"#\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/logo_de.png"), "html", null, true);
            echo "\" alt=\"logo\"></a>
                        ";
        }
        // line 105
        echo "
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"main-nav-collapse\">
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li class=\"active\"><a href=\"#\"><i class=\"fa fa-home\"></i></a></li>

                            ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["ca"]) {
            // line 114
            echo "
                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($context["ca"], "libelleEn", array()), "html", null, true);
            echo " <b class=\"caret\"></b></a>
                                    ";
            // line 117
            if ( !twig_test_empty($this->getAttribute($context["ca"], "subcategories", array()))) {
                // line 118
                echo "                                        <ul class=\"dropdown-menu\">
                                            ";
                // line 119
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["ca"], "subcategories", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                    // line 120
                    echo "                                                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_view_posts_by_subcategory", array("id" => $this->getAttribute($context["s"], "id", array()), "_locale" => "en")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "nomEn", array()), "html", null, true);
                    echo " </a></li>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 122
                echo "                                        </ul>
                                    ";
            }
            // line 124
            echo "                                </li>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ca'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "
                            <li class=\"dropdown\">

                                ";
        // line 130
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "getLocale", array(), "method") == "en")) {
            // line 131
            echo "                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"flag-icon flag-icon-us\"></span> <b class=\"caret\"></b></a>
                                ";
        }
        // line 133
        echo "
                                ";
        // line 134
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "getLocale", array(), "method") == "fr")) {
            // line 135
            echo "                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"flag-icon flag-icon-fr\"></span> <b class=\"caret\"></b></a>
                                ";
        }
        // line 137
        echo "
                                ";
        // line 138
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "getLocale", array(), "method") == "de")) {
            // line 139
            echo "                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"flag-icon flag-icon-de\"></span> <b class=\"caret\"></b></a>
                                ";
        }
        // line 141
        echo "
                                <ul class=\"dropdown-menu\" style=\"min-width: 65px !important;\">

                                    ";
        // line 144
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "getLocale", array(), "method") == "en")) {
            // line 145
            echo "                                        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "fr"))), "html", null, true);
            echo "\"><span class=\"flag-icon flag-icon-fr\"></span></a></li>
                                        <li><a href=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "de"))), "html", null, true);
            echo "\"><span class=\"flag-icon flag-icon-de\"></span></a></li>
                                    ";
        }
        // line 148
        echo "
                                    ";
        // line 149
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "getLocale", array(), "method") == "fr")) {
            // line 150
            echo "                                        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "en"))), "html", null, true);
            echo "\"><span class=\"flag-icon flag-icon-us\"></span></a></li>
                                        <li><a href=\"";
            // line 151
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "de"))), "html", null, true);
            echo "\"><span class=\"flag-icon flag-icon-de\"></span></a></li>
                                    ";
        }
        // line 153
        echo "
                                    ";
        // line 154
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "getLocale", array(), "method") == "de")) {
            // line 155
            echo "                                        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "en"))), "html", null, true);
            echo "\"><span class=\"flag-icon flag-icon-us\"></span></a></li>
                                        <li><a href=\"";
            // line 156
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "fr"))), "html", null, true);
            echo "\"><span class=\"flag-icon flag-icon-fr\"></span></a></li>
                                    ";
        }
        // line 158
        echo "
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav><!--#main-nav-->

            <!-- PAGE TITLE -->
            <div id=\"title\">
                <div class=\"image-light\"></div>
                <div class=\"container\">
                    <div class=\"title-container hide\">
                        <h1 class=\"primary\">Just another news/magazine website template</h1>
                        <p class=\"secondary\">It's simple yet beautiful</p>
                    </div>
                </div>
            </div>
        </header>

        <!-- CONTENT
        ============ -->
        <div id=\"content\">
            <div class=\"container\">
                <div class=\"row\">
                    <!-- MAIN CONTENT
                    ================= -->
                    <main id=\"main-content\" class=\"col-md-8\">
                        <!-- BREAKING NEWS -->
                        <section class=\"breaking-news\">
                            <header>
                                <h4>Breaking News</h4>
                                <i class=\"triangle\"></i>
                            </header>
                            <div class=\"content\">
                                <ul>
                                    ";
        // line 194
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["popularPosts"] ?? $this->getContext($context, "popularPosts")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 195
            echo "                                        <li><a href=\"#\"><i class=\"fa fa-angle-double-right\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "titleEn", array()), "html", null, true);
            echo "</a></li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        echo "                                </ul>
                            </div>
                        </section>

                        <!-- CAROUSEL  -->
                        <section class=\"widget no-mobile\">
                            <div class=\"frame thick\">
                                <div id=\"carousel-medium\" class=\"carousel slide carousel-medium\" data-ride=\"carousel\">
                                    <!-- Carousel contents -->
                                    <div class=\"carousel-inner\">
                                        <div class=\"item active\">
                                            <div class=\"item-inner\">
                                                <div data-src=\"http://placehold.it/730x370\" data-alt=\"Doctype Pellentesque pellentesque faucibus urna ac feugiat\"></div>
                                                <div class=\"carousel-caption hide\">
                                                    <div><a href=\"#\"><h3>Doctype Pellentesque Pellentesque Faucibus Urna Ac Feugiat</h3></a></div>
                                                    <div class=\"hidden-xs\">
                                                        <p>
                                                            Ut eleifend, ligula id tristique gravida, lectus risus convallis nunc, ut varius ipsum mauris
                                                            vel erat. Pellentesque eleifend accumsan lacus vel rutrum..
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"item\">
                                            <div class=\"item-inner\">
                                                <div data-src=\"http://placehold.it/730x370\" data-alt=\"Mauris lacus nisl, suscipit ut orci ut, gravida dapibus neque Interdum et malesuada\"></div>
                                                <div class=\"carousel-caption hide\">
                                                    <div><a href=\"#\"><h1>Mauris Lacus Nisl Suscipit Ut Orci Ut Gravida Dapibus Neque</h1></a></div>
                                                    <div class=\"hidden-xs\">
                                                        <p>
                                                            Fames ac ante ipsum primis in faucibus. Aenean vulputate a nunc quis suscipit. Praesent non risus consequat,
                                                            volutpat mi eu, porta nibh. Pellentesque habitant morbi tristique senectus et..
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"item\">
                                            <div class=\"item-inner\">
                                                <div data-src=\"http://placehold.it/730x370\" data-alt=\"Stones turpis egestas Curabitur scelerisque sagittis lectus ac consequat Mauris dictum sollicitudin tincidunt\"></div>
                                                <div class=\"carousel-caption hide\">
                                                    <div><a href=\"#\"><h1>Stones Turpis Egestas Curabitur Scelerisque Sagittis Lectus Ac</h1></a></div>
                                                    <div class=\"hidden-xs\">
                                                        <p>
                                                            Nam sagittis neque et lectus varius imperdiet. Phasellus blandit viverra diam, et tincidunt arcu tempus ut.
                                                            Nulla gravida erat nisi, sed laoreet nulla fringilla id. Maecenas tristique erat...
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Light -->
                                    <div class=\"image-light\"></div>

                                    <!-- Carousel Controls -->
                                    <a class=\"left carousel-control\" href=\"#carousel-medium\" data-slide=\"prev\"><span class=\"fa fa-chevron-left\"></span></a>
                                    <a class=\"right carousel-control\" href=\"#carousel-medium\" data-slide=\"next\"><span class=\"fa fa-chevron-right\"></span></a>
                                </div>
                            </div>
                            <img src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/shadow.png"), "html", null, true);
        echo "\" class=\"shadow\" alt=\"shadow\">
                        </section>

                        <div class=\"articles\">
                            ";
        // line 265
        $this->displayBlock('article_content', $context, $blocks);
        // line 266
        echo "                        </div>

                    </main><!--#main-content-->

                    <!-- SIDEBAR
                    ============ -->
                    <aside class=\"col-md-4\">
                        <div class=\"row\">
                            <!-- SOCIALS WIDGET -->
                            <section class=\"col-sm-6 col-md-12 widget\">
                                <!-- Widget header -->
                                <header class=\"clearfix\"><h4>Socials Media</h4></header>

                                <!-- Widget content -->
                                <ul class=\"social clearfix\">
                                    <li><a href=\"#\" title=\"Facebook \"><span class=\"sc-md sc-facebook\"></span></a></li>
                                    <li><a href=\"#\" title=\"Twitter\"><span class=\"sc-md sc-twitter\"></span></a></li>
                                    <li><a href=\"#\" title=\"YouTube\"><span class=\"sc-md sc-youtube\"></span></a></li>
                                    <li><a href=\"#\" title=\"LinkedIn\"><span class=\"sc-md sc-linkedin\"></span></a></li>
                                    <li><a href=\"#\" title=\"Google+\"><span class=\"sc-md sc-googleplus\"></span></a></li>
                                    <li><a href=\"#\" title=\"Instagram\"><span class=\"sc-md sc-instagram\"></span></a></li>
                                    <li><a href=\"#\" title=\"Pinterest\"><span class=\"sc-md sc-pinterest\"></span></a></li>
                                    <li><a href=\"#\" title=\"SoundCloud\"><span class=\"sc-md sc-soundcloud\"></span></a></li>
                                    <li><a href=\"#\" title=\"Flickr\"><span class=\"sc-md sc-flickr\"></span></a></li>
                                    <li><a href=\"#\" title=\"Myspace \"><span class=\"sc-md sc-myspace\"></span></a></li>
                                    <li><a href=\"#\" title=\"deviantART\"><span class=\"sc-md sc-deviantart\"></span></a></li>
                                    <li><a href=\"#\" title=\"Vimeo\"><span class=\"sc-md sc-vimeo\"></span></a></li>
                                    <li><a href=\"#\" title=\"XING\"><span class=\"sc-md sc-xing\"></span></a></li>
                                    <li><a href=\"#\" title=\"Last.fm\"><span class=\"sc-md sc-lastfm\"></span></a></li>
                                    <li><a href=\"#\" title=\"Tumblr\"><span class=\"sc-md sc-tumblr\"></span></a></li>
                                    <li><a href=\"#\" title=\"Behance\"><span class=\"sc-md sc-behance\"></span></a></li>
                                    <li><a href=\"#\" title=\"GitHub\"><span class=\"sc-md sc-github\"></span></a></li>
                                    <li><a href=\"#\" title=\"Dribbble \"><span class=\"sc-md sc-dribbble\"></span></a></li>
                                </ul>
                            </section>

                            <!-- GALLERY WIDGET -->
                            <section class=\"col-sm-6 col-md-12 widget no-mobile\">
                                <!-- Widget Header -->
                                <header class=\"clearfix\">
                                    <h4>Gallery</h4>
                                    <a href=\"#carousel-small\" class=\"control\" data-slide=\"next\">
                                        <i class=\"fa fa-chevron-right\"></i>
                                    </a>
                                    <a href=\"#carousel-small\" class=\"control\" data-slide=\"prev\">
                                        <i class=\"fa fa-chevron-left\"></i>
                                    </a>

                                </header>

                                <!-- Widget content: carousel gallery -->
                                <div id=\"carousel-small\" class=\"carousel slide carousel-small frame\" data-ride=\"carousel\">
                                    <div class=\"carousel-inner\">
                                        <div class=\"item active\">
                                            <div class=\"item-inner\">
                                                <a href=\"http://placehold.it/1024x512.jpg\" title=\"Nunc ut dolor nec mi posuere tincidunt quis ut sem Praesent pharetra eget\" data-lightbox-gallery=\"gallery-small\">
                                                    <div data-src=\"http://placehold.it/350x185\" data-alt=\"Nunc ut dolor nec mi posuere tincidunt quis ut sem Praesent pharetra eget\"></div>
                                                    <div class=\"image-light\"></div>
                                                </a>
                                                <div class=\"caption\">
                                                    <h5>Nunc ut dolor nec mi posuere tincidunt quis ut sem Praesent pharetra eget</h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"item\">
                                            <div class=\"item-inner\">
                                                <a href=\"http://placehold.it/1024x512.jpg\" title=\"vestibulum ultricies Ut sollicitudin eget massa et lobortis\" data-lightbox-gallery=\"gallery-small\">
                                                    <div data-src=\"http://placehold.it/350x185\" data-alt=\"vestibulum ultricies Ut sollicitudin eget massa et lobortis\"></div>
                                                    <div class=\"image-light\"></div>
                                                </a>
                                                <div class=\"caption\">
                                                    <h5>vestibulum ultricies Ut sollicitudin eget massa et lobortis</h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"item\">
                                            <div class=\"item-inner\">
                                                <a href=\"http://placehold.it/1024x512.jpg\" title=\"Bird Profile Wellington New Zealand Vivamus ac neque sed\" data-lightbox-gallery=\"gallery-small\">
                                                    <div data-src=\"http://placehold.it/350x185\" data-alt=\"Bird Profile Wellington New Zealand Vivamus ac neque sed\"></div>
                                                    <div class=\"image-light\"></div>
                                                </a>
                                                <div class=\"caption\">
                                                    <h5>Bird Profile Wellington New Zealand Vivamus ac neque sed</h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"item\">
                                            <div class=\"item-inner\">
                                                <a href=\"http://placehold.it/1024x512.jpg\" title=\"dui placerat dictum Suspendisse ut justo venenatis imperdiet\" data-lightbox-gallery=\"gallery-small\">
                                                    <div data-src=\"http://placehold.it/350x185\" data-alt=\"dui placerat dictum Suspendisse ut justo venenatis imperdiet\"></div>
                                                    <div class=\"image-light\"></div>
                                                </a>
                                                <div class=\"caption\">
                                                    <h5>dui placerat dictum Suspendisse ut justo venenatis imperdiet</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--.carousel-inner-->
                                </div><!--.carousel-->

                                <!--Shadow-->
                                <img src=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/shadow.png"), "html", null, true);
        echo "\" class=\"shadow\" alt=\"shadow\">
                            </section>

                            <!-- FEEDBURNER WIDGET -->
                            <section class=\"hide col-sm-6 col-md-12 widget feedburner\">
                                <!-- Widget Header -->
                                <header class=\"clearfix\"><h4>Feedburner</h4></header>

                                <!-- Widget Content -->
                                <form action    =\"http://feedburner.google.com/fb/a/mailverify\"
                                      method    =\"post\"
                                      target    =\"popupwindow\"
                                      onsubmit  =\"window.open(
                                                                                        'http://feedburner.google.com/fb/a/mailverify?uri=YOUR_FEEDBURNER_URI', // Change YOUR_FEEDBURNER_URI with your actual FeedBurner URI.
                                                                                        'popupwindow',
                                                                                        'scrollbars=yes,width=550,height=520'
                                                                                );return true\"
                                >
                                    <div class=\"input-group\">
                                        <i class=\"fa fa-envelope\"></i>
                                        <input type=\"text\" name=\"email\" placeholder=\"Enter your email address\" />
                                    </div>
                                    <input type=\"hidden\" value=\"YOUR_FEEDBURNER_URI\" name=\"uri\"/><!-- Change YOUR_FEEDBURNER_URI with your actual FeedBurner URI. -->
                                    <input type=\"hidden\" name=\"loc\" value=\"en_US\"/>
                                    <input type=\"submit\" value=\"Subscribe\" />
                                </form>
                            </section>

                            <!-- YOUTUBE WIDGET -->
                            <section class=\"hide col-sm-6 col-md-12 widget\">
                                <!-- Widget Header -->
                                <header class=\"clearfix\"><h4>Youtube Video</h4></header>

                                <!-- Widget content: Youtube embed code -->
                                <iframe width=\"360\" height=\"203\" src=\"//www.youtube.com/embed/3AhivlZO0us\" allowfullscreen></iframe>
                            </section>

                            <!-- TABS WIDGET -->
                            <section class=\"col-sm-6 col-md-12 widget\">
                                <!-- Tab menus -->
                                <ul class=\"nav nav-tabs\">
                                    <li class=\"active\"><a href=\"#popular-aside\" data-toggle=\"tab\">Popular</a></li>
                                    <li class=\"hide\"><a href=\"#recent-aside\" data-toggle=\"tab\">Recent</a></li>
                                    <li class=\"hide\"><a href=\"#comments-aside\" data-toggle=\"tab\">Comments</a></li>
                                </ul>

                                <!-- Tab contents -->
                                <div class=\"tab-content\">
                                    <!--Popular-->
                                    <div class=\"tab-pane active fade in\" id=\"popular-aside\">

                                        ";
        // line 421
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["popularPosts"] ?? $this->getContext($context, "popularPosts")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 422
            echo "                                            <div class=\"article-tiny\">
                                                <a href=\"#\" class=\"image\">
                                                    <figure class=\"image-holder\">
                                                        <img src=\"http://placehold.it/95x75\" alt=\"Mauris mattis ullamcorper euismod Nulla convallis \">
                                                    </figure>
                                                    <div class=\"image-light\"></div>
                                                    <span class=\"dashicons dashicons-format-gallery\"></span>
                                                </a>
                                                <h5><a href=\"#\">";
            // line 430
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "titleEn", array()), "html", null, true);
            echo "</a></h5>
                                                <p class=\"post-meta\">
                                                    <a href=\"#\"><span class=\"fa fa-clock-o\"></span> ";
            // line 432
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["p"], "dateCreation", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</a> &nbsp;
                                                    <a href=\"#\"><span class=\"fa fa-folder\"></span> ";
            // line 433
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "subcategory", array()), "nomEn", array()), "html", null, true);
            echo "</a>
                                                </p>
                                            </div>
                                            <hr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 438
        echo "
                                    </div>

                                    <!--Recent-->
                                    <div class=\"tab-pane fade hide\" id=\"recent-aside\">
                                        <div class=\"article-tiny\">
                                            <a href=\"#\" class=\"image\">
                                                <figure class=\"image-holder\">
                                                    <img src=\"http://placehold.it/95x75\" alt=\"Day of the dead Maecenas odio condimentum a libero \">
                                                </figure>
                                                <div class=\"image-light\"></div>
                                                <span class=\"dashicons dashicons-format-gallery\"></span>
                                            </a>
                                            <h5><a href=\"#\">Day of the dead Maecenas odio condimentum a libero</a></h5>
                                            <p class=\"post-meta\">
                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Jan 4, 2014</a> &nbsp;
                                                <a href=\"#\"><span class=\"fa fa-folder\"></span> National</a>
                                            </p>
                                        </div>
                                        <hr>

                                        <div class=\"article-tiny\">
                                            <a href=\"#\" class=\"image\">
                                                <figure class=\"image-holder\">
                                                    <img src=\"http://placehold.it/95x75\" alt=\"Nulla vitae velit ac velit luctus facilisis dictum Mauris malesuada ante ut gravida condimentum\">
                                                </figure>
                                                <div class=\"image-light\"></div>
                                                <span class=\"dashicons dashicons-format-audio\"></span>
                                            </a>
                                            <h5><a href=\"#\">Morocco molestie hendrerit magna Morbi tristique</a></h5>
                                            <p class=\"post-meta\">
                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Jan 4, 2014</a> &nbsp;
                                                <a href=\"#\"><span class=\"fa fa-folder\"></span> Politics</a>
                                            </p>
                                        </div>
                                        <hr>

                                        <div class=\"article-tiny\">
                                            <a href=\"#\" class=\"image\">
                                                <figure class=\"image-holder\">
                                                    <img src=\"http://placehold.it/95x75\" alt=\"Nulla id eros ut nibh hendrerit sollicitudin \">
                                                </figure>
                                                <div class=\"image-light\"></div>
                                                <span class=\"dashicons dashicons-format-links\"></span>
                                            </a>
                                            <h5><a href=\"#\">Douglas X3 Nulla id eros ut nibh hendrerit sollicitudin</a></h5>
                                            <p class=\"post-meta\">
                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Jan 4, 2014</a> &nbsp;
                                                <a href=\"#\"><span class=\"fa fa-folder\"></span> Science</a>
                                            </p>
                                        </div>
                                        <hr>

                                        <div class=\"article-tiny\">
                                            <a href=\"#\" class=\"image\">
                                                <figure class=\"image-holder\">
                                                    <img src=\"http://placehold.it/95x75\" alt=\"ornare nibh Nunc semper dolor quis augue venenatis \">
                                                </figure>
                                                <div class=\"image-light\"></div>
                                                <span class=\"dashicons dashicons-format-links\"></span>
                                            </a>
                                            <h5><a href=\"#\">Nepal ornare nibh Nunc semper purus sit amet rhoncus imperdiet</a></h5>
                                            <p class=\"post-meta\">
                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Jan 4, 2014</a> &nbsp;
                                                <a href=\"#\"><span class=\"fa fa-folder\"></span> World</a>
                                            </p>
                                        </div>
                                        <hr>
                                    </div>

                                    <!--Comments-->
                                    <div class=\"hide tab-pane fade\" id=\"comments-aside\">
                                        <ul class=\"recent-comments clearfix\">
                                            <li>
                                                <div class=\"avatar\">
                                                    <a href=\"#\" class=\"light\">
                                                        <img src=\"http://placehold.it/75x75\" alt=\"Siska\">
                                                        <div class=\"layer\"></div>
                                                    </a>
                                                </div>
                                                <div class=\"content\">
                                                    <div class=\"comment-content\">
                                                        <a href=\"#\">Aliquam sollicitudin massa eu augue hendrerit</a>
                                                    </div>
                                                    <div class=\"comment-meta\">
                                                        <a href=\"#\"><i class=\"fa fa-user\"></i> Siska</a>&nbsp;
                                                        <a href=\"#\"><i class=\"fa fa-clock-o\"></i> Jan 13, 2014</a>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class=\"avatar\">
                                                    <a href=\"#\" class=\"light\">
                                                        <img src=\"http://placehold.it/75x75\" alt=\"Fahri\">
                                                        <div class=\"layer\"></div>
                                                    </a>
                                                </div>
                                                <div class=\"content\">
                                                    <div class=\"comment-content\">
                                                        <a href=\"#\">Fusce viverra ligula elit aliquam vel turpis ut</a>
                                                    </div>
                                                    <div class=\"comment-meta\">
                                                        <a href=\"#\" class=\"author\"><i class=\"fa fa-user\"></i> Fahri</a>&nbsp;
                                                        <a href=\"#\"><i class=\"fa fa-clock-o\"></i> Jan 13, 2014</a>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class=\"avatar\">
                                                    <a href=\"#\" class=\"light\">
                                                        <img src=\"http://placehold.it/75x75\" alt=\"Rahma\">
                                                        <div class=\"layer\"></div>
                                                    </a>
                                                </div>
                                                <div class=\"content\">
                                                    <div class=\"comment-content\">
                                                        <a href=\"#\">eget facilisis erat aliquet tempus mi ligula consequat</a>
                                                    </div>
                                                    <div class=\"comment-meta\">
                                                        <a href=\"#\" class=\"author\"><i class=\"fa fa-user\"></i> Rahma</a>&nbsp;
                                                        <a href=\"#\"><i class=\"fa fa-clock-o\"></i> Jan 13, 2014</a>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class=\"avatar\">
                                                    <a href=\"#\" class=\"light\">
                                                        <img src=\"http://placehold.it/75x75\" alt=\"Rusli\">
                                                        <div class=\"layer\"></div>
                                                    </a>
                                                </div>
                                                <div class=\"content\">
                                                    <div class=\"comment-content\">
                                                        <a href=\"#\">lacus sit amet tincidunt odio massa quis felis</a>
                                                    </div>
                                                    <div class=\"comment-meta\">
                                                        <a href=\"#\" class=\"author\"><i class=\"fa fa-user\"></i> Rusli</a>&nbsp;
                                                        <a href=\"#\"><i class=\"fa fa-clock-o\"></i> Jan 13, 2014</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </section>



                            <!-- ADS WIDGET -->
                            <section class=\"widget col-sm-6 col-md-12 no-mobile\">
                                <!-- Widget Header -->
                                <header class=\"clearfix\"><h4>Advertisement</h4></header>

                                <!-- Widget Content -->
                                <div class=\"frame thick\">
                                    <a href=\"#\"><div data-src=\"http://placehold.it/300x250/f0f0f9\" data-alt=\"Banner image\"></div></a>
                                </div>
                                <img src=\"";
        // line 598
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/shadow.png"), "html", null, true);
        echo "\" class=\"shadow\" alt=\"shadow\">
                            </section>

                            <!-- VIMEO WIDGET -->
                            <section class=\"hide col-sm-6 col-md-12 widget\">
                                <!-- Widget header -->
                                <header class=\"clearfix\"><h4>Vimeo Video</h4></header>

                                <!-- Widget content: Vimeo embed code -->
                                <iframe src=\"//player.vimeo.com/video/83480879\" width=\"360\" height=\"203\" allowfullscreen></iframe>
                            </section>

                            <!-- TABS: CATEGORIES AND TAGS -->
                            <section class=\"col-sm-6 col-md-12 widget\">
                                <!-- Widget header: tab menu -->
                                <ul class=\"nav nav-tabs\">
                                    <li class=\"active\"><a href=\"#categories\" data-toggle=\"tab\">Categories</a></li>
                                </ul><!--.nav-tabs-->

                                <!-- Tab contents -->
                                <div class=\"tab-content\">
                                    <!-- Categories-->
                                    <div class=\"tab-pane active fade in\" id=\"categories\">
                                        <ul class=\"categories\">
                                            ";
        // line 622
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["ca"]) {
            // line 623
            echo "                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ca"], "libelleEn", array()), "html", null, true);
            echo " <span class=\"post-counts\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["ca"], "subcategories", array())), "html", null, true);
            echo "</span></a></li>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ca'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 625
        echo "                                        </ul>
                                    </div>
                                </div><!--.tab-content-->
                            </section>

                            <!-- ACCORDION -->
                            <section class=\"hide col-sm-6 col-md-12 widget\">
                                <!--Widget header-->
                                <header class=\"clearfix\"><h4>Accordion</h4></header>

                                <!--Widget content-->
                                <div class=\"accordion\">
                                    <div class=\"header active\"><h5>Home</h5><i class=\"fa fa-plus\"></i></div>
                                    <div class=\"content\">
                                        <p>
                                            Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                                            ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                                            amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                                            odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                                        </p>
                                    </div>

                                    <div class=\"header\"><h5>Profile</h5><i class=\"fa fa-plus\"></i></div>
                                    <div class=\"content\">
                                        <p>
                                            Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
                                            purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
                                            velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
                                            suscipit faucibus urna.
                                        </p>
                                    </div>

                                    <div class=\"header\"><h5>Messages</h5><i class=\"fa fa-plus\"></i></div>
                                    <div class=\"content\">
                                        <p>
                                            Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
                                            Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
                                            ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
                                            lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
                                        </p>
                                    </div>

                                    <div class=\"header\"><h5>Settings</h5><i class=\"fa fa-plus\"></i></div>
                                    <div class=\"content\">
                                        <p>
                                            Cras dictum. Pellentesque habitant morbi tristique senectus et netus
                                            et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
                                            faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
                                            mauris vel est.
                                        </p>
                                    </div>
                                </div>
                            </section>
                        </div><!--.row-->
                    </aside>
                </div><!--.row-->

                <!-- SLIDER TABS WIDGET: GALLERY -->
                <section id=\"slider-tabs\" class=\"hide widget no-mobile\">
                    <!-- Widget header -->
                    <ul class=\"nav nav-tabs\">
                        <!--Title-->
                        <li class=\"active\"><a href=\"#gallery\">Gallery</a></li>

                        <!--Slider Controls-->

                        <li class=\"pull-right control current\"><a href=\"#gallery\" data-slide=\"next\"><span class=\"fa fa-chevron-right\"></span></a></li>
                        <li class=\"pull-right control current\"><a href=\"#gallery\" data-slide=\"prev\"><span class=\"fa fa-chevron-left\"></span></a></li>
                    </ul>

                    <!-- Tab Contents -->
                    <div class=\"tab-content\">
                        <!-- Gallery Tab Content -->
                        <div class=\"tab-pane active\" id=\"gallery\">
                            <div class=\"slider-container\">
                                <ul class=\"da-thumbs\">
                                    <li>
                                        <a href=\"http://placehold.it/1024x512.jpg.jpg\" title=\"Mauris venenatis facilisis sem vel feugiat enim gravida vitae\" data-lightbox-gallery=\"silder-tabs-gallery\">
                                            <div data-src=\"http://placehold.it/180x180\" data-alt=\"Mauris venenatis facilisis sem vel feugiat enim gravida vitae\"></div>
                                            <div class=\"image-caption\">
                                                <h5>Mauris venenatis facilisis sem vel feugiat enim gravida vitae</h5>
                                            </div>
                                            <span class=\"image-light\"></span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href=\"http://placehold.it/1024x512.jpg.jpg\" title=\"Maecenas ac quam tortor Integer sed ullamcorper justo\" data-lightbox-gallery=\"silder-tabs-gallery\">
                                            <div data-src=\"http://placehold.it/180x180\" data-alt=\"Maecenas ac quam tortor Integer sed ullamcorper justo\"></div>
                                            <div class=\"image-caption\">
                                                <h5>Maecenas ac quam tortor Integer sed ullamcorper justo</h5>
                                            </div>
                                            <span class=\"image-light\"></span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href=\"http://placehold.it/1024x512.jpg.jpg\" title=\"Placerat sollicitudin purus Fusce sit amet ullamcorper\" data-lightbox-gallery=\"silder-tabs-gallery\">
                                            <div data-src=\"http://placehold.it/180x180\" data-alt=\"Placerat sollicitudin purus Fusce sit amet ullamcorper\"></div>
                                            <div class=\"image-caption\">
                                                <h5>Placerat sollicitudin purus. Fusce sit amet ullamcorper</h5>
                                            </div>
                                            <span class=\"image-light\"></span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href=\"http://placehold.it/1024x512.jpg.jpg\" title=\"Donec tincidunt sem ligula eget tristique nisl mollis sed\" data-lightbox-gallery=\"silder-tabs-gallery\">
                                            <div data-src=\"http://placehold.it/180x180\" data-alt=\"Donec tincidunt sem ligula eget tristique nisl mollis sed\"></div>
                                            <div class=\"image-caption\">
                                                <h5>Donec tincidunt sem ligula eget tristique nisl mollis sed</h5>
                                            </div>
                                            <span class=\"image-light\"></span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href=\"http://placehold.it/1024x512.jpg.jpg\" title=\"Curabitur ultricies leo eget elit ornare eu fermentum\" data-lightbox-gallery=\"silder-tabs-gallery\">
                                            <div data-src=\"http://placehold.it/180x180\" data-alt=\"Curabitur ultricies leo eget elit ornare eu fermentum\"></div>
                                            <div class=\"image-caption\">
                                                <h5>Curabitur ultricies leo eget elit ornare eu fermentum</h5>
                                            </div>
                                            <span class=\"image-light\"></span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href=\"http://placehold.it/1024x512.jpg.jpg\" title=\"Aliquam mattis volutpat nisi\" data-lightbox-gallery=\"silder-tabs-gallery\">
                                            <div data-src=\"http://placehold.it/180x180\" data-alt=\"Aliquam mattis volutpat nisi\"></div>
                                            <div class=\"image-caption\">
                                                <h5>Aliquam mattis volutpat nisi</h5>
                                            </div>
                                            <span class=\"image-light\"></span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href=\"http://placehold.it/1024x512.jpg.jpg\" title=\"Nullam placerat lorem a leo sagittis nec mattis felis vehicula\" data-lightbox-gallery=\"silder-tabs-gallery\">
                                            <div data-src=\"http://placehold.it/180x180\" data-alt=\"Nullam placerat lorem a leo sagittis nec mattis felis vehicula\"></div>
                                            <div class=\"image-caption\">
                                                <h5>Nullam placerat lorem a leo sagittis nec mattis felis vehicula</h5>
                                            </div>
                                            <span class=\"image-light\"></span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href=\"http://placehold.it/1024x512.jpg.jpg\" title=\"In laoreet tristique leo non iaculis ipsum scelerisque sit\" data-lightbox-gallery=\"silder-tabs-gallery\">
                                            <div data-src=\"http://placehold.it/180x180\" data-alt=\"In laoreet tristique leo non iaculis ipsum scelerisque sit\"></div>
                                            <div class=\"image-caption\">
                                                <h5>In laoreet tristique leo non iaculis ipsum scelerisque sit</h5>
                                            </div>
                                            <span class=\"image-light\"></span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href=\"http://placehold.it/1024x512.jpg.jpg\" title=\"Suspendisse molestie odio a purus eleifend posuere\" data-lightbox-gallery=\"silder-tabs-gallery\">
                                            <div data-src=\"http://placehold.it/180x180\" data-alt=\"Suspendisse molestie odio a purus eleifend posuere\"></div>
                                            <div class=\"image-caption\">
                                                <h5>Suspendisse molestie odio a purus eleifend posuere</h5>
                                            </div>
                                            <span class=\"image-light\"></span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href=\"http://placehold.it/1024x512.jpg.jpg\" title=\"Suspendisse at lacus eleifend fringilla nunc\" data-lightbox-gallery=\"silder-tabs-gallery\">
                                            <div data-src=\"http://placehold.it/180x180\" data-alt=\"Suspendisse at lacus eleifend fringilla nunc\"></div>
                                            <div class=\"image-caption\">
                                                <h5>Suspendisse at lacus eleifend fringilla nunc</h5>
                                            </div>
                                            <span class=\"image-light\"></span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href=\"http://placehold.it/1024x512.jpg.jpg\" title=\"id porta nisl In imperdiet risus\" data-lightbox-gallery=\"silder-tabs-gallery\">
                                            <div data-src=\"http://placehold.it/180x180\" data-alt=\"id porta nisl In imperdiet risus\"></div>
                                            <div class=\"image-caption\">
                                                <h5>Id porta nisl In imperdiet risus</h5>
                                            </div>
                                            <span class=\"image-light\"></span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href=\"http://placehold.it/1024x512.jpg.jpg\" title=\"eget nibh laoreet varius\" data-lightbox-gallery=\"silder-tabs-gallery\">
                                            <div data-src=\"http://placehold.it/180x180\" data-alt=\"eget nibh laoreet varius\"></div>
                                            <div class=\"image-caption\">
                                                <h5>Eget nibh laoreet varius</h5>
                                            </div>
                                            <span class=\"image-light\"></span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href=\"http://placehold.it/1024x512.jpg.jpg\" title=\"Nullam tristique mauris dolor\" data-lightbox-gallery=\"silder-tabs-gallery\">
                                            <div data-src=\"http://placehold.it/180x180\" data-alt=\"Nullam tristique mauris dolor\"></div>
                                            <div class=\"image-caption\">
                                                <h5>Nullam tristique mauris dolor</h5>
                                            </div>
                                            <span class=\"image-light\"></span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href=\"http://placehold.it/1024x512.jpg.jpg\" title=\"Morbi euismod tincidunt sem\" data-lightbox-gallery=\"silder-tabs-gallery\">
                                            <div data-src=\"http://placehold.it/180x180\" data-alt=\"Morbi euismod tincidunt sem\"></div>
                                            <div class=\"image-caption\">
                                                <h5>Morbi euismod tincidunt sem</h5>
                                            </div>
                                            <span class=\"image-light\"></span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href=\"http://placehold.it/1024x512.jpg.jpg\" title=\"bibendum tristique lacus adipiscing sed\" data-lightbox-gallery=\"silder-tabs-gallery\">
                                            <div data-src=\"http://placehold.it/180x180\" data-alt=\"bibendum tristique lacus adipiscing sed\"></div>
                                            <div class=\"image-caption\">
                                                <h5>Bibendum tristique lacus adipiscing sed</h5>
                                            </div>
                                            <span class=\"image-light\"></span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href=\"http://placehold.it/1024x512.jpg.jpg\" title=\"Pellentesque vitae risus eu orci\" data-lightbox-gallery=\"silder-tabs-gallery\">
                                            <div data-src=\"http://placehold.it/180x180\" data-alt=\"Pellentesque vitae risus eu orci\"></div>
                                            <div class=\"image-caption\">
                                                <h5>Pellentesque vitae risus eu orci</h5>
                                            </div>
                                            <span class=\"image-light\"></span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href=\"http://placehold.it/1024x512.jpg.jpg\" title=\"tempus laoreet ac quis nisl\" data-lightbox-gallery=\"silder-tabs-gallery\">
                                            <div data-src=\"http://placehold.it/180x180\" data-alt=\"tempus laoreet ac quis nisl\"></div>
                                            <div class=\"image-caption\">
                                                <h5>tempus laoreet ac quis nisl</h5>
                                            </div>
                                            <span class=\"image-light\"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
            </div><!--.container-->
        </div><!--#content-->

        <footer>
            <!-- MAIN FOOTER
            ================ -->
            <div id=\"footer-main\">
                <div class=\"container\">
                    <div class=\"row\">
                        <!-- Flickr Feed -->
                        <section class=\"col-md-3 col-sm-6\">
                            <div class=\"title\"><h4>Flickr Feed</h4></div>
                            <ul id=\"flickr-feed-footer\" class=\"flickr-feed clearfix\">
                                <li><i class=\"fa fa-spinner fa-spin\"></i> Please wait...</li>
                                <li>
                                    <script type=\"text/template\">
                                        <li>
                                            <a href=\"#\" title=\"\" class=\"dark\" target=\"_blank\">
                                                <img src=\"\" alt=\"\">
                                                <div class=\"layer\"></div>
                                            </a>
                                        </li>
                                    </script>
                                </li>
                            </ul>
                        </section>

                        <!-- Categories -->
                        <section class=\"col-md-3 col-sm-6\">
                            <!--Title-->
                            <div class=\"title\"><h4>Categories</h4></div>

                            <!--Content-->
                            <ul class=\"tags clearfix\">
                                ";
        // line 909
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["ca"]) {
            // line 910
            echo "                                    <li><a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ca"], "libelleEn", array()), "html", null, true);
            echo "</a></li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ca'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 912
        echo "                            </ul>
                        </section>

                        <!-- Recent Comments -->
                        <section class=\"col-md-3 col-sm-6\">
                            <!--Title-->
                            <div class=\"title\"><h4>Videos</h4></div>

                            <!--Content-->
                            <ul class=\"recent-comments clearfix hide\">
                                <li>
                                    <div class=\"avatar\">
                                        <a href=\"#\" class=\"dark\">
                                            <img src=\"http://placehold.it/75x75\" alt=\"Siska\">
                                            <div class=\"layer\"></div>
                                        </a>
                                    </div>
                                    <div class=\"content\">
                                        <div class=\"comment-content\">
                                            <a href=\"#\">Aliquam sollicitudin massa eu augue hendrerit</a>
                                        </div>
                                        <div class=\"comment-meta\">
                                            <a href=\"#\"><i class=\"fa fa-user\"></i> Siska</a>&nbsp;
                                            <a href=\"#\"><i class=\"fa fa-clock-o\"></i> Jan 13, 2014</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"avatar\">
                                        <a href=\"#\" class=\"dark\">
                                            <img src=\"http://placehold.it/75x75\" alt=\"Fahri\">
                                            <div class=\"layer\"  ></div>
                                        </a>
                                    </div>
                                    <div class=\"content\">
                                        <div class=\"comment-content\">
                                            <a href=\"#\">Fusce viverra ligula elit aliquam vel turpis ut</a>
                                        </div>
                                        <div class=\"comment-meta\">
                                            <a href=\"#\" class=\"author\"><i class=\"fa fa-user\"></i> Fahri</a>&nbsp;
                                            <a href=\"#\"><i class=\"fa fa-clock-o\"></i> Jan 13, 2014</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"avatar\">
                                        <a href=\"#\" class=\"dark\">
                                            <img src=\"http://placehold.it/75x75\" alt=\"Rahma\">
                                            <div class=\"layer\"></div>
                                        </a>
                                    </div>
                                    <div class=\"content\">
                                        <div class=\"comment-content\">
                                            <a href=\"#\">eget facilisis erat aliquet tempus mi ligula</a>
                                        </div>
                                        <div class=\"comment-meta\">
                                            <a href=\"#\" class=\"author\"><i class=\"fa fa-user\"></i> Rahma</a>&nbsp;
                                            <a href=\"#\"><i class=\"fa fa-clock-o\"></i> Jan 13, 2014</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </section>

                        <!-- Contact Form -->
                        <section class=\"col-md-3 col-sm-6\">
                            <div class=\"title\"><h4>Send Us a Message</h4></div>
                            <form class=\"contact-form\">
                                <p class=\"input-group\">
                                    <i class=\"fa fa-user\"></i>
                                    <input type=\"text\" placeholder=\"Full name *\">
                                </p>
                                <p class=\"input-group\">
                                    <i class=\"fa fa-envelope\"></i>
                                    <input type=\"text\" placeholder=\"Email address *\">
                                </p>
                                <p class=\"input-group\">
                                    <i class=\"fa fa-link\"></i>
                                    <input type=\"text\" placeholder=\"Website\">
                                </p>
                                <p>
                                    <textarea placeholder=\"Message *\" rows=\"6\"></textarea>
                                </p>
                                <p>
                                    <input type=\"submit\" value=\"Send\" class=\"btn btn-dark\">
                                </p>
                            </form>
                        </section>
                    </div><!--.row-->
                </div><!--.container-->
            </div><!--#footer-main-->

            <!-- FOOTER BOTTOM
            ================== -->
            <div id=\"footer-bottom\">
                <div class=\"container\">
                    <p>Copyright &copy; 2017 - <strong>TheGlobalView</strong></p>
                </div>
            </div><!--#footer-bottom-->
        </footer><!--footer-->


        <!-- jQuery  -->
        <script src=\"";
        // line 1015
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 1016
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/jquery-ui.custom.min.js"), "html", null, true);
        echo "\"></script>

        <!-- Warta scripts -->
        <script src=\"";
        // line 1019
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/script.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 1020
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/initialize.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 1022
        $this->displayBlock('javascripts', $context, $blocks);
        // line 1023
        echo "    </body>
</html>
";
        
        $__internal_951080f05bcd653fc0c68269a90d4e296a6b275586aa26b0365ed3b20d75b45a->leave($__internal_951080f05bcd653fc0c68269a90d4e296a6b275586aa26b0365ed3b20d75b45a_prof);

        
        $__internal_eff397fbd5344f123894394528ba20ba0a134bdfee8736e23e39b09e5d5bb92c->leave($__internal_eff397fbd5344f123894394528ba20ba0a134bdfee8736e23e39b09e5d5bb92c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_28689000dad4829a4689932aaca00f264a23dad6ed1e1b3e3ce66e0f66fb98f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28689000dad4829a4689932aaca00f264a23dad6ed1e1b3e3ce66e0f66fb98f8->enter($__internal_28689000dad4829a4689932aaca00f264a23dad6ed1e1b3e3ce66e0f66fb98f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1b57b2b0c7924b91e34a748a946687f5897c24143390f7b90ed545cfb8dadfb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b57b2b0c7924b91e34a748a946687f5897c24143390f7b90ed545cfb8dadfb4->enter($__internal_1b57b2b0c7924b91e34a748a946687f5897c24143390f7b90ed545cfb8dadfb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("head.title"), "html", null, true);
        
        $__internal_1b57b2b0c7924b91e34a748a946687f5897c24143390f7b90ed545cfb8dadfb4->leave($__internal_1b57b2b0c7924b91e34a748a946687f5897c24143390f7b90ed545cfb8dadfb4_prof);

        
        $__internal_28689000dad4829a4689932aaca00f264a23dad6ed1e1b3e3ce66e0f66fb98f8->leave($__internal_28689000dad4829a4689932aaca00f264a23dad6ed1e1b3e3ce66e0f66fb98f8_prof);

    }

    // line 32
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d8afeeaa0d0f410b51bdf6cfc7d614a7c78957d003ce1022f3b1f4434a9a9d94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8afeeaa0d0f410b51bdf6cfc7d614a7c78957d003ce1022f3b1f4434a9a9d94->enter($__internal_d8afeeaa0d0f410b51bdf6cfc7d614a7c78957d003ce1022f3b1f4434a9a9d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d36a3fc60ee42b9602ee22e9cc4af2874a186f2b12c0a20bc0a1531718c7a27d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d36a3fc60ee42b9602ee22e9cc4af2874a186f2b12c0a20bc0a1531718c7a27d->enter($__internal_d36a3fc60ee42b9602ee22e9cc4af2874a186f2b12c0a20bc0a1531718c7a27d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d36a3fc60ee42b9602ee22e9cc4af2874a186f2b12c0a20bc0a1531718c7a27d->leave($__internal_d36a3fc60ee42b9602ee22e9cc4af2874a186f2b12c0a20bc0a1531718c7a27d_prof);

        
        $__internal_d8afeeaa0d0f410b51bdf6cfc7d614a7c78957d003ce1022f3b1f4434a9a9d94->leave($__internal_d8afeeaa0d0f410b51bdf6cfc7d614a7c78957d003ce1022f3b1f4434a9a9d94_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4787bdb9642f8e63042541448b8d8eb0919945127f3010620ccb1e7b0865129 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4787bdb9642f8e63042541448b8d8eb0919945127f3010620ccb1e7b0865129->enter($__internal_d4787bdb9642f8e63042541448b8d8eb0919945127f3010620ccb1e7b0865129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3b8b5d7eb3ac402d7174eafc1849e3c77d06e643cf4acfd48ab58780f0c59b54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b8b5d7eb3ac402d7174eafc1849e3c77d06e643cf4acfd48ab58780f0c59b54->enter($__internal_3b8b5d7eb3ac402d7174eafc1849e3c77d06e643cf4acfd48ab58780f0c59b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3b8b5d7eb3ac402d7174eafc1849e3c77d06e643cf4acfd48ab58780f0c59b54->leave($__internal_3b8b5d7eb3ac402d7174eafc1849e3c77d06e643cf4acfd48ab58780f0c59b54_prof);

        
        $__internal_d4787bdb9642f8e63042541448b8d8eb0919945127f3010620ccb1e7b0865129->leave($__internal_d4787bdb9642f8e63042541448b8d8eb0919945127f3010620ccb1e7b0865129_prof);

    }

    // line 265
    public function block_article_content($context, array $blocks = array())
    {
        $__internal_92280604006e0e9512c45eee50270da3624c7cd02928b543cd674006850be49b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92280604006e0e9512c45eee50270da3624c7cd02928b543cd674006850be49b->enter($__internal_92280604006e0e9512c45eee50270da3624c7cd02928b543cd674006850be49b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_content"));

        $__internal_6411b4f3c67b72c60acb54e2cd1d77e3a5341ca96d452ca4d2d53f7ef547b47f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6411b4f3c67b72c60acb54e2cd1d77e3a5341ca96d452ca4d2d53f7ef547b47f->enter($__internal_6411b4f3c67b72c60acb54e2cd1d77e3a5341ca96d452ca4d2d53f7ef547b47f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_content"));

        
        $__internal_6411b4f3c67b72c60acb54e2cd1d77e3a5341ca96d452ca4d2d53f7ef547b47f->leave($__internal_6411b4f3c67b72c60acb54e2cd1d77e3a5341ca96d452ca4d2d53f7ef547b47f_prof);

        
        $__internal_92280604006e0e9512c45eee50270da3624c7cd02928b543cd674006850be49b->leave($__internal_92280604006e0e9512c45eee50270da3624c7cd02928b543cd674006850be49b_prof);

    }

    // line 1022
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7ecf08336578fade5d4fa37daa57ea95ea081fc08a81c0d240003cbebbf13fe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ecf08336578fade5d4fa37daa57ea95ea081fc08a81c0d240003cbebbf13fe2->enter($__internal_7ecf08336578fade5d4fa37daa57ea95ea081fc08a81c0d240003cbebbf13fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_dd29fd85f24c73f2c38f06ea32e63c11969a90a65ec312070f78781de8321c4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd29fd85f24c73f2c38f06ea32e63c11969a90a65ec312070f78781de8321c4d->enter($__internal_dd29fd85f24c73f2c38f06ea32e63c11969a90a65ec312070f78781de8321c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_dd29fd85f24c73f2c38f06ea32e63c11969a90a65ec312070f78781de8321c4d->leave($__internal_dd29fd85f24c73f2c38f06ea32e63c11969a90a65ec312070f78781de8321c4d_prof);

        
        $__internal_7ecf08336578fade5d4fa37daa57ea95ea081fc08a81c0d240003cbebbf13fe2->leave($__internal_7ecf08336578fade5d4fa37daa57ea95ea081fc08a81c0d240003cbebbf13fe2_prof);

    }

    public function getTemplateName()
    {
        return "::base_en.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1353 => 1022,  1336 => 265,  1319 => 36,  1302 => 32,  1284 => 5,  1272 => 1023,  1270 => 1022,  1265 => 1020,  1261 => 1019,  1255 => 1016,  1251 => 1015,  1146 => 912,  1137 => 910,  1133 => 909,  847 => 625,  836 => 623,  832 => 622,  805 => 598,  643 => 438,  632 => 433,  628 => 432,  623 => 430,  613 => 422,  609 => 421,  555 => 370,  449 => 266,  447 => 265,  440 => 261,  374 => 197,  365 => 195,  361 => 194,  323 => 158,  318 => 156,  313 => 155,  311 => 154,  308 => 153,  303 => 151,  298 => 150,  296 => 149,  293 => 148,  288 => 146,  283 => 145,  281 => 144,  276 => 141,  272 => 139,  270 => 138,  267 => 137,  263 => 135,  261 => 134,  258 => 133,  254 => 131,  252 => 130,  247 => 127,  239 => 124,  235 => 122,  224 => 120,  220 => 119,  217 => 118,  215 => 117,  211 => 116,  207 => 114,  203 => 113,  193 => 105,  187 => 103,  185 => 102,  182 => 101,  176 => 99,  174 => 98,  171 => 97,  165 => 95,  163 => 94,  126 => 60,  122 => 59,  118 => 58,  95 => 37,  93 => 36,  86 => 33,  84 => 32,  78 => 29,  72 => 26,  64 => 21,  58 => 18,  52 => 15,  48 => 14,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html id=\"home-version-2\" class=\"boxed-style\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}{{ 'head.title'|trans }}{% endblock %}</title>

        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        <!--Import Google font-->
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>

        <!-- Stylesheets -->
        <link href=\"{{ asset('/css/style.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('/css/custom.css') }}\" rel=\"stylesheet\">

        <!-- Flags icons css -->
        <link href=\"{{ asset('/css/flags/css/flag-icon.css') }}\" rel=\"stylesheet\">

        <!--Modernizr-->
        <script src=\"{{ asset('/js/modernizr.min.js') }}\"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries
             ie8.css and ie8.js custom style  and script that needed for IE8. -->
        <!--[if lt IE 9]>
        <link href=\"{{ asset('/css/ie8.css') }}\" rel=\"stylesheet\">
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
        <script src=\"{{ asset('/js/ie8.js') }}\"></script>
        <![endif]-->

        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}

        <!--HEADER
                ==========-->
        <header>
            <!-- TOP NAVBAR
            =============== -->
            <nav class=\"navbar navbar-inverse\" id=\"top-nav\" role=\"navigation\">
                <div class=\"container\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#top-nav-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"top-nav-collapse\">
                        <ul class=\"nav navbar-nav\">
                            <li><a href=\"#\">{{ 'toplink.home'|trans }}</a></li>
                            <li><a href=\"#\">{{ 'toplink.about'|trans }}</a></li>
                            <li><a href=\"#\">{{ 'toplink.contact'|trans }}</a></li>
                        </ul>

                        <form class=\"navbar-form navbar-right\" role=\"search\">
                            <label class=\"sr-only\" for=\"top_search_form\">Search for</label>
                            <input id=\"top_search_form\" type=\"search\" placeholder=\"Search\">
                            <button type=\"submit\" >
                                <span class=\"fa fa-search\"></span>
                                <span class=\"sr-only\">Search/submit</span>
                            </button>
                        </form>

                        <ul class=\"nav navbar-nav navbar-right\">
                            <li><a href=\"#\" title=\"Facebook\"><span class=\"sc-sm sc-dark sc-facebook\"></span></a></li>
                            <li><a href=\"#\" title=\"Twitter\"><span class=\"sc-sm sc-dark sc-twitter\"></span></a></li>
                            <li><a href=\"#\" title=\"Google+\"><span class=\"sc-sm sc-dark sc-googleplus\"></span></a></li>
                            <li><a href=\"#\" title=\"RSS\"><span class=\"sc-sm sc-dark sc-rss\"></span></a></li>
                        </ul>
                    </div>
                </div>
            </nav><!-- #top-nav -->

            <!-- MAIN NAVBAR
            ================ -->
            <nav class=\"navbar navbar-default\" id=\"main-nav\" role=\"navigation\">
                <div class=\"container\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-nav-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        {% if (app.request.getLocale() == 'en') %}
                            <a class=\"navbar-brand\" href=\"#\"><img src=\"{{ asset('/img/logo_en.png') }}\" alt=\"logo\"></a>
                        {% endif %}

                        {% if (app.request.getLocale() == 'fr') %}
                            <a class=\"navbar-brand\" href=\"#\"><img src=\"{{ asset('/img/logo_fr.png') }}\" alt=\"logo\"></a>
                        {% endif %}

                        {% if (app.request.getLocale() == 'de') %}
                            <a class=\"navbar-brand\" href=\"#\"><img src=\"{{ asset('/img/logo_de.png') }}\" alt=\"logo\"></a>
                        {% endif %}

                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"main-nav-collapse\">
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li class=\"active\"><a href=\"#\"><i class=\"fa fa-home\"></i></a></li>

                            {% for ca in categories %}

                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">{{ ca.libelleEn }} <b class=\"caret\"></b></a>
                                    {% if  ca.subcategories is not empty %}
                                        <ul class=\"dropdown-menu\">
                                            {% for s in ca.subcategories %}
                                                <li><a href=\"{{ path('global_view_posts_by_subcategory', {'id' : s.id, '_locale' : 'en'}) }}\">{{ s.nomEn }} </a></li>
                                            {% endfor %}
                                        </ul>
                                    {% endif %}
                                </li>

                            {% endfor %}

                            <li class=\"dropdown\">

                                {% if (app.request.getLocale() == 'en') %}
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"flag-icon flag-icon-us\"></span> <b class=\"caret\"></b></a>
                                {% endif %}

                                {% if (app.request.getLocale() == 'fr') %}
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"flag-icon flag-icon-fr\"></span> <b class=\"caret\"></b></a>
                                {% endif %}

                                {% if (app.request.getLocale() == 'de') %}
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"flag-icon flag-icon-de\"></span> <b class=\"caret\"></b></a>
                                {% endif %}

                                <ul class=\"dropdown-menu\" style=\"min-width: 65px !important;\">

                                    {% if (app.request.getLocale() == 'en') %}
                                        <li><a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale' : 'fr'})) }}\"><span class=\"flag-icon flag-icon-fr\"></span></a></li>
                                        <li><a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale' : 'de'})) }}\"><span class=\"flag-icon flag-icon-de\"></span></a></li>
                                    {% endif %}

                                    {% if (app.request.getLocale() == 'fr') %}
                                        <li><a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale' : 'en'})) }}\"><span class=\"flag-icon flag-icon-us\"></span></a></li>
                                        <li><a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale' : 'de'})) }}\"><span class=\"flag-icon flag-icon-de\"></span></a></li>
                                    {% endif %}

                                    {% if (app.request.getLocale() == 'de') %}
                                        <li><a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale' : 'en'})) }}\"><span class=\"flag-icon flag-icon-us\"></span></a></li>
                                        <li><a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale' : 'fr'})) }}\"><span class=\"flag-icon flag-icon-fr\"></span></a></li>
                                    {% endif %}

                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav><!--#main-nav-->

            <!-- PAGE TITLE -->
            <div id=\"title\">
                <div class=\"image-light\"></div>
                <div class=\"container\">
                    <div class=\"title-container hide\">
                        <h1 class=\"primary\">Just another news/magazine website template</h1>
                        <p class=\"secondary\">It's simple yet beautiful</p>
                    </div>
                </div>
            </div>
        </header>

        <!-- CONTENT
        ============ -->
        <div id=\"content\">
            <div class=\"container\">
                <div class=\"row\">
                    <!-- MAIN CONTENT
                    ================= -->
                    <main id=\"main-content\" class=\"col-md-8\">
                        <!-- BREAKING NEWS -->
                        <section class=\"breaking-news\">
                            <header>
                                <h4>Breaking News</h4>
                                <i class=\"triangle\"></i>
                            </header>
                            <div class=\"content\">
                                <ul>
                                    {% for p in popularPosts %}
                                        <li><a href=\"#\"><i class=\"fa fa-angle-double-right\"></i> {{ p.titleEn }}</a></li>
                                    {% endfor %}
                                </ul>
                            </div>
                        </section>

                        <!-- CAROUSEL  -->
                        <section class=\"widget no-mobile\">
                            <div class=\"frame thick\">
                                <div id=\"carousel-medium\" class=\"carousel slide carousel-medium\" data-ride=\"carousel\">
                                    <!-- Carousel contents -->
                                    <div class=\"carousel-inner\">
                                        <div class=\"item active\">
                                            <div class=\"item-inner\">
                                                <div data-src=\"http://placehold.it/730x370\" data-alt=\"Doctype Pellentesque pellentesque faucibus urna ac feugiat\"></div>
                                                <div class=\"carousel-caption hide\">
                                                    <div><a href=\"#\"><h3>Doctype Pellentesque Pellentesque Faucibus Urna Ac Feugiat</h3></a></div>
                                                    <div class=\"hidden-xs\">
                                                        <p>
                                                            Ut eleifend, ligula id tristique gravida, lectus risus convallis nunc, ut varius ipsum mauris
                                                            vel erat. Pellentesque eleifend accumsan lacus vel rutrum..
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"item\">
                                            <div class=\"item-inner\">
                                                <div data-src=\"http://placehold.it/730x370\" data-alt=\"Mauris lacus nisl, suscipit ut orci ut, gravida dapibus neque Interdum et malesuada\"></div>
                                                <div class=\"carousel-caption hide\">
                                                    <div><a href=\"#\"><h1>Mauris Lacus Nisl Suscipit Ut Orci Ut Gravida Dapibus Neque</h1></a></div>
                                                    <div class=\"hidden-xs\">
                                                        <p>
                                                            Fames ac ante ipsum primis in faucibus. Aenean vulputate a nunc quis suscipit. Praesent non risus consequat,
                                                            volutpat mi eu, porta nibh. Pellentesque habitant morbi tristique senectus et..
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"item\">
                                            <div class=\"item-inner\">
                                                <div data-src=\"http://placehold.it/730x370\" data-alt=\"Stones turpis egestas Curabitur scelerisque sagittis lectus ac consequat Mauris dictum sollicitudin tincidunt\"></div>
                                                <div class=\"carousel-caption hide\">
                                                    <div><a href=\"#\"><h1>Stones Turpis Egestas Curabitur Scelerisque Sagittis Lectus Ac</h1></a></div>
                                                    <div class=\"hidden-xs\">
                                                        <p>
                                                            Nam sagittis neque et lectus varius imperdiet. Phasellus blandit viverra diam, et tincidunt arcu tempus ut.
                                                            Nulla gravida erat nisi, sed laoreet nulla fringilla id. Maecenas tristique erat...
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Light -->
                                    <div class=\"image-light\"></div>

                                    <!-- Carousel Controls -->
                                    <a class=\"left carousel-control\" href=\"#carousel-medium\" data-slide=\"prev\"><span class=\"fa fa-chevron-left\"></span></a>
                                    <a class=\"right carousel-control\" href=\"#carousel-medium\" data-slide=\"next\"><span class=\"fa fa-chevron-right\"></span></a>
                                </div>
                            </div>
                            <img src=\"{{ asset('img/shadow.png') }}\" class=\"shadow\" alt=\"shadow\">
                        </section>

                        <div class=\"articles\">
                            {% block article_content %}{% endblock %}
                        </div>

                    </main><!--#main-content-->

                    <!-- SIDEBAR
                    ============ -->
                    <aside class=\"col-md-4\">
                        <div class=\"row\">
                            <!-- SOCIALS WIDGET -->
                            <section class=\"col-sm-6 col-md-12 widget\">
                                <!-- Widget header -->
                                <header class=\"clearfix\"><h4>Socials Media</h4></header>

                                <!-- Widget content -->
                                <ul class=\"social clearfix\">
                                    <li><a href=\"#\" title=\"Facebook \"><span class=\"sc-md sc-facebook\"></span></a></li>
                                    <li><a href=\"#\" title=\"Twitter\"><span class=\"sc-md sc-twitter\"></span></a></li>
                                    <li><a href=\"#\" title=\"YouTube\"><span class=\"sc-md sc-youtube\"></span></a></li>
                                    <li><a href=\"#\" title=\"LinkedIn\"><span class=\"sc-md sc-linkedin\"></span></a></li>
                                    <li><a href=\"#\" title=\"Google+\"><span class=\"sc-md sc-googleplus\"></span></a></li>
                                    <li><a href=\"#\" title=\"Instagram\"><span class=\"sc-md sc-instagram\"></span></a></li>
                                    <li><a href=\"#\" title=\"Pinterest\"><span class=\"sc-md sc-pinterest\"></span></a></li>
                                    <li><a href=\"#\" title=\"SoundCloud\"><span class=\"sc-md sc-soundcloud\"></span></a></li>
                                    <li><a href=\"#\" title=\"Flickr\"><span class=\"sc-md sc-flickr\"></span></a></li>
                                    <li><a href=\"#\" title=\"Myspace \"><span class=\"sc-md sc-myspace\"></span></a></li>
                                    <li><a href=\"#\" title=\"deviantART\"><span class=\"sc-md sc-deviantart\"></span></a></li>
                                    <li><a href=\"#\" title=\"Vimeo\"><span class=\"sc-md sc-vimeo\"></span></a></li>
                                    <li><a href=\"#\" title=\"XING\"><span class=\"sc-md sc-xing\"></span></a></li>
                                    <li><a href=\"#\" title=\"Last.fm\"><span class=\"sc-md sc-lastfm\"></span></a></li>
                                    <li><a href=\"#\" title=\"Tumblr\"><span class=\"sc-md sc-tumblr\"></span></a></li>
                                    <li><a href=\"#\" title=\"Behance\"><span class=\"sc-md sc-behance\"></span></a></li>
                                    <li><a href=\"#\" title=\"GitHub\"><span class=\"sc-md sc-github\"></span></a></li>
                                    <li><a href=\"#\" title=\"Dribbble \"><span class=\"sc-md sc-dribbble\"></span></a></li>
                                </ul>
                            </section>

                            <!-- GALLERY WIDGET -->
                            <section class=\"col-sm-6 col-md-12 widget no-mobile\">
                                <!-- Widget Header -->
                                <header class=\"clearfix\">
                                    <h4>Gallery</h4>
                                    <a href=\"#carousel-small\" class=\"control\" data-slide=\"next\">
                                        <i class=\"fa fa-chevron-right\"></i>
                                    </a>
                                    <a href=\"#carousel-small\" class=\"control\" data-slide=\"prev\">
                                        <i class=\"fa fa-chevron-left\"></i>
                                    </a>

                                </header>

                                <!-- Widget content: carousel gallery -->
                                <div id=\"carousel-small\" class=\"carousel slide carousel-small frame\" data-ride=\"carousel\">
                                    <div class=\"carousel-inner\">
                                        <div class=\"item active\">
                                            <div class=\"item-inner\">
                                                <a href=\"http://placehold.it/1024x512.jpg\" title=\"Nunc ut dolor nec mi posuere tincidunt quis ut sem Praesent pharetra eget\" data-lightbox-gallery=\"gallery-small\">
                                                    <div data-src=\"http://placehold.it/350x185\" data-alt=\"Nunc ut dolor nec mi posuere tincidunt quis ut sem Praesent pharetra eget\"></div>
                                                    <div class=\"image-light\"></div>
                                                </a>
                                                <div class=\"caption\">
                                                    <h5>Nunc ut dolor nec mi posuere tincidunt quis ut sem Praesent pharetra eget</h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"item\">
                                            <div class=\"item-inner\">
                                                <a href=\"http://placehold.it/1024x512.jpg\" title=\"vestibulum ultricies Ut sollicitudin eget massa et lobortis\" data-lightbox-gallery=\"gallery-small\">
                                                    <div data-src=\"http://placehold.it/350x185\" data-alt=\"vestibulum ultricies Ut sollicitudin eget massa et lobortis\"></div>
                                                    <div class=\"image-light\"></div>
                                                </a>
                                                <div class=\"caption\">
                                                    <h5>vestibulum ultricies Ut sollicitudin eget massa et lobortis</h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"item\">
                                            <div class=\"item-inner\">
                                                <a href=\"http://placehold.it/1024x512.jpg\" title=\"Bird Profile Wellington New Zealand Vivamus ac neque sed\" data-lightbox-gallery=\"gallery-small\">
                                                    <div data-src=\"http://placehold.it/350x185\" data-alt=\"Bird Profile Wellington New Zealand Vivamus ac neque sed\"></div>
                                                    <div class=\"image-light\"></div>
                                                </a>
                                                <div class=\"caption\">
                                                    <h5>Bird Profile Wellington New Zealand Vivamus ac neque sed</h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"item\">
                                            <div class=\"item-inner\">
                                                <a href=\"http://placehold.it/1024x512.jpg\" title=\"dui placerat dictum Suspendisse ut justo venenatis imperdiet\" data-lightbox-gallery=\"gallery-small\">
                                                    <div data-src=\"http://placehold.it/350x185\" data-alt=\"dui placerat dictum Suspendisse ut justo venenatis imperdiet\"></div>
                                                    <div class=\"image-light\"></div>
                                                </a>
                                                <div class=\"caption\">
                                                    <h5>dui placerat dictum Suspendisse ut justo venenatis imperdiet</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--.carousel-inner-->
                                </div><!--.carousel-->

                                <!--Shadow-->
                                <img src=\"{{ asset('img/shadow.png') }}\" class=\"shadow\" alt=\"shadow\">
                            </section>

                            <!-- FEEDBURNER WIDGET -->
                            <section class=\"hide col-sm-6 col-md-12 widget feedburner\">
                                <!-- Widget Header -->
                                <header class=\"clearfix\"><h4>Feedburner</h4></header>

                                <!-- Widget Content -->
                                <form action    =\"http://feedburner.google.com/fb/a/mailverify\"
                                      method    =\"post\"
                                      target    =\"popupwindow\"
                                      onsubmit  =\"window.open(
                                                                                        'http://feedburner.google.com/fb/a/mailverify?uri=YOUR_FEEDBURNER_URI', // Change YOUR_FEEDBURNER_URI with your actual FeedBurner URI.
                                                                                        'popupwindow',
                                                                                        'scrollbars=yes,width=550,height=520'
                                                                                );return true\"
                                >
                                    <div class=\"input-group\">
                                        <i class=\"fa fa-envelope\"></i>
                                        <input type=\"text\" name=\"email\" placeholder=\"Enter your email address\" />
                                    </div>
                                    <input type=\"hidden\" value=\"YOUR_FEEDBURNER_URI\" name=\"uri\"/><!-- Change YOUR_FEEDBURNER_URI with your actual FeedBurner URI. -->
                                    <input type=\"hidden\" name=\"loc\" value=\"en_US\"/>
                                    <input type=\"submit\" value=\"Subscribe\" />
                                </form>
                            </section>

                            <!-- YOUTUBE WIDGET -->
                            <section class=\"hide col-sm-6 col-md-12 widget\">
                                <!-- Widget Header -->
                                <header class=\"clearfix\"><h4>Youtube Video</h4></header>

                                <!-- Widget content: Youtube embed code -->
                                <iframe width=\"360\" height=\"203\" src=\"//www.youtube.com/embed/3AhivlZO0us\" allowfullscreen></iframe>
                            </section>

                            <!-- TABS WIDGET -->
                            <section class=\"col-sm-6 col-md-12 widget\">
                                <!-- Tab menus -->
                                <ul class=\"nav nav-tabs\">
                                    <li class=\"active\"><a href=\"#popular-aside\" data-toggle=\"tab\">Popular</a></li>
                                    <li class=\"hide\"><a href=\"#recent-aside\" data-toggle=\"tab\">Recent</a></li>
                                    <li class=\"hide\"><a href=\"#comments-aside\" data-toggle=\"tab\">Comments</a></li>
                                </ul>

                                <!-- Tab contents -->
                                <div class=\"tab-content\">
                                    <!--Popular-->
                                    <div class=\"tab-pane active fade in\" id=\"popular-aside\">

                                        {% for p in popularPosts %}
                                            <div class=\"article-tiny\">
                                                <a href=\"#\" class=\"image\">
                                                    <figure class=\"image-holder\">
                                                        <img src=\"http://placehold.it/95x75\" alt=\"Mauris mattis ullamcorper euismod Nulla convallis \">
                                                    </figure>
                                                    <div class=\"image-light\"></div>
                                                    <span class=\"dashicons dashicons-format-gallery\"></span>
                                                </a>
                                                <h5><a href=\"#\">{{ p.titleEn }}</a></h5>
                                                <p class=\"post-meta\">
                                                    <a href=\"#\"><span class=\"fa fa-clock-o\"></span> {{ p.dateCreation | date('d/m/Y H:i:s') }}</a> &nbsp;
                                                    <a href=\"#\"><span class=\"fa fa-folder\"></span> {{ p.subcategory.nomEn }}</a>
                                                </p>
                                            </div>
                                            <hr>
                                        {% endfor %}

                                    </div>

                                    <!--Recent-->
                                    <div class=\"tab-pane fade hide\" id=\"recent-aside\">
                                        <div class=\"article-tiny\">
                                            <a href=\"#\" class=\"image\">
                                                <figure class=\"image-holder\">
                                                    <img src=\"http://placehold.it/95x75\" alt=\"Day of the dead Maecenas odio condimentum a libero \">
                                                </figure>
                                                <div class=\"image-light\"></div>
                                                <span class=\"dashicons dashicons-format-gallery\"></span>
                                            </a>
                                            <h5><a href=\"#\">Day of the dead Maecenas odio condimentum a libero</a></h5>
                                            <p class=\"post-meta\">
                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Jan 4, 2014</a> &nbsp;
                                                <a href=\"#\"><span class=\"fa fa-folder\"></span> National</a>
                                            </p>
                                        </div>
                                        <hr>

                                        <div class=\"article-tiny\">
                                            <a href=\"#\" class=\"image\">
                                                <figure class=\"image-holder\">
                                                    <img src=\"http://placehold.it/95x75\" alt=\"Nulla vitae velit ac velit luctus facilisis dictum Mauris malesuada ante ut gravida condimentum\">
                                                </figure>
                                                <div class=\"image-light\"></div>
                                                <span class=\"dashicons dashicons-format-audio\"></span>
                                            </a>
                                            <h5><a href=\"#\">Morocco molestie hendrerit magna Morbi tristique</a></h5>
                                            <p class=\"post-meta\">
                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Jan 4, 2014</a> &nbsp;
                                                <a href=\"#\"><span class=\"fa fa-folder\"></span> Politics</a>
                                            </p>
                                        </div>
                                        <hr>

                                        <div class=\"article-tiny\">
                                            <a href=\"#\" class=\"image\">
                                                <figure class=\"image-holder\">
                                                    <img src=\"http://placehold.it/95x75\" alt=\"Nulla id eros ut nibh hendrerit sollicitudin \">
                                                </figure>
                                                <div class=\"image-light\"></div>
                                                <span class=\"dashicons dashicons-format-links\"></span>
                                            </a>
                                            <h5><a href=\"#\">Douglas X3 Nulla id eros ut nibh hendrerit sollicitudin</a></h5>
                                            <p class=\"post-meta\">
                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Jan 4, 2014</a> &nbsp;
                                                <a href=\"#\"><span class=\"fa fa-folder\"></span> Science</a>
                                            </p>
                                        </div>
                                        <hr>

                                        <div class=\"article-tiny\">
                                            <a href=\"#\" class=\"image\">
                                                <figure class=\"image-holder\">
                                                    <img src=\"http://placehold.it/95x75\" alt=\"ornare nibh Nunc semper dolor quis augue venenatis \">
                                                </figure>
                                                <div class=\"image-light\"></div>
                                                <span class=\"dashicons dashicons-format-links\"></span>
                                            </a>
                                            <h5><a href=\"#\">Nepal ornare nibh Nunc semper purus sit amet rhoncus imperdiet</a></h5>
                                            <p class=\"post-meta\">
                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Jan 4, 2014</a> &nbsp;
                                                <a href=\"#\"><span class=\"fa fa-folder\"></span> World</a>
                                            </p>
                                        </div>
                                        <hr>
                                    </div>

                                    <!--Comments-->
                                    <div class=\"hide tab-pane fade\" id=\"comments-aside\">
                                        <ul class=\"recent-comments clearfix\">
                                            <li>
                                                <div class=\"avatar\">
                                                    <a href=\"#\" class=\"light\">
                                                        <img src=\"http://placehold.it/75x75\" alt=\"Siska\">
                                                        <div class=\"layer\"></div>
                                                    </a>
                                                </div>
                                                <div class=\"content\">
                                                    <div class=\"comment-content\">
                                                        <a href=\"#\">Aliquam sollicitudin massa eu augue hendrerit</a>
                                                    </div>
                                                    <div class=\"comment-meta\">
                                                        <a href=\"#\"><i class=\"fa fa-user\"></i> Siska</a>&nbsp;
                                                        <a href=\"#\"><i class=\"fa fa-clock-o\"></i> Jan 13, 2014</a>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class=\"avatar\">
                                                    <a href=\"#\" class=\"light\">
                                                        <img src=\"http://placehold.it/75x75\" alt=\"Fahri\">
                                                        <div class=\"layer\"></div>
                                                    </a>
                                                </div>
                                                <div class=\"content\">
                                                    <div class=\"comment-content\">
                                                        <a href=\"#\">Fusce viverra ligula elit aliquam vel turpis ut</a>
                                                    </div>
                                                    <div class=\"comment-meta\">
                                                        <a href=\"#\" class=\"author\"><i class=\"fa fa-user\"></i> Fahri</a>&nbsp;
                                                        <a href=\"#\"><i class=\"fa fa-clock-o\"></i> Jan 13, 2014</a>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class=\"avatar\">
                                                    <a href=\"#\" class=\"light\">
                                                        <img src=\"http://placehold.it/75x75\" alt=\"Rahma\">
                                                        <div class=\"layer\"></div>
                                                    </a>
                                                </div>
                                                <div class=\"content\">
                                                    <div class=\"comment-content\">
                                                        <a href=\"#\">eget facilisis erat aliquet tempus mi ligula consequat</a>
                                                    </div>
                                                    <div class=\"comment-meta\">
                                                        <a href=\"#\" class=\"author\"><i class=\"fa fa-user\"></i> Rahma</a>&nbsp;
                                                        <a href=\"#\"><i class=\"fa fa-clock-o\"></i> Jan 13, 2014</a>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class=\"avatar\">
                                                    <a href=\"#\" class=\"light\">
                                                        <img src=\"http://placehold.it/75x75\" alt=\"Rusli\">
                                                        <div class=\"layer\"></div>
                                                    </a>
                                                </div>
                                                <div class=\"content\">
                                                    <div class=\"comment-content\">
                                                        <a href=\"#\">lacus sit amet tincidunt odio massa quis felis</a>
                                                    </div>
                                                    <div class=\"comment-meta\">
                                                        <a href=\"#\" class=\"author\"><i class=\"fa fa-user\"></i> Rusli</a>&nbsp;
                                                        <a href=\"#\"><i class=\"fa fa-clock-o\"></i> Jan 13, 2014</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </section>



                            <!-- ADS WIDGET -->
                            <section class=\"widget col-sm-6 col-md-12 no-mobile\">
                                <!-- Widget Header -->
                                <header class=\"clearfix\"><h4>Advertisement</h4></header>

                                <!-- Widget Content -->
                                <div class=\"frame thick\">
                                    <a href=\"#\"><div data-src=\"http://placehold.it/300x250/f0f0f9\" data-alt=\"Banner image\"></div></a>
                                </div>
                                <img src=\"{{ asset('img/shadow.png') }}\" class=\"shadow\" alt=\"shadow\">
                            </section>

                            <!-- VIMEO WIDGET -->
                            <section class=\"hide col-sm-6 col-md-12 widget\">
                                <!-- Widget header -->
                                <header class=\"clearfix\"><h4>Vimeo Video</h4></header>

                                <!-- Widget content: Vimeo embed code -->
                                <iframe src=\"//player.vimeo.com/video/83480879\" width=\"360\" height=\"203\" allowfullscreen></iframe>
                            </section>

                            <!-- TABS: CATEGORIES AND TAGS -->
                            <section class=\"col-sm-6 col-md-12 widget\">
                                <!-- Widget header: tab menu -->
                                <ul class=\"nav nav-tabs\">
                                    <li class=\"active\"><a href=\"#categories\" data-toggle=\"tab\">Categories</a></li>
                                </ul><!--.nav-tabs-->

                                <!-- Tab contents -->
                                <div class=\"tab-content\">
                                    <!-- Categories-->
                                    <div class=\"tab-pane active fade in\" id=\"categories\">
                                        <ul class=\"categories\">
                                            {% for ca in categories %}
                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> {{ ca.libelleEn }} <span class=\"post-counts\">{{ ca.subcategories|length }}</span></a></li>
                                            {% endfor %}
                                        </ul>
                                    </div>
                                </div><!--.tab-content-->
                            </section>

                            <!-- ACCORDION -->
                            <section class=\"hide col-sm-6 col-md-12 widget\">
                                <!--Widget header-->
                                <header class=\"clearfix\"><h4>Accordion</h4></header>

                                <!--Widget content-->
                                <div class=\"accordion\">
                                    <div class=\"header active\"><h5>Home</h5><i class=\"fa fa-plus\"></i></div>
                                    <div class=\"content\">
                                        <p>
                                            Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                                            ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                                            amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                                            odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                                        </p>
                                    </div>

                                    <div class=\"header\"><h5>Profile</h5><i class=\"fa fa-plus\"></i></div>
                                    <div class=\"content\">
                                        <p>
                                            Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
                                            purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
                                            velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
                                            suscipit faucibus urna.
                                        </p>
                                    </div>

                                    <div class=\"header\"><h5>Messages</h5><i class=\"fa fa-plus\"></i></div>
                                    <div class=\"content\">
                                        <p>
                                            Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
                                            Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
                                            ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
                                            lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
                                        </p>
                                    </div>

                                    <div class=\"header\"><h5>Settings</h5><i class=\"fa fa-plus\"></i></div>
                                    <div class=\"content\">
                                        <p>
                                            Cras dictum. Pellentesque habitant morbi tristique senectus et netus
                                            et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
                                            faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
                                            mauris vel est.
                                        </p>
                                    </div>
                                </div>
                            </section>
                        </div><!--.row-->
                    </aside>
                </div><!--.row-->

                <!-- SLIDER TABS WIDGET: GALLERY -->
                <section id=\"slider-tabs\" class=\"hide widget no-mobile\">
                    <!-- Widget header -->
                    <ul class=\"nav nav-tabs\">
                        <!--Title-->
                        <li class=\"active\"><a href=\"#gallery\">Gallery</a></li>

                        <!--Slider Controls-->

                        <li class=\"pull-right control current\"><a href=\"#gallery\" data-slide=\"next\"><span class=\"fa fa-chevron-right\"></span></a></li>
                        <li class=\"pull-right control current\"><a href=\"#gallery\" data-slide=\"prev\"><span class=\"fa fa-chevron-left\"></span></a></li>
                    </ul>

                    <!-- Tab Contents -->
                    <div class=\"tab-content\">
                        <!-- Gallery Tab Content -->
                        <div class=\"tab-pane active\" id=\"gallery\">
                            <div class=\"slider-container\">
                                <ul class=\"da-thumbs\">
                                    <li>
                                        <a href=\"http://placehold.it/1024x512.jpg.jpg\" title=\"Mauris venenatis facilisis sem vel feugiat enim gravida vitae\" data-lightbox-gallery=\"silder-tabs-gallery\">
                                            <div data-src=\"http://placehold.it/180x180\" data-alt=\"Mauris venenatis facilisis sem vel feugiat enim gravida vitae\"></div>
                                            <div class=\"image-caption\">
                                                <h5>Mauris venenatis facilisis sem vel feugiat enim gravida vitae</h5>
                                            </div>
                                            <span class=\"image-light\"></span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href=\"http://placehold.it/1024x512.jpg.jpg\" title=\"Maecenas ac quam tortor Integer sed ullamcorper justo\" data-lightbox-gallery=\"silder-tabs-gallery\">
                                            <div data-src=\"http://placehold.it/180x180\" data-alt=\"Maecenas ac quam tortor Integer sed ullamcorper justo\"></div>
                                            <div class=\"image-caption\">
                                                <h5>Maecenas ac quam tortor Integer sed ullamcorper justo</h5>
                                            </div>
                                            <span class=\"image-light\"></span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href=\"http://placehold.it/1024x512.jpg.jpg\" title=\"Placerat sollicitudin purus Fusce sit amet ullamcorper\" data-lightbox-gallery=\"silder-tabs-gallery\">
                                            <div data-src=\"http://placehold.it/180x180\" data-alt=\"Placerat sollicitudin purus Fusce sit amet ullamcorper\"></div>
                                            <div class=\"image-caption\">
                                                <h5>Placerat sollicitudin purus. Fusce sit amet ullamcorper</h5>
                                            </div>
                                            <span class=\"image-light\"></span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href=\"http://placehold.it/1024x512.jpg.jpg\" title=\"Donec tincidunt sem ligula eget tristique nisl mollis sed\" data-lightbox-gallery=\"silder-tabs-gallery\">
                                            <div data-src=\"http://placehold.it/180x180\" data-alt=\"Donec tincidunt sem ligula eget tristique nisl mollis sed\"></div>
                                            <div class=\"image-caption\">
                                                <h5>Donec tincidunt sem ligula eget tristique nisl mollis sed</h5>
                                            </div>
                                            <span class=\"image-light\"></span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href=\"http://placehold.it/1024x512.jpg.jpg\" title=\"Curabitur ultricies leo eget elit ornare eu fermentum\" data-lightbox-gallery=\"silder-tabs-gallery\">
                                            <div data-src=\"http://placehold.it/180x180\" data-alt=\"Curabitur ultricies leo eget elit ornare eu fermentum\"></div>
                                            <div class=\"image-caption\">
                                                <h5>Curabitur ultricies leo eget elit ornare eu fermentum</h5>
                                            </div>
                                            <span class=\"image-light\"></span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href=\"http://placehold.it/1024x512.jpg.jpg\" title=\"Aliquam mattis volutpat nisi\" data-lightbox-gallery=\"silder-tabs-gallery\">
                                            <div data-src=\"http://placehold.it/180x180\" data-alt=\"Aliquam mattis volutpat nisi\"></div>
                                            <div class=\"image-caption\">
                                                <h5>Aliquam mattis volutpat nisi</h5>
                                            </div>
                                            <span class=\"image-light\"></span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href=\"http://placehold.it/1024x512.jpg.jpg\" title=\"Nullam placerat lorem a leo sagittis nec mattis felis vehicula\" data-lightbox-gallery=\"silder-tabs-gallery\">
                                            <div data-src=\"http://placehold.it/180x180\" data-alt=\"Nullam placerat lorem a leo sagittis nec mattis felis vehicula\"></div>
                                            <div class=\"image-caption\">
                                                <h5>Nullam placerat lorem a leo sagittis nec mattis felis vehicula</h5>
                                            </div>
                                            <span class=\"image-light\"></span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href=\"http://placehold.it/1024x512.jpg.jpg\" title=\"In laoreet tristique leo non iaculis ipsum scelerisque sit\" data-lightbox-gallery=\"silder-tabs-gallery\">
                                            <div data-src=\"http://placehold.it/180x180\" data-alt=\"In laoreet tristique leo non iaculis ipsum scelerisque sit\"></div>
                                            <div class=\"image-caption\">
                                                <h5>In laoreet tristique leo non iaculis ipsum scelerisque sit</h5>
                                            </div>
                                            <span class=\"image-light\"></span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href=\"http://placehold.it/1024x512.jpg.jpg\" title=\"Suspendisse molestie odio a purus eleifend posuere\" data-lightbox-gallery=\"silder-tabs-gallery\">
                                            <div data-src=\"http://placehold.it/180x180\" data-alt=\"Suspendisse molestie odio a purus eleifend posuere\"></div>
                                            <div class=\"image-caption\">
                                                <h5>Suspendisse molestie odio a purus eleifend posuere</h5>
                                            </div>
                                            <span class=\"image-light\"></span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href=\"http://placehold.it/1024x512.jpg.jpg\" title=\"Suspendisse at lacus eleifend fringilla nunc\" data-lightbox-gallery=\"silder-tabs-gallery\">
                                            <div data-src=\"http://placehold.it/180x180\" data-alt=\"Suspendisse at lacus eleifend fringilla nunc\"></div>
                                            <div class=\"image-caption\">
                                                <h5>Suspendisse at lacus eleifend fringilla nunc</h5>
                                            </div>
                                            <span class=\"image-light\"></span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href=\"http://placehold.it/1024x512.jpg.jpg\" title=\"id porta nisl In imperdiet risus\" data-lightbox-gallery=\"silder-tabs-gallery\">
                                            <div data-src=\"http://placehold.it/180x180\" data-alt=\"id porta nisl In imperdiet risus\"></div>
                                            <div class=\"image-caption\">
                                                <h5>Id porta nisl In imperdiet risus</h5>
                                            </div>
                                            <span class=\"image-light\"></span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href=\"http://placehold.it/1024x512.jpg.jpg\" title=\"eget nibh laoreet varius\" data-lightbox-gallery=\"silder-tabs-gallery\">
                                            <div data-src=\"http://placehold.it/180x180\" data-alt=\"eget nibh laoreet varius\"></div>
                                            <div class=\"image-caption\">
                                                <h5>Eget nibh laoreet varius</h5>
                                            </div>
                                            <span class=\"image-light\"></span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href=\"http://placehold.it/1024x512.jpg.jpg\" title=\"Nullam tristique mauris dolor\" data-lightbox-gallery=\"silder-tabs-gallery\">
                                            <div data-src=\"http://placehold.it/180x180\" data-alt=\"Nullam tristique mauris dolor\"></div>
                                            <div class=\"image-caption\">
                                                <h5>Nullam tristique mauris dolor</h5>
                                            </div>
                                            <span class=\"image-light\"></span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href=\"http://placehold.it/1024x512.jpg.jpg\" title=\"Morbi euismod tincidunt sem\" data-lightbox-gallery=\"silder-tabs-gallery\">
                                            <div data-src=\"http://placehold.it/180x180\" data-alt=\"Morbi euismod tincidunt sem\"></div>
                                            <div class=\"image-caption\">
                                                <h5>Morbi euismod tincidunt sem</h5>
                                            </div>
                                            <span class=\"image-light\"></span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href=\"http://placehold.it/1024x512.jpg.jpg\" title=\"bibendum tristique lacus adipiscing sed\" data-lightbox-gallery=\"silder-tabs-gallery\">
                                            <div data-src=\"http://placehold.it/180x180\" data-alt=\"bibendum tristique lacus adipiscing sed\"></div>
                                            <div class=\"image-caption\">
                                                <h5>Bibendum tristique lacus adipiscing sed</h5>
                                            </div>
                                            <span class=\"image-light\"></span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href=\"http://placehold.it/1024x512.jpg.jpg\" title=\"Pellentesque vitae risus eu orci\" data-lightbox-gallery=\"silder-tabs-gallery\">
                                            <div data-src=\"http://placehold.it/180x180\" data-alt=\"Pellentesque vitae risus eu orci\"></div>
                                            <div class=\"image-caption\">
                                                <h5>Pellentesque vitae risus eu orci</h5>
                                            </div>
                                            <span class=\"image-light\"></span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href=\"http://placehold.it/1024x512.jpg.jpg\" title=\"tempus laoreet ac quis nisl\" data-lightbox-gallery=\"silder-tabs-gallery\">
                                            <div data-src=\"http://placehold.it/180x180\" data-alt=\"tempus laoreet ac quis nisl\"></div>
                                            <div class=\"image-caption\">
                                                <h5>tempus laoreet ac quis nisl</h5>
                                            </div>
                                            <span class=\"image-light\"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
            </div><!--.container-->
        </div><!--#content-->

        <footer>
            <!-- MAIN FOOTER
            ================ -->
            <div id=\"footer-main\">
                <div class=\"container\">
                    <div class=\"row\">
                        <!-- Flickr Feed -->
                        <section class=\"col-md-3 col-sm-6\">
                            <div class=\"title\"><h4>Flickr Feed</h4></div>
                            <ul id=\"flickr-feed-footer\" class=\"flickr-feed clearfix\">
                                <li><i class=\"fa fa-spinner fa-spin\"></i> Please wait...</li>
                                <li>
                                    <script type=\"text/template\">
                                        <li>
                                            <a href=\"#\" title=\"\" class=\"dark\" target=\"_blank\">
                                                <img src=\"\" alt=\"\">
                                                <div class=\"layer\"></div>
                                            </a>
                                        </li>
                                    </script>
                                </li>
                            </ul>
                        </section>

                        <!-- Categories -->
                        <section class=\"col-md-3 col-sm-6\">
                            <!--Title-->
                            <div class=\"title\"><h4>Categories</h4></div>

                            <!--Content-->
                            <ul class=\"tags clearfix\">
                                {% for ca in categories %}
                                    <li><a href=\"#\">{{ ca.libelleEn }}</a></li>
                                {% endfor %}
                            </ul>
                        </section>

                        <!-- Recent Comments -->
                        <section class=\"col-md-3 col-sm-6\">
                            <!--Title-->
                            <div class=\"title\"><h4>Videos</h4></div>

                            <!--Content-->
                            <ul class=\"recent-comments clearfix hide\">
                                <li>
                                    <div class=\"avatar\">
                                        <a href=\"#\" class=\"dark\">
                                            <img src=\"http://placehold.it/75x75\" alt=\"Siska\">
                                            <div class=\"layer\"></div>
                                        </a>
                                    </div>
                                    <div class=\"content\">
                                        <div class=\"comment-content\">
                                            <a href=\"#\">Aliquam sollicitudin massa eu augue hendrerit</a>
                                        </div>
                                        <div class=\"comment-meta\">
                                            <a href=\"#\"><i class=\"fa fa-user\"></i> Siska</a>&nbsp;
                                            <a href=\"#\"><i class=\"fa fa-clock-o\"></i> Jan 13, 2014</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"avatar\">
                                        <a href=\"#\" class=\"dark\">
                                            <img src=\"http://placehold.it/75x75\" alt=\"Fahri\">
                                            <div class=\"layer\"  ></div>
                                        </a>
                                    </div>
                                    <div class=\"content\">
                                        <div class=\"comment-content\">
                                            <a href=\"#\">Fusce viverra ligula elit aliquam vel turpis ut</a>
                                        </div>
                                        <div class=\"comment-meta\">
                                            <a href=\"#\" class=\"author\"><i class=\"fa fa-user\"></i> Fahri</a>&nbsp;
                                            <a href=\"#\"><i class=\"fa fa-clock-o\"></i> Jan 13, 2014</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"avatar\">
                                        <a href=\"#\" class=\"dark\">
                                            <img src=\"http://placehold.it/75x75\" alt=\"Rahma\">
                                            <div class=\"layer\"></div>
                                        </a>
                                    </div>
                                    <div class=\"content\">
                                        <div class=\"comment-content\">
                                            <a href=\"#\">eget facilisis erat aliquet tempus mi ligula</a>
                                        </div>
                                        <div class=\"comment-meta\">
                                            <a href=\"#\" class=\"author\"><i class=\"fa fa-user\"></i> Rahma</a>&nbsp;
                                            <a href=\"#\"><i class=\"fa fa-clock-o\"></i> Jan 13, 2014</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </section>

                        <!-- Contact Form -->
                        <section class=\"col-md-3 col-sm-6\">
                            <div class=\"title\"><h4>Send Us a Message</h4></div>
                            <form class=\"contact-form\">
                                <p class=\"input-group\">
                                    <i class=\"fa fa-user\"></i>
                                    <input type=\"text\" placeholder=\"Full name *\">
                                </p>
                                <p class=\"input-group\">
                                    <i class=\"fa fa-envelope\"></i>
                                    <input type=\"text\" placeholder=\"Email address *\">
                                </p>
                                <p class=\"input-group\">
                                    <i class=\"fa fa-link\"></i>
                                    <input type=\"text\" placeholder=\"Website\">
                                </p>
                                <p>
                                    <textarea placeholder=\"Message *\" rows=\"6\"></textarea>
                                </p>
                                <p>
                                    <input type=\"submit\" value=\"Send\" class=\"btn btn-dark\">
                                </p>
                            </form>
                        </section>
                    </div><!--.row-->
                </div><!--.container-->
            </div><!--#footer-main-->

            <!-- FOOTER BOTTOM
            ================== -->
            <div id=\"footer-bottom\">
                <div class=\"container\">
                    <p>Copyright &copy; 2017 - <strong>TheGlobalView</strong></p>
                </div>
            </div><!--#footer-bottom-->
        </footer><!--footer-->


        <!-- jQuery  -->
        <script src=\"{{ asset('/js/jquery.min.js') }}\"></script>
        <script src=\"{{ asset('/js/jquery-ui.custom.min.js') }}\"></script>

        <!-- Warta scripts -->
        <script src=\"{{ asset('/js/script.min.js') }}\"></script>
        <script src=\"{{ asset('/js/initialize.js') }}\"></script>

        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base_en.html.twig", "/Users/rachid/Documents/Projet Client/theglobalview/app/Resources/views/base_en.html.twig");
    }
}