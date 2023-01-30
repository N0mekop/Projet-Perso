<?php

namespace App\DataFixtures;

use App\Entity\Group;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class GroupFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $group = new Group();
        $group->setName('Triade');
        $manager->persist($group);

        $group = new Group();
        $group->setName('Les Verts');
        $manager->persist($group);

        $group = new Group();
        $group->setName('Los Lobos');
        $manager->persist($group);

        $manager->flush();
    }
}
