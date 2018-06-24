<?php

namespace FrontBundle\Controller;

use AppBundle\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SearchController extends Controller
{
    public function indexAction(Request $request, $page)
    {
        $keyword = $request->get('kw');
        if (!$keyword) {
            throw $this->createNotFoundException('No keyword');
        }

        $productRepo = $this->getDoctrine()->getRepository(Product::class);
        $query = $productRepo->getProductsByKeyword($keyword);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate($query, $page, 4);

        $serviceHelper = $this->get('service.helper');
        $webPath = $this->get('kernel')->getRootDir() . '/../web';

        return $this->render('FrontBundle:Search:index.html.twig', array(
            'keyword' => $keyword,
            'pagination' => $pagination,
            'webPath' => $webPath,
            'serviceHelper' => $serviceHelper
        ));
    }
}
