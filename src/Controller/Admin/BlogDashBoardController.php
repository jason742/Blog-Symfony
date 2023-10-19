<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashBoardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;

class BlogDashBoardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Administration')
            ->setTranslationDomain('my-custom-domain');
    }



        public function configureMenuItems(): iterable
    {
      yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
      yield MenuItem::linkToCrud('Utilisateurs', 'fas fa-list', User::class);

    }





}
