<?php

// Front Controller : point d'entrée de notre application (public/index.php)

// On démarre la session pour pouvoir sauvegarder ou récupérer des informations en SESSION
// Cette fonction doit être appellée avant tout affichage texte (html, css, echo, json, ...)
session_start();


// Packages composer
// Chargement "automatique" des packages composer 
// AltoRouter + Var Dumper + ... et d'autres packages si y en a
require __DIR__ . './../vendor/autoload.php';

// Controllers
require __DIR__ . './../src/Controller/CoreController.php';
require __DIR__ . './../src/Controller/MainController.php';

// Models
require __DIR__ . './../src/Utils/Database.php';
require __DIR__ . './../src/Model/Type.php';
require __DIR__ . './../src/Model/Character.php';


// Liste des Routes de l'application
require __DIR__ . './../src/inc/routes.php';

// 1) On récupère la page à afficher
$pageToDisplay = !empty($_GET['page']) ? $_GET['page'] : 'home';

// 2) On récupère les données du router
// si $pageToDisplay = 'home', alors ==> $routerData = $routes['home'];

// Est-ce qu'on a bien la clé correspondante dans le fichier routes.php
// @copyright correction par @Sylvain
//$routerData = isset($routes[$pageToDisplay]) ? $routes[$pageToDisplay] : null;


// 3) On fait le dispatching
if ($match !== false) {
    // La route existe
    $routerData = $match['target'];

    // 4) On appelle la méthode du controller associée à la page
    //   que l'on souhaite afficher
    $controllerName = $routerData['controller']; // 'CatalogController'
    $methodName = $routerData['method']; // 'category'
    $arguments = $match['params']; // Liste des arguments

    // On transmet aussi l'objet $router pour la génération des URLS avec la méthode generate
    // Depuis les vues, on pourra appeler la méthode comme ceci : $viewVars['router']->generate('nom de la route', 'arguments optionnels')
    $arguments['router'] = $router;

    $controller = new $controllerName(); // $controller = new CatalogController()
    $controller->$methodName($arguments); // $controller->category($arguments)
} else {
    // La route n'existe pas ... 404
    $controller = new MainController();
    $controller->page404();
}
