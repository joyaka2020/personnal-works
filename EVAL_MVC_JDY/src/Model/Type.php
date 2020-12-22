<?php

class Type
{
    // ces propriétés doivent avoir exactement le même nom que leur homologue en BDD
    private $id;
    private $name;
    protected $created_at;
    protected $updated_at;


    /**
     * Méthode permettant de rétourner le détail d'un produit
     * en fonction de son identifiant
     *
     * @param int $id
     * @return Type
     */
    public function find($id)
    {
        // 1) On récupère l'objet PDO
        $pdo = Database::getPDO();

        // 2) On crée la requete Sql + Execution
        $sql = 'SELECT * FROM `type` WHERE id=' . $id;
        $pdoStatement = $pdo->query($sql);

        // 3) On récupère le résultat avec la méthode fetch
        // $result = $pdoStatement->fetch(PDO::FETCH_ASSOC);

        // On récupère un résultat qui sera de type objet de la classe Type
        return $pdoStatement->fetchObject(Type::class);
    }

    /**
     * Méthode permettant de récupérer tous les produits en fonction de sa catégorie
     *
     * @return Type[]
     */
    public function findAll()
    {
        // 1) On récupère un objet PDO
        // Une méthode statique n'a pas besoin de new Database
        // On peut l'appeler directement à partir de la classe
        //$pdo = new PDO('dsn', 'login', 'mot de passe', 'options');
        // Connexion à MySQL via PDO
        $pdo = Database::getPDO();

        // 2) On execute la requete
        $sql = 'SELECT * FROM `type`';
        $pdoStatement = $pdo->query($sql);

        // 3) On récupère les informations (produits) sous forme de tableau
        //$products = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);


        // Ou alors on recupère le résultat sous forme de tableau d'objets
        // fetchAll(PDO::FETCH_CLASS, 'LA Classe du Modèle concerné');

        // 4) On retourne la liste des produits
        return $pdoStatement->fetchAll(PDO::FETCH_CLASS, Type::class);
    }



    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    /**
     * Get the value of created_at
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Get the value of updated_at
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set the value of updated_at
     *
     * @return  self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }
}
