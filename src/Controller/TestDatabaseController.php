<?php

namespace App\Controller;

use App\Entity\Allergene;
use App\Entity\Formule;
use App\Entity\Menu;
use App\Entity\Place;
use App\Entity\Utilisateur;
use App\Entity\Plat;
use \Doctrine\Common\Collections\ArrayCollection;
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

        $plats[0]->setAllergenes(new ArrayCollection([$allergenes[0], $allergenes[8], $allergenes[0]]));
        $plats[1]->setAllergenes(new ArrayCollection([$allergenes[4], $allergenes[9], $allergenes[1]]));
        $plats[2]->setAllergenes(new ArrayCollection([$allergenes[5], $allergenes[10], $allergenes[2]]));
        $plats[3]->setAllergenes(new ArrayCollection([$allergenes[6], $allergenes[11], $allergenes[3]]));
        $plats[4]->setAllergenes(new ArrayCollection([$allergenes[7], $allergenes[12], $allergenes[4]]));
        $plats[5]->setAllergenes(new ArrayCollection([$allergenes[8], $allergenes[0], $allergenes[5]]));
        $plats[6]->setAllergenes(new ArrayCollection([$allergenes[9], $allergenes[1], $allergenes[6]]));
        $plats[7]->setAllergenes(new ArrayCollection([$allergenes[10], $allergenes[2], $allergenes[7]]));
        $plats[8]->setAllergenes(new ArrayCollection([$allergenes[11], $allergenes[3], $allergenes[8]]));
        $plats[9]->setAllergenes(new ArrayCollection([$allergenes[12], $allergenes[4], $allergenes[9]]));
        $plats[10]->setAllergenes(new ArrayCollection([$allergenes[0], $allergenes[5], $allergenes[10]]));
        $plats[11]->setAllergenes(new ArrayCollection([$allergenes[1], $allergenes[6], $allergenes[11]]));
        $plats[12]->setAllergenes(new ArrayCollection([$allergenes[2], $allergenes[7], $allergenes[12]]));
        $plats[13]->setAllergenes(new ArrayCollection([$allergenes[3], $allergenes[8], $allergenes[0]]));
        $plats[14]->setAllergenes(new ArrayCollection([$allergenes[4], $allergenes[9], $allergenes[1]]));
        $plats[15]->setAllergenes(new ArrayCollection([$allergenes[5], $allergenes[10], $allergenes[2]]));
        $plats[16]->setAllergenes(new ArrayCollection([$allergenes[6], $allergenes[11], $allergenes[3]]));
        $plats[17]->setAllergenes(new ArrayCollection([$allergenes[7], $allergenes[12], $allergenes[4]]));

        $menus = [
            new Menu('menu1', 'C\'est un menu, et il est bon'),
            new Menu('menu2', 'C\'est un menu, et il est bon'),
            new Menu('menu3', 'C\'est un menu, et il est bon'),
            new Menu('menu4', 'C\'est un menu, et il est bon'),
            new Menu('menu5', 'C\'est un menu, et il est bon'),
            new Menu('menu6', 'C\'est un menu, et il est bon')
        ];

        $formules = [
            new Formule('formule1', 'vrooooooooooooooooooooooooooooom', 22.50, $menus[0]),
            new Formule('formule2', 'C\'est une formule', 29.99, $menus[0]),
            new Formule('formule3', 'C\'est une formule', 19.99, $menus[1]),
            new Formule('formule4', 'C\'est une formule', 14.99, $menus[1]),
            new Formule('formule5', 'C\'est une formule', 22.50, $menus[2]),
            new Formule('formule6', 'C\'est une formule', 20.50, $menus[2]),
            new Formule('formule7', 'C\'est une formule', 19.50, $menus[2]),
            new Formule('formule8', 'C\'est une formule', 25.50, $menus[3]),
            new Formule('formule9', 'C\'est une formule', 24.50, $menus[3]),
            new Formule('formule10', 'C\'est une formule', 33.50, $menus[4]),
            new Formule('formule9', 'C\'est une formule', 38.50, $menus[4]),
            new Formule('formule11', 'C\'est une formule', 18.50, $menus[5]),
            new Formule('formule12', 'C\'est une formule', 21.50,$menus[5])
        ];

        $formules[0]->setPlats();



        return $this->render('pages/accueil.html.twig', [
            'controller_name' => 'TestDatabaseController',
        ]);
    }
}
