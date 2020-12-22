<?php

/**
 * MainController hérite de la classe CoreController
 * ==> On peut donc appeler la méthode show dans la classe MainController
 */
class MainController extends CoreController
{
    /**
     * Méthode permettant l'affichage de la page d'accueil
     *
     * @param array $arguments
     * @return void
     */
    public function showHome($arguments = [])
    {
        // On demande l'affichage de la page src/views/home.tpl.php
        // On aimerait afficher 5 catégories mises en avant dans la page
        // d'accueil
        
		$characterModel = new Character();
        $allCharacters = $characterModel->findHomeCharacters();

        // Je transmet à la vue la liste des 5 catégories
        $arguments['allcharacters'] = $allCharacters;

        $this->show('home', $arguments);
    }

    /**
     * Une méthode permettant d'afficher un texte d'espoir
     *
     * @param array $arguments
     * @return void
     */
	 
    public function createurs($arguments = [])
    {


        $arguments = [];
        $this->show('createurs', $arguments);
    }

	
    /**
     * Méthode permettant l'affichage de la page 404
     *
     * @param array $arguments
     * @return void
     */
    public function page404($arguments = [])
    {
        $this->show('404', $arguments);
    }
}
