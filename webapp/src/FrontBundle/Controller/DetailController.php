<?php

namespace FrontBundle\Controller;

use AppBundle\Entity\Category;
use AppBundle\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DetailController extends Controller
{
    public function indexAction($slug)
    {
        $productRepo = $this->getDoctrine()->getRepository(Product::class);
        $product = $productRepo->getProductBySlug($slug);
        if (!$product) {
            throw $this->createNotFoundException('The product does not exist');
        }
        $productColors = $product->getProductColors();

        $serviceHelper = $this->get('service.helper');
        $webPath = $this->get('kernel')->getRootDir() . '/../web';

        $cateIds = array();
        $productCategories = $product->getProductCategories();
        foreach ($productCategories as $prodCate) {
            $cateIds[] = $prodCate->getCategoryId();
        }
        $relatedProducts = $productRepo->getProductsByCateIds($cateIds, $slug);

        return $this->render('FrontBundle:Detail:index.html.twig', array(
            'product' => $product,
            'productColors' => $productColors,
            'serviceHelper' => $serviceHelper,
            'webPath' => $webPath,
            'relatedProducts' => $relatedProducts
        ));
    }
}
