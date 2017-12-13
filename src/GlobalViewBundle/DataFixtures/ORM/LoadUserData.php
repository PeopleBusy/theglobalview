<?php

namespace GlobalViewBundle\DataFixtures\ORM;

use GlobalViewBundle\Entity\User;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadUserData implements FixtureInterface, ContainerAwareInterface
{
    private $container;

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {

        $user = new User();
        $user->setAuteur("ADMIN");
        $user->setNom("THE GLOBAL VIEW");
        $user->setPrenom("Administrateur");

        $user->setUsername("global-admin");
        $user->setIsActive(true);
        $user->setRoles(array('ROLE_ADMIN'));

        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword($user, "bijoux90");
        $user->setPassword($password);
        $user->setDateCreation(new \DateTime());

        $manager->persist($user);
        $manager->flush();
    }

    /**
     * Sets the container.
     *
     * @param ContainerInterface|null $container A ContainerInterface instance or null
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
}