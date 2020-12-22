<?php
// Liste des routes de l'application

// ======================= PAS TOUCHE (Code de notre Framework) =====================
// 1) On créé une nouvelle instance de classe AltoRouter
$router = new AltoRouter();

// 2) On précise à AltoRouter à partir d'ou il doit considérer une url
// comme étant une route potentielle
$router->setBasePath($_SERVER['BASE_URI']);
// ======================= FIN Du PAS TOUCHE à PARTIR D'ici (Code du Framework) ====================


// 3) Mapping de routes
// Arguments : method, route, target, name

// Route pour la page d'accueil
$router->map(
    // 2 pobbilités (meme si y en plusieurs)
    // GET : si on veut afficher des données (html)
    // POST : si on veut sauvegarder des données 
    'GET', // Méthodes HTTP : GET, POST, ...
    '/', // A quellle URL cette route sera liée
    [
        'controller' => 'MainController',
        'method' => 'showHome',
        'title' => 'Sonic',
        'toto' => 'titi'
    ],
    // Nom du controller - Nom de la méthode
    'main-showhome' // Nom unique (identifiant) de la route
);


// Route pour la page Mentions légales
$router->map(
    'GET', // Méthode HTTP : GET, POST, ...
    '/createurs', // A quellle URL cette route sera liée
    [
        'controller' => 'MainController',
        'method' => 'createurs',
        'title' => 'Liste des créateurs'
    ],
    'main-createurs' // Nom unique (identifiant) de la route
);

// ======================= PAS TOUCHE à PARTIR D'ici (Code du Framework) =====================

// La méthode match() permet de faire la comparaison entre ce qui est saisi
// dans l'URL du navigateur, et ce qui est décrit dans nos routes
// a) Si la route ne match avec ce qu'on saisi dans l'url, alors on $match = false
// a) Si la route match avec ce qu'on saisi dans l'url, alors on $match = tableau associatif
$match = $router->match();
