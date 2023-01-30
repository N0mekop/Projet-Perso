<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserTeamRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Security\Http\Attribute\CurrentUser;

class HomeController extends AbstractController
{
    #[Route('', name: 'home')]
    #[IsGranted('ROLE_ADMIN')]
    public function index(
        #[CurrentUser] User $user,
        UserTeamRepository $userTeamRepository
    ): Response
    {

        dump($userTeamRepository->findUserTeam($user));
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
