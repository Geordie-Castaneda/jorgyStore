<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function indexAction(): Response
    {
        return $this->render('homepage.html.twig');
    }

    /**
     * @Route("/products/{id}", name="app_product_show")
     */
    public function showProductAction(): Response
    {
        return $this->render('homepage.html.twig');
    }
}
