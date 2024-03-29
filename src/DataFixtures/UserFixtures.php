<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setEmail('admin@admin.com');
        $user->setPassword('$2y$13$iKV.vLCm4eWhOs4w8ohnHucjsVrgNMORQOCXCF/t6rBhbjT5J41YK');
        $manager->persist($user);

        $manager->flush();
    }
}
