<?php

namespace PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PagesController extends Controller
{
    public function pageAction($id)
    {
        return $this->render('PagesBundle:Default:Pages/layout/pages.html.twig');
    }
}
