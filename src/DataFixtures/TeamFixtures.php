<?php

namespace App\DataFixtures;

use App\Entity\Team;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TeamFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $team = new Team();
        $team->setName('Triade');
        $manager->persist($team);

        $team = new Team();
        $team->setName('Les Verts');
        $manager->persist($team);

        $team = new Team();
        $team->setName('Los Lobos');
        $manager->persist($team);

        $manager->flush();
    }
}
