<?php
// Etape 3 : Fonction show
// Pourrait-on réutiliser cette fonction dans d'autres projets ayant la même structure ?
// Oui, car la fonction utilisant des arguments, on peut faire des appels
// avec d'autres templates HTML (views/mario.tpl.php)
// show('mario', []);
// show('list_games', []);

function show($viewName, $viewVars = [])
{
    // $viewVars est disponible dans chaque fichier de vue
    //var_dump($viewName, $viewVars);
    // si on est sur index.php?page=store
    // alors :
    // $viewVars == 'store'
    // $viewVars = ['currentPage'=>'store', 'title' => 'Store'];

    require_once __DIR__ . '/../views/header.tpl.php';
    require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
    require_once __DIR__ . '/../views/footer.tpl.php';
}
