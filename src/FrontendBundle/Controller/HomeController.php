<?php

namespace FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HomeController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('FrontendBundle:Default:index.html.twig');
    }
}
