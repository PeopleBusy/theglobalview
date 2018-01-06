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
            ->findFirstPosts(5);

        $popularPosts = $this->getDoctrine()
            ->getRepository('GlobalViewBundle:Post')
            ->findLastPosts(5);


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

    public function detailpostAction(Request $request, $_locale, $id, $page)
    {
        $post = $this->getDoctrine()
            ->getRepository('GlobalViewBundle:Post')
            ->find($id);

        if (!$post) {
            throw $this->createNotFoundException(
                'Aucune article trouvé avec l\id ' . $id
            );
        }

        $categories = $contratagent = $this->getDoctrine()
            ->getRepository('GlobalViewBundle:Category')
            ->findAll();

        $popularPosts = $this->getDoctrine()
            ->getRepository('GlobalViewBundle:Post')
            ->findLastPosts(5);

        $posts = $this->getDoctrine()
            ->getRepository('GlobalViewBundle:Post')
            ->findPostsBySubCategory($post->getSubcategory()->getId(), $page, 1);

        $pagination = array(
            'page' => $page,
            'nbPages' => ceil(count($posts) / 1),
            'nomRoute' => 'global_view_post_detail',
            'paramsRoute' => array('id' => $id)
        );

        if($_locale == "en"){
            return $this->render('GlobalViewBundle:Default:article_detail_en.html.twig', array('categories' => $categories, 'posts' => $posts, 'popularPosts' => $popularPosts, 'pagination' => $pagination,
                'post' =>$post));
        }

        if($_locale == "fr"){
            return $this->render('GlobalViewBundle:Default:article_detail_fr.html.twig', array('categories' => $categories, 'posts' => $posts, 'popularPosts' => $popularPosts, 'pagination' => $pagination,
                'post' =>$post));
        }

        if($_locale == "de"){
            return $this->render('GlobalViewBundle:Default:article_detail_de.html.twig', array('categories' => $categories, 'posts' => $posts, 'popularPosts' => $popularPosts, 'pagination' => $pagination,
                'post' =>$post));
        }


    }


}
