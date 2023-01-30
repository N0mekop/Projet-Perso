<?php

namespace App\DataFixtures;

use App\Entity\Team;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TeamFixtures extends Fixture
{
    public const TEAM_TRIADE = 'TEAM_TRIADE';
    public const TEAM_VERTS = 'TEAM_VERTS';
    public const TEAM_LOBOS = 'TEAM_LOBOS';

    public function load(ObjectManager $manager): void
    {
        $team = new Team();
        $team->setName('Triade');
        $manager->persist($team);
        $this->addReference(self::TEAM_TRIADE, $team);

        $team = new Team();
        $team->setName('Les Verts');
        $manager->persist($team);
        $this->addReference(self::TEAM_VERTS, $team);

        $team = new Team();
        $team->setName('Los Lobos');
        $manager->persist($team);
        $this->addReference(self::TEAM_LOBOS, $team);

        $manager->flush();
    }
}
