<?php

namespace GlobalViewBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * @Security("has_role('ROLE_ADMIN')")
 */
class AdminController extends Controller
{

    public function indexAction()
    {

        return $this->render('GlobalViewBundle:Default:admin/admin.html.twig');

    }


}
