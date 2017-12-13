<?php

namespace GlobalViewBundle\Controller;

use GlobalViewBundle\Entity\Post;
use GlobalViewBundle\Entity\SubCategory;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use \DateTime;

/**
 * @Security("has_role('ROLE_ADMIN')")
 */
class PostController extends Controller
{

    public function indexAction()
    {
        $subcategories = $this->getDoctrine()
            ->getRepository('GlobalViewBundle:SubCategory')
            ->findSubCategories();

        $posts = $this->getDoctrine()
            ->getRepository('GlobalViewBundle:Post')
            ->findPosts();

        return $this->render('GlobalViewBundle:Default:post/post.html.twig', array('subcategories' => $subcategories, 'posts' => $posts, 'post' => new Post(),
            'successMsg' => null, 'erreurMsg' => null, 'mode' => 'new'));
    }

    public function createAction(Request $request)
    {
        $successMsg = null;
        $erreurMsg = null;

        if ($request->getMethod() == Request::METHOD_POST){

            $post = new Post();

            $subcategory = $this->getDoctrine()->getRepository('GlobalViewBundle:SubCategory')->find(intval($request->get('subcategory_id')));
            $post->setSubcategory($subcategory);

            $post->setTitleFr($request->get('title_fr'));
            $post->setTitleEn($request->get('title_en'));
            $post->setTitleDe($request->get('title_de'));

            $post->setDescriptionEn($request->get('description_en'));
            $post->setDescriptionFr($request->get('description_fr'));
            $post->setDescriptionDe($request->get('description_de'));

            $post->setImageUrl($request->get('image_url'));

            $post->setDateCreation(new DateTime());
            $post->setEtat(true);

            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();

            $successMsg = "Enregistrement réussi!";

        }

        $subcategories = $this->getDoctrine()
            ->getRepository('GlobalViewBundle:SubCategory')
            ->findSubCategories();

        $posts = $this->getDoctrine()
            ->getRepository('GlobalViewBundle:Post')
            ->findPosts();


        return $this->render('GlobalViewBundle:Default:post/post.html.twig', array('successMsg' => $successMsg, 'erreurMsg' => $erreurMsg,  'posts' => $posts,
            'subcategories' => $subcategories, 'post' => new Post(), 'mode' => 'new'));

    }

    public function updateAction(Request $request, $id)
    {
        $successMsg = null;
        $erreurMsg = null;
        $mode = 'edit';

        $post = $this->getDoctrine()
            ->getRepository('GlobalViewBundle:Post')
            ->find($id);

        if (!$post) {
            throw $this->createNotFoundException(
                'Aucune post trouvé avec l\id ' . $id
            );
        }

        if ($request->getMethod() == Request::METHOD_POST){

            $subcategory = $this->getDoctrine()->getRepository('GlobalViewBundle:SubCategory')->find(intval($request->get('subcategory_id')));
            $post->setSubcategory($subcategory);

            $post->setTitleFr($request->get('title_fr'));
            $post->setTitleEn($request->get('title_en'));
            $post->setTitleDe($request->get('title_de'));

            $post->setDescriptionEn($request->get('description_en'));
            $post->setDescriptionFr($request->get('description_fr'));
            $post->setDescriptionDe($request->get('description_de'));

            $post->setImageUrl($request->get('image_url'));
            $post->setEtat(true);

            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();

            $successMsg = "Modification réussie!";
            $mode = 'new';

            $post = new Post();

        }

        $subcategories = $this->getDoctrine()
            ->getRepository('GlobalViewBundle:SubCategory')
            ->findSubCategories();

        $posts = $this->getDoctrine()
            ->getRepository('GlobalViewBundle:Post')
            ->findPosts();


        return $this->render('GlobalViewBundle:Default:post/post.html.twig', array('successMsg' => $successMsg, 'erreurMsg' => $erreurMsg,  'posts' => $posts,
            'subcategories' => $subcategories, 'post' => $post, 'mode' => $mode));
    }

    public function deleteAction(Request $request, $id)
    {
        return $this->render('GlobalViewBundle:Default:post/post.html.twig');
    }

    public function deltailsAction(Request $request, $id)
    {
        return $this->render('GlobalViewBundle:Default:post/post.html.twig');
    }

}