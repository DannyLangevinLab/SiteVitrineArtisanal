<?php

namespace SppimBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SppimBundle\Controller\AjoutProduitsController;

class FenetresController extends Controller
{

    public function montrefenetresAction()
    {
        $produits = $this->getDoctrine()
        ->getRepository('SppimBundle:Produits')
        ->findBy(array('categorie' => 'FENETRES'));

        return $this->render("fenetres.html.twig", array(
            'produits' => $produits,
        ));
    }
    public function montreinfosfenetresAction()
    {
        return $this->render('presentationFenetre.html.twig');
    }
}
