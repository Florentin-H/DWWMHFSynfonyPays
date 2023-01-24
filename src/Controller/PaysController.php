<?php

namespace App\Controller;

use App\Entity\Pays;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PaysController extends AbstractController
{
    #[Route('/', name: 'accueil')]
    public function index(): Response
    {
        Pays::creerPays();
        $pays = Pays::getPays();
        return $this->render('pays/pays.html.twig', [
            "pays" => $pays
        ]);
    }
    #[Route('/pays/{nom}', name: 'pays')]
    public function pays($nom): Response
    {
        Pays::creerPays();
        $pays = Pays::getPaysParNom($nom);
        return $this->render('pays/pays.html.twig', [
            "pays" => $pays
        ]);
    }
}
