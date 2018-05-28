<?php
/**
 * Created by PhpStorm.
 * User: pc drainost
 * Date: 19/04/2018
 * Time: 18:32
 */

namespace SppimBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\CallbackTransformer;


class formulaireCreaArticles extends AbstractType
{
    public function buildForm (FormBuilderInterface $builder, array $options)
    {

        //Initialisation Formulaire PHP Synfony v3
        $builder->add('Nom_Produit', TextType::class, array('attr' =>array('class' => 'form-control')))
            ->add('Disponibilite_du_Produit',ChoiceType::class,array('choices' => array('Oui'=>'Oui','Non'=>'Non')))
            ->add('Visuel_du_Produit',FileType::class)
            ->add('Categorie_du_Produit',ChoiceType::class,array('choices' => array('PORTES INTERIEURES'=>'PORTES INTERIEURES','PORTES EXTERIEURES'=>'PORTES EXTERIEURES','FENETRES'=>'FENETRES','DRESSING'=>'DRESSING','PLACARDS'=>'PLACARDS')))
            ->add('Description_du_Produit',TextareaType::class)
            ->add('Materiaux_du_Produit',ChoiceType::class,array('choices' => array('ALU'=>'ALU','PVC'=>'PVC','BOIS'=>'BOIS')))
            ->add('Couleurs_du_Produit',ChoiceType::class,array('choices' => array('Blanc'=>'Blanc','Noir'=>'Noir','Naturel'=>'Naturel','Marron'=>'Marron','Rouge'=>'Rouge')))
            ->add('TVA_appliquee',NumberType::class)
            ->add('Marge_souhaitee',NumberType::class)
            ->add('Prix_a_afficher',MoneyType::class)
           //Boutons
            ->add('Apercu_de_l_Article',ButtonType::class)
            ->add('Valider_et_Publier',SubmitType::class)

        ;

    }
    public function getName(){
        return 'app_admin_creerProduits.html.twig';
    }
}

