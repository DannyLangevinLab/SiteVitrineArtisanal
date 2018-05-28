<?php
/**
 * Created by PhpStorm.
 * User: pc drainost
 * Date: 19/04/2018
 * Time: 18:36
 */

namespace SppimBundle\Controller;
use SppimBundle\SppimBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SppimBundle\Entity\Produits;
use SppimBundle\Form\formulaireCreaArticles;
use Symfony\Component\HttpFoundation\Request;
class formulaireArticlesController extends Controller
{
    public function creerFormulaireAction (Request $request){
        $form = $this->createForm(formulaireCreaArticles::class);
//Recuperer les data du formulaire
        if( $request->getMethod()=='POST'){
            $form->handleRequest($request);
            var_dump($form->getData());
        }
        //FIn RECUP
        return $this->render('Admin/creerProduits.html.twig', array('form'=> $form ->createView()));
    }

}


