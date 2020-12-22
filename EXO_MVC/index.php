<?php
// Notre fichier point d'entrée (index.php) ==> Front Controller

// Fonction show
require 'inc/functions.php';

// index.php?page=home ==> $_GET['page']
$pageToDisplay = isset($_GET['page']) ? $_GET['page'] : 'home';

// Affichage de la page
$arguments = [
    'currentPage' => $pageToDisplay
];
// require 'views/header.tpl.php';
if ($pageToDisplay == 'home') {
    // Si dans l'url : index.php?page=home ou index.php
    $arguments['title'] = 'Home';
} else if ($pageToDisplay == 'store') {
    // Si dans l'url : index.php?page=store
    $arguments['title'] = 'Store';
} else if ($pageToDisplay == 'products') {
    // Si dans l'url : index.php?page=products
    $arguments['title'] = 'Products';
} else {
    // Si dans l'url : index.php?page=unePageQuiNexistepas
    $arguments['title'] = 'Cette page n\'existe pas';
    $pageToDisplay = '404';
}

// Si index.php?page=store
// $arguments = [
//     'currentPage' => 'store',
//     'title' => 'Store'
// ];

show($pageToDisplay, $arguments);
