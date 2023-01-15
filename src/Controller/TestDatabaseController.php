<?php

namespace App\Controller;

use App\Entity\Allergene;
use App\Entity\Place;
use App\Entity\Utilisateur;
use App\Entity\Plat;
use \Doctrine\Common\Collections\ArrayCollection;
use Monolog\Handler\Curl\Util;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestDatabaseController extends AbstractController
{
    /**
     * @Route("/test/database", name="app_test_database")
     */
    public function index(): Response
    {
        $users = [
            new Utilisateur('user1', 'mdp', false, 1),
            new Utilisateur('user2', 'mdp', false, 2),
            new Utilisateur('user3', 'mdp', false, 0),
            new Utilisateur('user4', 'mdp', false, 8),
            new Utilisateur('user5', 'mdp', false, 2),
            new Utilisateur('user6', 'mdp', false, 15),
            new Utilisateur('user7', 'mdp', false, 8),
            new Utilisateur('user8', 'mdp', false, 9),
            new Utilisateur('user9', 'mdp', false, 5),
            new Utilisateur('admin1', 'root', false, 3)
        ];


        $tables = [
            new Place(1, 6),
            new Place(1, 4),
            new Place(1, 8),
            new Place(1, 12),
            new Place(1, 2),
            new Place(1, 2),
            new Place(1, 2),
            new Place(1, 6),
            new Place(1, 6),
            new Place(1, 8)
        ];

        $allergenes =[
            new Allergene('Gluten'),
            new Allergene('Crustacés'),
            new Allergene('Oeufs'),
            new Allergene('Poissons'),
            new Allergene('Arachides'),
            new Allergene('Soja'),
            new Allergene('Lait'),
            new Allergene('Fruits à coque'),
            new Allergene('Moutarde'),
            new Allergene('Céleri'),
            new Allergene('Graines de sésame'),
            new Allergene('Anhydrides sulfureux'),
            new Allergene('Lupin'),
            new Allergene('Mollusques')
        ];

        $plats =[
            new Plat('plat1', 'entrée', 'c\'est une entrée', 4.30),
            new Plat('plat2', 'entrée', 'c\'est une entrée', 4.99),
            new Plat('plat3', 'entrée', 'c\'est une entrée', 5.99),
            new Plat('plat4', 'entrée', 'c\'est une entrée', 4.99),
            new Plat('plat5', 'entrée', 'c\'est une entrée', 3.99),
            new Plat('plat6', 'entrée', 'c\'est une entrée', 4.99),
            new Plat('plat7', 'principal', 'c\'est un plat principal', 10.50),
            new Plat('plat8', 'principal', 'c\'est un plat principal', 19.50),
            new Plat('plat9', 'principal', 'c\'est un plat principal', 18.50),
            new Plat('plat10', 'principal', 'c\'est un plat principal', 25.50),
            new Plat('plat11', 'principal', 'c\'est un plat principal', 12.50),
            new Plat('plat12', 'principal', 'c\'est un plat principal', 17.50),
            new Plat('plat13', 'dessert', 'c\'est un dessert', 5.50),
            new Plat('plat14', 'dessert', 'c\'est un dessert', 2.50),
            new Plat('plat15', 'dessert', 'c\'est un dessert', 4.50),
            new Plat('plat16', 'dessert', 'c\'est un dessert', 4.50),
            new Plat('plat17', 'dessert', 'c\'est un dessert', 3.50),
            new Plat('plat18', 'dessert', 'c\'est un dessert', 4.50)
        ];


        $users[0]->setAllergenes(new ArrayCollection([$allergenes[0], $allergenes[11]]));
        $users[1]->setAllergenes(new ArrayCollection([$allergenes[4], $allergenes[7], $allergenes[2]]));
        $users[2]->setAllergenes(new ArrayCollection([$allergenes[5], $allergenes[10], $allergenes[12]]));
        $users[3]->setAllergenes(new ArrayCollection([$allergenes[6], $allergenes[3]]));
        $users[4]->setAllergenes(new ArrayCollection([$allergenes[8], $allergenes[9], $allergenes[13], $allergenes[1]]));



        return $this->render('pages/accueil.html.twig', [
            'controller_name' => 'TestDatabaseController',
        ]);
    }
}
