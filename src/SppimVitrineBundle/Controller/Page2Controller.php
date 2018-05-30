<?php

namespace SppimVitrineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class Page2Controller extends Controller
{
    public function montreAction()
    {

        return $this->render('@SppimVitrine/Default/basemodif.html.twig');
    }

}
