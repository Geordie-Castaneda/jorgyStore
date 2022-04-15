<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\RouterInterface;

class DefaultController extends AbstractController
{
    private ProductRepository $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * @Route("/", name="app_homepage")
     */
    public function indexAction(): Response
    {
        $products = $this->productRepository->findAll();

        return $this->render('homepage.html.twig', [
            'products' => $products
        ]);
    }

    /**
     * @Route("/products/{id}", name="app_product_show")
     */
    public function showProductAction(Request $request): Response
    {
        return $this->render('/product/show.html.twig', [
            'product' => $this->productRepository->find($request->get('id')),
            'products' => $this->productRepository->findAll()
        ]);
    }
}
