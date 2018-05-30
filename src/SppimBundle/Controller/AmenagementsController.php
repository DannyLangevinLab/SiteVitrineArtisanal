<?php

namespace SppimBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AmenagementsController extends Controller
{

    public function montreamenagementsAction()
    {
        $produits = $this->getDoctrine()
            ->getRepository('SppimBundle:Produits')
            ->findBy(array('categorie' => 'AMENAGEMENTS INTERIEURES'));

        return $this->render("amenagements.html.twig", array(
            'produits' => $produits,
        ));
    }
}
