<?php

/* @GlobalView/Default/blog-detail.html */
class __TwigTemplate_e199c677696bd2d051dbaaf16f9d59055a717ea10d31f604a70bfd78f8872d29 extends Twig_Template
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
        $__internal_24ee96b89466bb1ea340113ceaf88d395b5b03bf6a5f221a8cf6697ee72cf2c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24ee96b89466bb1ea340113ceaf88d395b5b03bf6a5f221a8cf6697ee72cf2c8->enter($__internal_24ee96b89466bb1ea340113ceaf88d395b5b03bf6a5f221a8cf6697ee72cf2c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GlobalView/Default/blog-detail.html"));

        $__internal_613fa97eaf36c14b1863300c9123a7b98fc1a554a8d5515d68ebf807270e558d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_613fa97eaf36c14b1863300c9123a7b98fc1a554a8d5515d68ebf807270e558d->enter($__internal_613fa97eaf36c14b1863300c9123a7b98fc1a554a8d5515d68ebf807270e558d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GlobalView/Default/blog-detail.html"));

        // line 1
        echo "<!DOCTYPE html>
<html id=\"blog-detail\">
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

                        <!-- PAGE TITLE
                        =============== -->
                        <div id=\"title\">
                                <div class=\"image-light\"></div>
                                <div class=\"container\">
                                        <div class=\"title-container\">
                                                <h1 class=\"primary\">Quasi Architecto Beatae Vitae Dicta Sunt Explicabo Nemo Enim Ipsam Voluptatem </h1>     
                                                <p class=\"secondary\"><a href=\"#\">Travel</a> / <a href=\"#\">Travel Advice</a> / <a href=\"#\">World Travel</a></p>
                                        </div>
                                </div>
                        </div>                        
                </header><!--header-->

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
                                                
                                                <!-- POST CONTENT -->
                                                <article class=\"article-large hentry\">      
                                                        <!--Image-->
                                                        <div class=\"frame thick clearfix\">
                                                                <a href=\"http://placehold.it/1024x512.jpg\" class=\"image\" data-lightbox title=\"Mountain consectetur adipiscing elit In quis lacus a odio suscipit luctus\">
                                                                        <figure class=\"image-holder\">
                                                                                <img src=\"http://placehold.it/730x370.jpg\" alt=\"Mountain consectetur adipiscing elit In quis lacus a odio suscipit luctus\">
                                                                        </figure>
                                                                        <div class=\"image-light\"></div>
                                                                </a>
                                                                <div class=\"icons entry-footer\">
                                                                        <span class=\"vcard\">
                                                                                <a href=\"#\" class=\"url fn\" title=\"Siska\"><span class=\"hidden\">Siska</span><img src=\"http://placehold.it/75x75.jpg\" alt=\"Siska\"></a>
                                                                        </span>
                                                                        <a href=\"#\" title=\"Post format image\"><i class=\"dashicons dashicons-format-image\"></i></a>
                                                                        <a href=\"#\" title=\"1,347 Comments\"><i class=\"fa fa-comments\"></i><span class=\"comment\">1,347</span></a>
                                                                </div>
                                                                <p class=\"post-meta entry-footer pull-right\">
                                                                        <a href=\"#\" rel=\"bookmark\"><time class=\"entry-date published updated\" datetime=\"2014-01-08T11:42:20+00:00\">Thursday, January 09, 2014 at 11:42 AM</time></a>
                                                                </p>
                                                        </div>
                                                        <img src=\"img/shadow.png\" class=\"shadow\" alt=\"shadow\">                                                        
                                                                        
                                                        <header class=\"hidden\">
                                                                <h1 class=\"entry-title\">Quasi Architecto Beatae Vitae Dicta Sunt Explicabo Nemo Enim Ipsam Voluptatem</h1>
                                                        </header>                                                        
                                                        
                                                        <div class=\"entry-content\">
                                                                <p>
                                                                        Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                                        Ut enim ad minim veniam, quis nostrud exercitation <a href=\"#\">ullamco</a> laboris nisi ut aliquip ex ea commodo 
                                                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat 
                                                                        nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
                                                                        deserunt mollit anim id est laborum.
                                                                </p>
                                                                <p>
                                                                        Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, 
                                                                        laoreet et, pretium ac, nisi. <a href=\"#\">Aenean</a> magna nisl, mollis quis, molestie eu, feugiat in, orci. In 
                                                                        hac habitasse platea dictumst.
                                                                </p>
                                                                <p>
                                                                        Fusce convallis, mauris imperdiet gravida bibendum, nisl turpis suscipit mauris, sed placerat 
                                                                        ipsum urna sed risus. In convallis tellus a mauris. Curabitur non elit ut libero tristique sodales. 
                                                                        Mauris a lacus. Donec mattis semper leo. In hac habitasse platea dictumst. Vivamus facilisis diam 
                                                                        at odio. Mauris dictum, <a href=\"#\">nisi eget consequat</a> elementum, lacus ligula molestie metus, non feugiat 
                                                                        orci magna ac sem. Donec turpis. Donec vitae metus. Morbi tristique neque eu mauris. Quisque 
                                                                        gravida ipsum non sapien. 
                                                                </p>
                                                                <p>
                                                                        Proin nonummy, lacus eget pulvinar lacinia, pede felis dignissim leo, vitae tristique magna lacus 
                                                                        sit amet eros. Nullam ornare. Praesent odio ligula, dapibus sed, tincidunt eget, dictum ac, nibh. 
                                                                </p>
                                                                <blockquote>Aliquam vehicula sem ut pede. Cras purus lectus, egestas eu, vehicula at, imperdiet sed, nibh. 
                                                                        Morbi consectetuer luctus felis. Donec vitae nisi. Aliquam tincidunt feugiat elit. Duis sed elit 
                                                                        ut turpis ullamcorper feugiat. 
                                                                        <footer>Someone famous in <cite title=\"Source Title\">Source Title</cite></footer>
                                                                </blockquote>
                                                                <p>
                                                                        Vivamus commodo, augue et laoreet euismod, sem sapien tempor dolor, ac egestas sem ligula quis 
                                                                        lacus. Donec vestibulum tortor ac lacus. Sed posuere vestibulum nisl. Curabitur eleifend fermentum 
                                                                        justo. Nullam imperdiet. <a href=\"#\">Integer</a> sit amet mauris imperdiet risus sollicitudin rutrum. 
                                                                </p>

                                                                <div class=\"page-links\">Pages: 
                                                                        <a href=\"#\"><span>1</span></a> 
                                                                        <span>2</span> 
                                                                        <a href=\"#\"><span>3</span></a>
                                                                </div>
                                                        </div><!-- .entry-content -->                                                        
                                                                                             
                                                </article><!-- .hentry -->
                                                
                                                <!-- SHARE POST -->                        
                                                <section class=\"share-post clearfix\">
                                                        <h5>Share:</h5> 
                                                        <ul>
                                                                <li><a href=\"#\"><i class=\"sc-sm sc-facebook\"></i><span>426</span></a></li>
                                                                <li><a href=\"#\"><i class=\"sc-sm sc-twitter\"></i><span>526</span></a></li>
                                                                <li><a href=\"#\"><i class=\"sc-sm sc-pinterest\"></i><span>283</span></a></li>
                                                                <li><a href=\"#\"><i class=\"sc-sm sc-linkedin\"></i><span>329</span></a></li>
                                                                <li><a href=\"#\"><i class=\"sc-sm sc-googleplus\"></i><span>429</span></a></li>
                                                        </ul>
                                                </section>

                                                <!-- POST TAGS -->
                                                <section class=\"post-tags clearfix\">
                                                        <h5>Tags: </h5> 
                                                        <ul class=\"tags\">
                                                                <li><a href=\"#\">ellentesque</a></li>
                                                                <li><a href=\"#\">molestie</a></li>
                                                                <li><a href=\"#\">nisl</a></li>
                                                                <li><a href=\"#\">tempus</a></li>
                                                                <li><a href=\"#\">enim</a></li>
                                                                <li><a href=\"#\">imperdiet</a></li>
                                                        </ul> 
                                                </section>

                                                <!-- POST NAVIGATIONS -->
                                                <nav class=\"post-navigation\" role=\"navigation\">
                                                        <h5 class=\"sr-only\">Post navigation</h5>
                                                        <div class=\"nav-links\">
                                                                <div class=\"nav-previous\">
                                                                        <a href=\"#\" rel=\"prev\">
                                                                                <span class=\"meta-nav\">Previous Post:</span> 
                                                                                <h5>nisi ut aliquid ex ea commodi consequatur commodi consequatur</h5>
                                                                        </a>
                                                                </div>
                                                                <div class=\"nav-next\">
                                                                        <a href=\"#\" rel=\"next\">
                                                                                <span class=\"meta-nav\">Next Post:</span> 
                                                                                <h5>obcaecati cupiditate non provident eius modi tempora </h5>
                                                                        </a>
                                                                </div>\t\t
                                                        </div>
                                                </nav>

                                                <!-- AUTHOR -->
                                                <section class=\"widget author\">
                                                        <!--Widget header-->
                                                        <header class=\"clearfix\"><h4>Author</h4></header>

                                                        <!--Widget content-->
                                                        <a href=\"#\" class=\"avatar\">
                                                                <img src=\"http://placehold.it/75x75\" alt=\"Siska\">
                                                                <div class=\"image-light\"></div>
                                                        </a>
                                                        <a href=\"#\" class=\"name\">Siska</a>
                                                        <br>
                                                        <p>
                                                                Pellentesque eleifend semper rhoncus. Aliquam nunc mauris, imperdiet gravida 
                                                                malesuada sit amet, semper non erat. Praesent rutrum diam leo, vel pulvinar nisi viverra non.
                                                                Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil.
                                                        </p>
                                                        <ul class=\"social clearfix\">
                                                                <li><a href=\"#\" title=\"Facebook\"><i class=\"sc-sm sc-facebook\"></i></a></li>
                                                                <li><a href=\"#\" title=\"Twitter\"><i class=\"sc-sm sc-twitter\"></i></a></li>
                                                                <li><a href=\"#\" title=\"Pinterest\"><i class=\"sc-sm sc-pinterest\"></i></a></li>
                                                                <li><a href=\"#\" title=\"LinkedIn\"><i class=\"sc-sm sc-linkedin\"></i></a></li>
                                                                <li><a href=\"#\" title=\"Google+\"><i class=\"sc-sm sc-googleplus\"></i></a></li>
                                                                <li><a href=\"#\" title=\"Vimeo\"><i class=\"sc-sm sc-vimeo\"></i></a></li>
                                                                <li><a href=\"#\" title=\"Tumblr\"><i class=\"sc-sm sc-tumblr\"></i></a></li>
                                                                <li><a href=\"#\" title=\"Behance\"><i class=\"sc-sm sc-behance\"></i></a></li>
                                                        </ul>
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

                                                <!-- RELATED POSTS -->
                                                <section class=\"widget\">
                                                        <!--Widget header-->
                                                        <header class=\"clearfix\"><h4>Related</h4></header>

                                                        <!--Widget Contents-->
                                                        <div class=\"row\">
                                                                <div class=\"article-small col-md-3 col-sm-6\">                                        
                                                                        <a href=\"#\" class=\"image\">
                                                                                <figure class=\"image-holder\">
                                                                                        <img src=\"http://placehold.it/165x90\" alt=\"Vestibulum a lacus suscipit sodales augue\">
                                                                                </figure>
                                                                                <div class=\"image-light\"></div>
                                                                                <span class=\"dashicons dashicons-format-audio\"></span>
                                                                        </a>
                                                                        <h5><a href=\"#\">Vestibulum a lacus suscipit sodales augue</a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a>
                                                                        </p>
                                                                        <hr class=\"visible-sm visible-xs\">
                                                                </div>
                                                                
                                                                <div class=\"article-small col-md-3 col-sm-6\">                                        
                                                                        <a href=\"#\" class=\"image\">
                                                                                <figure class=\"image-holder\">
                                                                                        <img src=\"http://placehold.it/165x90\" alt=\"Drugs suscipit neque eu viverra justo \">
                                                                                </figure>
                                                                                <div class=\"image-light\"></div>
                                                                                <span class=\"dashicons dashicons-format-chat\"></span>
                                                                        </a>
                                                                        <h5><a href=\"#\">Drugs suscipit neque eu viverra justo </a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a>
                                                                        </p>
                                                                        <hr class=\"visible-sm visible-xs\">
                                                                </div>
                                                                
                                                                <div class=\"article-small col-md-3 col-sm-6\">                                        
                                                                        <a href=\"#\" class=\"image\">
                                                                                <figure class=\"image-holder\">
                                                                                        <img src=\"http://placehold.it/165x90\" alt=\"uss constitution boston massachusetts \">
                                                                                </figure>
                                                                                <div class=\"image-light\"></div>
                                                                                <span class=\"dashicons dashicons-format-gallery\"></span>
                                                                        </a>
                                                                        <h5><a href=\"#\">Climb ultrices tellus massa quis Vestibulum</a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a>
                                                                        </p>
                                                                        <hr class=\"visible-sm visible-xs\">
                                                                </div>
                                                                
                                                                <div class=\"article-small col-md-3 col-sm-6\">                                        
                                                                        <a href=\"#\" class=\"image\">
                                                                                <figure class=\"image-holder\">
                                                                                        <img src=\"http://placehold.it/165x90\" alt=\"vitae accumsan quam auctor Praesent dignissim \">
                                                                                </figure>
                                                                                <div class=\"image-light\"></div>
                                                                                <span class=\"dashicons dashicons-format-image\"></span>
                                                                        </a>
                                                                        <h5><a href=\"#\">vitae accumsan quam auctor Praesent</a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a>
                                                                        </p>
                                                                        <hr class=\"visible-sm visible-xs\">
                                                                </div>
                                                        </div>
                                                </section>

                                                <!-- COMMENTS -->
                                                <section class=\"widget\">
                                                        <!--Widget header-->
                                                        <header class=\"clearfix\"><h4>Comments</h4></header>

                                                        <!--Widget content-->
                                                        <ol class=\"post-comments\">
                                                                <li>
                                                                        <div class=\"comment-container\">
                                                                                <img src=\"http://placehold.it/75x75\" class=\"avatar\" alt=\"Fahri\">
                                                                                <div class=\"content\">
                                                                                        <p class=\"comment-meta\">
                                                                                                <a href=\"#\"><i class=\"fa fa-user\"></i> Fahri</a> &nbsp;
                                                                                                <a href=\"#\"><i class=\"fa fa-clock-o\"></i> January 11, 2013 10:27AM</a>
                                                                                        </p>                                        
                                                                                        <a class=\"reply\" href=\"#\"><i class=\"fa fa-reply\"></i> Reply</a>
                                                                                        <div class=\"comment\">
                                                                                                <p>
                                                                                                        Consectetur adipiscing elit. In quis lacus a odio suscipit luctus. 
                                                                                                        Pellentesque molestie nisl tempus enim imperdiet.
                                                                                                </p>
                                                                                                <i class=\"triangle\"></i>
                                                                                        </div>
                                                                                </div>
                                                                        </div>

                                                                        <ol class=\"children\">
                                                                                <li>
                                                                                        <div class=\"comment-container\">
                                                                                                <div class=\"content\">
                                                                                                        <p class=\"comment-meta\">
                                                                                                                <a href=\"#\"><i class=\"fa fa-user\"></i> Friska</a> &nbsp;
                                                                                                                <a href=\"#\"><i class=\"fa fa-clock-o\"></i> January 11, 2013 10:27AM</a>
                                                                                                        </p>                                        
                                                                                                        <a class=\"reply\" href=\"#\"><i class=\"fa fa-reply\"></i> Reply</a>
                                                                                                        <div class=\"comment\">
                                                                                                                <p>
                                                                                                                        Vivamus libero purus, placerat id varius ut, facilisis ut odio. 
                                                                                                                        Vestibulum id urna at magna dignissim sodales.
                                                                                                                </p>
                                                                                                                <i class=\"triangle\"></i>
                                                                                                        </div>
                                                                                                </div>
                                                                                                <img src=\"http://placehold.it/75x75\" class=\"avatar\" alt=\"Friska\">
                                                                                        </div>
                                                                                </li>
                                                                            
                                                                                <li>
                                                                                        <div class=\"comment-container\">
                                                                                                <div class=\"content\">
                                                                                                        <p class=\"comment-meta\">
                                                                                                                <a href=\"#\"><i class=\"fa fa-user\"></i> Siska</a> &nbsp;
                                                                                                                <a href=\"#\"><i class=\"fa fa-clock-o\"></i> January 11, 2013 10:27AM</a>
                                                                                                        </p>                                        
                                                                                                        <a class=\"reply\" href=\"#\"><i class=\"fa fa-reply\"></i> Reply</a>
                                                                                                        <div class=\"comment\">
                                                                                                                <p>
                                                                                                                        Donec mauris nunc, vestibulum at adipiscing id, malesuada molestie sem. 
                                                                                                                        Nunc pellentesque purus at  mollis placerat.
                                                                                                                </p>
                                                                                                                <i class=\"triangle\"></i>
                                                                                                        </div>
                                                                                                </div>
                                                                                                <img src=\"http://placehold.it/75x75\" class=\"avatar\" alt=\"Siska\">
                                                                                        </div>

                                                                                        <ol>
                                                                                                <li>
                                                                                                        <div class=\"comment-container\">
                                                                                                                <img src=\"http://placehold.it/75x75\" class=\"avatar\" alt=\"Fahri\">
                                                                                                                <div class=\"content\">
                                                                                                                        <p class=\"comment-meta\">
                                                                                                                            <a href=\"#\"><i class=\"fa fa-user\"></i> Fahri</a> &nbsp;
                                                                                                                            <a href=\"#\"><i class=\"fa fa-clock-o\"></i> January 11, 2013 10:27AM</a>
                                                                                                                        </p>                                        
                                                                                                                        <a class=\"reply\" href=\"#\"><i class=\"fa fa-reply\"></i> Reply</a>
                                                                                                                        <div class=\"comment\">
                                                                                                                                <p>
                                                                                                                                        Consectetur adipiscing elit. In quis lacus a odio suscipit luctus. 
                                                                                                                                        Pellentesque molestie nisl tempus enim imperdiet.
                                                                                                                                </p>
                                                                                                                                <i class=\"triangle\"></i>
                                                                                                                        </div>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                </li>
                                                                                        </ol>
                                                                                </li>
                                                                        </ol>
                                                                </li>
                                                                
                                                                <li>
                                                                        <div class=\"comment-container\">
                                                                                <img src=\"http://placehold.it/75x75\" class=\"avatar\" alt=\"Siska\">
                                                                                <div class=\"content\">
                                                                                        <p class=\"comment-meta\">
                                                                                                <a href=\"#\"><i class=\"fa fa-user\"></i> Siska</a> &nbsp;
                                                                                                <a href=\"#\"><i class=\"fa fa-clock-o\"></i> January 11, 2013 10:27AM</a>
                                                                                        </p>                                        
                                                                                        <a class=\"reply\" href=\"#\"><i class=\"fa fa-reply\"></i> Reply</a>
                                                                                        <div class=\"comment\">
                                                                                                <p>
                                                                                                        Feugiat vehicula  pretium. Maecenas odio , condimentum a libero sit, molestie 
                                                                                                        hendrerit magna. Vestibulum ante  primis in faucibus
                                                                                                </p>
                                                                                                <i class=\"triangle\"></i>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                </li>
                                                                
                                                                <li>
                                                                        <div class=\"comment-container\">
                                                                                <img src=\"http://placehold.it/75x75\" class=\"avatar\" alt=\"Rusli\">
                                                                                <div class=\"content\">
                                                                                        <p class=\"comment-meta\">
                                                                                                <a href=\"#\"><i class=\"fa fa-user\"></i> Rusli</a> &nbsp;
                                                                                                <a href=\"#\"><i class=\"fa fa-clock-o\"></i> January 11, 2013 10:27AM</a>
                                                                                        </p>                                        
                                                                                        <a class=\"reply\" href=\"#\"><i class=\"fa fa-reply\"></i> Reply</a>
                                                                                        <div class=\"comment\">
                                                                                                <p>
                                                                                                        Morbi tristique, purus sit  rhoncus imperdiet, mi ligula consequat lacus, 
                                                                                                        sit  tincidunt odio massa quis felis.
                                                                                                </p>
                                                                                                <i class=\"triangle\"></i>
                                                                                        </div>
                                                                                </div>
                                                                        </div>

                                                                        <ol class=\"children\">
                                                                                <li>
                                                                                        <div class=\"comment-container\">
                                                                                                <div class=\"content\">
                                                                                                        <p class=\"comment-meta\">
                                                                                                                <a href=\"#\"><i class=\"fa fa-user\"></i> FriskaMax</a> &nbsp;
                                                                                                                <a href=\"#\"><i class=\"fa fa-clock-o\"></i> January 11, 2013 10:27AM</a>
                                                                                                        </p>                                        
                                                                                                        <a class=\"reply\" href=\"#\"><i class=\"fa fa-reply\"></i> Reply</a>
                                                                                                        <div class=\"comment\">
                                                                                                                <p>
                                                                                                                        Orci luctus et ultrices posuere cubilia Curae; Quisque ac tincidunt nulla. 
                                                                                                                        Vestibulum in gravida felis.
                                                                                                                </p>
                                                                                                                <i class=\"triangle\"></i>
                                                                                                        </div>
                                                                                                </div>
                                                                                                <img src=\"http://placehold.it/75x75\" class=\"avatar\" alt=\"FriskaMax\">
                                                                                        </div>
                                                                                </li>
                                                                        </ol>
                                                                </li>
                                                        </ol>
                                                </section>

                                                <!-- COMMENT FORM -->
                                                <section class=\"widget message-form\">
                                                        <!--Widget header-->
                                                        <header class=\"clearfix\"><h4>Leave a reply</h4></header>

                                                        <!--Widget content-->
                                                        <form method=\"post\" action=\"blog-detail.html\">
                                                                <div class=\"input-group\">
                                                                        <i class=\"fa fa-user\"></i>
                                                                        <input type=\"text\" name=\"name\" placeholder=\"Your full name *\"  required>
                                                                </div>
                                                                <div class=\"input-group\">
                                                                        <i class=\"fa fa-envelope\"></i>
                                                                        <input type=\"email\" name=\"email\" placeholder=\"Your email address *\"  required>
                                                                </div>
                                                                <div class=\"input-group\">
                                                                        <i class=\"fa fa-link\"></i>
                                                                        <input type=\"url\" name=\"website\" placeholder=\"Your website\">
                                                                </div>
                                                                <div class=\"textarea\">
                                                                        <textarea name=\"comment\" placeholder=\"Your comment *\" rows=\"12\"  required></textarea>
                                                                </div>             
                                                                <p class=\"allowed-tags\">
                                                                        You may use these HTML tags and attributes:  
                                                                        <code>&lt;a href=\"\" title=\"\"&gt; &lt;abbr title=\"\"&gt; &lt;acronym title=\"\"&gt; &lt;b&gt; &lt;blockquote cite=\"\"&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=\"\"&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=\"\"&gt; &lt;strike&gt; &lt;strong&gt; </code>
                                                                </p>
                                                                <button type=\"submit\" class=\"btn btn-primary\">Submit Comment</button>
                                                        </form>
                                                </section>                                                
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

                                                        <!-- FLICKR FEED -->
                                                        <section class=\"col-sm-6 col-md-12 widget vimeo\">
                                                                <!-- Widget Header -->
                                                                <header class=\"clearfix\"><h4>Flickr Feed</h4></header>

                                                                <!-- Widget Content -->
                                                                <ul id=\"flickr-feed-aside\" class=\"flickr-feed clearfix\">
                                                                        <li><i class=\"fa fa-spinner fa-spin\"></i> Please wait...</li>
                                                                        <li>
                                                                                <script type=\"text/template\">
                                                                                        <li>
                                                                                                <a href=\"";
        // line 1084
        echo twig_escape_filter($this->env, ($context["link"] ?? $this->getContext($context, "link")), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo "\" class=\"light\" target=\"_blank\">
                                                                                                        <img src=\"";
        // line 1085
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
                                                </div>
                                        </aside>
                                </div>
                        </div>
                </div><!--#content-->

                <footer>
                        <!-- MAIN FOOTER
                        ================ -->
                        <div id=\"footer-main\">
                                <div class=\"container\">
                                        <div class=\"row\">
                                                <section class=\"col-md-2 col-sm-4\">
                                                        <div class=\"title\"><a href=\"#\"><h4>National</h4></a></div>
                                                        <ul class=\"categories\">
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Politics</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Sport</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Entertainment</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Technology</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Lifestyle</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Finance</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Travel</a></li>
                                                        </ul>
                                                </section>

                                                <section class=\"col-md-2 col-sm-4\">
                                                        <div class=\"title\"><a href=\"#\"><h4>World</h4></a></div>
                                                        <ul class=\"categories\">
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Pacific</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Asia</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> North America</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> South America</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Africa</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Middle East</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Europe</a></li>
                                                        </ul>
                                                </section>

                                                <section class=\"col-md-2 col-sm-4\">
                                                        <div class=\"title\"><a href=\"#\"><h4>Sport</h4></a></div>
                                                        <ul class=\"categories\">
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Rugby</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Cricket</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Horse Racing</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Basketball</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Netball</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Football</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Motorsport</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Tennis</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Boxing</a></li>
                                                        </ul>
                                                </section>

                                                <section class=\"col-md-2 col-sm-4\">
                                                        <div class=\"title\"><a href=\"#\"><h4>Entertainment</h4></a></div>
                                                        <ul class=\"categories\">
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Celebrity Life</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Celebrity Style</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Horse Racing</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> TV</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Movies</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Music</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Books/Magazines</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Awards</a></li>
                                                        </ul>
                                                </section>

                                                <section class=\"col-md-2 col-sm-4\">
                                                        <div class=\"title\"><a href=\"#\"><h4>Technology</h4></a></div>
                                                        <ul class=\"categories\">
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Science</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Online</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Gaming</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Gadgets</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Environment</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Design</a></li>
                                                        </ul>
                                                </section>

                                                <section class=\"col-md-2 col-sm-4\">
                                                        <div class=\"title\"><a href=\"#\"><h4>Travel</h4></a></div>
                                                        <ul class=\"categories\">
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Travel Updates</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Travel Advices</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Travel Ideas</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Holidays</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> World Travel</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> National Travel</a></li>
                                                        </ul>
                                                </section>
                                        </div>
                                </div>
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
        
        $__internal_24ee96b89466bb1ea340113ceaf88d395b5b03bf6a5f221a8cf6697ee72cf2c8->leave($__internal_24ee96b89466bb1ea340113ceaf88d395b5b03bf6a5f221a8cf6697ee72cf2c8_prof);

        
        $__internal_613fa97eaf36c14b1863300c9123a7b98fc1a554a8d5515d68ebf807270e558d->leave($__internal_613fa97eaf36c14b1863300c9123a7b98fc1a554a8d5515d68ebf807270e558d_prof);

    }

    public function getTemplateName()
    {
        return "@GlobalView/Default/blog-detail.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1116 => 1085,  1110 => 1084,  25 => 1,);
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
<html id=\"blog-detail\">
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

                        <!-- PAGE TITLE
                        =============== -->
                        <div id=\"title\">
                                <div class=\"image-light\"></div>
                                <div class=\"container\">
                                        <div class=\"title-container\">
                                                <h1 class=\"primary\">Quasi Architecto Beatae Vitae Dicta Sunt Explicabo Nemo Enim Ipsam Voluptatem </h1>     
                                                <p class=\"secondary\"><a href=\"#\">Travel</a> / <a href=\"#\">Travel Advice</a> / <a href=\"#\">World Travel</a></p>
                                        </div>
                                </div>
                        </div>                        
                </header><!--header-->

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
                                                
                                                <!-- POST CONTENT -->
                                                <article class=\"article-large hentry\">      
                                                        <!--Image-->
                                                        <div class=\"frame thick clearfix\">
                                                                <a href=\"http://placehold.it/1024x512.jpg\" class=\"image\" data-lightbox title=\"Mountain consectetur adipiscing elit In quis lacus a odio suscipit luctus\">
                                                                        <figure class=\"image-holder\">
                                                                                <img src=\"http://placehold.it/730x370.jpg\" alt=\"Mountain consectetur adipiscing elit In quis lacus a odio suscipit luctus\">
                                                                        </figure>
                                                                        <div class=\"image-light\"></div>
                                                                </a>
                                                                <div class=\"icons entry-footer\">
                                                                        <span class=\"vcard\">
                                                                                <a href=\"#\" class=\"url fn\" title=\"Siska\"><span class=\"hidden\">Siska</span><img src=\"http://placehold.it/75x75.jpg\" alt=\"Siska\"></a>
                                                                        </span>
                                                                        <a href=\"#\" title=\"Post format image\"><i class=\"dashicons dashicons-format-image\"></i></a>
                                                                        <a href=\"#\" title=\"1,347 Comments\"><i class=\"fa fa-comments\"></i><span class=\"comment\">1,347</span></a>
                                                                </div>
                                                                <p class=\"post-meta entry-footer pull-right\">
                                                                        <a href=\"#\" rel=\"bookmark\"><time class=\"entry-date published updated\" datetime=\"2014-01-08T11:42:20+00:00\">Thursday, January 09, 2014 at 11:42 AM</time></a>
                                                                </p>
                                                        </div>
                                                        <img src=\"img/shadow.png\" class=\"shadow\" alt=\"shadow\">                                                        
                                                                        
                                                        <header class=\"hidden\">
                                                                <h1 class=\"entry-title\">Quasi Architecto Beatae Vitae Dicta Sunt Explicabo Nemo Enim Ipsam Voluptatem</h1>
                                                        </header>                                                        
                                                        
                                                        <div class=\"entry-content\">
                                                                <p>
                                                                        Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                                        Ut enim ad minim veniam, quis nostrud exercitation <a href=\"#\">ullamco</a> laboris nisi ut aliquip ex ea commodo 
                                                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat 
                                                                        nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
                                                                        deserunt mollit anim id est laborum.
                                                                </p>
                                                                <p>
                                                                        Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, 
                                                                        laoreet et, pretium ac, nisi. <a href=\"#\">Aenean</a> magna nisl, mollis quis, molestie eu, feugiat in, orci. In 
                                                                        hac habitasse platea dictumst.
                                                                </p>
                                                                <p>
                                                                        Fusce convallis, mauris imperdiet gravida bibendum, nisl turpis suscipit mauris, sed placerat 
                                                                        ipsum urna sed risus. In convallis tellus a mauris. Curabitur non elit ut libero tristique sodales. 
                                                                        Mauris a lacus. Donec mattis semper leo. In hac habitasse platea dictumst. Vivamus facilisis diam 
                                                                        at odio. Mauris dictum, <a href=\"#\">nisi eget consequat</a> elementum, lacus ligula molestie metus, non feugiat 
                                                                        orci magna ac sem. Donec turpis. Donec vitae metus. Morbi tristique neque eu mauris. Quisque 
                                                                        gravida ipsum non sapien. 
                                                                </p>
                                                                <p>
                                                                        Proin nonummy, lacus eget pulvinar lacinia, pede felis dignissim leo, vitae tristique magna lacus 
                                                                        sit amet eros. Nullam ornare. Praesent odio ligula, dapibus sed, tincidunt eget, dictum ac, nibh. 
                                                                </p>
                                                                <blockquote>Aliquam vehicula sem ut pede. Cras purus lectus, egestas eu, vehicula at, imperdiet sed, nibh. 
                                                                        Morbi consectetuer luctus felis. Donec vitae nisi. Aliquam tincidunt feugiat elit. Duis sed elit 
                                                                        ut turpis ullamcorper feugiat. 
                                                                        <footer>Someone famous in <cite title=\"Source Title\">Source Title</cite></footer>
                                                                </blockquote>
                                                                <p>
                                                                        Vivamus commodo, augue et laoreet euismod, sem sapien tempor dolor, ac egestas sem ligula quis 
                                                                        lacus. Donec vestibulum tortor ac lacus. Sed posuere vestibulum nisl. Curabitur eleifend fermentum 
                                                                        justo. Nullam imperdiet. <a href=\"#\">Integer</a> sit amet mauris imperdiet risus sollicitudin rutrum. 
                                                                </p>

                                                                <div class=\"page-links\">Pages: 
                                                                        <a href=\"#\"><span>1</span></a> 
                                                                        <span>2</span> 
                                                                        <a href=\"#\"><span>3</span></a>
                                                                </div>
                                                        </div><!-- .entry-content -->                                                        
                                                                                             
                                                </article><!-- .hentry -->
                                                
                                                <!-- SHARE POST -->                        
                                                <section class=\"share-post clearfix\">
                                                        <h5>Share:</h5> 
                                                        <ul>
                                                                <li><a href=\"#\"><i class=\"sc-sm sc-facebook\"></i><span>426</span></a></li>
                                                                <li><a href=\"#\"><i class=\"sc-sm sc-twitter\"></i><span>526</span></a></li>
                                                                <li><a href=\"#\"><i class=\"sc-sm sc-pinterest\"></i><span>283</span></a></li>
                                                                <li><a href=\"#\"><i class=\"sc-sm sc-linkedin\"></i><span>329</span></a></li>
                                                                <li><a href=\"#\"><i class=\"sc-sm sc-googleplus\"></i><span>429</span></a></li>
                                                        </ul>
                                                </section>

                                                <!-- POST TAGS -->
                                                <section class=\"post-tags clearfix\">
                                                        <h5>Tags: </h5> 
                                                        <ul class=\"tags\">
                                                                <li><a href=\"#\">ellentesque</a></li>
                                                                <li><a href=\"#\">molestie</a></li>
                                                                <li><a href=\"#\">nisl</a></li>
                                                                <li><a href=\"#\">tempus</a></li>
                                                                <li><a href=\"#\">enim</a></li>
                                                                <li><a href=\"#\">imperdiet</a></li>
                                                        </ul> 
                                                </section>

                                                <!-- POST NAVIGATIONS -->
                                                <nav class=\"post-navigation\" role=\"navigation\">
                                                        <h5 class=\"sr-only\">Post navigation</h5>
                                                        <div class=\"nav-links\">
                                                                <div class=\"nav-previous\">
                                                                        <a href=\"#\" rel=\"prev\">
                                                                                <span class=\"meta-nav\">Previous Post:</span> 
                                                                                <h5>nisi ut aliquid ex ea commodi consequatur commodi consequatur</h5>
                                                                        </a>
                                                                </div>
                                                                <div class=\"nav-next\">
                                                                        <a href=\"#\" rel=\"next\">
                                                                                <span class=\"meta-nav\">Next Post:</span> 
                                                                                <h5>obcaecati cupiditate non provident eius modi tempora </h5>
                                                                        </a>
                                                                </div>\t\t
                                                        </div>
                                                </nav>

                                                <!-- AUTHOR -->
                                                <section class=\"widget author\">
                                                        <!--Widget header-->
                                                        <header class=\"clearfix\"><h4>Author</h4></header>

                                                        <!--Widget content-->
                                                        <a href=\"#\" class=\"avatar\">
                                                                <img src=\"http://placehold.it/75x75\" alt=\"Siska\">
                                                                <div class=\"image-light\"></div>
                                                        </a>
                                                        <a href=\"#\" class=\"name\">Siska</a>
                                                        <br>
                                                        <p>
                                                                Pellentesque eleifend semper rhoncus. Aliquam nunc mauris, imperdiet gravida 
                                                                malesuada sit amet, semper non erat. Praesent rutrum diam leo, vel pulvinar nisi viverra non.
                                                                Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil.
                                                        </p>
                                                        <ul class=\"social clearfix\">
                                                                <li><a href=\"#\" title=\"Facebook\"><i class=\"sc-sm sc-facebook\"></i></a></li>
                                                                <li><a href=\"#\" title=\"Twitter\"><i class=\"sc-sm sc-twitter\"></i></a></li>
                                                                <li><a href=\"#\" title=\"Pinterest\"><i class=\"sc-sm sc-pinterest\"></i></a></li>
                                                                <li><a href=\"#\" title=\"LinkedIn\"><i class=\"sc-sm sc-linkedin\"></i></a></li>
                                                                <li><a href=\"#\" title=\"Google+\"><i class=\"sc-sm sc-googleplus\"></i></a></li>
                                                                <li><a href=\"#\" title=\"Vimeo\"><i class=\"sc-sm sc-vimeo\"></i></a></li>
                                                                <li><a href=\"#\" title=\"Tumblr\"><i class=\"sc-sm sc-tumblr\"></i></a></li>
                                                                <li><a href=\"#\" title=\"Behance\"><i class=\"sc-sm sc-behance\"></i></a></li>
                                                        </ul>
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

                                                <!-- RELATED POSTS -->
                                                <section class=\"widget\">
                                                        <!--Widget header-->
                                                        <header class=\"clearfix\"><h4>Related</h4></header>

                                                        <!--Widget Contents-->
                                                        <div class=\"row\">
                                                                <div class=\"article-small col-md-3 col-sm-6\">                                        
                                                                        <a href=\"#\" class=\"image\">
                                                                                <figure class=\"image-holder\">
                                                                                        <img src=\"http://placehold.it/165x90\" alt=\"Vestibulum a lacus suscipit sodales augue\">
                                                                                </figure>
                                                                                <div class=\"image-light\"></div>
                                                                                <span class=\"dashicons dashicons-format-audio\"></span>
                                                                        </a>
                                                                        <h5><a href=\"#\">Vestibulum a lacus suscipit sodales augue</a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a>
                                                                        </p>
                                                                        <hr class=\"visible-sm visible-xs\">
                                                                </div>
                                                                
                                                                <div class=\"article-small col-md-3 col-sm-6\">                                        
                                                                        <a href=\"#\" class=\"image\">
                                                                                <figure class=\"image-holder\">
                                                                                        <img src=\"http://placehold.it/165x90\" alt=\"Drugs suscipit neque eu viverra justo \">
                                                                                </figure>
                                                                                <div class=\"image-light\"></div>
                                                                                <span class=\"dashicons dashicons-format-chat\"></span>
                                                                        </a>
                                                                        <h5><a href=\"#\">Drugs suscipit neque eu viverra justo </a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a>
                                                                        </p>
                                                                        <hr class=\"visible-sm visible-xs\">
                                                                </div>
                                                                
                                                                <div class=\"article-small col-md-3 col-sm-6\">                                        
                                                                        <a href=\"#\" class=\"image\">
                                                                                <figure class=\"image-holder\">
                                                                                        <img src=\"http://placehold.it/165x90\" alt=\"uss constitution boston massachusetts \">
                                                                                </figure>
                                                                                <div class=\"image-light\"></div>
                                                                                <span class=\"dashicons dashicons-format-gallery\"></span>
                                                                        </a>
                                                                        <h5><a href=\"#\">Climb ultrices tellus massa quis Vestibulum</a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a>
                                                                        </p>
                                                                        <hr class=\"visible-sm visible-xs\">
                                                                </div>
                                                                
                                                                <div class=\"article-small col-md-3 col-sm-6\">                                        
                                                                        <a href=\"#\" class=\"image\">
                                                                                <figure class=\"image-holder\">
                                                                                        <img src=\"http://placehold.it/165x90\" alt=\"vitae accumsan quam auctor Praesent dignissim \">
                                                                                </figure>
                                                                                <div class=\"image-light\"></div>
                                                                                <span class=\"dashicons dashicons-format-image\"></span>
                                                                        </a>
                                                                        <h5><a href=\"#\">vitae accumsan quam auctor Praesent</a></h5>
                                                                        <p class=\"post-meta\">
                                                                                <a href=\"#\"><span class=\"fa fa-clock-o\"></span> Dec 4, 2013</a> &nbsp;
                                                                                <a href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a>
                                                                        </p>
                                                                        <hr class=\"visible-sm visible-xs\">
                                                                </div>
                                                        </div>
                                                </section>

                                                <!-- COMMENTS -->
                                                <section class=\"widget\">
                                                        <!--Widget header-->
                                                        <header class=\"clearfix\"><h4>Comments</h4></header>

                                                        <!--Widget content-->
                                                        <ol class=\"post-comments\">
                                                                <li>
                                                                        <div class=\"comment-container\">
                                                                                <img src=\"http://placehold.it/75x75\" class=\"avatar\" alt=\"Fahri\">
                                                                                <div class=\"content\">
                                                                                        <p class=\"comment-meta\">
                                                                                                <a href=\"#\"><i class=\"fa fa-user\"></i> Fahri</a> &nbsp;
                                                                                                <a href=\"#\"><i class=\"fa fa-clock-o\"></i> January 11, 2013 10:27AM</a>
                                                                                        </p>                                        
                                                                                        <a class=\"reply\" href=\"#\"><i class=\"fa fa-reply\"></i> Reply</a>
                                                                                        <div class=\"comment\">
                                                                                                <p>
                                                                                                        Consectetur adipiscing elit. In quis lacus a odio suscipit luctus. 
                                                                                                        Pellentesque molestie nisl tempus enim imperdiet.
                                                                                                </p>
                                                                                                <i class=\"triangle\"></i>
                                                                                        </div>
                                                                                </div>
                                                                        </div>

                                                                        <ol class=\"children\">
                                                                                <li>
                                                                                        <div class=\"comment-container\">
                                                                                                <div class=\"content\">
                                                                                                        <p class=\"comment-meta\">
                                                                                                                <a href=\"#\"><i class=\"fa fa-user\"></i> Friska</a> &nbsp;
                                                                                                                <a href=\"#\"><i class=\"fa fa-clock-o\"></i> January 11, 2013 10:27AM</a>
                                                                                                        </p>                                        
                                                                                                        <a class=\"reply\" href=\"#\"><i class=\"fa fa-reply\"></i> Reply</a>
                                                                                                        <div class=\"comment\">
                                                                                                                <p>
                                                                                                                        Vivamus libero purus, placerat id varius ut, facilisis ut odio. 
                                                                                                                        Vestibulum id urna at magna dignissim sodales.
                                                                                                                </p>
                                                                                                                <i class=\"triangle\"></i>
                                                                                                        </div>
                                                                                                </div>
                                                                                                <img src=\"http://placehold.it/75x75\" class=\"avatar\" alt=\"Friska\">
                                                                                        </div>
                                                                                </li>
                                                                            
                                                                                <li>
                                                                                        <div class=\"comment-container\">
                                                                                                <div class=\"content\">
                                                                                                        <p class=\"comment-meta\">
                                                                                                                <a href=\"#\"><i class=\"fa fa-user\"></i> Siska</a> &nbsp;
                                                                                                                <a href=\"#\"><i class=\"fa fa-clock-o\"></i> January 11, 2013 10:27AM</a>
                                                                                                        </p>                                        
                                                                                                        <a class=\"reply\" href=\"#\"><i class=\"fa fa-reply\"></i> Reply</a>
                                                                                                        <div class=\"comment\">
                                                                                                                <p>
                                                                                                                        Donec mauris nunc, vestibulum at adipiscing id, malesuada molestie sem. 
                                                                                                                        Nunc pellentesque purus at  mollis placerat.
                                                                                                                </p>
                                                                                                                <i class=\"triangle\"></i>
                                                                                                        </div>
                                                                                                </div>
                                                                                                <img src=\"http://placehold.it/75x75\" class=\"avatar\" alt=\"Siska\">
                                                                                        </div>

                                                                                        <ol>
                                                                                                <li>
                                                                                                        <div class=\"comment-container\">
                                                                                                                <img src=\"http://placehold.it/75x75\" class=\"avatar\" alt=\"Fahri\">
                                                                                                                <div class=\"content\">
                                                                                                                        <p class=\"comment-meta\">
                                                                                                                            <a href=\"#\"><i class=\"fa fa-user\"></i> Fahri</a> &nbsp;
                                                                                                                            <a href=\"#\"><i class=\"fa fa-clock-o\"></i> January 11, 2013 10:27AM</a>
                                                                                                                        </p>                                        
                                                                                                                        <a class=\"reply\" href=\"#\"><i class=\"fa fa-reply\"></i> Reply</a>
                                                                                                                        <div class=\"comment\">
                                                                                                                                <p>
                                                                                                                                        Consectetur adipiscing elit. In quis lacus a odio suscipit luctus. 
                                                                                                                                        Pellentesque molestie nisl tempus enim imperdiet.
                                                                                                                                </p>
                                                                                                                                <i class=\"triangle\"></i>
                                                                                                                        </div>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                </li>
                                                                                        </ol>
                                                                                </li>
                                                                        </ol>
                                                                </li>
                                                                
                                                                <li>
                                                                        <div class=\"comment-container\">
                                                                                <img src=\"http://placehold.it/75x75\" class=\"avatar\" alt=\"Siska\">
                                                                                <div class=\"content\">
                                                                                        <p class=\"comment-meta\">
                                                                                                <a href=\"#\"><i class=\"fa fa-user\"></i> Siska</a> &nbsp;
                                                                                                <a href=\"#\"><i class=\"fa fa-clock-o\"></i> January 11, 2013 10:27AM</a>
                                                                                        </p>                                        
                                                                                        <a class=\"reply\" href=\"#\"><i class=\"fa fa-reply\"></i> Reply</a>
                                                                                        <div class=\"comment\">
                                                                                                <p>
                                                                                                        Feugiat vehicula  pretium. Maecenas odio , condimentum a libero sit, molestie 
                                                                                                        hendrerit magna. Vestibulum ante  primis in faucibus
                                                                                                </p>
                                                                                                <i class=\"triangle\"></i>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                </li>
                                                                
                                                                <li>
                                                                        <div class=\"comment-container\">
                                                                                <img src=\"http://placehold.it/75x75\" class=\"avatar\" alt=\"Rusli\">
                                                                                <div class=\"content\">
                                                                                        <p class=\"comment-meta\">
                                                                                                <a href=\"#\"><i class=\"fa fa-user\"></i> Rusli</a> &nbsp;
                                                                                                <a href=\"#\"><i class=\"fa fa-clock-o\"></i> January 11, 2013 10:27AM</a>
                                                                                        </p>                                        
                                                                                        <a class=\"reply\" href=\"#\"><i class=\"fa fa-reply\"></i> Reply</a>
                                                                                        <div class=\"comment\">
                                                                                                <p>
                                                                                                        Morbi tristique, purus sit  rhoncus imperdiet, mi ligula consequat lacus, 
                                                                                                        sit  tincidunt odio massa quis felis.
                                                                                                </p>
                                                                                                <i class=\"triangle\"></i>
                                                                                        </div>
                                                                                </div>
                                                                        </div>

                                                                        <ol class=\"children\">
                                                                                <li>
                                                                                        <div class=\"comment-container\">
                                                                                                <div class=\"content\">
                                                                                                        <p class=\"comment-meta\">
                                                                                                                <a href=\"#\"><i class=\"fa fa-user\"></i> FriskaMax</a> &nbsp;
                                                                                                                <a href=\"#\"><i class=\"fa fa-clock-o\"></i> January 11, 2013 10:27AM</a>
                                                                                                        </p>                                        
                                                                                                        <a class=\"reply\" href=\"#\"><i class=\"fa fa-reply\"></i> Reply</a>
                                                                                                        <div class=\"comment\">
                                                                                                                <p>
                                                                                                                        Orci luctus et ultrices posuere cubilia Curae; Quisque ac tincidunt nulla. 
                                                                                                                        Vestibulum in gravida felis.
                                                                                                                </p>
                                                                                                                <i class=\"triangle\"></i>
                                                                                                        </div>
                                                                                                </div>
                                                                                                <img src=\"http://placehold.it/75x75\" class=\"avatar\" alt=\"FriskaMax\">
                                                                                        </div>
                                                                                </li>
                                                                        </ol>
                                                                </li>
                                                        </ol>
                                                </section>

                                                <!-- COMMENT FORM -->
                                                <section class=\"widget message-form\">
                                                        <!--Widget header-->
                                                        <header class=\"clearfix\"><h4>Leave a reply</h4></header>

                                                        <!--Widget content-->
                                                        <form method=\"post\" action=\"blog-detail.html\">
                                                                <div class=\"input-group\">
                                                                        <i class=\"fa fa-user\"></i>
                                                                        <input type=\"text\" name=\"name\" placeholder=\"Your full name *\"  required>
                                                                </div>
                                                                <div class=\"input-group\">
                                                                        <i class=\"fa fa-envelope\"></i>
                                                                        <input type=\"email\" name=\"email\" placeholder=\"Your email address *\"  required>
                                                                </div>
                                                                <div class=\"input-group\">
                                                                        <i class=\"fa fa-link\"></i>
                                                                        <input type=\"url\" name=\"website\" placeholder=\"Your website\">
                                                                </div>
                                                                <div class=\"textarea\">
                                                                        <textarea name=\"comment\" placeholder=\"Your comment *\" rows=\"12\"  required></textarea>
                                                                </div>             
                                                                <p class=\"allowed-tags\">
                                                                        You may use these HTML tags and attributes:  
                                                                        <code>&lt;a href=\"\" title=\"\"&gt; &lt;abbr title=\"\"&gt; &lt;acronym title=\"\"&gt; &lt;b&gt; &lt;blockquote cite=\"\"&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=\"\"&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=\"\"&gt; &lt;strike&gt; &lt;strong&gt; </code>
                                                                </p>
                                                                <button type=\"submit\" class=\"btn btn-primary\">Submit Comment</button>
                                                        </form>
                                                </section>                                                
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

                                                        <!-- FLICKR FEED -->
                                                        <section class=\"col-sm-6 col-md-12 widget vimeo\">
                                                                <!-- Widget Header -->
                                                                <header class=\"clearfix\"><h4>Flickr Feed</h4></header>

                                                                <!-- Widget Content -->
                                                                <ul id=\"flickr-feed-aside\" class=\"flickr-feed clearfix\">
                                                                        <li><i class=\"fa fa-spinner fa-spin\"></i> Please wait...</li>
                                                                        <li>
                                                                                <script type=\"text/template\">
                                                                                        <li>
                                                                                                <a href=\"{{link}}\" title=\"{{title}}\" class=\"light\" target=\"_blank\">
                                                                                                        <img src=\"{{thumbnail}}\" alt=\"{{title}}\">
                                                                                                        <div class=\"layer\"></div>
                                                                                                </a>
                                                                                        </li>
                                                                                </script>
                                                                        </li>
                                                                </ul>
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
                                                </div>
                                        </aside>
                                </div>
                        </div>
                </div><!--#content-->

                <footer>
                        <!-- MAIN FOOTER
                        ================ -->
                        <div id=\"footer-main\">
                                <div class=\"container\">
                                        <div class=\"row\">
                                                <section class=\"col-md-2 col-sm-4\">
                                                        <div class=\"title\"><a href=\"#\"><h4>National</h4></a></div>
                                                        <ul class=\"categories\">
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Politics</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Sport</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Entertainment</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Technology</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Lifestyle</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Finance</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Travel</a></li>
                                                        </ul>
                                                </section>

                                                <section class=\"col-md-2 col-sm-4\">
                                                        <div class=\"title\"><a href=\"#\"><h4>World</h4></a></div>
                                                        <ul class=\"categories\">
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Pacific</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Asia</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> North America</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> South America</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Africa</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Middle East</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Europe</a></li>
                                                        </ul>
                                                </section>

                                                <section class=\"col-md-2 col-sm-4\">
                                                        <div class=\"title\"><a href=\"#\"><h4>Sport</h4></a></div>
                                                        <ul class=\"categories\">
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Rugby</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Cricket</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Horse Racing</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Basketball</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Netball</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Football</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Motorsport</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Tennis</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Boxing</a></li>
                                                        </ul>
                                                </section>

                                                <section class=\"col-md-2 col-sm-4\">
                                                        <div class=\"title\"><a href=\"#\"><h4>Entertainment</h4></a></div>
                                                        <ul class=\"categories\">
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Celebrity Life</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Celebrity Style</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Horse Racing</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> TV</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Movies</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Music</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Books/Magazines</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Awards</a></li>
                                                        </ul>
                                                </section>

                                                <section class=\"col-md-2 col-sm-4\">
                                                        <div class=\"title\"><a href=\"#\"><h4>Technology</h4></a></div>
                                                        <ul class=\"categories\">
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Science</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Online</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Gaming</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Gadgets</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Environment</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Design</a></li>
                                                        </ul>
                                                </section>

                                                <section class=\"col-md-2 col-sm-4\">
                                                        <div class=\"title\"><a href=\"#\"><h4>Travel</h4></a></div>
                                                        <ul class=\"categories\">
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Travel Updates</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Travel Advices</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Travel Ideas</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Holidays</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> World Travel</a></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> National Travel</a></li>
                                                        </ul>
                                                </section>
                                        </div>
                                </div>
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
</html>", "@GlobalView/Default/blog-detail.html", "/Users/Rachid/SymfonyProjects/theglobalview/src/GlobalViewBundle/Resources/views/Default/blog-detail.html");
    }
}
