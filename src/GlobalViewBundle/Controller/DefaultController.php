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

        $posts = $this->getDoctrine()
            ->getRepository('GlobalViewBundle:Post')
            ->findLastPosts(5);

        $popularPosts = $this->getDoctrine()
            ->getRepository('GlobalViewBundle:Post')
            ->findLastPosts(5);


        if($_locale == "en"){
            return $this->render('GlobalViewBundle:Default:index_en.html.twig', array('categories' => $categories, 'posts' => $posts, 'popularPosts' => $popularPosts));
        }

        if($_locale == "fr"){
            return $this->render('GlobalViewBundle:Default:index_fr.html.twig', array('categories' => $categories, 'posts' => $posts, 'popularPosts' => $popularPosts));
        }

        if($_locale == "de"){
            return $this->render('GlobalViewBundle:Default:index_de.html.twig', array('categories' => $categories, 'posts' => $posts, 'popularPosts' => $popularPosts));
        }


    }

    public function subcategorypostsAction(Request $request, $_locale, $id)
    {
        $categories = $contratagent = $this->getDoctrine()
            ->getRepository('GlobalViewBundle:Category')
            ->findAll();

        $posts = $this->getDoctrine()
            ->getRepository('GlobalViewBundle:Post')
            ->findPostsBySubCategory($id);

        $popularPosts = $this->getDoctrine()
            ->getRepository('GlobalViewBundle:Post')
            ->findLastPosts(5);

        if($_locale == "en"){
            return $this->render('GlobalViewBundle:Default:index_en.html.twig', array('categories' => $categories, 'posts' => $posts, 'popularPosts' => $popularPosts));
        }

        if($_locale == "fr"){
            return $this->render('GlobalViewBundle:Default:index_fr.html.twig', array('categories' => $categories, 'posts' => $posts, 'popularPosts' => $popularPosts));
        }

        if($_locale == "de"){
            return $this->render('GlobalViewBundle:Default:index_de.html.twig', array('categories' => $categories, 'posts' => $posts, 'popularPosts' => $popularPosts));
        }


    }


}
