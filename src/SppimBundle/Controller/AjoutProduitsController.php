<?php

namespace SppimBundle\Controller;

use SppimBundle\Form\formulaireImagesArticles;
use SppimBundle\SppimBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SppimBundle\Entity\Produits;
use SppimBundle\Entity\Media;
use SppimBundle\Form\formulaireCreaArticles;

use Symfony\Component\HttpFoundation\Request;

class AjoutProduitsController extends Controller
{
      public function creerFormulaireAction (Request $request){
          $form = $this->createForm(formulaireCreaArticles::class);
       //Recuperer les data du formulaire
          if( $request->getMethod()=='POST'){
              $form->handleRequest($request);
              var_dump($form->getData());
              $form->get('Nom_Produit')->getData();
              $form->get('name')->getData();
              $form->get('Categorie_du_Produit')->getData();
              $form->get('Description_du_Produit')->getData();
              $form->get('Materiaux_du_Produit')->getData();
              $form->get('Couleurs_du_Produit')->getData();
              $form->get('TVA_appliquee')->getData();
              $form->get('Marge_souhaitee')->getData();
              $form->get('Prix_a_afficher')->getData();




              // Des que lon veut accéder a la BDD appeler ORM
              $em= $this->getDoctrine()->getManager();
              $em2= $this->getDoctrine()->getManager();

              // Setters pour introduire des données dans la table Produits
              $produits =new Produits();
              $media =new Media();
              $produits->setCategorie($form->get('Categorie_du_Produit')->getData());
              $produits->setColoris($form->get('Couleurs_du_Produit')->getData());
              $produits->setDescription($form->get('Description_du_Produit')->getData());
              $produits->setDisponible($form->get('Disponibilite_du_Produit')->getData());
              $produits->setImage('nameImage');
              $produits->setNom($form->get('Nom_Produit')->getData());
              $produits->setPrix($form->get('Prix_a_afficher')->getData());
              $produits->setTva($form->get('TVA_appliquee')->getData());
              $produits->setMarge($form->get('Marge_souhaitee')->getData());
              $media->setName($form->get('name')->getData());
              $media->setPath('originalName');
              //em prepare la requete et flush l'ajoute dans la bdd
              $em->persist($produits);
              $em->flush();
              $produits = $em->getRepository('SppimBundle:Produits')->findAll();
              $em2->persist($media);
              $em2->flush();
              $media = $em2->getRepository('SppimBundle:Media')->findAll();
          }
          //FIn RECUP
          return $this->render('Admin/creerProduits.html.twig', array('form'=> $form ->createView()));
      }


}
