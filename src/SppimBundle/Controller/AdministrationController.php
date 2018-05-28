<?php

namespace SppimBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class AdministrationController extends Controller
{
    public function indexAction()
    {
        return $this->render('Admin/Adminbase.html.twig');
    }
    public function planningAction()
    {
        return $this->render('calendar.html.twig');
    }
}
