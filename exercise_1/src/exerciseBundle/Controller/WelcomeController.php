<?php

namespace exerciseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class WelcomeController extends Controller
{
    /**
     * @Route("/")
     */
    public function welcomeAction()
    {
        return $this->render('exerciseBundle:Default:index.html.twig');
    }
}
