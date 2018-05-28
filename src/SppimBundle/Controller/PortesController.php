<?php

namespace SppimBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PortesController extends Controller
{

    public function montreportesAction()
    {
        return $this->render('portes.html.twig');
    }
}
