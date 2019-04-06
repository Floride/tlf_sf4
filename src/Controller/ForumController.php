<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/forum")
 */
class ForumController extends AbstractController
{
    /**
     * @Route("/", name="forum")
     */
    public function index()
    {
        return $this->render('forum/index.html.twig', [
            'controller_name' => 'ForumController',
        ]);
    }

    /**
     * @Route("/salon/{id}", name="salon")
     */
    public function salon()
    {
        return $this->render('forum/salon.html.twig', [
            'controller_name' => 'ForumController',
        ]);
    }
}
