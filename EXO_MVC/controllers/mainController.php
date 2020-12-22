<?php

class MainController
{
    public function home($arguments = [])
    {
        $this->show('home', $arguments);

        // $this->show('home'); est equivalent à ce qu'il y a ci-dessous :
        // $viewVars est disponible dans chaque fichier de vue
        // require_once __DIR__ . '/../views/header.tpl.php';
        // require_once __DIR__ . '/../views/home.tpl.php';
        // require_once __DIR__ . '/../views/footer.tpl.php';
    }

    public function store($arguments = [])
    {
        $this->show('store', $arguments);
    }

    public function products($arguments = [])
    {
        $this->show('products', $arguments);
    }

    public function page404($arguments = [])
    {
        $this->show('404', $arguments);
    }

    public function show($viewName, $viewVars = [])
    {
        // $viewVars est disponible dans chaque fichier de vue
        require_once __DIR__ . '/../views/header.tpl.php';
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../views/footer.tpl.php';
    }
}
