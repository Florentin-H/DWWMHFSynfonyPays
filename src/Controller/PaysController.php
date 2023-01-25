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
        return $this->render('pays/pays.html.twig', [
            "pays" => Pays::$listePays
        ]);
    }
    #[Route('/{{chaquePays.nom}}', name: 'afficherPays')]
    public function afficherPays($nom): Response
    {
        Pays::creerPays();
        $pays = Pays::getPaysParNom($nom);
        return $this->render('pays/unPays.html.twig', [
            "unPays"=> $pays
        ]);
    }
    
}
