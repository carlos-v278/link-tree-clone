<?php

namespace App\Controller;

use App\Entity\Social;
use App\Repository\SocialRepository;
use App\Form\SocialType;
use App\Entity\Ressource;
use App\Repository\RessourceRepository;
use App\Form\RessourceType;
use App\Entity\Promotion;
use App\Repository\PromotionRepository;
use App\Form\PromotionType;
use App\Entity\Template;
use App\Repository\TemplateRepository;
use App\Form\TemplateType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

#[Route('/tableaudebord')]
class DashboardController extends AbstractController
{
    #[Route('/', name: 'app_dashboard', methods: ['GET'])]
    public function index(Security $security): Response
    {
        $user = $security->getUser();
        dump($user);
        return $this->render('dashboard/index.html.twig', [
            'controller_name' => 'DashboardController',
            'user' => $user,
        ]);
    }

    #[Route('/nouveau/reseau', name: 'app_new_social', methods: ['GET', 'POST'])]
    public function newSocial(Request $request, SocialRepository $socialRepository): Response
    {
        $social = new Social();
        $form = $this->createForm(SocialType::class, $social);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $socialRepository->save($social, true);
            return $this->redirectToRoute('app_dashboard', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('dashboard/new/new_social.html.twig', [
            'social' => $social,
            'form' => $form,
        ]);
    }

    #[Route('/nouveau/lien', name: 'app_new_ressource', methods: ['GET', 'POST'])]
    public function newRessource(Request $request, RessourceRepository $ressourceRepository): Response
    {
        $ressource = new Ressource();
        $form = $this->createForm(RessourceType::class, $ressource);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $ressourceRepository->save($ressource, true);
            return $this->redirectToRoute('app_dashboard', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('dashboard/new/new_ressource.html.twig', [
            'social' => $ressource,
            'form' => $form,
        ]);
    }
}
