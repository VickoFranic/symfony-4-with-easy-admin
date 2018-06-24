<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerInterface;

class UserFixtures extends Fixture
{
    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $encoder = $this->container->get('security.password_encoder');

        $userAdmin = (new User())
            ->setEmail('admin@admin.dev')
            ->setFirstName('User')
            ->setLastName('Admin')
            ->setActive(true)
            ->setRoles(['ROLE_ADMIN']);

        $userAdmin->setPassword($encoder->encodePassword($userAdmin, 'admin'));

        $manager->persist($userAdmin);

        $userEditor = (new User())
            ->setEmail('editor@admin.dev')
            ->setFirstName('User')
            ->setLastName('Editor')
            ->setActive(true)
            ->setRoles(['ROLE_EDITOR']);

        $userEditor->setPassword($encoder->encodePassword($userAdmin, 'admin'));

        $manager->persist($userEditor);

        $manager->flush();
    }
}
