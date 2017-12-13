<?php

namespace GlobalViewBundle\Controller;

use GlobalViewBundle\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Security("has_role('ROLE_ADMIN')")
 */
class CategoryController extends Controller
{
    public function indexAction()
    {
        $categories = $contratagent = $this->getDoctrine()
            ->getRepository('GlobalViewBundle:Category')
            ->findCategories();

        return $this->render('GlobalViewBundle:Default:category/category.html.twig', array('category' => new Category(), 'categories' => $categories
            , 'successMsg' => null, 'erreurMsg' => null, 'mode' => 'new'));
    }

    public function createAction(Request $request)
    {
        $successMsg = null;
        $erreurMsg = null;

        if ($request->getMethod() == Request::METHOD_POST){

            $category = new Category();
            $category->setLibelleFr($request->get('libelle_fr'));
            $category->setLibelleEn($request->get('libelle_en'));
            $category->setLibelleDe($request->get('libelle_de'));
            $category->setLangue("default");
            $category->setEtat(true);

            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();

            $successMsg = "Enregistrement réussi!";
        }

        $categories = $this->getDoctrine()
            ->getRepository('GlobalViewBundle:Category')
            ->findCategories();


        return $this->render('GlobalViewBundle:Default:category/category.html.twig', array('category' => new Category(), 'successMsg' => $successMsg, 'erreurMsg' => $erreurMsg,
            'categories' => $categories, 'mode' => 'new'));
    }

    public function updateAction(Request $request, $id)
    {
        $successMsg = null;
        $erreurMsg = null;
        $mode = 'edit';

        $category = $this->getDoctrine()
            ->getRepository('GlobalViewBundle:Category')
            ->find($id);

        if (!$category) {
            throw $this->createNotFoundException(
                'Aucune catégorie trouvée avec l\id ' . $id
            );
        }

        if ($request->getMethod() == Request::METHOD_POST){

            $category->setLibelleFr($request->get('libelle_fr'));
            $category->setLibelleEn($request->get('libelle_en'));
            $category->setLibelleDe($request->get('libelle_de'));
            $category->setLangue("def");
            $category->setEtat(true);

            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();

            $successMsg = "Modification réussie!";
            $mode = 'new';

            $category = new Category();
        }

        $categories = $this->getDoctrine()
            ->getRepository('GlobalViewBundle:Category')
            ->findCategories();


        return $this->render('GlobalViewBundle:Default:category/category.html.twig', array('category' => $category, 'successMsg' => $successMsg, 'erreurMsg' => $erreurMsg,
            'categories' => $categories, 'mode' => $mode));
    }

    public function deleteAction(Request $request, $id)
    {
        return $this->render('GlobalViewBundle:Default:category/category.html.twig');
    }
}
