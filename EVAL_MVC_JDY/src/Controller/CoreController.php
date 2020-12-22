<?php

/**
 * Classe mère qui contient toutes les méthodes/propriétés
 * communues à l'ensemble des classes de Controller
 */
class CoreController
{
    /**
     * Méthode permettant le rendu de la vue HTML
     *
     * @param string $viewName
     * @param array $viewVars
     * @return void
     */
    public function show($viewName, $viewVars = [])
    {
        $absoluteURL = isset($_SERVER['BASE_URI']) ? $_SERVER['BASE_URI'] : '/';



        require __DIR__ . './../views/header.tpl.php';
        require __DIR__ . './../views/' . $viewName . '.tpl.php';
        require __DIR__ . './../views/footer.tpl.php';
    }
}
