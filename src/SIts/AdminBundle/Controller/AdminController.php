<?php

namespace SIts\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use SIts\UserBundle\Entity\User;
use SIts\UserBundle\Form\UserType;

class AdminController extends Controller
{
    /**
     * @Route("/dashboard.html", name="sits_admin")
     * @Method("GET")
     * @Template("SItsAdminBundle:Admin:index.html.twig")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $users = $em->getRepository('SItsUserBundle:User')->findAll();
        
        return array(
            'users' => $users,
        );
    }
}
