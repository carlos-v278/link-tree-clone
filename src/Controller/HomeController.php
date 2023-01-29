<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use Symfony\Component\Security\Core\Security;
use App\Repository\SocialRepository;
use App\Repository\UserRepository;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(Security $security): Response
    {
        $user = $this->getUser();

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/landing/{slug}', name: 'app_template', methods: ['GET'])]
    public function template($slug, UserRepository $UserRepository): Response
    {
        $user = $UserRepository->findBy(['slug' => $slug]);
        dump($user);
        return $this->render('home/landing_template.html.twig', [
            'user' => $user[0],
        ]);
    }
}
