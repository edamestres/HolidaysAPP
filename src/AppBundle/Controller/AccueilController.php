<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AccueilController extends Controller
{
    /**
     * @Route("/accueil", name="accueil")
     */
    public function ShowUserAction(Request $request)
    {	
    	//je recupere le repository 
    	$user = $em = $this->getDoctrine()->getRepository('AppBundle:User');

        $users = $user->findAll();
        dump($users);
        
        return $this->render('accueil/accueil.html.twig', array('users' => $users));
    }
}
