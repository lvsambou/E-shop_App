<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default_index", methods="GET")
     */
    public function index()
    {
        return $this->render('/default/index.html.twig');
    }

    /**
     * @Route("/{alias}", name="default_category", methods={"GET"})
     */
    public function category($alias)
    {
        return $this->render('/default/category.html.twig');
    }

    /**
     * @Route ("/{category}/{alias}_{id}.html", name="default_product", methods={"GET"})
     *
     */
    public function product($category, $alias, $id)
    {
        return $this->render('default/product.html.twig');
    }
}