<?php

namespace SppimBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FenetresController extends Controller
{

    public function montrefenetresAction()
    {
        return $this->render('fenetres.html.twig');
    }
    public function montreinfosfenetresAction()
    {
        return $this->render('presentationFenetre.html.twig');
    }
}
