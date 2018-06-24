<?php

namespace FrontBundle\Controller;

use AppBundle\Entity\Category;
use AppBundle\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        $categoryRepo = $this->getDoctrine()->getRepository(Category::class);
        $categories = $categoryRepo->getHotCategories();

        $productRepo = $this->getDoctrine()->getRepository(Product::class);
        $featureProducts = array();
        if (isset($categories[0])) {
            $featureProducts = $productRepo->getProductsByCateId($categories[0]->getId());
        }
        $newProducts = array();
        if (isset($categories[0])) {
            $newProducts = $productRepo->getProductsByCateId($categories[1]->getId());
        }
        $creativeProducts = array();
        if (isset($categories[0])) {
            $creativeProducts = $productRepo->getProductsByCateId($categories[2]->getId());
        }

        $serviceHelper = $this->get('service.helper');

        $webPath = $this->get('kernel')->getRootDir() . '/../web';

        return $this->render('FrontBundle:Home:index.html.twig', array(
            'categories' => $categories,
            'featureProducts' => $featureProducts,
            'newProducts' => $newProducts,
            'creativeProducts' => $creativeProducts,
            'serviceHelper' => $serviceHelper,
            'webPath' => $webPath
        ));
    }
}
