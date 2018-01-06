<?php

/* ::carousel.html.twig */
class __TwigTemplate_952d56795e87db5b8bccfff9fcea7e646b49340da46f56a9de59c81eba98a436 extends Twig_Template
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
        $__internal_bc16da238887dd7916bc0daf699d933b4441db7901f4415033c50e4df5b129dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc16da238887dd7916bc0daf699d933b4441db7901f4415033c50e4df5b129dc->enter($__internal_bc16da238887dd7916bc0daf699d933b4441db7901f4415033c50e4df5b129dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::carousel.html.twig"));

        $__internal_bb864a17fc39106cbaa4a166a1bf6a7b756f88ce41f1d6439dd8c306e42a1810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb864a17fc39106cbaa4a166a1bf6a7b756f88ce41f1d6439dd8c306e42a1810->enter($__internal_bb864a17fc39106cbaa4a166a1bf6a7b756f88ce41f1d6439dd8c306e42a1810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::carousel.html.twig"));

        // line 1
        echo "
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
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/shadow.png"), "html", null, true);
        echo "\" class=\"shadow\" alt=\"shadow\">
        </section>
";
        
        $__internal_bc16da238887dd7916bc0daf699d933b4441db7901f4415033c50e4df5b129dc->leave($__internal_bc16da238887dd7916bc0daf699d933b4441db7901f4415033c50e4df5b129dc_prof);

        
        $__internal_bb864a17fc39106cbaa4a166a1bf6a7b756f88ce41f1d6439dd8c306e42a1810->leave($__internal_bb864a17fc39106cbaa4a166a1bf6a7b756f88ce41f1d6439dd8c306e42a1810_prof);

    }

    public function getTemplateName()
    {
        return "::carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 61,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
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
", "::carousel.html.twig", "/Users/Rachid/SymfonyProjects/theglobalview/app/Resources/views/carousel.html.twig");
    }
}
