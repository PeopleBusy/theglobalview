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

    public function indexAction($page)
    {
        $subcategories = $this->getDoctrine()
            ->getRepository('GlobalViewBundle:SubCategory')
            ->findSubCategories();

        $posts = $this->getDoctrine()
            ->getRepository('GlobalViewBundle:Post')
            ->findPosts($page, 10);

        $pagination = array(
            'page' => $page,
            'nbPages' => ceil(count($posts) / 10),
            'nomRoute' => 'global_admin_post',
            'paramsRoute' => array()
        );

        return $this->render('GlobalViewBundle:Default:post/post.html.twig', array('subcategories' => $subcategories, 'posts' => $posts, 'post' => new Post(),
            'successMsg' => null, 'erreurMsg' => null, 'mode' => 'new', 'pagination' => $pagination));
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

            $file = $request->files->get('image_url');

            //var_dump($this->getParameter('articles_directory')); die();

            // If a file was uploaded
            if(!is_null($file)){
                // generate a random name for the file but keep the extension
                $filename = md5(uniqid()).".".$file->getClientOriginalExtension();

                $file->move($this->getParameter('articles_directory'), $filename); // move the file to a path

                $post->setImageUrl($filename);
            }



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
            ->findPosts(1, 10);

        $pagination = array(
            'page' => 1,
            'nbPages' => ceil(count($posts) / 10),
            'nomRoute' => 'global_admin_post',
            'paramsRoute' => array()
        );


        return $this->render('GlobalViewBundle:Default:post/post.html.twig', array('successMsg' => $successMsg, 'erreurMsg' => $erreurMsg,  'posts' => $posts,
            'subcategories' => $subcategories, 'post' => new Post(), 'mode' => 'new', 'pagination' => $pagination));

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

            $file = $request->files->get('image_url');

            //var_dump($this->getParameter('articles_directory')); die();

            // If a file was uploaded
            if(!is_null($file)){
                // generate a random name for the file but keep the extension
                $filename = md5(uniqid()).".".$file->getClientOriginalExtension();

                $file->move($this->getParameter('articles_directory'), $filename); // move the file to a path

                $post->setImageUrl($filename);
            }

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
            ->findPosts(1, 10);

        $pagination = array(
            'page' => 1,
            'nbPages' => ceil(count($posts) / 10),
            'nomRoute' => 'global_admin_post',
            'paramsRoute' => array()
        );


        return $this->render('GlobalViewBundle:Default:post/post.html.twig', array('successMsg' => $successMsg, 'erreurMsg' => $erreurMsg,  'posts' => $posts,
            'subcategories' => $subcategories, 'post' => $post, 'mode' => $mode, 'pagination' => $pagination));
    }

    public function deleteAction(Request $request, $id)
    {
        return $this->render('GlobalViewBundle:Default:post/post.html.twig');
    }

    public function detailsAction(Request $request, $id)
    {
        return $this->render('GlobalViewBundle:Default:post/post.html.twig');
    }

}
