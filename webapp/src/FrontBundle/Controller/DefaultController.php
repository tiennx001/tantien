<?php

namespace FrontBundle\Controller;

use AppBundle\Entity\Category;
use AppBundle\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function headerAction()
    {
        return $this->render('FrontBundle:Default:_header.html.twig');
    }

    public function footerAction()
    {
        $categoryRepo = $this->getDoctrine()->getRepository(Category::class);
        $categories = $categoryRepo->getFooterCategories();

        return $this->render('FrontBundle:Default:_footer.html.twig', array('categories' => $categories));
    }

    public function bannerAction()
    {
        return $this->render('FrontBundle:Default:_banner.html.twig');
    }

    public function productsAction()
    {
        $productRepo = $this->getDoctrine()->getRepository(Product::class);
        $products = $productRepo->getRandomProducts();

        $serviceHelper = $this->get('service.helper');
        $webPath = $this->get('kernel')->getRootDir() . '/../web';

        return $this->render('FrontBundle:Default:_products.html.twig', array(
            'products' => $products,
            'serviceHelper' => $serviceHelper,
            'webPath' => $webPath
        ));
    }
}
