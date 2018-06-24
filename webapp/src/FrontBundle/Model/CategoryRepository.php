<?php

namespace FrontBundle\Model;

use Doctrine\ORM\EntityRepository;

class CategoryRepository extends EntityRepository
{
    public function getHotCategories()
    {
        $result = $this->createQueryBuilder('a')
            ->where('a.status = 1')
            ->andWhere('a.is_hot = 1')
            ->orderBy('a.priority', 'DESC')
            ->setMaxResults(3)
            ->getQuery()
            ->getResult();

        return $result;
    }

    public function getCategoryBySlug($cateSlug)
    {
        $result = $this->createQueryBuilder('a')
            ->where('a.status = 1')
            ->andWhere('a.slug = :cateSlug')
            ->setParameter('cateSlug', $cateSlug)
            ->getQuery()
            ->getOneOrNullResult();

        return $result;
    }

    public function getFooterCategories()
    {
        $result = $this->createQueryBuilder('a')
            ->where('a.status = 1')
            ->orderBy('a.priority', 'DESC')
            ->setMaxResults(5)
            ->getQuery()
            ->getResult();

        return $result;
    }
}