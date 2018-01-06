<?php

/* ::base_fr.html.twig */
class __TwigTemplate_0f34404ee9b04505d70f1d2e64c3adab78e6003121f656fd236b442c3f4b7bc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'carousel_content' => array($this, 'block_carousel_content'),
            'article_content' => array($this, 'block_article_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6bb819b744e431e801d584e2699851dc8db493fff66a518d8fd1caf146ea4e98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bb819b744e431e801d584e2699851dc8db493fff66a518d8fd1caf146ea4e98->enter($__internal_6bb819b744e431e801d584e2699851dc8db493fff66a518d8fd1caf146ea4e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base_fr.html.twig"));

        $__internal_33743c8b9aa80645827cc669db52c548ddf6942c9beac2204f18e19062915732 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33743c8b9aa80645827cc669db52c548ddf6942c9beac2204f18e19062915732->enter($__internal_33743c8b9aa80645827cc669db52c548ddf6942c9beac2204f18e19062915732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base_fr.html.twig"));

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
                            <input id=\"top_search_form\" type=\"search\" placeholder=\"Rechercher\">
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
        // line 95
        $this->loadTemplate("home_link.html.twig", "::base_fr.html.twig", 95)->display($context);
        // line 96
        echo "
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"main-nav-collapse\">
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li class=\"active\"><a href=\"";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_view_homepage");
        echo "\"><i class=\"fa fa-home\"></i></a></li>

                            ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["ca"]) {
            // line 105
            echo "                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["ca"], "libelleFr", array()), "html", null, true);
            echo " <b class=\"caret\"></b></a>
                                        ";
            // line 107
            if ( !twig_test_empty($this->getAttribute($context["ca"], "subcategories", array()))) {
                // line 108
                echo "                                            <ul class=\"dropdown-menu\">
                                                ";
                // line 109
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["ca"], "subcategories", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                    // line 110
                    echo "                                                    <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_view_posts_by_subcategory", array("id" => $this->getAttribute($context["s"], "id", array()), "_locale" => "fr")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "nomFr", array()), "html", null, true);
                    echo " </a></li>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 112
                echo "                                            </ul>
                                        ";
            }
            // line 114
            echo "                                    </li>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ca'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "
                            ";
        // line 118
        $this->loadTemplate("lang_link.html.twig", "::base_fr.html.twig", 118)->display($context);
        // line 119
        echo "                        </ul>
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
                                <h4>Dernières nouvelles</h4>
                                <i class=\"triangle\"></i>
                            </header>
                            <div class=\"content\">
                                <ul>
                                    ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["popularPosts"] ?? $this->getContext($context, "popularPosts")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 153
            echo "                                        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_view_post_detail", array("id" => $this->getAttribute($context["p"], "id", array()), "_locale" => "fr")), "html", null, true);
            echo "\"><i class=\"fa fa-angle-double-right\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "titleFr", array()), "html", null, true);
            echo "</a></li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "                                </ul>
                            </div>
                        </section>

                        <!-- CAROUSEL  -->
                        ";
        // line 160
        $this->displayBlock('carousel_content', $context, $blocks);
        // line 163
        echo "
                        <div class=\"articles\">
                            ";
        // line 165
        $this->displayBlock('article_content', $context, $blocks);
        // line 166
        echo "                        </div>


                    </main><!--#main-content-->

                    <!-- SIDEBAR
                    ============ -->
                    <aside class=\"col-md-4\">
                        <div class=\"row\">

                            <!-- SOCIALS WIDGET -->
                            <section class=\"col-sm-6 col-md-12 widget\">
                                <!-- Widget header -->
                                <header class=\"clearfix\"><h4>Réseaux sociaux</h4></header>

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
                                    <h4>Galerie</h4>
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
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/shadow.png"), "html", null, true);
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
                                    <li class=\"active\"><a href=\"#popular-aside\" data-toggle=\"tab\">Populaires</a></li>
                                    <li class=\"hide\"><a href=\"#recent-aside\" data-toggle=\"tab\">Récents</a></li>
                                    <li class=\"hide\"><a href=\"#comments-aside\" data-toggle=\"tab\">Comments</a></li>
                                </ul>

                                <!-- Tab contents -->
                                <div class=\"tab-content\">
                                    <!--Popular-->
                                    <div class=\"tab-pane active fade in\" id=\"popular-aside\">

                                        ";
        // line 323
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["popularPosts"] ?? $this->getContext($context, "popularPosts")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 324
            echo "                                            <div class=\"article-tiny\">
                                                <a href=\"#\" class=\"image\">
                                                    <figure class=\"image-holder\">
                                                        ";
            // line 327
            if ($this->getAttribute($context["p"], "imageUrl", array())) {
                // line 328
                echo "                                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("/uploads/articles/" . $this->getAttribute($context["p"], "imageUrl", array()))), "html", null, true);
                echo "\" width=\"95px\" height=\"75px\" />
                                                        ";
            } else {
                // line 330
                echo "                                                            <img src=\"http://placehold.it/95x75\" alt=\"\">
                                                        ";
            }
            // line 332
            echo "                                                    </figure>
                                                    <div class=\"image-light\"></div>
                                                    <span class=\"dashicons dashicons-format-gallery\"></span>
                                                </a>
                                                <h5><a href=\"";
            // line 336
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_view_post_detail", array("id" => $this->getAttribute($context["p"], "id", array()), "_locale" => "fr")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "titleFr", array()), "html", null, true);
            echo "</a></h5>
                                                <p class=\"post-meta\">
                                                    <a href=\"#\"><span class=\"fa fa-clock-o\"></span> ";
            // line 338
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["p"], "dateCreation", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</a> &nbsp;
                                                    <a href=\"";
            // line 339
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_view_posts_by_subcategory", array("id" => $this->getAttribute($this->getAttribute($context["p"], "subcategory", array()), "id", array()), "_locale" => "fr")), "html", null, true);
            echo "\">
                                                        <span class=\"fa fa-folder\"></span> ";
            // line 340
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "subcategory", array()), "nomFr", array()), "html", null, true);
            echo "</a>
                                                </p>
                                            </div>
                                            <hr>

                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 346
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
                                <header class=\"clearfix\"><h4>Publicités</h4></header>

                                <!-- Widget Content -->
                                <div class=\"frame thick\">
                                    <a href=\"#\"><div data-src=\"http://placehold.it/300x250/f0f0f9\" data-alt=\"Banner image\"></div></a>
                                </div>
                                <img src=\"";
        // line 506
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/shadow.png"), "html", null, true);
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
                                    <li class=\"active\"><a href=\"#categories\" data-toggle=\"tab\">Catégories</a></li>
                                </ul><!--.nav-tabs-->

                                <!-- Tab contents -->
                                <div class=\"tab-content\">
                                    <!-- Categories-->
                                    <div class=\"tab-pane active fade in\" id=\"categories\">
                                        <ul class=\"categories\">
                                            ";
        // line 530
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["ca"]) {
            // line 531
            echo "                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ca"], "libelleFr", array()), "html", null, true);
            echo " <span class=\"post-counts\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["ca"], "subcategories", array())), "html", null, true);
            echo "</span></a></li>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ca'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 533
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
        // line 817
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["ca"]) {
            // line 818
            echo "                                    <li><a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ca"], "libelleFr", array()), "html", null, true);
            echo "</a></li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ca'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 820
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
                            <div class=\"title\"><h4>Nous contacter</h4></div>
                            <form class=\"contact-form\">
                                <p class=\"input-group\">
                                    <i class=\"fa fa-user\"></i>
                                    <input type=\"text\" placeholder=\"Nom complet*\" required>
                                </p>
                                <p class=\"input-group\">
                                    <i class=\"fa fa-envelope\"></i>
                                    <input type=\"text\" placeholder=\"Email  *\" required>
                                </p>
                                <p class=\"input-group\">
                                    <i class=\"fa fa-link\"></i>
                                    <input type=\"text\" placeholder=\"Site web\">
                                </p>
                                <p>
                                    <textarea placeholder=\"Message *\" rows=\"6\"></textarea>
                                </p>
                                <p>
                                    <input type=\"submit\" value=\"Envoyer\" class=\"btn btn-dark\">
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
        // line 923
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 924
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/jquery-ui.custom.min.js"), "html", null, true);
        echo "\"></script>

        <!-- Warta scripts -->
        <script src=\"";
        // line 927
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/script.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 928
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/initialize.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 930
        $this->displayBlock('javascripts', $context, $blocks);
        // line 931
        echo "    </body>
