### Etape de la crétion du site e-commerce

- installation : `symfony new --full --no-git myProjet`
- mise en place bootstrap
- controller qui va gérer la page principale `symfony console make:controller`
- `<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">``
- `<link href="{{ asset('assets/css/carousel.css') }}" rel="stylesheet">`
- factoriser le code :

  - couper le contenu du texte dans base.html.twig
  - créer un bloc content dans base.html.twig
  - créer un bloc content dans index.html.twig
  - copier le contenu couper dans index.html.twig mais entre le bloc
    N.B: Chaque pages que j'ajouterai aura son `extend.html.twig`, et contenu entre `bloc content`

- lancer le serveur : `symfony serve`
- créer une entité 'user' : `make:user`
- créer la base de données : `php bin/console doctrine:database:create`
- faire la migration : `symfony console make:migration`
- confirmer la migration avec doctrine : `php bin/console doctrine:migrations:migrate`
- créer un controller : `symfony console make:controller`
- créer un formulaire d'inscription : `symfony console make:form`
- enregister les infos du formulaire dans la BDD
- encoder les mots de passe :
- faire des contraintes : `'constraints' => new Length(2, 20)`
- changer les textes "error" en français : `translator.yaml` de "en" à "fr"
- se connecter "user" ou Login : `symfony console make:auth` / taper "1"/ Taper "LoginFormAuthenticator"
- espace membre : account controller
  NB: `symfony console debug:router` : connaitre toutes les routes de mon App

- administration avec easyAdmin : `composer.phar require easycorp/easyadmin-bundle`
- créer le premier espace admin : `symfony console make:admin:dashboard`
- Retoucher un peu à sa sauce le fichier "DashboardController.php" (`yield` de l'entité "User")
- Créer des entités à manager "CRUD": `symfony console make:admin:crud`
- Creer des catégories : `symfony console make:entity` / `symfony console make:migration`
  `symfony console doctrine:migrations:migrate`
- Mapper l'entité category dans EasyAdmin : `symfony console make:admin:crud` / ouvrir le fichier DashboardController.php et y ajouter le `yield` de l'entité "Category"

NB:Les icônes sont utilisés viennent de : `www.fontawesome.com`

- Creer des produits : idem que category. créer "slug" comme propriété (route stylée) / migration / mapping

- Créer des vues pour les users: `symfony console make:controller` /
- pour les services (session) : `symfony console debug:autowiring`
