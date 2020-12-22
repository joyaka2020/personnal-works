<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
// use Nelmio\Alice\Loader\NativeLoader;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // La commande make:fixtures peut nous créer une classe comme celle-ci
        // Le code qu'on met ici va servir à créer des objets et les persister en BDD
        // Donc ici on peut créer des Movie, des Genre, Person ou des Casting comme on veut,
        // avec les données qu'on veut, pour ensuite les persister

        // On pourrait créer les fixtures de manière calssique, à la main
        // On crée un nouvel object
        // $movie = new Movie();
        // On modifie toutes les valeurs qu'on veut
        // $movie->setTitle('TeneT');
        // On demande au Manager de persister cet objet
        // $manager->persist($movie);
        // On refait la même manip avec le film de son choix et on peut recommencer tant qu'on veut
        // $movie = new Movie();
        // $movie->setTitle('Spiderman');
        // $manager->persist($movie);

        // Cependant, on va utiliser un outil beaucoup plus simple et répandu pour créer les fixtures : NelmioAliceFixturesbundle

        $loader = new MovieDBNativeLoader();        
        //importe le fichier de fixtures et récupère les entités générés
        $entities = $loader->loadFile(__DIR__.'/fixtures.yaml')->getObjects();
        
        //empile la liste d'objet à enregistrer en BDD
        foreach ($entities as $entity) {
            $manager->persist($entity);
        };

        // flush() sert à gérer l'ensemble des requêtes SQL pour tous les persist précédents
        $manager->flush();
    }
}
