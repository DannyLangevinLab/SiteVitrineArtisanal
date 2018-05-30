<?php

namespace SppimVitrineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
    /**
     * @Route("/home",name="Default")
     */
{
    public function indexAction()
    {
        return $this->render('base.html.twig');
    }
}
