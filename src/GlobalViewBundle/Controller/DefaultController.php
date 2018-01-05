<?php

namespace GlobalViewBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request, $_locale)
    {
        $categories = $contratagent = $this->getDoctrine()
            ->getRepository('GlobalViewBundle:Category')
            ->findAll();

        $posts = $popularPosts = $this->getDoctrine()
            ->getRepository('GlobalViewBundle:Post')
            ->findLastPosts(5);

        /*$popularPosts = $this->getDoctrine()
            ->getRepository('GlobalViewBundle:Post')
            ->findLastPosts(5);*/


        if($_locale == "en"){
            return $this->render('GlobalViewBundle:Default:index_en.html.twig', array('categories' => $categories, 'posts' => $posts, 'popularPosts' => $popularPosts, 'pagination' => null));
        }

        if($_locale == "fr"){
            return $this->render('GlobalViewBundle:Default:index_fr.html.twig', array('categories' => $categories, 'posts' => $posts, 'popularPosts' => $popularPosts, 'pagination' => null));
        }

        if($_locale == "de"){
            return $this->render('GlobalViewBundle:Default:index_de.html.twig', array('categories' => $categories, 'posts' => $posts, 'popularPosts' => $popularPosts, 'pagination' => null));
        }


    }

    public function subcategorypostsAction(Request $request, $_locale, $id, $page)
    {
        $categories = $contratagent = $this->getDoctrine()
            ->getRepository('GlobalViewBundle:Category')
            ->findAll();

        $posts = $this->getDoctrine()
            ->getRepository('GlobalViewBundle:Post')
            ->findPostsBySubCategory($id, $page, 5);

        $popularPosts = $this->getDoctrine()
            ->getRepository('GlobalViewBundle:Post')
            ->findLastPosts(5);

        $pagination = array(
            'page' => $page,
            'nbPages' => ceil(count($posts) / 5),
            'nomRoute' => 'global_view_posts_by_subcategory',
            'paramsRoute' => array('id' => $id)
        );

        if($_locale == "en"){
            return $this->render('GlobalViewBundle:Default:index_en.html.twig', array('categories' => $categories, 'posts' => $posts, 'popularPosts' => $popularPosts, 'pagination' => $pagination));
        }

        if($_locale == "fr"){
            return $this->render('GlobalViewBundle:Default:index_fr.html.twig', array('categories' => $categories, 'posts' => $posts, 'popularPosts' => $popularPosts, 'pagination' => $pagination));
        }

        if($_locale == "de"){
            return $this->render('GlobalViewBundle:Default:index_de.html.twig', array('categories' => $categories, 'posts' => $posts, 'popularPosts' => $popularPosts, 'pagination' => $pagination));
        }


    }


}
