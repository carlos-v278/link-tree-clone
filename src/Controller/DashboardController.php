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
use Doctrine\ORM\EntityManagerInterface;

#[Route('/tableaudebord')]
class DashboardController extends AbstractController
{
    //Method pour la view du dashboard client 
    #[Route('/', name: 'app_dashboard', methods: ['GET'])]
    public function index(Security $security): Response
    {
        $user = $security->getUser();

        foreach ($user->getRoles() as $value) {
            if ($value == "ROLE_ADMIN") {
                return $this->redirectToRoute('app_admin_index');
            }
        }
        return $this->render('dashboard/index.html.twig', [
            'controller_name' => 'DashboardController',
            'user' => $user,
        ]);
    }
    //Method crud pour l'ajout d'un nouveau  réseau
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

    //Method crud pour l'ajout d'une nouvelle ressource
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

    //Method crud pour l'ajout d'une nouvelle ressource
    #[Route('/nouveau/promo', name: 'app_new_promo', methods: ['GET', 'POST'])]
    public function newPromotion(Request $request, PromotionRepository $promotionRepository): Response
    {
        $promotion = new Promotion();
        $form = $this->createForm(PromotionType::class, $promotion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $promotionRepository->save($promotion, true);
            return $this->redirectToRoute('app_dashboard', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('dashboard/new/new_promo.html.twig', [
            'social' => $promotion,
            'form' => $form,
        ]);
    }
    //Method crud pour l'ajout d'un nouveau template
    #[Route('/nouveau/template', name: 'app_new_template', methods: ['GET', 'POST'])]
    public function newTemplate(Request $request, TemplateRepository $templateRepository): Response
    {
        $template = new Template();
        $form = $this->createForm(TemplateType::class, $template);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $templateRepository->save($template, true);
            return $this->redirectToRoute('app_dashboard', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('dashboard/new/new_template.html.twig', [
            'social' => $template,
            'form' => $form,
        ]);
    }

    //method edit template
    #[Route('/template/{id}/', name: 'app_template_edit', methods: ['GET', 'POST'])]
    public function editTemplate(Request $request, Template $template, TemplateRepository $templateRepository): Response
    {
        $form = $this->createForm(TemplateType::class, $template);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $templateRepository->save($template, true);

            return $this->redirectToRoute('app_dashboard', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('dashboard/edit/edit_template.html.twig', [
            'template' => $template,
            'form' => $form,
        ]);
    }
    //method edit Promotion
    #[Route('/edit/promotion/{id}/', name: 'app_promotion_edit', methods: ['GET', 'POST'])]
    public function editPromotion(Request $request, Promotion $promotion, PromotionRepository $promotionRepository): Response
    {
        $form = $this->createForm(PromotionType::class, $promotion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $promotionRepository->save($promotion, true);

            return $this->redirectToRoute('app_dashboard', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('dashboard/edit/edit_promotion.html.twig', [
            'promotion' => $promotion,
            'form' => $form,
        ]);
    }

    //method edit ressource
    #[Route('/edit/ressource/{id}/', name: 'app_ressource_edit', methods: ['GET', 'POST'])]
    public function editRessource(Request $request, Ressource $ressource, RessourceRepository $ressourceRepository): Response
    {
        $form = $this->createForm(RessourceType::class, $ressource);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $ressourceRepository->save($ressource, true);

            return $this->redirectToRoute('app_dashboard', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('dashboard/edit/edit_ressource.html.twig', [
            'ressource' => $ressource,
            'form' => $form,
        ]);
    }

    //method edit Social
    #[Route('/edit/social/{id}/', name: 'app_social_edit', methods: ['GET', 'POST'])]
    public function editSocial(Request $request, Social $social, SocialRepository $socialRepository): Response
    {
        $form = $this->createForm(SocialType::class, $social);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $socialRepository->save($social, true);

            return $this->redirectToRoute('app_dashboard', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('dashboard/edit/edit_social.html.twig', [
            'social' => $social,
            'form' => $form,
        ]);
    }

    //Method delet Promotion

    #[Route('/delet/promotion/{id}', name: 'app_promotion_delet', methods: ['GET', 'POST'])]
    public function deletePromotion(Request $request, Promotion $promotion, EntityManagerInterface $entityManager): Response
    {
        $entityManager->remove($promotion);
        $entityManager->flush();

        return $this->redirectToRoute('app_dashboard', [], Response::HTTP_SEE_OTHER);
    }

    //Method delet ressource

    #[Route('/delet/ressource/{id}', name: 'app_ressource_delet', methods: ['GET', 'POST'])]
    public function deleteRessource(Request $request, Ressource $ressource, EntityManagerInterface $entityManager): Response
    {
        $entityManager->remove($ressource);
        $entityManager->flush();

        return $this->redirectToRoute('app_dashboard', [], Response::HTTP_SEE_OTHER);
    }


    //Method delet social

    #[Route('/delet/social/{id}', name: 'app_social_delet', methods: ['GET', 'POST'])]
    public function deleteSocial(Request $request, Social $social, EntityManagerInterface $entityManager): Response
    {
        $entityManager->remove($social);
        $entityManager->flush();

        return $this->redirectToRoute('app_dashboard', [], Response::HTTP_SEE_OTHER);
    }
}
