<?php

namespace SppimBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PortesController extends Controller
{

    public function montreportesAction()
    {
        $produits = $this->getDoctrine()
            ->getRepository('SppimBundle:Produits')
            ->findBy(array('categorie' => 'PORTES INTERIEURES'));

        return $this->render("portes.html.twig", array(
            'produits' => $produits,
        ));
    }
}
