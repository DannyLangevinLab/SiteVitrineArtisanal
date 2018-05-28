<?php

namespace SppimBundle\Controller;

use SppimBundle\Form\formulaireCreaArticles;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SppimBundle\Entity\Produits;


class CreationProdController extends Controller
{
    public function indexAction()
    {
        return $this->render('Admin/creerProduits.html.twig');
    }

    public function  ajoutFormulaireAction(){

        $form = $this->createForm(new formulaireCreaArticles());
        return $this->render('Admin/creerProduits.html.twig', array('form'=> $form ->createView()));
    }

}
