<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MenuController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('menu/index.html.twig', [
            'controller_name' => 'MenuController',
        ]);
    }

    #[Route('/services/illustration', name: 'app_services_illustration')]
    public function servicesIllustration(): Response
    {
        return $this->render('menu/services-illustration.html.twig', [
        ]);
    }

    #[Route('/services/web', name: 'app_services_web')]
    public function servicesWeb(): Response
    {
        return $this->render('menu/services-web.html.twig', [
        ]);
    }

    #[Route('/services/branding', name: 'app_services_branding')]
    public function servicesBranding(): Response
    {
        return $this->render('menu/services-branding.html.twig', [
        ]);
    }

    #[Route('/services/support-marketing', name: 'app_services_support_marketing')]
    public function servicesSupportMarketing(): Response
    {
        return $this->render('menu/services-support-marketing.html.twig', [
        ]);
    }

    #[Route('/services/infographie', name: 'app_services_infographie')]
    public function servicesInfographie(): Response
    {
        return $this->render('menu/services-infographie.html.twig', [
        ]);
    }

    #[Route('/services/ui-ux', name: 'app_services_ui_ux')]
    public function servicesUIUX(): Response
    {
        return $this->render('menu/services-ui-ux.html.twig', [
        ]);
    }

    #[Route('/services/reseaux-sociaux', name: 'app_services_reseaux_sociaux')]
    public function servicesReseauxSociaux(): Response
    {
        return $this->render('menu/services-reseaux-sociaux.html.twig', [
        ]);
    }

    #[Route('/realisations', name: 'app_projects')]
    public function projects(): Response
    {
        return $this->render('menu/projects.html.twig', [
        ]);
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('menu/contact.html.twig');
    }

    #[Route('/mentions-legales', name: 'app_mentions_legales')]
    public function mentionsLegales(): Response
    {
        return $this->render('menu/mentions-legales.html.twig');
    }

    #[Route('/politique-de-confidentialite', name: 'app_politique_confidentialite')]
    public function politiqueDeConfidentiaalite(): Response
    {
        return $this->render('menu/politique-de-confidentialite.html.twig');
    }

    #[Route('/a-propos', name: 'app_about')]
    public function about(): Response
    {
        return $this->render('menu/about.html.twig', [
        ]);
    }
}
