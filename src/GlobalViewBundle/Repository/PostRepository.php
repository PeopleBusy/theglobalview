<?php

namespace GlobalViewBundle\Repository;

/**
 * PostRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PostRepository extends \Doctrine\ORM\EntityRepository
{
    public function findPosts(){

        $qb = $this->createQueryBuilder('p');
        $qb->select('p')
            ->orderBy('p.id', 'DESC');

        $query = $qb->getQuery();

        return $query->getResult();

    }

    public function findPostsBySubCategory($id){

        $qb = $this->createQueryBuilder('p');
        $qb->select('p')
            ->where('p.subcategory = :id')
            ->setParameter('id', $id)
            ->orderBy('p.id', 'DESC');

        $query = $qb->getQuery();

        return $query->getResult();

    }

    public function findLastPosts($number){

        $qb = $this->createQueryBuilder('p');
        $qb->select('p')
            ->orderBy('p.id', 'DESC')
            ->setMaxResults($number);


        $query = $qb->getQuery();

        return $query->getResult();

    }

}
