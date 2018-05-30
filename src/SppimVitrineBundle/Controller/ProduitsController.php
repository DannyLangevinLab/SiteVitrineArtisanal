<?php

namespace SppimVitrineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProduitsController extends Controller
{
    public function produitsAction()
    {
        return $this->render('SppimVitrineBundle:Default:produits/layout/produits.html.twig');
    }
    public function presentationAction()
    {
        return $this->render('SppimVitrineBundlee:Default:produits/layout/presentation.html.twig');
    }
}
