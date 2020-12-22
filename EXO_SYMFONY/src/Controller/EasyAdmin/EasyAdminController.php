<?php

namespace App\Controller\EasyAdmin;


use App\Entity\Casting;
use App\Entity\CrewMember;
use App\Entity\Department;
use App\Entity\Director;
use App\Entity\Genre;
use App\Entity\Job;
use App\Entity\Movie;
use App\Entity\Person;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EasyAdminController extends AbstractDashboardController
{
    /**
     * On change la route pour l'admin comme on veut
     * 
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
        // return $this->render('admin/movie/list.html.twig', [
        //     // il manque le $movieRepository
        // ]);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('MovieDB');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');

        yield MenuItem::section('Movies');
        yield MenuItem::linkToCrud('Genres', 'fa fa-palette', Genre::class);
        yield MenuItem::linkToCrud('Movies', 'fa fa-film', Movie::class);

        yield MenuItem::section('Staff');
        yield MenuItem::linkToCrud('Persons', 'fa fa-user', Person::class);
        yield MenuItem::linkToCrud('Castings', 'fa fa-user', Casting::class);
        yield MenuItem::linkToCrud('CrewMembers', 'fa fa-user', CrewMember::class);
        yield MenuItem::linkToCrud('Directors', 'fa fa-user', Director::class);

        yield MenuItem::section('Jobs');
        yield MenuItem::linkToCrud('Jobs', 'fa fa-hammer', Job::class);
        yield MenuItem::linkToCrud('Departments', 'fa fa-building', Department::class);
    }
}
