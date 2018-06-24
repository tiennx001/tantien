<?php
/**
 * Created by PhpStorm.
 * User: DELL-VOSTRO
 * Date: 2017-04-11
 * Time: 8:09 PM
 */

namespace AppBundle\EventListener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use AppBundle\Entity\Product;

class UpdateEntityListener {

    private $rootDir;

    public function __construct($rootDir)
    {
        $this->rootDir = $rootDir;
    }

    public function preUpdate(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        // only act on some "Product" entity
        if (!$entity instanceof Product) {
            return;
        }

        $entityManager = $args->getEntityManager();
        // ... do something with the Product
    }

}