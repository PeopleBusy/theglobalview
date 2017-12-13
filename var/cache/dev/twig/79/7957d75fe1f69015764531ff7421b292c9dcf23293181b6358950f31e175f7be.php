<?php

/* @GlobalView/Default/home-version-2.html */
class __TwigTemplate_f5377346ee94b64f86afd906863e4a0c5b584cfb42d0adddbd5b192ea185a385 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d05e1076f24df9cf4c9ccc316876db6cba4cc633c1447613d88a627f4f96345 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d05e1076f24df9cf4c9ccc316876db6cba4cc633c1447613d88a627f4f96345->enter($__internal_6d05e1076f24df9cf4c9ccc316876db6cba4cc633c1447613d88a627f4f96345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GlobalView/Default/home-version-2.html"));

        $__internal_a90fc6e7731f5457a11dfbecc4c5c5cf3893cd18c80b30736c9cb9ef9ccd7026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a90fc6e7731f5457a11dfbecc4c5c5cf3893cd18c80b30736c9cb9ef9ccd7026->enter($__internal_a90fc6e7731f5457a11dfbecc4c5c5cf3893cd18c80b30736c9cb9ef9ccd7026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GlobalView/Default/home-version-2.html"));

        // line 1
        echo "<!DOCTYPE html>
<html id=\"home-version-2\">
        <head>
                <title>WarTa - News/Magazine Template</title>
                <meta charset=\"UTF-8\">
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
                
                <!--Import Google font-->
                <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
                
                <!-- Stylesheets -->        
                <link href=\"css/style.min.css\" rel=\"stylesheet\">
                <link href=\"css/custom.css\" rel=\"stylesheet\">
                
                <!--Modernizr-->
                <script src=\"js/modernizr.min.js\"></script>

                <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries
                     ie8.css and ie8.js custom style  and script that needed for IE8. -->
                <!--[if lt IE 9]>
                        <link href=\"css/ie8.css\" rel=\"stylesheet\">        
                        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
                        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
                        <script src=\"js/ie8.js\"></script>
                <![endif]-->
        </head>    

        <body>
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
                                                        <li><a href=\"#\">Home</a></li>
                                                        <li><a href=\"#\">About</a></li>
                                                        <li><a href=\"#\">Contact</a></li>
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
                                                <a class=\"navbar-brand\" href=\"#\"><img src=\"img/logo.png\" alt=\"logo\"></a>
                                        </div>

                                        <!-- Collect the nav links, forms, and other content for toggling -->
                                        <div class=\"collapse navbar-collapse\" id=\"main-nav-collapse\">
                                                <ul class=\"nav navbar-nav navbar-right\">
                                                        <li class=\"active\"><a href=\"#\"><i class=\"fa fa-home\"></i></a></li>
                                                        <li class=\"dropdown\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Home <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\">
                                                                        <li><a href=\"home-version-1.html\">Home Vervion 1</a></li>
                                                                        <li><a href=\"home-version-2.html\">Home Version 2</a></li>
                                                                        <li class=\"divider\"></li>                                    
                                                                        <li><a href=\"home-version-1-rtl.html\">Home Version 1 RTL</a></li>
                                                                        <li><a href=\"home-version-2-rtl.html\">Home Version 2 RTL</a></li>
                                                                </ul>
                                                        </li>
                                                        <li class=\"dropdown\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Blog <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\">
                                                                        <li><a href=\"blog-version-1.html\">Blog Version 1</a></li>
                                                                        <li><a href=\"blog-version-2.html\">Blog Version 2</a></li>
                                                                        <li><a href=\"blog-version-3.html\">Blog Version 3</a></li>
                                                                        <li class=\"divider\"></li>
                                                                        <li><a href=\"blog-version-1-rtl.html\">Blog Version 1 RTL</a></li>
                                                                        <li><a href=\"blog-version-2-rtl.html\">Blog Version 2 RTL</a></li>
                                                                        <li><a href=\"blog-version-3-rtl.html\">Blog Version 3 RTL</a></li>
                                                                </ul>
                                                        </li>
                                                        <li class=\"dropdown\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Blog Detail <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\">
                                                                        <li><a href=\"blog-detail.html\">Blog Detail</a></li>
                                                                        <li><a href=\"review-bar.html\">Review Bar</a></li>
                                                                        <li><a href=\"review-star.html\">Review Star</a></li>
                                                                        <li><a href=\"review-bar-bottom.html\">Review Bar Bottom</a></li>
                                                                        <li><a href=\"review-star-bottom.html\">Review Star Bottom</a></li>
                                                                        <li><a href=\"gallery.html\">Gallery</a></li>
                                                                        <li class=\"divider\"></li>
                                                                        <li><a href=\"blog-detail-rtl.html\">Blog Detail RTL</a></li>
                                                                        <li><a href=\"review-bar-rtl.html\">Review Bar RTL</a></li>
                                                                        <li><a href=\"review-star-rtl.html\">Review Star RTL</a></li>
                                                                        <li><a href=\"review-bar-bottom-rtl.html\">Review Bar Bottom RTL</a></li>
                                                                        <li><a href=\"review-star-bottom-rtl.html\">Review Star Bottom RTL</a></li>
                                                                        <li><a href=\"gallery-rtl.html\">Gallery RTL</a></li>
                                                                </ul>
                                                        </li>         
                                                        <li class=\"dropdown\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Contact <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\">
                                                                        <li><a href=\"contact.html\">Contact</a></li>
                                                                        <li class=\"divider\"></li>
                                                                        <li><a href=\"contact-rtl.html\">Contact RTL</a></li>
                                                                </ul>
                                                        </li>
                                                        <li class=\"dropdown\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">404 <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\">
                                                                        <li><a href=\"404.html\">404</a></li>
                                                                        <li class=\"divider\"></li>
                                                                        <li><a href=\"404-rtl.html\">404 RTL</a></li>
                                                                </ul>
                                                        </li>                           
                                                        <li class=\"dropdown\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Sign Up <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\">
                                                                        <li><a href=\"sign-up.html\">Sign Up</a></li>
                                                                        <li class=\"divider\"></li>
                                                                        <li><a href=\"sign-up-rtl.html\">Sign Up RTL</a></li>
                                                                </ul>
                                                        </li>    
                                                        <li class=\"dropdown\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Sign In <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\">
                                                                        <li><a href=\"sign-in.html\">Sign In</a></li>
                                                                        <li class=\"divider\"></li>
                                                                        <li><a href=\"sign-in-rtl.html\">Sign In RTL</a></li>
                                                                </ul>
                                                        </li>    
                                                        <li class=\"dropdown\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Elements <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\">
                                                                        <li><a href=\"elements.html\">Elements</a></li>
                                                                        <li class=\"divider\"></li>
                                                                        <li><a href=\"elements-rtl.html\">Elements RTL</a></li>
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
                                        <div class=\"title-container\">
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
                                                                        <li><a href=\"#\"><i class=\"fa fa-angle-double-right\"></i> Donec nec mi non metus ullamcorper suscipit</a></li>
                                                                        <li><a href=\"#\"><i class=\"fa fa-angle-double-right\"></i> Morbi auctor massa mi, tempus placerat orci tempor molestie</a></li>
                                                                        <li><a href=\"#\"><i class=\"fa fa-angle-double-right\"></i> Praesent et dolor velit</a></li>
                                                                        <li><a href=\"#\"><i class=\"fa fa-angle-double-right\"></i> Aenean porta diam non elit iaculis, a tristique ligula laoreet</a></li>
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
                                                                                                <div class=\"carousel-caption\">
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
                                                                                                <div class=\"carousel-caption\">
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
                                                                                                <div class=\"carousel-caption\">
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
                                                        <img src=\"img/shadow.png\" class=\"shadow\" alt=\"shadow\">
                                                </section>
                                                
                                                <!-- ARTICLES V1 WIDGET -->
                                                <section class=\"widget articles-v1\">
                                                        <!-- Widget Header -->
                                                        <header class=\"clearfix\">
                                                                <h4>Headline</h4>
                                                                <a href=\"#\" class=\"control\"><i class=\"fa fa-plus\"></i></a>
                                                        </header>

                                                        <!-- Widget Contents: Articles-->
                                                        <div class=\"article-medium\">
                                                                <div class=\"row\">
                                                                        <!--Image-->
                                                                        <div class=\"col-sm-6\">
                                                                                <div class=\"frame\">
                                                                                        <a class=\"image\" href=\"#\">
                                                                                                <figure class=\"image-holder\">
                                                                                                        <img src=\"http://placehold.it/350x185\" alt=\"Pub qui dolorem ipsum quia dol consectetur amet adipisci velit sed\">
                                                                                                </figure>
                                                                                                <div class=\"image-light\"></div>
                                                                                                <span class=\"dashicons dashicons-format-audio\"></span>
                                                                                        </a>
                                                                                </div>
                                                                                <img src=\"img/shadow.png\" class=\"shadow\" alt=\"shadow\">                                    
                                                                        </div>

                                                                        <!--Content-->
                                                                        <div class=\"col-sm-6\">
                                                                                <h4><a href=\"#\">Pub Qui Dolorem Ipsum Quia Dol Consectetur Amet Adipisci Velit Sed</a></h4>
                                                                                <p class=\"post-meta\">
                                                                                        <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                        <a href=\"#\"><span class=\"fa fa-folder\"></span> Bussiness</a> &nbsp;
                                                                                        <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a> &nbsp;
                                                                                        <a href=\"#\"><span class=\"fa fa-eye\"></span> 4,448</a>
                                                                                </p>
                                                                                <p>
                                                                                        Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                                                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea consequat. Duis aute irure 
                                                                                        reprehenderit... 
                                                                                </p>                                    
                                                                        </div>
                                                                </div>
                                                        </div>
                                                        <hr>

                                                        <div class=\"article-medium\">
                                                                <div class=\"row\">
                                                                        <!--Image-->
                                                                        <div class=\"col-sm-6\">
                                                                                <div class=\"frame\">
                                                                                        <a class=\"image\" href=\"#\">
                                                                                                <figure class=\"image-holder\">
                                                                                                        <img src=\"http://placehold.it/350x185\" alt=\"Coffee eros non risus suscipit faucibus Sed quis\">
                                                                                                </figure><div class=\"image-light\"></div>
                                                                                                <span class=\"dashicons dashicons-format-chat\"></span>
                                                                                        </a>
                                                                                </div>
                                                                                <img src=\"img/shadow.png\" class=\"shadow\" alt=\"shadow\">                                    
                                                                        </div>

                                                                        <!--Content-->
                                                                        <div class=\"col-sm-6\">
                                                                                <h4><a href=\"#\">Coffee Eros Non Risus Suscipit Faucibus Sed Quis</a></h4>
                                                                                <p class=\"post-meta\">
                                                                                        <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                        <a href=\"#\"><span class=\"fa fa-folder\"></span> Bussiness</a> &nbsp;
                                                                                        <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a> &nbsp;
                                                                                        <a href=\"#\"><span class=\"fa fa-eye\"></span> 4,448</a>
                                                                                </p>
                                                                                <p>
                                                                                        Proin bibendum, libero in dictum pellentesque, lorem enim varius tellus, nec aliquet 
                                                                                        dolor risus non sem. Curabitur placerat, quam vel bibendum pretium, arcu dui c
                                                                                        onsectetur tellus, et tincidunt turpis... 
                                                                                </p>                                    
                                                                        </div>
                                                                </div>
                                                        </div>
                                                        <hr>

                                                        <div class=\"article-medium\">
                                                                <div class=\"row\">
                                                                        <!--Image-->
                                                                        <div class=\"col-sm-6\">
                                                                                <div class=\"frame\">
                                                                                        <a class=\"image\" href=\"#\">
                                                                                                <figure class=\"image-holder\">
                                                                                                        <img src=\"http://placehold.it/350x185\" alt=\"branches eros quam ultricies et condimentum a porta quis neque\">
                                                                                                </figure>
                                                                                                <div class=\"image-light\"></div>
                                                                                                <span class=\"dashicons dashicons-format-gallery\"></span>
                                                                                        </a>
                                                                                </div>
                                                                                <img src=\"img/shadow.png\" class=\"shadow\" alt=\"shadow\">                                    
                                                                        </div>

                                                                        <!--Content-->
                                                                        <div class=\"col-sm-6\">
                                                                                <h4><a href=\"#\">Branches Eros Quam Ultricies Et Condimentum A Porta Quis Neque</a></h4>
                                                                                <p class=\"post-meta\">
                                                                                        <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                        <a href=\"#\"><span class=\"fa fa-folder\"></span> Weather</a> &nbsp;
                                                                                        <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a> &nbsp;
                                                                                        <a href=\"#\"><span class=\"fa fa-eye\"></span> 4,448</a>
                                                                                </p>
                                                                                <p>
                                                                                        Vivamus fermentum, mi nec convallis congue Sed do eiusmod tempor incididunt ut labore et, 
                                                                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea consequat. Duis aute 
                                                                                        Mauris ac nisl nunc... 
                                                                                </p>                                    
                                                                        </div>
                                                                </div>
                                                        </div>
                                                        <hr>

                                                        <div class=\"article-medium\">
                                                                <div class=\"row\">
                                                                        <!--Image-->
                                                                        <div class=\"col-sm-6\">
                                                                                <div class=\"frame\">
                                                                                        <a class=\"image\" href=\"#\">
                                                                                                <figure class=\"image-holder\">
                                                                                                        <img src=\"http://placehold.it/350x185\" alt=\"boat dui accumsan velit vel tincidunt dui leo et dui\">
                                                                                                </figure>
                                                                                                <div class=\"image-light\"></div>
                                                                                                <span class=\"dashicons dashicons-format-image\"></span>
                                                                                        </a>
                                                                                </div>
                                                                                <img src=\"img/shadow.png\" class=\"shadow\" alt=\"shadow\">                                    
                                                                        </div>

                                                                        <!--Content-->
                                                                        <div class=\"col-sm-6\">
                                                                                <h4><a href=\"#\">Boat Dui Accumsan Velit Vel Dincidunt Dui Leo Et Dui</a></h4>
                                                                                <p class=\"post-meta\">
                                                                                        <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                        <a href=\"#\"><span class=\"fa fa-folder\"></span> Traffic</a> &nbsp;
                                                                                        <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a> &nbsp;
                                                                                        <a href=\"#\"><span class=\"fa fa-eye\"></span> 4,448</a>
                                                                                </p>
                                                                                <p>
                                                                                        Vivamus fermentum, mi nec convallis congue Sed do eiusmod tempor incididunt ut labore et, 
                                                                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea consequat. Duis aute 
                                                                                        Mauris ac nisl nunc... 
                                                                                </p>                                    
                                                                        </div>

                                                                </div>
                                                        </div>
                                                        <hr>
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
                                                        <img src=\"img/shadow.png\" alt=\"shadow\" class=\"shadow\">                                                        
                                                </section>

                                  
                                                <!-- ARTICLES V2 WIDGET -->
                                                <section class=\"widget articles-v2\">
                                                        <!-- Widget Header -->
                                                        <header class=\"clearfix\">
                                                                <h4>Politics</h4>
                                                                <a href=\"#\" class=\"control\"><i class=\"fa fa-plus\"></i></a>
                                                        </header>

                                                        <!-- Widget Contents -->
                                                        <div class=\"content row\">
                                                                <div class=\"col-sm-6 article-medium\">    
                                                                        <!--frame-->
                                                                        <div class=\"frame\">
                                                                                <!--image-->
                                                                                <a class=\"image\" href=\"#\">
                                                                                        <figure class=\"image-holder\">
                                                                                                <img src=\"http://placehold.it/350x185\" alt=\"ulm town home cathedral square quantitative mass\">
                                                                                        </figure>
                                                                                        <div class=\"image-light\"></div>
                                                                                        <span class=\"dashicons dashicons-format-quote\"></span>
                                                                                </a>
                                                                        </div>
                                                                        <img src=\"img/shadow.png\" class=\"shadow\" alt=\"shadow\">
                                                                        
                                                                        <h4><a href=\"#\">Ulm Town Home Cathedral Square Quantitative Mass</a></h4>

                                                                        <!--content-->
                                                                        <p>
                                                                                Laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit 
                                                                                in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint... 
                                                                        </p>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> December 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324 comments</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-eye\"></span> 4,448 views</a>
                                                                        </p>
                                                                        <hr>
                                                                </div>

                                                                <div class=\"col-sm-6 article-tiny\">
                                                                        <!-- image -->
                                                                        <a href=\"#\" class=\"image\">
                                                                                <figure class=\"image-holder\">
                                                                                        <img src=\"http://placehold.it/95x75\" alt=\"morocco africa rally desert marroc sand dunes morocco africa rally  \">
                                                                                </figure>
                                                                                <div class=\"image-light\"></div>
                                                                                <span class=\"dashicons dashicons-format-links\"></span>
                                                                        </a>

                                                                        <!--content-->
                                                                        <h5><a href=\"#\">Morocco Africa Rally Desert Marroc Sand Dunes Morocco Africa Rally</a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-eye\"></span> 4,448</a>
                                                                        </p>
                                                                        <hr>
                                                                </div>

                                                                <div class=\"col-sm-6 article-tiny\">
                                                                        <!--image-->
                                                                        <a href=\"#\" class=\"image\">
                                                                                <figure class=\"image-holder\">
                                                                                        <img src=\"http://placehold.it/95x75\" alt=\"Mauris mattis ullamcorper euismod Nulla convallis \">
                                                                                </figure>
                                                                                <div class=\"image-light\"></div>
                                                                                <span class=\"dashicons dashicons-format-aside\"></span>
                                                                        </a>

                                                                        <!--content-->
                                                                        <h5><a href=\"#\">Mauris Mattis Ullamcorper Euismod Nulla Convallis</a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-eye\"></span> 4,448</a>
                                                                        </p>
                                                                        <hr>
                                                                </div>

                                                                <div class=\"col-sm-6 article-tiny\">
                                                                        <!--image-->
                                                                        <a href=\"#\" class=\"image\">
                                                                                <figure class=\"image-holder\">
                                                                                        <img src=\"http://placehold.it/95x75\" alt=\"Nepal Kathmandu Road Center Chaotic\">
                                                                                </figure>
                                                                                <div class=\"image-light\"></div>
                                                                                <span class=\"dashicons dashicons-format-audio\"></span>
                                                                        </a>

                                                                        <!--content-->
                                                                        <h5><a href=\"#\">Nepal Kathmandu Road Center Chaotic </a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-eye\"></span> 4,448</a>
                                                                        </p>
                                                                        <hr>
                                                                </div>
                                                        </div><!--.content-->
                                                </section><!--.widget-->

                                                
                                                <div class=\"row\">
                                                        <!-- ARTICLES V3 WIDGET -->
                                                        <section class=\"widget articles-v3 col-sm-6\">
                                                                <!-- Widget header -->
                                                                <header class=\"clearfix\">
                                                                        <h4>Science</h4>
                                                                        <a href=\"#\" class=\"control\"><i class=\"fa fa-plus\"></i></a>
                                                                </header>

                                                                <!-- Widget contents -->
                                                                <div class=\"article-medium\">        
                                                                        <!--image-->
                                                                        <div class=\"frame\">
                                                                                <a class=\"image\" href=\"#\">                                                                                        
                                                                                        <figure class=\"image-holder\">
                                                                                                <img src=\"http://placehold.it/350x185\" alt=\"Phasellus eu diam at arcu laoreet elementum at id augue\">
                                                                                        </figure>
                                                                                        <div class=\"image-light\"></div>
                                                                                        <span class=\"dashicons dashicons-format-gallery\"></span>
                                                                                </a>
                                                                        </div>
                                                                        <img src=\"img/shadow.png\" class=\"shadow\" alt=\"shadow\">
                                                                        
                                                                        <h4><a href=\"#\">Phasellus Eu Diam At Arcu Laoreet Elementum At Id Augue</a></h4>
                                                                        
                                                                        <!--content-->
                                                                        <p>
                                                                                Laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit 
                                                                                in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint... 
                                                                        </p>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> December 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324 comments</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-eye\"></span> 4,448 views</a>
                                                                        </p>
                                                                        <hr>
                                                                </div>

                                                                <div class=\"article-tiny\">
                                                                        <!--image-->
                                                                        <a href=\"#\" class=\"image\">
                                                                                <figure class=\"image-holder\">
                                                                                        <img src=\"http://placehold.it/95x75\" alt=\"douglas x3 stiletto tellus quis urna porttitor tempor In eu egestas dui\">
                                                                                </figure>
                                                                                <div class=\"image-light\"></div>
                                                                                <span class=\"dashicons dashicons-format-image\"></span>
                                                                        </a>
                                                                        
                                                                        <!--content-->
                                                                        <h5><a href=\"#\">Douglas X3 Stiletto Tellus Quis Urna Porttitor Tempor In Eu Egestas Dui</a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-eye\"></span> 4,448</a>
                                                                        </p>
                                                                        <hr>
                                                                </div>

                                                                <div class=\"article-tiny\">
                                                                        <!--image-->
                                                                        <a href=\"#\" class=\"image\">
                                                                                <figure class=\"image-holder\">
                                                                                        <img src=\"http://placehold.it/95x75\" alt=\"Vestibulum ante ipsum primis in faucibus orci luctus et ultrices\">
                                                                                </figure>
                                                                                <div class=\"image-light\"></div>
                                                                                <span class=\"dashicons dashicons-format-links\"></span>
                                                                        </a>
                                                                        
                                                                        <!--content-->
                                                                        <h5><a href=\"#\">Vestibulum Ante Ipsum Primis In Faucibus Orci Luctus Et Ultrices</a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-eye\"></span> 4,448</a>
                                                                        </p>
                                                                        <hr>
                                                                </div>

                                                                <div class=\"article-tiny\">
                                                                        <!--image-->
                                                                        <a href=\"#\" class=\"image\">
                                                                                <figure class=\"image-holder\">
                                                                                        <img src=\"http://placehold.it/95x75\" alt=\"Nulla vitae velit ac velit luctus facilisis\">
                                                                                </figure>
                                                                                <div class=\"image-light\"></div>
                                                                                <span class=\"dashicons dashicons-format-quote\"></span>
                                                                        </a>
                                                                        
                                                                        <!--content-->
                                                                        <h5><a href=\"#\">Nulla Vitae Velit Ac Velit Luctus Facilisis </a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-eye\"></span> 4,448</a>
                                                                        </p>
                                                                        <hr>
                                                                </div>
                                                        </section><!--.widget-->

                                                        <!-- ARTICLES V3 WIDGET -->
                                                        <section class=\"widget articles-v3 col-sm-6\">
                                                                <!-- Widget header -->
                                                                <header class=\"clearfix\">
                                                                        <h4>Entertainment</h4>
                                                                        <a href=\"#\" class=\"control\"><i class=\"fa fa-plus\"></i></a>
                                                                </header>

                                                                <!-- Widget contents -->
                                                                <div class=\"article-medium\">                
                                                                        <!--image-->
                                                                        <div class=\"frame\">
                                                                                <a class=\"image\" href=\"#\">
                                                                                        <figure class=\"image-holder\">
                                                                                                <img src=\"http://placehold.it/350x185\" alt=\"wii diam iaculis dolor eget euismod odio felis faucibus nisi\">
                                                                                        </figure>
                                                                                        <div class=\"image-light\"></div>
                                                                                        <span class=\"dashicons dashicons-format-standard\"></span>                                                                                                
                                                                                </a>
                                                                        </div>
                                                                        <img src=\"img/shadow.png\" class=\"shadow\" alt=\"shadow\">
                                                                        
                                                                        <h4><a href=\"#\">Wii Diam Iaculis Dolor Eget Euismod Odio Felis Faucibus Nisi</a></h4>
                                                                        
                                                                        <!--content-->
                                                                        <p>
                                                                            Laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit 
                                                                            in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint... 
                                                                        </p>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> December 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324 comments</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-eye\"></span> 4,448 views</a>
                                                                        </p>
                                                                        <hr>
                                                                </div>

                                                                <div class=\"article-tiny\">
                                                                        <!--image-->
                                                                        <a href=\"#\" class=\"image\">
                                                                                <figure class=\"image-holder\">
                                                                                        <img src=\"http://placehold.it/95x75\" alt=\"Band curabitur euismod interdum orci ac porttitor  \">
                                                                                </figure>
                                                                                <div class=\"image-light\"></div>
                                                                                <span class=\"dashicons dashicons-format-status\"></span>
                                                                        </a>
                                                                        
                                                                        <!--content-->
                                                                        <h5><a href=\"#\">Band Curabitur Euismod Interdum Orci Ac Porttitor </a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-eye\"></span> 4,448</a>
                                                                        </p>
                                                                        <hr>
                                                                </div>

                                                                <div class=\"article-tiny\">
                                                                        <!--image-->
                                                                        <a href=\"#\" class=\"image\">
                                                                                <figure class=\"image-holder\">
                                                                                        <img src=\"http://placehold.it/95x75\" alt=\"Nulla id eros ut nibh hendrerit sollicitudin \">
                                                                                </figure>
                                                                                <div class=\"image-light\"></div>
                                                                                <span class=\"dashicons dashicons-format-video\"></span>
                                                                        </a>
                                                                        
                                                                        <!--content-->
                                                                        <h5><a href=\"#\">Nulla Id Eros Ut Nibh Hendrerit Sollicitudin</a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-eye\"></span> 4,448</a>
                                                                        </p>
                                                                        <hr>
                                                                </div>

                                                                <div class=\"article-tiny\">
                                                                        <!--image-->
                                                                        <a href=\"#\" class=\"image\">
                                                                                <figure class=\"image-holder\">
                                                                                        <img src=\"http://placehold.it/95x75\" alt=\"Day of the dead Sed nec auctor Nunc quis cursus libero\">
                                                                                </figure>
                                                                                <div class=\"image-light\"></div>
                                                                                <span class=\"dashicons dashicons-format-aside\"></span>
                                                                        </a>
                                                                        
                                                                        <!--content-->
                                                                        <h5><a href=\"#\">Day of the Dead Sed Nec Auctor Nunc Quis Cursus Libero</a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-eye\"></span> 4,448</a>
                                                                        </p>
                                                                        <hr>
                                                                </div>
                                                        </section><!--.widget-->
                                                </div>

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
                                                        <img src=\"img/shadow.png\" alt=\"shadow\" class=\"shadow\">                                                        
                                                </section>

                                                <div class=\"row\">
                                                        <!-- ARTICLES V4 WIDGET -->
                                                        <section class=\"widget articles-v4 col-sm-3 col-xs-6\">
                                                                <!-- Widget Header -->
                                                                <header class=\"clearfix\">
                                                                        <h4>World</h4>
                                                                        <a href=\"#\" class=\"control\"><i class=\"fa fa-plus\"></i></a>
                                                                </header>

                                                                <!-- Widget contents -->
                                                                <div class=\"article-small\"> 
                                                                        <!--image-->
                                                                        <a href=\"#\" class=\"image\">
                                                                                <figure class=\"image-holder\">
                                                                                        <img src=\"http://placehold.it/165x90\" alt=\"Vestibulum a lacus suscipit sodales augue\">
                                                                                </figure>
                                                                                <div class=\"image-light\"></div>
                                                                                <span class=\"dashicons dashicons-format-audio\"></span>
                                                                        </a>

                                                                        <!--content-->
                                                                        <h5><a href=\"#\">Vestibulum a Lacus Suscipit Sodales Augue</a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a>
                                                                        </p>
                                                                </div>
                                                                <hr>

                                                                <div>
                                                                        <h5><a href=\"#\">Integer Ut Egestas Lectus Sed Ut Elementum Justo</a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a>
                                                                        </p>
                                                                </div>
                                                                <hr>

                                                                <div>
                                                                        <h5><a href=\"#\">Nam lacinia nulla et ipsum gravida egestas</a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a>
                                                                        </p>
                                                                </div>
                                                                <hr>

                                                                <div>
                                                                        <h5><a href=\"#\">Nulla Laoreet Lectus Condimentum</a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a>
                                                                        </p>
                                                                </div>
                                                                <hr>

                                                        </section><!--.widget-->

                                                        <!-- ARTICLES V4 WIDGET -->
                                                        <section class=\"widget articles-v4 col-sm-3 col-xs-6\">
                                                                <!-- Widget header -->
                                                                <header class=\"clearfix\">
                                                                        <h4>Health</h4>
                                                                        <a href=\"#\" class=\"control\"><i class=\"fa fa-plus\"></i></a>
                                                                </header>

                                                                <!-- Widget content -->
                                                                <div class=\"article-small\">                                        
                                                                        <a href=\"#\" class=\"image\">
                                                                                <figure class=\"image-holder\">
                                                                                        <img src=\"http://placehold.it/165x90\" alt=\"Drugs suscipit neque eu viverra justo \">
                                                                                </figure>
                                                                                <div class=\"image-light\"></div>
                                                                                <span class=\"dashicons dashicons-format-chat\"></span>
                                                                        </a>
                                                                        <h5><a href=\"#\">Drugs Suscipit Neque Eu Viverra Justo </a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a>
                                                                        </p>
                                                                </div>
                                                                <hr>

                                                                <div>
                                                                        <h5><a href=\"#\">Vestibulum Tincidunt Aliquet Massa</a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a>
                                                                        </p>
                                                                </div>
                                                                <hr>

                                                                <div>
                                                                        <h5><a href=\"#\">Eu Cursus Urna Lacinia Nec Maecenas Tincidunt</a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a>
                                                                        </p>
                                                                </div>
                                                                <hr>

                                                                <div>
                                                                        <h5><a href=\"#\">Mi Ac Porttitor Sodales Nisi Est Convallis Arcu Sit Amet</a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a>
                                                                        </p>
                                                                </div>
                                                                <hr>
                                                        </section><!--.widget-->
                                                        
                                                        <div class=\"clearfix visible-xs\"></div>

                                                        <!-- ARTICLES V4 WIDGET -->
                                                        <section class=\"widget articles-v4 col-sm-3 col-xs-6\">
                                                                <!-- Widget header -->
                                                                <header class=\"clearfix\">
                                                                        <h4>Sport</h4>
                                                                        <a href=\"#\" class=\"control\"><i class=\"fa fa-plus\"></i></a>
                                                                </header>

                                                                <!-- Widget content -->
                                                                <div class=\"article-small\">                                        
                                                                        <a href=\"#\" class=\"image\">
                                                                                <figure class=\"image-holder\">
                                                                                        <img src=\"http://placehold.it/165x90\" alt=\"uss constitution boston massachusetts \">
                                                                                </figure>
                                                                                <div class=\"image-light\"></div>
                                                                                <span class=\"dashicons dashicons-format-gallery\"></span>
                                                                        </a>
                                                                        <h5><a href=\"#\">Climb Ultrices Tellus Massa Quis Vestibulum Ante Ipsum</a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a>
                                                                        </p>
                                                                </div>
                                                                <hr>

                                                                <div>
                                                                        <h5><a href=\"#\">Primis In Faucibus Orci Luctus Et Ultrices </a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a>
                                                                        </p>
                                                                </div>
                                                                <hr>

                                                                <div>
                                                                        <h5><a href=\"#\">Posuere Cubilia Curae Nulla Congue Cursus </a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a>
                                                                        </p>
                                                                </div>
                                                                <hr>

                                                                <div>
                                                                        <h5><a href=\"#\">In Euismod Fusce Ultrices Lectus Non</a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a>
                                                                        </p>
                                                                </div>
                                                                <hr>
                                                        </section><!--.widget-->

                                                        <!-- ARTICLES V4 WIDGET -->
                                                        <section class=\"widget articles-v4 col-sm-3 col-xs-6\">
                                                                <!-- Widget header -->
                                                                <header class=\"clearfix\">
                                                                        <h4>Tech</h4>
                                                                        <a href=\"#\" class=\"control\"><i class=\"fa fa-plus\"></i></a>
                                                                </header>

                                                                <!-- Widget Contents -->
                                                                <div class=\"article-small\">       
                                                                        <!--image-->                                 
                                                                        <a href=\"#\" class=\"image\">
                                                                                <figure class=\"image-holder\">
                                                                                        <img src=\"http://placehold.it/165x90\" alt=\"vitae accumsan quam auctor Praesent dignissim \">
                                                                                </figure>
                                                                                <div class=\"image-light\"></div>
                                                                                <span class=\"dashicons dashicons-format-image\"></span>
                                                                        </a>

                                                                        <!--content-->
                                                                        <h5><a href=\"#\">Vitae Accumsan Quam Auctor Praesent Dignissim </a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a>
                                                                        </p>
                                                                </div>
                                                                <hr>

                                                                <div>
                                                                        <h5><a href=\"#\">Erat At Eleifend Feugiat Turpis Lacus</a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a>
                                                                        </p>
                                                                </div>
                                                                <hr>

                                                                <div>
                                                                        <h5><a href=\"#\">Ultrices Est Quis Blandit Arcu Est A Ante</a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a>
                                                                        </p>
                                                                </div>
                                                                <hr>

                                                                <div>
                                                                        <h5><a href=\"#\">Phasellus Quis Mollis Mauris at Dignissim Sem</a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a>
                                                                        </p>
                                                                </div>
                                                                <hr>
                                                        </section><!--.widget-->
                                                </div>                                                   
                                        </main><!--#main-content-->

                                        <!-- SIDEBAR 
                                        ============ -->
                                        <aside class=\"col-md-4\">
                                                <div class=\"row\">
                                                        <!-- SEARCH WIDGET -->
                                                        <section class=\"col-sm-6 col-md-12 widget\">
                                                                <!-- Widget header -->
                                                                <header class=\"clearfix\"><h4>Search Widget</h4></header>  

                                                                <!-- Widget content -->
                                                                <form method=\"get\" action=\"home-version-1.html\">
                                                                        <input type=\"search\" placeholder=\"Enter keywords\">
                                                                        <button type=\"submit\" class=\"btn btn-primary\">Search</button>
                                                                </form>
                                                        </section>

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
                                                                <img src=\"img/shadow.png\" class=\"shadow\" alt=\"shadow\">
                                                        </section>

                                                        <!-- FEEDBURNER WIDGET -->
                                                        <section class=\"col-sm-6 col-md-12 widget feedburner\">
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
                                                        <section class=\"col-sm-6 col-md-12 widget\">
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
                                                                        <li><a href=\"#recent-aside\" data-toggle=\"tab\">Recent</a></li>
                                                                        <li><a href=\"#comments-aside\" data-toggle=\"tab\">Comments</a></li>
                                                                </ul>

                                                                <!-- Tab contents -->
                                                                <div class=\"tab-content\">
                                                                        <!--Popular-->
                                                                        <div class=\"tab-pane active fade in\" id=\"popular-aside\">
                                                                                <div class=\"article-tiny\">
                                                                                        <a href=\"#\" class=\"image\">
                                                                                                <figure class=\"image-holder\">
                                                                                                        <img src=\"http://placehold.it/95x75\" alt=\"Mauris mattis ullamcorper euismod Nulla convallis \">
                                                                                                </figure>
                                                                                                <div class=\"image-light\"></div>
                                                                                                <span class=\"dashicons dashicons-format-gallery\"></span>
                                                                                        </a>
                                                                                        <h5><a href=\"#\">Mauris mattis ullamcorper euismod Nulla convallis</a></h5>
                                                                                        <p class=\"post-meta\">
                                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Jan 4, 2014</a> &nbsp;
                                                                                                <a href=\"#\"><span class=\"fa fa-folder\"></span> Travel</a>
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
                                                                                        <h5><a href=\"#\">Nulla vitae velit ac velit luctus facilisis dictum Mauris malesuada ante ut gravida condimentum</a></h5>
                                                                                        <p class=\"post-meta\">
                                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Jan 4, 2014</a> &nbsp;
                                                                                                <a href=\"#\"><span class=\"fa fa-folder\"></span> Science</a>
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
                                                                                        <h5><a href=\"#\">Nulla id eros ut nibh hendrerit sollicitudin</a></h5>
                                                                                        <p class=\"post-meta\">
                                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Jan 4, 2014</a> &nbsp;
                                                                                                <a href=\"#\"><span class=\"fa fa-folder\"></span> National</a>
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
                                                                                        <h5><a href=\"#\">ornare nibh Nunc semper dolor quis augue venenatis</a></h5>
                                                                                        <p class=\"post-meta\">
                                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Jan 4, 2014</a> &nbsp;
                                                                                                <a href=\"#\"><span class=\"fa fa-folder\"></span> Health</a>
                                                                                        </p>
                                                                                </div>
                                                                                <hr>
                                                                        </div>

                                                                        <!--Recent-->
                                                                        <div class=\"tab-pane fade\" id=\"recent-aside\">
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
                                                                        <div class=\"tab-pane fade\" id=\"comments-aside\">
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

                                                        <!-- TWITTER FEED -->                            
                                                        <section class=\"col-sm-6 col-md-12 widget\">
                                                                <!-- Tab Menus -->
                                                                <ul class=\"nav nav-tabs\">
                                                                        <li class=\"active\"><a href=\"#tweet-image\" data-toggle=\"tab\">Twitter Feed</a></li>
                                                                        <li><a href=\"#tweet-icon\" data-toggle=\"tab\">Icon</a></li>
                                                                        <li><a href=\"#tweet-text\" data-toggle=\"tab\">Text</a></li>
                                                                </ul>

                                                                <!-- Tab Contents -->
                                                                <div class=\"tab-content\">
                                                                        <!--Tweet image-->
                                                                        <div class=\"tab-pane active fade in\" id=\"tweet-image\">
                                                                                <div class=\"twitter-feed\">
                                                                                        <script type=\"text/template\">
                                                                                                <div class=\"avatar\">";
        // line 1367
        echo twig_escape_filter($this->env, ($context["avatar"] ?? $this->getContext($context, "avatar")), "html", null, true);
        echo "</div>
                                                                                                <div class=\"content\">
                                                                                                        ";
        // line 1369
        echo twig_escape_filter($this->env, ($context["tweet"] ?? $this->getContext($context, "tweet")), "html", null, true);
        echo " 
                                                                                                        <p class=\"post-meta\">
                                                                                                                <a href=\"";
        // line 1371
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"fa fa-clock-o\"></i> ";
        echo twig_escape_filter($this->env, ($context["date"] ?? $this->getContext($context, "date")), "html", null, true);
        echo "</a> &nbsp;
                                                                                                                <a href=\"";
        // line 1372
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"fa fa-reply\"></i> Reply</a>
                                                                                                        </p>
                                                                                                </div>
                                                                                        </script>
                                                                                </div>
                                                                        </div><!--#tweet-image-->

                                                                        <!--Tweet icon-->
                                                                        <div class=\"tab-pane\" id=\"tweet-icon\">
                                                                                <div class=\"twitter-feed\">
                                                                                        <script type=\"text/template\">
                                                                                                <div class=\"avatar\"><i class=\"fa fa-twitter\"></i></div>
                                                                                                <div class=\"content\">
                                                                                                        ";
        // line 1385
        echo twig_escape_filter($this->env, ($context["tweet"] ?? $this->getContext($context, "tweet")), "html", null, true);
        echo " 
                                                                                                        <p class=\"post-meta\">
                                                                                                                <a href=\"";
        // line 1387
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"fa fa-clock-o\"></i> ";
        echo twig_escape_filter($this->env, ($context["date"] ?? $this->getContext($context, "date")), "html", null, true);
        echo "</a> &nbsp;
                                                                                                                <a href=\"";
        // line 1388
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"fa fa-reply\"></i> Reply</a>
                                                                                                        </p>
                                                                                                </div>
                                                                                        </script>
                                                                                </div>
                                                                        </div>

                                                                        <!--Tweet text-->
                                                                        <div class=\"tab-pane\" id=\"tweet-text\">
                                                                                <div class=\"twitter-feed\">
                                                                                        <script type=\"text/template\">
                                                                                                <div class=\"content\">
                                                                                                        ";
        // line 1400
        echo twig_escape_filter($this->env, ($context["tweet"] ?? $this->getContext($context, "tweet")), "html", null, true);
        echo " 
                                                                                                        <p class=\"post-meta\">
                                                                                                                <a href=\"";
        // line 1402
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"fa fa-clock-o\"></i> ";
        echo twig_escape_filter($this->env, ($context["date"] ?? $this->getContext($context, "date")), "html", null, true);
        echo "</a> &nbsp;
                                                                                                                <a href=\"";
        // line 1403
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"fa fa-reply\"></i> Reply</a>
                                                                                                        </p>
                                                                                                </div>
                                                                                        </script>
                                                                                </div>
                                                                        </div>
                                                                </div><!--.tab-content-->
                                                        </section><!--.widget-->

                                                        <!-- ADS WIDGET -->
                                                        <section class=\"widget col-sm-6 col-md-12 no-mobile\">
                                                                <!-- Widget Header -->
                                                                <header class=\"clearfix\"><h4>Advertisement</h4></header>

                                                                <!-- Widget Content -->
                                                                <div class=\"frame thick\">
                                                                        <a href=\"#\"><div data-src=\"http://placehold.it/300x250/f0f0f9\" data-alt=\"Banner image\"></div></a>
                                                                </div>
                                                                <img src=\"img/shadow.png\" class=\"shadow\" alt=\"shadow\">
                                                        </section>

                                                        <!-- VIMEO WIDGET -->
                                                        <section class=\"col-sm-6 col-md-12 widget\">
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
                                                                        <li><a href=\"#tags\" data-toggle=\"tab\">Tags</a></li>
                                                                </ul><!--.nav-tabs-->

                                                                <!-- Tab contents -->
                                                                <div class=\"tab-content\">     
                                                                        <!-- Categories-->
                                                                        <div class=\"tab-pane active fade in\" id=\"categories\">
                                                                                <ul class=\"categories\">
                                                                                        <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> National <span class=\"post-counts\">54,435,464</span></a></li>
                                                                                        <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> World  <span class=\"post-counts\">34,355,346</span></a></li>
                                                                                        <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Politics <span class=\"post-counts\">3,234,356</span></a></li>
                                                                                        <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Sport <span class=\"post-counts\">874,355</span></a></li>
                                                                                        <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Entertainment <span class=\"post-counts\">11,234,987</span></a></li>
                                                                                        <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Technology <span class=\"post-counts\">9,937,397</span></a></li>
                                                                                        <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Lifestyle <span class=\"post-counts\">345,385</span></a></li>
                                                                                        <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Finance <span class=\"post-counts\">593,945</span></a></li>
                                                                                </ul>
                                                                        </div>

                                                                        <!-- Tags -->
                                                                        <div class=\"tab-pane fade\" id=\"tags\">
                                                                                <ul class=\"tags clearfix\">
                                                                                        <li><a href=\"#\">morbi id</a></li>
                                                                                        <li><a href=\"#\">vulputate est</a></li>
                                                                                        <li><a href=\"#\">tiam quis </a></li>
                                                                                        <li><a href=\"#\">lectus</a></li>
                                                                                        <li><a href=\"#\">nunc</a></li>
                                                                                        <li><a href=\"#\">phasellus pharetra</a></li>
                                                                                        <li><a href=\"#\">velit quam</a></li>
                                                                                        <li><a href=\"#\">id laoreet</a></li>
                                                                                        <li><a href=\"#\">elit</a></li>
                                                                                        <li><a href=\"#\">porta</a></li>
                                                                                        <li><a href=\"#\">rhoncus</a></li>
                                                                                        <li><a href=\"#\">unc sit</a></li>
                                                                                        <li><a href=\"#\">amet nunc</a></li>
                                                                                        <li><a href=\"#\">velit tincidunt</a></li>
                                                                                        <li><a href=\"#\">nec fermentum</a></li>
                                                                                        <li><a href=\"#\">cursus</a></li>
                                                                                        <li><a href=\"#\">metus</a></li>
                                                                                        <li><a href=\"#\">estibulum</a></li>
                                                                                        <li><a href=\"#\">eleifend at ligula</a></li>
                                                                                        <li><a href=\"#\">vel aliquam</a></li>
                                                                                        <li><a href=\"#\">id velit</a></li>
                                                                                        <li><a href=\"#\">usce</a></li>
                                                                                        <li><a href=\"#\">hasellus</a></li>
                                                                                        <li><a href=\"#\">semper</a></li>
                                                                                        <li><a href=\"#\">dui ut</a></li>
                                                                                </ul>
                                                                        </div>        
                                                                </div><!--.tab-content-->
                                                        </section>

                                                        <!-- ACCORDION -->
                                                        <section class=\"col-sm-6 col-md-12 widget\">
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
                                <section id=\"slider-tabs\" class=\"widget no-mobile\">
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
                                                                                        <a href=\"";
        // line 1752
        echo twig_escape_filter($this->env, ($context["link"] ?? $this->getContext($context, "link")), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo "\" class=\"dark\" target=\"_blank\">
                                                                                                <img src=\"";
        // line 1753
        echo twig_escape_filter($this->env, ($context["thumbnail"] ?? $this->getContext($context, "thumbnail")), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo "\">
                                                                                                <div class=\"layer\"></div>
                                                                                        </a>
                                                                                </li>
                                                                        </script>
                                                                </li>
                                                        </ul>
                                                </section>

                                                <!-- Popular Tags -->
                                                <section class=\"col-md-3 col-sm-6\">
                                                        <!--Title-->
                                                        <div class=\"title\"><h4>Popular Tags</h4></div>
                                                        
                                                        <!--Content-->
                                                        <ul class=\"tags clearfix\">
                                                                <li><a href=\"#\">morbi id</a></li>
                                                                <li><a href=\"#\">vulputate est</a></li>
                                                                <li><a href=\"#\">tiam quis </a></li>
                                                                <li><a href=\"#\">lectus</a></li>
                                                                <li><a href=\"#\">nunc</a></li>
                                                                <li><a href=\"#\">phasellus pharetra</a></li>
                                                                <li><a href=\"#\">velit quam</a></li>
                                                                <li><a href=\"#\">id laoreet</a></li>
                                                                <li><a href=\"#\">elit</a></li>
                                                                <li><a href=\"#\">porta</a></li>
                                                                <li><a href=\"#\">rhoncus</a></li>
                                                                <li><a href=\"#\">unc sit</a></li>
                                                                <li><a href=\"#\">amet nunc</a></li>
                                                                <li><a href=\"#\">velit tincidunt</a></li>
                                                                <li><a href=\"#\">nec fermentum</a></li>
                                                                <li><a href=\"#\">cursus</a></li>
                                                                <li><a href=\"#\">metus</a></li>
                                                                <li><a href=\"#\">estibulum</a></li>
                                                                <li><a href=\"#\">eleifend at ligula</a></li>
                                                                <li><a href=\"#\">vel aliquam</a></li>
                                                                <li><a href=\"#\">id velit</a></li>
                                                                <li><a href=\"#\">usce</a></li>
                                                                <li><a href=\"#\">hasellus</a></li>
                                                                <li><a href=\"#\">semper</a></li>
                                                                <li><a href=\"#\">dui ut</a></li>
                                                        </ul>
                                                </section>

                                                <!-- Recent Comments -->
                                                <section class=\"col-md-3 col-sm-6\">
                                                        <!--Title-->
                                                        <div class=\"title\"><h4>Recent Comments</h4></div>
                                                        
                                                        <!--Content-->
                                                        <ul class=\"recent-comments clearfix\">
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
                                        <p>Copyright &copy; 2014 - <strong>WarTa</strong></p>
                                        <ul>
                                                <li><a href=\"#\">About</a></li>
                                                <li><a href=\"#\">Terms</a></li>
                                                <li><a href=\"#\">Privacy</a></li>
                                                <li><a href=\"#\">Policy</a></li>
                                                <li><a href=\"#\">Advertising</a></li>
                                                <li><a href=\"#\">Contact</a></li>
                                        </ul>
                                </div>
                        </div><!--#footer-bottom-->                        
                </footer><!--footer-->

                <!-- jQuery  -->
                <script src=\"js/jquery.min.js\"></script>
                <script src=\"js/jquery-ui.custom.min.js\"></script>                
                
                <!-- Warta scripts -->
                <script src=\"js/script.min.js\"></script>        
                <script src=\"js/initialize.js\"></script>         
        </body>     
</html>";
        
        $__internal_6d05e1076f24df9cf4c9ccc316876db6cba4cc633c1447613d88a627f4f96345->leave($__internal_6d05e1076f24df9cf4c9ccc316876db6cba4cc633c1447613d88a627f4f96345_prof);

        
        $__internal_a90fc6e7731f5457a11dfbecc4c5c5cf3893cd18c80b30736c9cb9ef9ccd7026->leave($__internal_a90fc6e7731f5457a11dfbecc4c5c5cf3893cd18c80b30736c9cb9ef9ccd7026_prof);

    }

    public function getTemplateName()
    {
        return "@GlobalView/Default/home-version-2.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1820 => 1753,  1814 => 1752,  1462 => 1403,  1456 => 1402,  1451 => 1400,  1436 => 1388,  1430 => 1387,  1425 => 1385,  1409 => 1372,  1403 => 1371,  1398 => 1369,  1393 => 1367,  25 => 1,);
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
<html id=\"home-version-2\">
        <head>
                <title>WarTa - News/Magazine Template</title>
                <meta charset=\"UTF-8\">
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
                
                <!--Import Google font-->
                <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
                
                <!-- Stylesheets -->        
                <link href=\"css/style.min.css\" rel=\"stylesheet\">
                <link href=\"css/custom.css\" rel=\"stylesheet\">
                
                <!--Modernizr-->
                <script src=\"js/modernizr.min.js\"></script>

                <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries
                     ie8.css and ie8.js custom style  and script that needed for IE8. -->
                <!--[if lt IE 9]>
                        <link href=\"css/ie8.css\" rel=\"stylesheet\">        
                        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
                        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
                        <script src=\"js/ie8.js\"></script>
                <![endif]-->
        </head>    

        <body>
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
                                                        <li><a href=\"#\">Home</a></li>
                                                        <li><a href=\"#\">About</a></li>
                                                        <li><a href=\"#\">Contact</a></li>
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
                                                <a class=\"navbar-brand\" href=\"#\"><img src=\"img/logo.png\" alt=\"logo\"></a>
                                        </div>

                                        <!-- Collect the nav links, forms, and other content for toggling -->
                                        <div class=\"collapse navbar-collapse\" id=\"main-nav-collapse\">
                                                <ul class=\"nav navbar-nav navbar-right\">
                                                        <li class=\"active\"><a href=\"#\"><i class=\"fa fa-home\"></i></a></li>
                                                        <li class=\"dropdown\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Home <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\">
                                                                        <li><a href=\"home-version-1.html\">Home Vervion 1</a></li>
                                                                        <li><a href=\"home-version-2.html\">Home Version 2</a></li>
                                                                        <li class=\"divider\"></li>                                    
                                                                        <li><a href=\"home-version-1-rtl.html\">Home Version 1 RTL</a></li>
                                                                        <li><a href=\"home-version-2-rtl.html\">Home Version 2 RTL</a></li>
                                                                </ul>
                                                        </li>
                                                        <li class=\"dropdown\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Blog <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\">
                                                                        <li><a href=\"blog-version-1.html\">Blog Version 1</a></li>
                                                                        <li><a href=\"blog-version-2.html\">Blog Version 2</a></li>
                                                                        <li><a href=\"blog-version-3.html\">Blog Version 3</a></li>
                                                                        <li class=\"divider\"></li>
                                                                        <li><a href=\"blog-version-1-rtl.html\">Blog Version 1 RTL</a></li>
                                                                        <li><a href=\"blog-version-2-rtl.html\">Blog Version 2 RTL</a></li>
                                                                        <li><a href=\"blog-version-3-rtl.html\">Blog Version 3 RTL</a></li>
                                                                </ul>
                                                        </li>
                                                        <li class=\"dropdown\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Blog Detail <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\">
                                                                        <li><a href=\"blog-detail.html\">Blog Detail</a></li>
                                                                        <li><a href=\"review-bar.html\">Review Bar</a></li>
                                                                        <li><a href=\"review-star.html\">Review Star</a></li>
                                                                        <li><a href=\"review-bar-bottom.html\">Review Bar Bottom</a></li>
                                                                        <li><a href=\"review-star-bottom.html\">Review Star Bottom</a></li>
                                                                        <li><a href=\"gallery.html\">Gallery</a></li>
                                                                        <li class=\"divider\"></li>
                                                                        <li><a href=\"blog-detail-rtl.html\">Blog Detail RTL</a></li>
                                                                        <li><a href=\"review-bar-rtl.html\">Review Bar RTL</a></li>
                                                                        <li><a href=\"review-star-rtl.html\">Review Star RTL</a></li>
                                                                        <li><a href=\"review-bar-bottom-rtl.html\">Review Bar Bottom RTL</a></li>
                                                                        <li><a href=\"review-star-bottom-rtl.html\">Review Star Bottom RTL</a></li>
                                                                        <li><a href=\"gallery-rtl.html\">Gallery RTL</a></li>
                                                                </ul>
                                                        </li>         
                                                        <li class=\"dropdown\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Contact <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\">
                                                                        <li><a href=\"contact.html\">Contact</a></li>
                                                                        <li class=\"divider\"></li>
                                                                        <li><a href=\"contact-rtl.html\">Contact RTL</a></li>
                                                                </ul>
                                                        </li>
                                                        <li class=\"dropdown\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">404 <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\">
                                                                        <li><a href=\"404.html\">404</a></li>
                                                                        <li class=\"divider\"></li>
                                                                        <li><a href=\"404-rtl.html\">404 RTL</a></li>
                                                                </ul>
                                                        </li>                           
                                                        <li class=\"dropdown\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Sign Up <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\">
                                                                        <li><a href=\"sign-up.html\">Sign Up</a></li>
                                                                        <li class=\"divider\"></li>
                                                                        <li><a href=\"sign-up-rtl.html\">Sign Up RTL</a></li>
                                                                </ul>
                                                        </li>    
                                                        <li class=\"dropdown\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Sign In <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\">
                                                                        <li><a href=\"sign-in.html\">Sign In</a></li>
                                                                        <li class=\"divider\"></li>
                                                                        <li><a href=\"sign-in-rtl.html\">Sign In RTL</a></li>
                                                                </ul>
                                                        </li>    
                                                        <li class=\"dropdown\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Elements <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\">
                                                                        <li><a href=\"elements.html\">Elements</a></li>
                                                                        <li class=\"divider\"></li>
                                                                        <li><a href=\"elements-rtl.html\">Elements RTL</a></li>
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
                                        <div class=\"title-container\">
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
                                                                        <li><a href=\"#\"><i class=\"fa fa-angle-double-right\"></i> Donec nec mi non metus ullamcorper suscipit</a></li>
                                                                        <li><a href=\"#\"><i class=\"fa fa-angle-double-right\"></i> Morbi auctor massa mi, tempus placerat orci tempor molestie</a></li>
                                                                        <li><a href=\"#\"><i class=\"fa fa-angle-double-right\"></i> Praesent et dolor velit</a></li>
                                                                        <li><a href=\"#\"><i class=\"fa fa-angle-double-right\"></i> Aenean porta diam non elit iaculis, a tristique ligula laoreet</a></li>
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
                                                                                                <div class=\"carousel-caption\">
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
                                                                                                <div class=\"carousel-caption\">
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
                                                                                                <div class=\"carousel-caption\">
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
                                                        <img src=\"img/shadow.png\" class=\"shadow\" alt=\"shadow\">
                                                </section>
                                                
                                                <!-- ARTICLES V1 WIDGET -->
                                                <section class=\"widget articles-v1\">
                                                        <!-- Widget Header -->
                                                        <header class=\"clearfix\">
                                                                <h4>Headline</h4>
                                                                <a href=\"#\" class=\"control\"><i class=\"fa fa-plus\"></i></a>
                                                        </header>

                                                        <!-- Widget Contents: Articles-->
                                                        <div class=\"article-medium\">
                                                                <div class=\"row\">
                                                                        <!--Image-->
                                                                        <div class=\"col-sm-6\">
                                                                                <div class=\"frame\">
                                                                                        <a class=\"image\" href=\"#\">
                                                                                                <figure class=\"image-holder\">
                                                                                                        <img src=\"http://placehold.it/350x185\" alt=\"Pub qui dolorem ipsum quia dol consectetur amet adipisci velit sed\">
                                                                                                </figure>
                                                                                                <div class=\"image-light\"></div>
                                                                                                <span class=\"dashicons dashicons-format-audio\"></span>
                                                                                        </a>
                                                                                </div>
                                                                                <img src=\"img/shadow.png\" class=\"shadow\" alt=\"shadow\">                                    
                                                                        </div>

                                                                        <!--Content-->
                                                                        <div class=\"col-sm-6\">
                                                                                <h4><a href=\"#\">Pub Qui Dolorem Ipsum Quia Dol Consectetur Amet Adipisci Velit Sed</a></h4>
                                                                                <p class=\"post-meta\">
                                                                                        <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                        <a href=\"#\"><span class=\"fa fa-folder\"></span> Bussiness</a> &nbsp;
                                                                                        <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a> &nbsp;
                                                                                        <a href=\"#\"><span class=\"fa fa-eye\"></span> 4,448</a>
                                                                                </p>
                                                                                <p>
                                                                                        Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                                                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea consequat. Duis aute irure 
                                                                                        reprehenderit... 
                                                                                </p>                                    
                                                                        </div>
                                                                </div>
                                                        </div>
                                                        <hr>

                                                        <div class=\"article-medium\">
                                                                <div class=\"row\">
                                                                        <!--Image-->
                                                                        <div class=\"col-sm-6\">
                                                                                <div class=\"frame\">
                                                                                        <a class=\"image\" href=\"#\">
                                                                                                <figure class=\"image-holder\">
                                                                                                        <img src=\"http://placehold.it/350x185\" alt=\"Coffee eros non risus suscipit faucibus Sed quis\">
                                                                                                </figure><div class=\"image-light\"></div>
                                                                                                <span class=\"dashicons dashicons-format-chat\"></span>
                                                                                        </a>
                                                                                </div>
                                                                                <img src=\"img/shadow.png\" class=\"shadow\" alt=\"shadow\">                                    
                                                                        </div>

                                                                        <!--Content-->
                                                                        <div class=\"col-sm-6\">
                                                                                <h4><a href=\"#\">Coffee Eros Non Risus Suscipit Faucibus Sed Quis</a></h4>
                                                                                <p class=\"post-meta\">
                                                                                        <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                        <a href=\"#\"><span class=\"fa fa-folder\"></span> Bussiness</a> &nbsp;
                                                                                        <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a> &nbsp;
                                                                                        <a href=\"#\"><span class=\"fa fa-eye\"></span> 4,448</a>
                                                                                </p>
                                                                                <p>
                                                                                        Proin bibendum, libero in dictum pellentesque, lorem enim varius tellus, nec aliquet 
                                                                                        dolor risus non sem. Curabitur placerat, quam vel bibendum pretium, arcu dui c
                                                                                        onsectetur tellus, et tincidunt turpis... 
                                                                                </p>                                    
                                                                        </div>
                                                                </div>
                                                        </div>
                                                        <hr>

                                                        <div class=\"article-medium\">
                                                                <div class=\"row\">
                                                                        <!--Image-->
                                                                        <div class=\"col-sm-6\">
                                                                                <div class=\"frame\">
                                                                                        <a class=\"image\" href=\"#\">
                                                                                                <figure class=\"image-holder\">
                                                                                                        <img src=\"http://placehold.it/350x185\" alt=\"branches eros quam ultricies et condimentum a porta quis neque\">
                                                                                                </figure>
                                                                                                <div class=\"image-light\"></div>
                                                                                                <span class=\"dashicons dashicons-format-gallery\"></span>
                                                                                        </a>
                                                                                </div>
                                                                                <img src=\"img/shadow.png\" class=\"shadow\" alt=\"shadow\">                                    
                                                                        </div>

                                                                        <!--Content-->
                                                                        <div class=\"col-sm-6\">
                                                                                <h4><a href=\"#\">Branches Eros Quam Ultricies Et Condimentum A Porta Quis Neque</a></h4>
                                                                                <p class=\"post-meta\">
                                                                                        <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                        <a href=\"#\"><span class=\"fa fa-folder\"></span> Weather</a> &nbsp;
                                                                                        <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a> &nbsp;
                                                                                        <a href=\"#\"><span class=\"fa fa-eye\"></span> 4,448</a>
                                                                                </p>
                                                                                <p>
                                                                                        Vivamus fermentum, mi nec convallis congue Sed do eiusmod tempor incididunt ut labore et, 
                                                                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea consequat. Duis aute 
                                                                                        Mauris ac nisl nunc... 
                                                                                </p>                                    
                                                                        </div>
                                                                </div>
                                                        </div>
                                                        <hr>

                                                        <div class=\"article-medium\">
                                                                <div class=\"row\">
                                                                        <!--Image-->
                                                                        <div class=\"col-sm-6\">
                                                                                <div class=\"frame\">
                                                                                        <a class=\"image\" href=\"#\">
                                                                                                <figure class=\"image-holder\">
                                                                                                        <img src=\"http://placehold.it/350x185\" alt=\"boat dui accumsan velit vel tincidunt dui leo et dui\">
                                                                                                </figure>
                                                                                                <div class=\"image-light\"></div>
                                                                                                <span class=\"dashicons dashicons-format-image\"></span>
                                                                                        </a>
                                                                                </div>
                                                                                <img src=\"img/shadow.png\" class=\"shadow\" alt=\"shadow\">                                    
                                                                        </div>

                                                                        <!--Content-->
                                                                        <div class=\"col-sm-6\">
                                                                                <h4><a href=\"#\">Boat Dui Accumsan Velit Vel Dincidunt Dui Leo Et Dui</a></h4>
                                                                                <p class=\"post-meta\">
                                                                                        <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                        <a href=\"#\"><span class=\"fa fa-folder\"></span> Traffic</a> &nbsp;
                                                                                        <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a> &nbsp;
                                                                                        <a href=\"#\"><span class=\"fa fa-eye\"></span> 4,448</a>
                                                                                </p>
                                                                                <p>
                                                                                        Vivamus fermentum, mi nec convallis congue Sed do eiusmod tempor incididunt ut labore et, 
                                                                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea consequat. Duis aute 
                                                                                        Mauris ac nisl nunc... 
                                                                                </p>                                    
                                                                        </div>

                                                                </div>
                                                        </div>
                                                        <hr>
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
                                                        <img src=\"img/shadow.png\" alt=\"shadow\" class=\"shadow\">                                                        
                                                </section>

                                  
                                                <!-- ARTICLES V2 WIDGET -->
                                                <section class=\"widget articles-v2\">
                                                        <!-- Widget Header -->
                                                        <header class=\"clearfix\">
                                                                <h4>Politics</h4>
                                                                <a href=\"#\" class=\"control\"><i class=\"fa fa-plus\"></i></a>
                                                        </header>

                                                        <!-- Widget Contents -->
                                                        <div class=\"content row\">
                                                                <div class=\"col-sm-6 article-medium\">    
                                                                        <!--frame-->
                                                                        <div class=\"frame\">
                                                                                <!--image-->
                                                                                <a class=\"image\" href=\"#\">
                                                                                        <figure class=\"image-holder\">
                                                                                                <img src=\"http://placehold.it/350x185\" alt=\"ulm town home cathedral square quantitative mass\">
                                                                                        </figure>
                                                                                        <div class=\"image-light\"></div>
                                                                                        <span class=\"dashicons dashicons-format-quote\"></span>
                                                                                </a>
                                                                        </div>
                                                                        <img src=\"img/shadow.png\" class=\"shadow\" alt=\"shadow\">
                                                                        
                                                                        <h4><a href=\"#\">Ulm Town Home Cathedral Square Quantitative Mass</a></h4>

                                                                        <!--content-->
                                                                        <p>
                                                                                Laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit 
                                                                                in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint... 
                                                                        </p>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> December 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324 comments</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-eye\"></span> 4,448 views</a>
                                                                        </p>
                                                                        <hr>
                                                                </div>

                                                                <div class=\"col-sm-6 article-tiny\">
                                                                        <!-- image -->
                                                                        <a href=\"#\" class=\"image\">
                                                                                <figure class=\"image-holder\">
                                                                                        <img src=\"http://placehold.it/95x75\" alt=\"morocco africa rally desert marroc sand dunes morocco africa rally  \">
                                                                                </figure>
                                                                                <div class=\"image-light\"></div>
                                                                                <span class=\"dashicons dashicons-format-links\"></span>
                                                                        </a>

                                                                        <!--content-->
                                                                        <h5><a href=\"#\">Morocco Africa Rally Desert Marroc Sand Dunes Morocco Africa Rally</a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-eye\"></span> 4,448</a>
                                                                        </p>
                                                                        <hr>
                                                                </div>

                                                                <div class=\"col-sm-6 article-tiny\">
                                                                        <!--image-->
                                                                        <a href=\"#\" class=\"image\">
                                                                                <figure class=\"image-holder\">
                                                                                        <img src=\"http://placehold.it/95x75\" alt=\"Mauris mattis ullamcorper euismod Nulla convallis \">
                                                                                </figure>
                                                                                <div class=\"image-light\"></div>
                                                                                <span class=\"dashicons dashicons-format-aside\"></span>
                                                                        </a>

                                                                        <!--content-->
                                                                        <h5><a href=\"#\">Mauris Mattis Ullamcorper Euismod Nulla Convallis</a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-eye\"></span> 4,448</a>
                                                                        </p>
                                                                        <hr>
                                                                </div>

                                                                <div class=\"col-sm-6 article-tiny\">
                                                                        <!--image-->
                                                                        <a href=\"#\" class=\"image\">
                                                                                <figure class=\"image-holder\">
                                                                                        <img src=\"http://placehold.it/95x75\" alt=\"Nepal Kathmandu Road Center Chaotic\">
                                                                                </figure>
                                                                                <div class=\"image-light\"></div>
                                                                                <span class=\"dashicons dashicons-format-audio\"></span>
                                                                        </a>

                                                                        <!--content-->
                                                                        <h5><a href=\"#\">Nepal Kathmandu Road Center Chaotic </a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-eye\"></span> 4,448</a>
                                                                        </p>
                                                                        <hr>
                                                                </div>
                                                        </div><!--.content-->
                                                </section><!--.widget-->

                                                
                                                <div class=\"row\">
                                                        <!-- ARTICLES V3 WIDGET -->
                                                        <section class=\"widget articles-v3 col-sm-6\">
                                                                <!-- Widget header -->
                                                                <header class=\"clearfix\">
                                                                        <h4>Science</h4>
                                                                        <a href=\"#\" class=\"control\"><i class=\"fa fa-plus\"></i></a>
                                                                </header>

                                                                <!-- Widget contents -->
                                                                <div class=\"article-medium\">        
                                                                        <!--image-->
                                                                        <div class=\"frame\">
                                                                                <a class=\"image\" href=\"#\">                                                                                        
                                                                                        <figure class=\"image-holder\">
                                                                                                <img src=\"http://placehold.it/350x185\" alt=\"Phasellus eu diam at arcu laoreet elementum at id augue\">
                                                                                        </figure>
                                                                                        <div class=\"image-light\"></div>
                                                                                        <span class=\"dashicons dashicons-format-gallery\"></span>
                                                                                </a>
                                                                        </div>
                                                                        <img src=\"img/shadow.png\" class=\"shadow\" alt=\"shadow\">
                                                                        
                                                                        <h4><a href=\"#\">Phasellus Eu Diam At Arcu Laoreet Elementum At Id Augue</a></h4>
                                                                        
                                                                        <!--content-->
                                                                        <p>
                                                                                Laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit 
                                                                                in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint... 
                                                                        </p>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> December 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324 comments</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-eye\"></span> 4,448 views</a>
                                                                        </p>
                                                                        <hr>
                                                                </div>

                                                                <div class=\"article-tiny\">
                                                                        <!--image-->
                                                                        <a href=\"#\" class=\"image\">
                                                                                <figure class=\"image-holder\">
                                                                                        <img src=\"http://placehold.it/95x75\" alt=\"douglas x3 stiletto tellus quis urna porttitor tempor In eu egestas dui\">
                                                                                </figure>
                                                                                <div class=\"image-light\"></div>
                                                                                <span class=\"dashicons dashicons-format-image\"></span>
                                                                        </a>
                                                                        
                                                                        <!--content-->
                                                                        <h5><a href=\"#\">Douglas X3 Stiletto Tellus Quis Urna Porttitor Tempor In Eu Egestas Dui</a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-eye\"></span> 4,448</a>
                                                                        </p>
                                                                        <hr>
                                                                </div>

                                                                <div class=\"article-tiny\">
                                                                        <!--image-->
                                                                        <a href=\"#\" class=\"image\">
                                                                                <figure class=\"image-holder\">
                                                                                        <img src=\"http://placehold.it/95x75\" alt=\"Vestibulum ante ipsum primis in faucibus orci luctus et ultrices\">
                                                                                </figure>
                                                                                <div class=\"image-light\"></div>
                                                                                <span class=\"dashicons dashicons-format-links\"></span>
                                                                        </a>
                                                                        
                                                                        <!--content-->
                                                                        <h5><a href=\"#\">Vestibulum Ante Ipsum Primis In Faucibus Orci Luctus Et Ultrices</a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-eye\"></span> 4,448</a>
                                                                        </p>
                                                                        <hr>
                                                                </div>

                                                                <div class=\"article-tiny\">
                                                                        <!--image-->
                                                                        <a href=\"#\" class=\"image\">
                                                                                <figure class=\"image-holder\">
                                                                                        <img src=\"http://placehold.it/95x75\" alt=\"Nulla vitae velit ac velit luctus facilisis\">
                                                                                </figure>
                                                                                <div class=\"image-light\"></div>
                                                                                <span class=\"dashicons dashicons-format-quote\"></span>
                                                                        </a>
                                                                        
                                                                        <!--content-->
                                                                        <h5><a href=\"#\">Nulla Vitae Velit Ac Velit Luctus Facilisis </a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-eye\"></span> 4,448</a>
                                                                        </p>
                                                                        <hr>
                                                                </div>
                                                        </section><!--.widget-->

                                                        <!-- ARTICLES V3 WIDGET -->
                                                        <section class=\"widget articles-v3 col-sm-6\">
                                                                <!-- Widget header -->
                                                                <header class=\"clearfix\">
                                                                        <h4>Entertainment</h4>
                                                                        <a href=\"#\" class=\"control\"><i class=\"fa fa-plus\"></i></a>
                                                                </header>

                                                                <!-- Widget contents -->
                                                                <div class=\"article-medium\">                
                                                                        <!--image-->
                                                                        <div class=\"frame\">
                                                                                <a class=\"image\" href=\"#\">
                                                                                        <figure class=\"image-holder\">
                                                                                                <img src=\"http://placehold.it/350x185\" alt=\"wii diam iaculis dolor eget euismod odio felis faucibus nisi\">
                                                                                        </figure>
                                                                                        <div class=\"image-light\"></div>
                                                                                        <span class=\"dashicons dashicons-format-standard\"></span>                                                                                                
                                                                                </a>
                                                                        </div>
                                                                        <img src=\"img/shadow.png\" class=\"shadow\" alt=\"shadow\">
                                                                        
                                                                        <h4><a href=\"#\">Wii Diam Iaculis Dolor Eget Euismod Odio Felis Faucibus Nisi</a></h4>
                                                                        
                                                                        <!--content-->
                                                                        <p>
                                                                            Laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit 
                                                                            in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint... 
                                                                        </p>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> December 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324 comments</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-eye\"></span> 4,448 views</a>
                                                                        </p>
                                                                        <hr>
                                                                </div>

                                                                <div class=\"article-tiny\">
                                                                        <!--image-->
                                                                        <a href=\"#\" class=\"image\">
                                                                                <figure class=\"image-holder\">
                                                                                        <img src=\"http://placehold.it/95x75\" alt=\"Band curabitur euismod interdum orci ac porttitor  \">
                                                                                </figure>
                                                                                <div class=\"image-light\"></div>
                                                                                <span class=\"dashicons dashicons-format-status\"></span>
                                                                        </a>
                                                                        
                                                                        <!--content-->
                                                                        <h5><a href=\"#\">Band Curabitur Euismod Interdum Orci Ac Porttitor </a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-eye\"></span> 4,448</a>
                                                                        </p>
                                                                        <hr>
                                                                </div>

                                                                <div class=\"article-tiny\">
                                                                        <!--image-->
                                                                        <a href=\"#\" class=\"image\">
                                                                                <figure class=\"image-holder\">
                                                                                        <img src=\"http://placehold.it/95x75\" alt=\"Nulla id eros ut nibh hendrerit sollicitudin \">
                                                                                </figure>
                                                                                <div class=\"image-light\"></div>
                                                                                <span class=\"dashicons dashicons-format-video\"></span>
                                                                        </a>
                                                                        
                                                                        <!--content-->
                                                                        <h5><a href=\"#\">Nulla Id Eros Ut Nibh Hendrerit Sollicitudin</a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-eye\"></span> 4,448</a>
                                                                        </p>
                                                                        <hr>
                                                                </div>

                                                                <div class=\"article-tiny\">
                                                                        <!--image-->
                                                                        <a href=\"#\" class=\"image\">
                                                                                <figure class=\"image-holder\">
                                                                                        <img src=\"http://placehold.it/95x75\" alt=\"Day of the dead Sed nec auctor Nunc quis cursus libero\">
                                                                                </figure>
                                                                                <div class=\"image-light\"></div>
                                                                                <span class=\"dashicons dashicons-format-aside\"></span>
                                                                        </a>
                                                                        
                                                                        <!--content-->
                                                                        <h5><a href=\"#\">Day of the Dead Sed Nec Auctor Nunc Quis Cursus Libero</a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-eye\"></span> 4,448</a>
                                                                        </p>
                                                                        <hr>
                                                                </div>
                                                        </section><!--.widget-->
                                                </div>

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
                                                        <img src=\"img/shadow.png\" alt=\"shadow\" class=\"shadow\">                                                        
                                                </section>

                                                <div class=\"row\">
                                                        <!-- ARTICLES V4 WIDGET -->
                                                        <section class=\"widget articles-v4 col-sm-3 col-xs-6\">
                                                                <!-- Widget Header -->
                                                                <header class=\"clearfix\">
                                                                        <h4>World</h4>
                                                                        <a href=\"#\" class=\"control\"><i class=\"fa fa-plus\"></i></a>
                                                                </header>

                                                                <!-- Widget contents -->
                                                                <div class=\"article-small\"> 
                                                                        <!--image-->
                                                                        <a href=\"#\" class=\"image\">
                                                                                <figure class=\"image-holder\">
                                                                                        <img src=\"http://placehold.it/165x90\" alt=\"Vestibulum a lacus suscipit sodales augue\">
                                                                                </figure>
                                                                                <div class=\"image-light\"></div>
                                                                                <span class=\"dashicons dashicons-format-audio\"></span>
                                                                        </a>

                                                                        <!--content-->
                                                                        <h5><a href=\"#\">Vestibulum a Lacus Suscipit Sodales Augue</a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a>
                                                                        </p>
                                                                </div>
                                                                <hr>

                                                                <div>
                                                                        <h5><a href=\"#\">Integer Ut Egestas Lectus Sed Ut Elementum Justo</a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a>
                                                                        </p>
                                                                </div>
                                                                <hr>

                                                                <div>
                                                                        <h5><a href=\"#\">Nam lacinia nulla et ipsum gravida egestas</a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a>
                                                                        </p>
                                                                </div>
                                                                <hr>

                                                                <div>
                                                                        <h5><a href=\"#\">Nulla Laoreet Lectus Condimentum</a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a>
                                                                        </p>
                                                                </div>
                                                                <hr>

                                                        </section><!--.widget-->

                                                        <!-- ARTICLES V4 WIDGET -->
                                                        <section class=\"widget articles-v4 col-sm-3 col-xs-6\">
                                                                <!-- Widget header -->
                                                                <header class=\"clearfix\">
                                                                        <h4>Health</h4>
                                                                        <a href=\"#\" class=\"control\"><i class=\"fa fa-plus\"></i></a>
                                                                </header>

                                                                <!-- Widget content -->
                                                                <div class=\"article-small\">                                        
                                                                        <a href=\"#\" class=\"image\">
                                                                                <figure class=\"image-holder\">
                                                                                        <img src=\"http://placehold.it/165x90\" alt=\"Drugs suscipit neque eu viverra justo \">
                                                                                </figure>
                                                                                <div class=\"image-light\"></div>
                                                                                <span class=\"dashicons dashicons-format-chat\"></span>
                                                                        </a>
                                                                        <h5><a href=\"#\">Drugs Suscipit Neque Eu Viverra Justo </a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a>
                                                                        </p>
                                                                </div>
                                                                <hr>

                                                                <div>
                                                                        <h5><a href=\"#\">Vestibulum Tincidunt Aliquet Massa</a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a>
                                                                        </p>
                                                                </div>
                                                                <hr>

                                                                <div>
                                                                        <h5><a href=\"#\">Eu Cursus Urna Lacinia Nec Maecenas Tincidunt</a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a>
                                                                        </p>
                                                                </div>
                                                                <hr>

                                                                <div>
                                                                        <h5><a href=\"#\">Mi Ac Porttitor Sodales Nisi Est Convallis Arcu Sit Amet</a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a>
                                                                        </p>
                                                                </div>
                                                                <hr>
                                                        </section><!--.widget-->
                                                        
                                                        <div class=\"clearfix visible-xs\"></div>

                                                        <!-- ARTICLES V4 WIDGET -->
                                                        <section class=\"widget articles-v4 col-sm-3 col-xs-6\">
                                                                <!-- Widget header -->
                                                                <header class=\"clearfix\">
                                                                        <h4>Sport</h4>
                                                                        <a href=\"#\" class=\"control\"><i class=\"fa fa-plus\"></i></a>
                                                                </header>

                                                                <!-- Widget content -->
                                                                <div class=\"article-small\">                                        
                                                                        <a href=\"#\" class=\"image\">
                                                                                <figure class=\"image-holder\">
                                                                                        <img src=\"http://placehold.it/165x90\" alt=\"uss constitution boston massachusetts \">
                                                                                </figure>
                                                                                <div class=\"image-light\"></div>
                                                                                <span class=\"dashicons dashicons-format-gallery\"></span>
                                                                        </a>
                                                                        <h5><a href=\"#\">Climb Ultrices Tellus Massa Quis Vestibulum Ante Ipsum</a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a>
                                                                        </p>
                                                                </div>
                                                                <hr>

                                                                <div>
                                                                        <h5><a href=\"#\">Primis In Faucibus Orci Luctus Et Ultrices </a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a>
                                                                        </p>
                                                                </div>
                                                                <hr>

                                                                <div>
                                                                        <h5><a href=\"#\">Posuere Cubilia Curae Nulla Congue Cursus </a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a>
                                                                        </p>
                                                                </div>
                                                                <hr>

                                                                <div>
                                                                        <h5><a href=\"#\">In Euismod Fusce Ultrices Lectus Non</a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a>
                                                                        </p>
                                                                </div>
                                                                <hr>
                                                        </section><!--.widget-->

                                                        <!-- ARTICLES V4 WIDGET -->
                                                        <section class=\"widget articles-v4 col-sm-3 col-xs-6\">
                                                                <!-- Widget header -->
                                                                <header class=\"clearfix\">
                                                                        <h4>Tech</h4>
                                                                        <a href=\"#\" class=\"control\"><i class=\"fa fa-plus\"></i></a>
                                                                </header>

                                                                <!-- Widget Contents -->
                                                                <div class=\"article-small\">       
                                                                        <!--image-->                                 
                                                                        <a href=\"#\" class=\"image\">
                                                                                <figure class=\"image-holder\">
                                                                                        <img src=\"http://placehold.it/165x90\" alt=\"vitae accumsan quam auctor Praesent dignissim \">
                                                                                </figure>
                                                                                <div class=\"image-light\"></div>
                                                                                <span class=\"dashicons dashicons-format-image\"></span>
                                                                        </a>

                                                                        <!--content-->
                                                                        <h5><a href=\"#\">Vitae Accumsan Quam Auctor Praesent Dignissim </a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a>
                                                                        </p>
                                                                </div>
                                                                <hr>

                                                                <div>
                                                                        <h5><a href=\"#\">Erat At Eleifend Feugiat Turpis Lacus</a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a>
                                                                        </p>
                                                                </div>
                                                                <hr>

                                                                <div>
                                                                        <h5><a href=\"#\">Ultrices Est Quis Blandit Arcu Est A Ante</a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a>
                                                                        </p>
                                                                </div>
                                                                <hr>

                                                                <div>
                                                                        <h5><a href=\"#\">Phasellus Quis Mollis Mauris at Dignissim Sem</a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a>
                                                                        </p>
                                                                </div>
                                                                <hr>
                                                        </section><!--.widget-->
                                                </div>                                                   
                                        </main><!--#main-content-->

                                        <!-- SIDEBAR 
                                        ============ -->
                                        <aside class=\"col-md-4\">
                                                <div class=\"row\">
                                                        <!-- SEARCH WIDGET -->
                                                        <section class=\"col-sm-6 col-md-12 widget\">
                                                                <!-- Widget header -->
                                                                <header class=\"clearfix\"><h4>Search Widget</h4></header>  

                                                                <!-- Widget content -->
                                                                <form method=\"get\" action=\"home-version-1.html\">
                                                                        <input type=\"search\" placeholder=\"Enter keywords\">
                                                                        <button type=\"submit\" class=\"btn btn-primary\">Search</button>
                                                                </form>
                                                        </section>

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
                                                                <img src=\"img/shadow.png\" class=\"shadow\" alt=\"shadow\">
                                                        </section>

                                                        <!-- FEEDBURNER WIDGET -->
                                                        <section class=\"col-sm-6 col-md-12 widget feedburner\">
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
                                                        <section class=\"col-sm-6 col-md-12 widget\">
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
                                                                        <li><a href=\"#recent-aside\" data-toggle=\"tab\">Recent</a></li>
                                                                        <li><a href=\"#comments-aside\" data-toggle=\"tab\">Comments</a></li>
                                                                </ul>

                                                                <!-- Tab contents -->
                                                                <div class=\"tab-content\">
                                                                        <!--Popular-->
                                                                        <div class=\"tab-pane active fade in\" id=\"popular-aside\">
                                                                                <div class=\"article-tiny\">
                                                                                        <a href=\"#\" class=\"image\">
                                                                                                <figure class=\"image-holder\">
                                                                                                        <img src=\"http://placehold.it/95x75\" alt=\"Mauris mattis ullamcorper euismod Nulla convallis \">
                                                                                                </figure>
                                                                                                <div class=\"image-light\"></div>
                                                                                                <span class=\"dashicons dashicons-format-gallery\"></span>
                                                                                        </a>
                                                                                        <h5><a href=\"#\">Mauris mattis ullamcorper euismod Nulla convallis</a></h5>
                                                                                        <p class=\"post-meta\">
                                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Jan 4, 2014</a> &nbsp;
                                                                                                <a href=\"#\"><span class=\"fa fa-folder\"></span> Travel</a>
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
                                                                                        <h5><a href=\"#\">Nulla vitae velit ac velit luctus facilisis dictum Mauris malesuada ante ut gravida condimentum</a></h5>
                                                                                        <p class=\"post-meta\">
                                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Jan 4, 2014</a> &nbsp;
                                                                                                <a href=\"#\"><span class=\"fa fa-folder\"></span> Science</a>
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
                                                                                        <h5><a href=\"#\">Nulla id eros ut nibh hendrerit sollicitudin</a></h5>
                                                                                        <p class=\"post-meta\">
                                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Jan 4, 2014</a> &nbsp;
                                                                                                <a href=\"#\"><span class=\"fa fa-folder\"></span> National</a>
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
                                                                                        <h5><a href=\"#\">ornare nibh Nunc semper dolor quis augue venenatis</a></h5>
                                                                                        <p class=\"post-meta\">
                                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Jan 4, 2014</a> &nbsp;
                                                                                                <a href=\"#\"><span class=\"fa fa-folder\"></span> Health</a>
                                                                                        </p>
                                                                                </div>
                                                                                <hr>
                                                                        </div>

                                                                        <!--Recent-->
                                                                        <div class=\"tab-pane fade\" id=\"recent-aside\">
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
                                                                        <div class=\"tab-pane fade\" id=\"comments-aside\">
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

                                                        <!-- TWITTER FEED -->                            
                                                        <section class=\"col-sm-6 col-md-12 widget\">
                                                                <!-- Tab Menus -->
                                                                <ul class=\"nav nav-tabs\">
                                                                        <li class=\"active\"><a href=\"#tweet-image\" data-toggle=\"tab\">Twitter Feed</a></li>
                                                                        <li><a href=\"#tweet-icon\" data-toggle=\"tab\">Icon</a></li>
                                                                        <li><a href=\"#tweet-text\" data-toggle=\"tab\">Text</a></li>
                                                                </ul>

                                                                <!-- Tab Contents -->
                                                                <div class=\"tab-content\">
                                                                        <!--Tweet image-->
                                                                        <div class=\"tab-pane active fade in\" id=\"tweet-image\">
                                                                                <div class=\"twitter-feed\">
                                                                                        <script type=\"text/template\">
                                                                                                <div class=\"avatar\">{{avatar}}</div>
                                                                                                <div class=\"content\">
                                                                                                        {{tweet}} 
                                                                                                        <p class=\"post-meta\">
                                                                                                                <a href=\"{{url}}\" target=\"_blank\"><i class=\"fa fa-clock-o\"></i> {{date}}</a> &nbsp;
                                                                                                                <a href=\"{{url}}\" target=\"_blank\"><i class=\"fa fa-reply\"></i> Reply</a>
                                                                                                        </p>
                                                                                                </div>
                                                                                        </script>
                                                                                </div>
                                                                        </div><!--#tweet-image-->

                                                                        <!--Tweet icon-->
                                                                        <div class=\"tab-pane\" id=\"tweet-icon\">
                                                                                <div class=\"twitter-feed\">
                                                                                        <script type=\"text/template\">
                                                                                                <div class=\"avatar\"><i class=\"fa fa-twitter\"></i></div>
                                                                                                <div class=\"content\">
                                                                                                        {{tweet}} 
                                                                                                        <p class=\"post-meta\">
                                                                                                                <a href=\"{{url}}\" target=\"_blank\"><i class=\"fa fa-clock-o\"></i> {{date}}</a> &nbsp;
                                                                                                                <a href=\"{{url}}\" target=\"_blank\"><i class=\"fa fa-reply\"></i> Reply</a>
                                                                                                        </p>
                                                                                                </div>
                                                                                        </script>
                                                                                </div>
                                                                        </div>

                                                                        <!--Tweet text-->
                                                                        <div class=\"tab-pane\" id=\"tweet-text\">
                                                                                <div class=\"twitter-feed\">
                                                                                        <script type=\"text/template\">
                                                                                                <div class=\"content\">
                                                                                                        {{tweet}} 
                                                                                                        <p class=\"post-meta\">
                                                                                                                <a href=\"{{url}}\" target=\"_blank\"><i class=\"fa fa-clock-o\"></i> {{date}}</a> &nbsp;
                                                                                                                <a href=\"{{url}}\" target=\"_blank\"><i class=\"fa fa-reply\"></i> Reply</a>
                                                                                                        </p>
                                                                                                </div>
                                                                                        </script>
                                                                                </div>
                                                                        </div>
                                                                </div><!--.tab-content-->
                                                        </section><!--.widget-->

                                                        <!-- ADS WIDGET -->
                                                        <section class=\"widget col-sm-6 col-md-12 no-mobile\">
                                                                <!-- Widget Header -->
                                                                <header class=\"clearfix\"><h4>Advertisement</h4></header>

                                                                <!-- Widget Content -->
                                                                <div class=\"frame thick\">
                                                                        <a href=\"#\"><div data-src=\"http://placehold.it/300x250/f0f0f9\" data-alt=\"Banner image\"></div></a>
                                                                </div>
                                                                <img src=\"img/shadow.png\" class=\"shadow\" alt=\"shadow\">
                                                        </section>

                                                        <!-- VIMEO WIDGET -->
                                                        <section class=\"col-sm-6 col-md-12 widget\">
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
                                                                        <li><a href=\"#tags\" data-toggle=\"tab\">Tags</a></li>
                                                                </ul><!--.nav-tabs-->

                                                                <!-- Tab contents -->
                                                                <div class=\"tab-content\">     
                                                                        <!-- Categories-->
                                                                        <div class=\"tab-pane active fade in\" id=\"categories\">
                                                                                <ul class=\"categories\">
                                                                                        <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> National <span class=\"post-counts\">54,435,464</span></a></li>
                                                                                        <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> World  <span class=\"post-counts\">34,355,346</span></a></li>
                                                                                        <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Politics <span class=\"post-counts\">3,234,356</span></a></li>
                                                                                        <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Sport <span class=\"post-counts\">874,355</span></a></li>
                                                                                        <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Entertainment <span class=\"post-counts\">11,234,987</span></a></li>
                                                                                        <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Technology <span class=\"post-counts\">9,937,397</span></a></li>
                                                                                        <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Lifestyle <span class=\"post-counts\">345,385</span></a></li>
                                                                                        <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Finance <span class=\"post-counts\">593,945</span></a></li>
                                                                                </ul>
                                                                        </div>

                                                                        <!-- Tags -->
                                                                        <div class=\"tab-pane fade\" id=\"tags\">
                                                                                <ul class=\"tags clearfix\">
                                                                                        <li><a href=\"#\">morbi id</a></li>
                                                                                        <li><a href=\"#\">vulputate est</a></li>
                                                                                        <li><a href=\"#\">tiam quis </a></li>
                                                                                        <li><a href=\"#\">lectus</a></li>
                                                                                        <li><a href=\"#\">nunc</a></li>
                                                                                        <li><a href=\"#\">phasellus pharetra</a></li>
                                                                                        <li><a href=\"#\">velit quam</a></li>
                                                                                        <li><a href=\"#\">id laoreet</a></li>
                                                                                        <li><a href=\"#\">elit</a></li>
                                                                                        <li><a href=\"#\">porta</a></li>
                                                                                        <li><a href=\"#\">rhoncus</a></li>
                                                                                        <li><a href=\"#\">unc sit</a></li>
                                                                                        <li><a href=\"#\">amet nunc</a></li>
                                                                                        <li><a href=\"#\">velit tincidunt</a></li>
                                                                                        <li><a href=\"#\">nec fermentum</a></li>
                                                                                        <li><a href=\"#\">cursus</a></li>
                                                                                        <li><a href=\"#\">metus</a></li>
                                                                                        <li><a href=\"#\">estibulum</a></li>
                                                                                        <li><a href=\"#\">eleifend at ligula</a></li>
                                                                                        <li><a href=\"#\">vel aliquam</a></li>
                                                                                        <li><a href=\"#\">id velit</a></li>
                                                                                        <li><a href=\"#\">usce</a></li>
                                                                                        <li><a href=\"#\">hasellus</a></li>
                                                                                        <li><a href=\"#\">semper</a></li>
                                                                                        <li><a href=\"#\">dui ut</a></li>
                                                                                </ul>
                                                                        </div>        
                                                                </div><!--.tab-content-->
                                                        </section>

                                                        <!-- ACCORDION -->
                                                        <section class=\"col-sm-6 col-md-12 widget\">
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
                                <section id=\"slider-tabs\" class=\"widget no-mobile\">
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
                                                                                        <a href=\"{{link}}\" title=\"{{title}}\" class=\"dark\" target=\"_blank\">
                                                                                                <img src=\"{{thumbnail}}\" alt=\"{{title}}\">
                                                                                                <div class=\"layer\"></div>
                                                                                        </a>
                                                                                </li>
                                                                        </script>
                                                                </li>
                                                        </ul>
                                                </section>

                                                <!-- Popular Tags -->
                                                <section class=\"col-md-3 col-sm-6\">
                                                        <!--Title-->
                                                        <div class=\"title\"><h4>Popular Tags</h4></div>
                                                        
                                                        <!--Content-->
                                                        <ul class=\"tags clearfix\">
                                                                <li><a href=\"#\">morbi id</a></li>
                                                                <li><a href=\"#\">vulputate est</a></li>
                                                                <li><a href=\"#\">tiam quis </a></li>
                                                                <li><a href=\"#\">lectus</a></li>
                                                                <li><a href=\"#\">nunc</a></li>
                                                                <li><a href=\"#\">phasellus pharetra</a></li>
                                                                <li><a href=\"#\">velit quam</a></li>
                                                                <li><a href=\"#\">id laoreet</a></li>
                                                                <li><a href=\"#\">elit</a></li>
                                                                <li><a href=\"#\">porta</a></li>
                                                                <li><a href=\"#\">rhoncus</a></li>
                                                                <li><a href=\"#\">unc sit</a></li>
                                                                <li><a href=\"#\">amet nunc</a></li>
                                                                <li><a href=\"#\">velit tincidunt</a></li>
                                                                <li><a href=\"#\">nec fermentum</a></li>
                                                                <li><a href=\"#\">cursus</a></li>
                                                                <li><a href=\"#\">metus</a></li>
                                                                <li><a href=\"#\">estibulum</a></li>
                                                                <li><a href=\"#\">eleifend at ligula</a></li>
                                                                <li><a href=\"#\">vel aliquam</a></li>
                                                                <li><a href=\"#\">id velit</a></li>
                                                                <li><a href=\"#\">usce</a></li>
                                                                <li><a href=\"#\">hasellus</a></li>
                                                                <li><a href=\"#\">semper</a></li>
                                                                <li><a href=\"#\">dui ut</a></li>
                                                        </ul>
                                                </section>

                                                <!-- Recent Comments -->
                                                <section class=\"col-md-3 col-sm-6\">
                                                        <!--Title-->
                                                        <div class=\"title\"><h4>Recent Comments</h4></div>
                                                        
                                                        <!--Content-->
                                                        <ul class=\"recent-comments clearfix\">
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
                                        <p>Copyright &copy; 2014 - <strong>WarTa</strong></p>
                                        <ul>
                                                <li><a href=\"#\">About</a></li>
                                                <li><a href=\"#\">Terms</a></li>
                                                <li><a href=\"#\">Privacy</a></li>
                                                <li><a href=\"#\">Policy</a></li>
                                                <li><a href=\"#\">Advertising</a></li>
                                                <li><a href=\"#\">Contact</a></li>
                                        </ul>
                                </div>
                        </div><!--#footer-bottom-->                        
                </footer><!--footer-->

                <!-- jQuery  -->
                <script src=\"js/jquery.min.js\"></script>
                <script src=\"js/jquery-ui.custom.min.js\"></script>                
                
                <!-- Warta scripts -->
                <script src=\"js/script.min.js\"></script>        
                <script src=\"js/initialize.js\"></script>         
        </body>     
</html>", "@GlobalView/Default/home-version-2.html", "/Users/rachid/Documents/Projet Client/theglobalview/src/GlobalViewBundle/Resources/views/Default/home-version-2.html");
    }
}
