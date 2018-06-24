<?php

namespace FrontBundle\Model;

use Doctrine\ORM\EntityRepository;

class ProductRepository extends EntityRepository
{
    public function getProductsByCateId($cateId)
    {
        $result = $this->createQueryBuilder('a')
            ->leftJoin('a.categories', 'b')
            ->leftJoin('a.colors', 'c')
            ->where('a.status = 1')
            ->where('b.id = :cateId')
            ->orderBy('a.priority', 'DESC')
            ->setParameter('cateId', $cateId)
            ->getQuery()
            ->getResult();

        return $result;
    }

    public function getProductBySlug($slug) {
        $result = $this->createQueryBuilder('a')
            ->where('a.status = 1')
            ->andWhere('a.slug = :slug')
            ->setParameter('slug', $slug)
            ->getQuery()
            ->getOneOrNullResult();

        return $result;
    }

    public function getProductsByCateIds($cateIds, $curProdSlug) {
        $result = $this->createQueryBuilder('a')
            ->leftJoin('a.productCategories', 'b')
            ->where('a.status = 1')
            ->andWhere('b.category_id IN (:cateIds)')
            ->andWhere('a.slug != :curProdSlug')
            ->setParameter('cateIds', $cateIds)
            ->setParameter('curProdSlug', $curProdSlug)
            ->setMaxResults(3)
            ->getQuery()
            ->getResult();

        return $result;
    }

     public function getProductsByKeyword($kw) {
        $result = $this->createQueryBuilder('a')
            ->where('a.status = 1')
            ->andWhere('a.name LIKE :kw')
            ->setParameter('kw', '%' . $kw . '%')
            ->getQuery();

        return $result;
    }

    public function getRandomProducts() {
        $result = $this->createQueryBuilder('a')
            ->where('a.status = 1')
            ->getQuery()
            ->setMaxResults(3)
            ->getResult();

        return $result;
    }

    public function getProductsByCateSlug($cateSlug) {
        $result = $this->createQueryBuilder('a')
            ->leftJoin('a.categories', 'b')
            ->where('a.status = 1')
            ->andWhere('b.slug = :cateSlug')
            ->setParameter('cateSlug', $cateSlug)
            ->getQuery();

        return $result;
    }
}