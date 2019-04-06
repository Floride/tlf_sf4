<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * Page Home
     * @Route("/")
     * @Route("/home", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig');
    }

    /**
     * Page Contact
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render('home/contact.html.twig');
    }

    /**
     * Page à propos
     * @Route("/a_propos_de_nous", name="about")
     */
    public function aPropos()
    {
        return $this->render('home/about.html.twig');
    }
}
