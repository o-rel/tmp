<?php

namespace SIts\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class PageController extends Controller
{
	
	/**
	 * @Route("/")
	 * @Template("SItsSiteBundle:Page:index.html.twig")
	 */ 
	 public function indexAction()
	 {
		 return array(
			 
		 );
	 }
	 
	 /**
	  * @Route("/maquette")
	  * @Template("SItsSiteBundle:Page:maquette.html.twig")
	  */
	 public function maquetteAction()
	 {
		 return array();
	 }
}