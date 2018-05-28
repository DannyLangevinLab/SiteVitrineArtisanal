<?php

namespace SppimBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AmenagementsController extends Controller
{

    public function montreamenagementsAction()
    {
        return $this->render('amenagements.html.twig');
    }
}
