<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\MonVestiaire;
use Doctrine\Persistence\ManagerRegistry;

class MonVestiaireController extends AbstractController
{
    #[Route('/mon/vestiaire', name: 'app_mon_vestiaire')]
    public function index(managerregistry $doctrine): Response
    {
        
        $entityManager = $doctrine->getManager();
        $vestiaires = $entityManager->getRepository(MonVestiaire::class)->findAll();
        
        
        return $this->render('mon_vestiaire/index.html.twig', [
            'vestiaires' => $vestiaires,
        ]);
    }
    
    #[Route('/mon/vestiaire/{id}', name: 'vestiaire_show', requirements: ['id' => '\d+'])]
    public function show(ManagerRegistry $doctrine, $id): Response
    {
        $entity_manager = $doctrine->getManager();
        $vestiaire = $entity_manager->getRepository(MonVestiaire::class)->find($id);
        
        return $this->render('mon_vestiaire/show.html.twig', [
            'monvestiaire' => $vestiaire,
        ]);
    }
    
    
    
}
