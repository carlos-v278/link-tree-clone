<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use Symfony\Component\Security\Core\Security;
use App\Repository\SocialRepository;
use App\Repository\UserRepository;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(Security $security): Response
    {
        $user = $this->getUser();

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'currentUser' => $user,
        ]);
    }
}
