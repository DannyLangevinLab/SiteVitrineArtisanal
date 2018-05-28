<?php

namespace SppimBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RegisterController extends Controller
{

    public function registrationAction()
    {
        return $this->render('layout.html.twig');
    }
}
