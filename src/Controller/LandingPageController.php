<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LandingPageController extends AbstractController
{
    #[Route('/landing-page/{slug}', name: 'app_template', methods: ['GET'])]
    public function index($slug, UserRepository $UserRepository): Response
    {

        if ($UserRepository->findBy(['slug' => $slug])) {
            $user = $UserRepository->findBy(['slug' => $slug]);
        }
        return $this->render('landing_page/index.html.twig', [
            'controller_name' => 'LandingPageController',
            'user' => $user[0],
        ]);
    }
}
