<?php

namespace GlobalViewBundle\Repository;

/**
 * CategoryRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CategoryRepository extends \Doctrine\ORM\EntityRepository
{
    public function findCategories(){

        $qb = $this->createQueryBuilder('c');
        $qb->select('c')
            ->orderBy('c.libelle_fr', 'ASC');

        $query = $qb->getQuery();

        return $query->getResult();

    }
}
