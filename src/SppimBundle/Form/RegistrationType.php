<?php
// src/AppBundle/Form/RegistrationType.php

namespace SppimBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder -> add('nom')
                 -> add('prenom')
                 -> add('adresse');
    }

    public function getParent()
    {
        return $this->getBlockPrefix();
    }


    public function getBlockPrefix()
    {
        return 'fos_user_registration';
    }
    public function getName()
    {
        return 'app_user_registration';
     }
}
?>