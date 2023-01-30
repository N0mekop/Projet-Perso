<?php

namespace App\DataFixtures;

use App\Entity\UserTeam;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class UserTeamFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $userTeam = new UserTeam();
        $userTeam->setUser($this->getReference(UserFixtures::USER_KAZE));
        $userTeam->setTeam($this->getReference(TeamFixtures::TEAM_TRIADE));
        $manager->persist($userTeam);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            TeamFixtures::class,
            UserFixtures::class,
        ];
    }
}
