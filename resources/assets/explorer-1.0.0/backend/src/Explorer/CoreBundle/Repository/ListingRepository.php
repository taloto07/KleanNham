<?php

namespace Explorer\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ListingRepository extends EntityRepository
{
    public function findAllOrdered()
    {
        $qb = $this->createQueryBuilder('listing');

        return $qb
            ->orderBy('listing.created', 'DESC')->getQuery()
            ->execute();
    }

    public function findAllPublished() {
        $qb = $this->createQueryBuilder('listing');

        return $qb
            ->andWhere('listing.isPublished = 1')
            ->orderBy('listing.created', 'DESC')->getQuery()
            ->execute();
    }
}