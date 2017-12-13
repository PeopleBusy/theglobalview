<?php

namespace GlobalViewBundle\Controller;

use GlobalViewBundle\Entity\SubCategory;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Security("has_role('ROLE_ADMIN')")
 */
class SubCategoryController extends Controller
{

    public function indexAction()
    {
        $categories = $contratagent = $this->getDoctrine()
            ->getRepository('GlobalViewBundle:Category')
            ->findCategories();

        return $this->render('GlobalViewBundle:Default:subcategory/subcategory.html.twig', array('categories' => $categories, 'subcategory' => new SubCategory(),
            'successMsg' => null, 'erreurMsg' => null, 'mode' => 'new'));
    }

    public function createAction(Request $request)
    {
        $successMsg = null;
        $erreurMsg = null;

        if ($request->getMethod() == Request::METHOD_POST){

            $subcategory = new SubCategory();

            $category = $this->getDoctrine()->getRepository('GlobalViewBundle:Category')->find(intval($request->get('category_id')));
            $subcategory->setCategory($category);

            $subcategory->setNomFr($request->get('nom_fr'));
            $subcategory->setNomEn($request->get('nom_en'));
            $subcategory->setNomDe($request->get('nom_de'));
            $subcategory->setLangue("default");
            $subcategory->setEtat(true);

            $em = $this->getDoctrine()->getManager();
            $em->persist($subcategory);
            $em->flush();

            $successMsg = "Enregistrement réussi!";
        }

        $categories = $this->getDoctrine()
            ->getRepository('GlobalViewBundle:Category')
            ->findCategories();

        return $this->render('GlobalViewBundle:Default:subcategory/subcategory.html.twig', array('categories' => $categories, 'subcategory' => new SubCategory(),
            'successMsg' => $successMsg, 'erreurMsg' => $erreurMsg, 'mode' => 'new'));
    }

    public function updateAction(Request $request, $id)
    {
        $successMsg = null;
        $erreurMsg = null;
        $mode = 'edit';

        $subcategory = $this->getDoctrine()
            ->getRepository('GlobalViewBundle:SubCategory')
            ->find($id);

        if (!$subcategory) {
            throw $this->createNotFoundException(
                'Aucune catégorie trouvée avec l\id ' . $id
            );
        }

        if ($request->getMethod() == Request::METHOD_POST){

            $category = $this->getDoctrine()->getRepository('GlobalViewBundle:Category')->find(intval($request->get('category_id')));
            $subcategory->setCategory($category);

            $subcategory->setNomFr($request->get('nom_fr'));
            $subcategory->setNomEn($request->get('nom_en'));
            $subcategory->setNomDe($request->get('nom_de'));
            $subcategory->setLangue("default");
            $subcategory->setEtat(true);

            $em = $this->getDoctrine()->getManager();
            $em->persist($subcategory);
            $em->flush();

            $successMsg = "Modification réussie!";
            $mode = 'new';

            $subcategory = new SubCategory();
        }

        $categories = $this->getDoctrine()
            ->getRepository('GlobalViewBundle:Category')
            ->findCategories();

        return $this->render('GlobalViewBundle:Default:subcategory/subcategory.html.twig', array('categories' => $categories, 'subcategory' => $subcategory,
            'successMsg' => $successMsg, 'erreurMsg' => $erreurMsg, 'mode' => $mode));
    }

    public function deleteAction()
    {
        return $this->render('GlobalViewBundle:Default:subcategory/subcategory.html.twig');
    }

}
