<?php

namespace SppimBundle\Controller;

use SppimBundle\SppimBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SppimBundle\Entity\Media;
use SppimBundle\Form\formulaireImagesArticles;

use Symfony\Component\HttpFoundation\Request;

class AjoutImagesProduitsController extends Controller
{
      public function creerImagesFormulaireAction (Request $request){
          $form = $this->createForm(formulaireImagesArticles::class);
       //Recuperer les data du formulaire
          if( $request->getMethod()=='POST'){
              $form->handleRequest($request);
              var_dump($form->getData());
              $form->get('name')->getData();
              $form->get('file')->getData();

              // Des que lon veut accéder a la BDD appeler ORM
              $em= $this->getDoctrine()->getManager();
              // Setters pour introduire des données dans la table Produits
              $image =new Media();

              $image->setPath($form->get('file')->getData());
              $image->setName($form->get('name')->getData());
              //em prepare la requete et flush l'ajoute dans la bdd
              $em->persist($image);
              $em->flush();
              $image = $em->getRepository('SppimBundle:Media')->findAll();
          }
          //FIn RECUP
          return $this->render('Admin/creerProduits.html.twig', array('form'=> $form ->createView()));
      }


}
