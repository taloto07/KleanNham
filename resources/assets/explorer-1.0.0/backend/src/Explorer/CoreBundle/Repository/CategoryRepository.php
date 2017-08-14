<?php

namespace Explorer\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

class CategoryRepository extends EntityRepository
{
    public function findAllOrderedByName()
    {
        $qb = $this->createQueryBuilder('category');

        return $qb->orderBy('category.name', 'ASC');
    }
}