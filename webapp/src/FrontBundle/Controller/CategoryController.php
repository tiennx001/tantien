<?php

namespace FrontBundle\Controller;

use AppBundle\Entity\Category;
use AppBundle\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CategoryController extends Controller
{
    public function indexAction($cateSlug, $page)
    {
        $categoryRepo = $this->getDoctrine()->getRepository(Category::class);
        $category = $categoryRepo->getCategoryBySlug($cateSlug);
        if (!$category) {
            throw $this->createNotFoundException('The category does not exist');
        }

        $productRepo = $this->getDoctrine()->getRepository(Product::class);
        $query = $productRepo->getProductsByCateSlug($cateSlug);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate($query, $page, 4);

        $serviceHelper = $this->get('service.helper');
        $webPath = $this->get('kernel')->getRootDir() . '/../web';

        return $this->render('FrontBundle:Category:index.html.twig', array(
            'category' => $category,
            'pagination' => $pagination,
            'webPath' => $webPath,
            'serviceHelper' => $serviceHelper
        ));
    }
}
