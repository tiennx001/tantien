<?php

namespace FrontBundle\Model;

use Doctrine\ORM\EntityRepository;

class ProductColorRepository extends EntityRepository
{
    public function deleteAllByProductId($id, $postList)
    {
        $qb = $this->createQueryBuilder('a');
        $result = $qb
            ->delete()
            ->where('a.product_id = :id')
            ->andWhere('a.color_id NOT IN (:postList)')
            ->setParameter('id', $id)
            ->setParameter('postList', $postList)
            ->getQuery()->execute();

        return $result;
    }

    public function getObjByProductIdAndColorId($productId, $colorId) {
        $qb = $this->createQueryBuilder('a');
        $result = $qb
            ->where('a.product_id = :id')
            ->andWhere('a.color_id = :colorId')
            ->setParameter('id', $productId)
            ->setParameter('colorId', $colorId)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();

        return $result;
    }
}