<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // global_view_homepage
        if (preg_match('#^/(?P<_locale>en|fr|de)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'global_view_homepage')), array (  '_controller' => 'GlobalViewBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'en',));
        }

        // global_view_posts_by_subcategory
        if (0 === strpos($pathinfo, '/posts') && preg_match('#^/posts/(?P<page>[^/]++)/subcategory/(?P<id>[^/]++)(?:/(?P<_locale>en|fr|de))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'global_view_posts_by_subcategory')), array (  '_controller' => 'GlobalViewBundle\\Controller\\DefaultController::subcategorypostsAction',  '_locale' => 'en',  'page' => 1,));
        }

        // global_login
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'GlobalViewBundle\\Controller\\LoginController::loginAction',  '_route' => 'global_login',);
        }

        // global_logout
        if ('/logout' === $pathinfo) {
            return array (  '_controller' => 'GlobalViewBundle\\Controller\\LoginController::logoutAction',  '_route' => 'global_logout',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // global_admin
            if ('/admin/home' === $pathinfo) {
                return array (  '_controller' => 'GlobalViewBundle\\Controller\\AdminController::indexAction',  '_route' => 'global_admin',);
            }

            if (0 === strpos($pathinfo, '/admin/category')) {
                // global_admin_category
                if ('/admin/category' === $pathinfo) {
                    return array (  '_controller' => 'GlobalViewBundle\\Controller\\CategoryController::indexAction',  '_route' => 'global_admin_category',);
                }

                // global_admin_category_create
                if ('/admin/category/create' === $pathinfo) {
                    return array (  '_controller' => 'GlobalViewBundle\\Controller\\CategoryController::createAction',  '_route' => 'global_admin_category_create',);
                }

                // global_admin_category_update
                if (0 === strpos($pathinfo, '/admin/category/update') && preg_match('#^/admin/category/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'global_admin_category_update')), array (  '_controller' => 'GlobalViewBundle\\Controller\\CategoryController::updateAction',));
                }

                // global_admin_category_delete
                if (0 === strpos($pathinfo, '/admin/category/delete') && preg_match('#^/admin/category/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'global_admin_category_delete')), array (  '_controller' => 'GlobalViewBundle\\Controller\\CategoryController::deleteAction',));
                }

            }

            // global_admin_post_create
            if ('/admin/create/post' === $pathinfo) {
                return array (  '_controller' => 'GlobalViewBundle\\Controller\\PostController::createAction',  '_route' => 'global_admin_post_create',);
            }

            if (0 === strpos($pathinfo, '/admin/subcategory')) {
                // global_admin_subcategory
                if ('/admin/subcategory' === $pathinfo) {
                    return array (  '_controller' => 'GlobalViewBundle\\Controller\\SubCategoryController::indexAction',  '_route' => 'global_admin_subcategory',);
                }

                // global_admin_subcategory_create
                if ('/admin/subcategory/create' === $pathinfo) {
                    return array (  '_controller' => 'GlobalViewBundle\\Controller\\SubCategoryController::createAction',  '_route' => 'global_admin_subcategory_create',);
                }

                // global_admin_subcategory_update
                if (0 === strpos($pathinfo, '/admin/subcategory/update') && preg_match('#^/admin/subcategory/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'global_admin_subcategory_update')), array (  '_controller' => 'GlobalViewBundle\\Controller\\SubCategoryController::updateAction',));
                }

                // global_admin_subcategory_delete
                if (0 === strpos($pathinfo, '/admin/subcategory/delete') && preg_match('#^/admin/subcategory/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'global_admin_subcategory_delete')), array (  '_controller' => 'GlobalViewBundle\\Controller\\SubCategoryController::deleteAction',));
                }

            }

            // global_admin_post
            if (0 === strpos($pathinfo, '/admin/post') && preg_match('#^/admin/post(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'global_admin_post')), array (  '_controller' => 'GlobalViewBundle\\Controller\\PostController::indexAction',  'page' => 1,));
            }

            // global_admin_post_update
            if (0 === strpos($pathinfo, '/admin/update/post') && preg_match('#^/admin/update/post/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'global_admin_post_update')), array (  '_controller' => 'GlobalViewBundle\\Controller\\PostController::updateAction',));
            }

            // global_admin_post_delete
            if (0 === strpos($pathinfo, '/admin/delete/post') && preg_match('#^/admin/delete/post/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'global_admin_post_delete')), array (  '_controller' => 'GlobalViewBundle\\Controller\\PostController::deleteAction',));
            }

            // global_admin_post_details
            if (0 === strpos($pathinfo, '/admin/details/post') && preg_match('#^/admin/details/post/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'global_admin_post_details')), array (  '_controller' => 'GlobalViewBundle\\Controller\\PostController::detailsAction',));
            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
