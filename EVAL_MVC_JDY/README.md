# Le Parcours :fire: PHP

Vous allez avoir un petit projet à mettre en place. On ne va pas vous dire quoi faire à chaque étape mais vous donner le projet global.
Lisez bien le sujet, on attend de vous que vous mettiez en place la même structure qu'on a vu ces derniers jours, des contrôleurs, des routes, modèles et des vues.

## Au programme

- classes
- héritage
- propriétés
- méthodes
- routes
- _Controllers_
- _Views_
- _Models_
- ...

Bon courage :muscle:

## Sujet : Sonic :tada:

> Oui, le petit hérisson qui va vite :smirk:

On souhaite mettre en place un petit site sur **Sonic**, contenant 2 pages :

- 1 page d'accueil avec tous les personnages de l'univers **Sonic**, par ordre alphabétique
- 1 page avec les 3 créateurs du premier jeu **Sonic**

Mais on ne souhaite pas le faire n'importe comment.  
Vous avez appris cette saison à bien structurer/organiser votre code et vos fichiers, le tout en programmation orientée objets.  
Il va falloir appliquer cela sur ce projet.

### Base de données

La modélisation de la base de données est fournie :

- [dictionnaire de données](docs/dictionnaire-de-donnees.md)
- [MCD](docs/parcours-mcd.svg)

La base de données est fournie aussi : [fichier à importer](docs/sonic.sql)

:warning: Attention, le nom des tables sont des mots-clés réservés du langage SQL.  
Pour éviter les erreurs dans les requêtes SQL, il faut bien entourer le nom par 1 backtick `` ` ``  
Exemple : ``SELECT * FROM `matable` ``

### Structure du projet

La structure du projet étant similaire au projet _oShop__, vous pouvez, si vous le souhaitez, en récupérer les sources pour les modifier pour correspondre au parcours.  
:warning: Attention, tout le code présent dans vos sources doit être utile au projet. **Il ne doit rester aucun code supperflu**.

La qualité du code est encore plus importante dans ce parcours :

- nom de classes, méthodes, variables claires
- indentation
- commentaires
- **aucun "groupe de code" en doublon**
- application des règles et conventions vues en cours

### Aspect visuel

- **Il n'y a pas d'intégration HTML/CSS demandée**
  - on vous laisse créer les fichiers `header.tpl.php`, `footer.tpl.php`, `home.tpl.php`... selon vos goûts
- **Le plus important, c'est le code, pas la cosmétique** dans ce parcours

### Layout

- En haut de chaque page, on trouvera une navigation contenant des liens vers la page d'accueil et la page des créateurs du jeu.

### Page d'accueil

- Récupérer les données sur les personnages et leur type depuis la base de données
- Afficher les personnages (image, nom, type, description) dans un `<table>`, par ordre alphabétique

### Les créateurs

- Les créateurs ne sont pas dans la base de données, on vous demande de les ajouter *en dur*, en HTML dans votre vue !
- il n'y a qu'une seule page, et cette page affiche les 3 créateurs
- Pour chaque créateur, afficher un titre de niveau 3 et un beau `lorem ipsum` des familles :sunglasses:
- Liste des créateurs :
  - [Hirokazu Yasuhara](https://fr.wikipedia.org/wiki/Hirokazu_Yasuhara)
  - [Yuji Naka](https://fr.wikipedia.org/wiki/Yuji_Naka)
  - [Naoto Ōshima](https://fr.wikipedia.org/wiki/Naoto_%C5%8Cshima)

### Bonus

- Vous pouvez vous amusez à rendre votre site assez joli avec CSS
- Vous pouvez ajouter des pages, laissez parler votre créativité :bulb:
