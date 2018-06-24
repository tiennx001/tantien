<?php

namespace FrontBundle\Model;

use Doctrine\ORM\EntityRepository;

class ColorRepository extends EntityRepository
{
    public function getColors()
    {
        $result = $this->createQueryBuilder('a')
            ->where('a.status = 1')
            ->orderBy('a.name')
            ->getQuery()
            ->getResult();

        return $result;
    }
}