</html>
";
        
        $__internal_6bb819b744e431e801d584e2699851dc8db493fff66a518d8fd1caf146ea4e98->leave($__internal_6bb819b744e431e801d584e2699851dc8db493fff66a518d8fd1caf146ea4e98_prof);

        
        $__internal_33743c8b9aa80645827cc669db52c548ddf6942c9beac2204f18e19062915732->leave($__internal_33743c8b9aa80645827cc669db52c548ddf6942c9beac2204f18e19062915732_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_89c8e36acf73d29087775a4bf1f1148c731e0b96dbfb52745de9cbc0c5697100 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89c8e36acf73d29087775a4bf1f1148c731e0b96dbfb52745de9cbc0c5697100->enter($__internal_89c8e36acf73d29087775a4bf1f1148c731e0b96dbfb52745de9cbc0c5697100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ff75d4d0f84ed520053757211c34d7da9551aaef97bbba2bb34f3d26eeb7ec85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff75d4d0f84ed520053757211c34d7da9551aaef97bbba2bb34f3d26eeb7ec85->enter($__internal_ff75d4d0f84ed520053757211c34d7da9551aaef97bbba2bb34f3d26eeb7ec85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("head.title"), "html", null, true);
        
        $__internal_ff75d4d0f84ed520053757211c34d7da9551aaef97bbba2bb34f3d26eeb7ec85->leave($__internal_ff75d4d0f84ed520053757211c34d7da9551aaef97bbba2bb34f3d26eeb7ec85_prof);

        
        $__internal_89c8e36acf73d29087775a4bf1f1148c731e0b96dbfb52745de9cbc0c5697100->leave($__internal_89c8e36acf73d29087775a4bf1f1148c731e0b96dbfb52745de9cbc0c5697100_prof);

    }

    // line 32
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_54707132c9b460107f59a00f7c82071a50600ecbff79013d0a316c3e0bf5dd5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54707132c9b460107f59a00f7c82071a50600ecbff79013d0a316c3e0bf5dd5f->enter($__internal_54707132c9b460107f59a00f7c82071a50600ecbff79013d0a316c3e0bf5dd5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4c740f25e0a3a69ff57d2ed938b5509b2df35632ca13ea4fdb80e9d8d1066ebf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c740f25e0a3a69ff57d2ed938b5509b2df35632ca13ea4fdb80e9d8d1066ebf->enter($__internal_4c740f25e0a3a69ff57d2ed938b5509b2df35632ca13ea4fdb80e9d8d1066ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4c740f25e0a3a69ff57d2ed938b5509b2df35632ca13ea4fdb80e9d8d1066ebf->leave($__internal_4c740f25e0a3a69ff57d2ed938b5509b2df35632ca13ea4fdb80e9d8d1066ebf_prof);

        
        $__internal_54707132c9b460107f59a00f7c82071a50600ecbff79013d0a316c3e0bf5dd5f->leave($__internal_54707132c9b460107f59a00f7c82071a50600ecbff79013d0a316c3e0bf5dd5f_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_497c2a76caa987d624a0338ab7109a379f3995f45bee07d08c96463a2131a76a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_497c2a76caa987d624a0338ab7109a379f3995f45bee07d08c96463a2131a76a->enter($__internal_497c2a76caa987d624a0338ab7109a379f3995f45bee07d08c96463a2131a76a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_679900cb5db768727cebb6dc3a1a60f7df1eb48964032352611af8d5ba8f0b0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_679900cb5db768727cebb6dc3a1a60f7df1eb48964032352611af8d5ba8f0b0b->enter($__internal_679900cb5db768727cebb6dc3a1a60f7df1eb48964032352611af8d5ba8f0b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_679900cb5db768727cebb6dc3a1a60f7df1eb48964032352611af8d5ba8f0b0b->leave($__internal_679900cb5db768727cebb6dc3a1a60f7df1eb48964032352611af8d5ba8f0b0b_prof);

        
        $__internal_497c2a76caa987d624a0338ab7109a379f3995f45bee07d08c96463a2131a76a->leave($__internal_497c2a76caa987d624a0338ab7109a379f3995f45bee07d08c96463a2131a76a_prof);

    }

    // line 160
    public function block_carousel_content($context, array $blocks = array())
    {
        $__internal_f6720bdd3858465b277932adbc962d788e803338516a3411b8526684cb45d8fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6720bdd3858465b277932adbc962d788e803338516a3411b8526684cb45d8fc->enter($__internal_f6720bdd3858465b277932adbc962d788e803338516a3411b8526684cb45d8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carousel_content"));

        $__internal_5a4c560cfd122cbac58ba841c5b4f275147e9c3444c7e2b0ba194036a01a92ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a4c560cfd122cbac58ba841c5b4f275147e9c3444c7e2b0ba194036a01a92ab->enter($__internal_5a4c560cfd122cbac58ba841c5b4f275147e9c3444c7e2b0ba194036a01a92ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carousel_content"));

        // line 161
        echo "                            ";
        $this->loadTemplate("carousel.html.twig", "::base_fr.html.twig", 161)->display($context);
        // line 162
        echo "                        ";
        
        $__internal_5a4c560cfd122cbac58ba841c5b4f275147e9c3444c7e2b0ba194036a01a92ab->leave($__internal_5a4c560cfd122cbac58ba841c5b4f275147e9c3444c7e2b0ba194036a01a92ab_prof);

        
        $__internal_f6720bdd3858465b277932adbc962d788e803338516a3411b8526684cb45d8fc->leave($__internal_f6720bdd3858465b277932adbc962d788e803338516a3411b8526684cb45d8fc_prof);

    }

    // line 165
    public function block_article_content($context, array $blocks = array())
    {
        $__internal_5eabec7837a57560d0cdc4ff483b4250e6e21b7cbcad3bd5d1b50ef49b87cda2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eabec7837a57560d0cdc4ff483b4250e6e21b7cbcad3bd5d1b50ef49b87cda2->enter($__internal_5eabec7837a57560d0cdc4ff483b4250e6e21b7cbcad3bd5d1b50ef49b87cda2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_content"));

        $__internal_5985fe8f39c05bf1b25071e0def9b8d12b32f932769b2df8758f1a3b21ffe303 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5985fe8f39c05bf1b25071e0def9b8d12b32f932769b2df8758f1a3b21ffe303->enter($__internal_5985fe8f39c05bf1b25071e0def9b8d12b32f932769b2df8758f1a3b21ffe303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_content"));

        
        $__internal_5985fe8f39c05bf1b25071e0def9b8d12b32f932769b2df8758f1a3b21ffe303->leave($__internal_5985fe8f39c05bf1b25071e0def9b8d12b32f932769b2df8758f1a3b21ffe303_prof);

        
        $__internal_5eabec7837a57560d0cdc4ff483b4250e6e21b7cbcad3bd5d1b50ef49b87cda2->leave($__internal_5eabec7837a57560d0cdc4ff483b4250e6e21b7cbcad3bd5d1b50ef49b87cda2_prof);

    }

    // line 930
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d4fa408f8350ccf785ef449bde22e9e80a838ff23b4e8b235124ad95cd25feb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4fa408f8350ccf785ef449bde22e9e80a838ff23b4e8b235124ad95cd25feb1->enter($__internal_d4fa408f8350ccf785ef449bde22e9e80a838ff23b4e8b235124ad95cd25feb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_34ce57351c4bbf816f53a2d873f0e65f40e97f106b228ef321d13c49df884b85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34ce57351c4bbf816f53a2d873f0e65f40e97f106b228ef321d13c49df884b85->enter($__internal_34ce57351c4bbf816f53a2d873f0e65f40e97f106b228ef321d13c49df884b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_34ce57351c4bbf816f53a2d873f0e65f40e97f106b228ef321d13c49df884b85->leave($__internal_34ce57351c4bbf816f53a2d873f0e65f40e97f106b228ef321d13c49df884b85_prof);

        
        $__internal_d4fa408f8350ccf785ef449bde22e9e80a838ff23b4e8b235124ad95cd25feb1->leave($__internal_d4fa408f8350ccf785ef449bde22e9e80a838ff23b4e8b235124ad95cd25feb1_prof);

    }

    public function getTemplateName()
    {
        return "::base_fr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1241 => 930,  1224 => 165,  1214 => 162,  1211 => 161,  1202 => 160,  1185 => 36,  1168 => 32,  1150 => 5,  1138 => 931,  1136 => 930,  1131 => 928,  1127 => 927,  1121 => 924,  1117 => 923,  1012 => 820,  1003 => 818,  999 => 817,  713 => 533,  702 => 531,  698 => 530,  671 => 506,  509 => 346,  497 => 340,  493 => 339,  489 => 338,  482 => 336,  476 => 332,  472 => 330,  466 => 328,  464 => 327,  459 => 324,  455 => 323,  401 => 272,  293 => 166,  291 => 165,  287 => 163,  285 => 160,  278 => 155,  267 => 153,  263 => 152,  228 => 119,  226 => 118,  223 => 117,  215 => 114,  211 => 112,  200 => 110,  196 => 109,  193 => 108,  191 => 107,  187 => 106,  184 => 105,  180 => 104,  175 => 102,  167 => 96,  165 => 95,  127 => 60,  123 => 59,  119 => 58,  96 => 37,  94 => 36,  87 => 33,  85 => 32,  79 => 29,  73 => 26,  65 => 21,  59 => 18,  53 => 15,  49 => 14,  37 => 5,  31 => 1,);
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
                            <input id=\"top_search_form\" type=\"search\" placeholder=\"Rechercher\">
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

                        {% include 'home_link.html.twig' %}

                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"main-nav-collapse\">
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li class=\"active\"><a href=\"{{ path('global_view_homepage') }}\"><i class=\"fa fa-home\"></i></a></li>

                            {% for ca in categories %}
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">{{ ca.libelleFr }} <b class=\"caret\"></b></a>
                                        {% if  ca.subcategories is not empty %}
                                            <ul class=\"dropdown-menu\">
                                                {% for s in ca.subcategories %}
                                                    <li><a href=\"{{ path('global_view_posts_by_subcategory', {'id' : s.id, '_locale' : 'fr'}) }}\">{{ s.nomFr }} </a></li>
                                                {% endfor %}
                                            </ul>
                                        {% endif %}
                                    </li>

                            {% endfor %}

                            {% include 'lang_link.html.twig' %}
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
                                <h4>Dernières nouvelles</h4>
                                <i class=\"triangle\"></i>
                            </header>
                            <div class=\"content\">
                                <ul>
                                    {% for p in popularPosts %}
                                        <li><a href=\"{{ path('global_view_post_detail', {'id' : p.id, '_locale' : 'fr'}) }}\"><i class=\"fa fa-angle-double-right\"></i> {{ p.titleFr }}</a></li>
                                    {% endfor %}
                                </ul>
                            </div>
                        </section>

                        <!-- CAROUSEL  -->
                        {% block carousel_content %}
                            {% include 'carousel.html.twig' %}
                        {% endblock %}

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
                                <header class=\"clearfix\"><h4>Réseaux sociaux</h4></header>

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
                                    <h4>Galerie</h4>
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
                                <img src=\"{{ asset('/img/shadow.png') }}\" class=\"shadow\" alt=\"shadow\">
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
                                    <li class=\"active\"><a href=\"#popular-aside\" data-toggle=\"tab\">Populaires</a></li>
                                    <li class=\"hide\"><a href=\"#recent-aside\" data-toggle=\"tab\">Récents</a></li>
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
                                                        {% if p.imageUrl %}
                                                            <img src=\"{{ asset('/uploads/articles/' ~ p.imageUrl ) }}\" width=\"95px\" height=\"75px\" />
                                                        {% else %}
                                                            <img src=\"http://placehold.it/95x75\" alt=\"\">
                                                        {% endif %}
                                                    </figure>
                                                    <div class=\"image-light\"></div>
                                                    <span class=\"dashicons dashicons-format-gallery\"></span>
                                                </a>
                                                <h5><a href=\"{{ path('global_view_post_detail', {'id' : p.id, '_locale' : 'fr'}) }}\">{{ p.titleFr }}</a></h5>
                                                <p class=\"post-meta\">
                                                    <a href=\"#\"><span class=\"fa fa-clock-o\"></span> {{ p.dateCreation | date('d/m/Y H:i:s') }}</a> &nbsp;
                                                    <a href=\"{{ path('global_view_posts_by_subcategory', {'id' : p.subcategory.id, '_locale' : 'fr'}) }}\">
                                                        <span class=\"fa fa-folder\"></span> {{ p.subcategory.nomFr }}</a>
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
                                <header class=\"clearfix\"><h4>Publicités</h4></header>

                                <!-- Widget Content -->
                                <div class=\"frame thick\">
                                    <a href=\"#\"><div data-src=\"http://placehold.it/300x250/f0f0f9\" data-alt=\"Banner image\"></div></a>
                                </div>
                                <img src=\"{{ asset('/img/shadow.png') }}\" class=\"shadow\" alt=\"shadow\">
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
                                    <li class=\"active\"><a href=\"#categories\" data-toggle=\"tab\">Catégories</a></li>
                                </ul><!--.nav-tabs-->

                                <!-- Tab contents -->
                                <div class=\"tab-content\">
                                    <!-- Categories-->
                                    <div class=\"tab-pane active fade in\" id=\"categories\">
                                        <ul class=\"categories\">
                                            {% for ca in categories %}
                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> {{ ca.libelleFr }} <span class=\"post-counts\">{{ ca.subcategories|length }}</span></a></li>
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
                                    <li><a href=\"#\">{{ ca.libelleFr }}</a></li>
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
                            <div class=\"title\"><h4>Nous contacter</h4></div>
                            <form class=\"contact-form\">
                                <p class=\"input-group\">
                                    <i class=\"fa fa-user\"></i>
                                    <input type=\"text\" placeholder=\"Nom complet*\" required>
                                </p>
                                <p class=\"input-group\">
                                    <i class=\"fa fa-envelope\"></i>
                                    <input type=\"text\" placeholder=\"Email  *\" required>
                                </p>
                                <p class=\"input-group\">
                                    <i class=\"fa fa-link\"></i>
                                    <input type=\"text\" placeholder=\"Site web\">
                                </p>
                                <p>
                                    <textarea placeholder=\"Message *\" rows=\"6\"></textarea>
                                </p>
                                <p>
                                    <input type=\"submit\" value=\"Envoyer\" class=\"btn btn-dark\">
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
", "::base_fr.html.twig", "/Users/Rachid/SymfonyProjects/theglobalview/app/Resources/views/base_fr.html.twig");
    }
}
