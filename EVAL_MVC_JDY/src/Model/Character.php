<?php

class Character
{
    // ces propriétés doivent avoir exactement le même nom que leur homologue en BDD
    private 	$id;
    private 	$name;
    private 	$description;
    private 	$picture;
    protected 	$created_at;
    protected 	$updated_at;


    /**
     * Méthode permettant de rétourner le détail d'un produit
     * en fonction de son identifiant
     *
     * @param int $id
     * @return Character
     */
    public function find($id)
    {
        // 1) On récupère l'objet PDO
        $pdo = Database::getPDO();

        // 2) On crée la requete Sql + Execution
        $sql = 'SELECT * FROM `character` WHERE id=' . $id;
        $pdoStatement = $pdo->query($sql);

        // 3) On récupère le résultat avec la méthode fetch
        // $result = $pdoStatement->fetch(PDO::FETCH_ASSOC);

        // On récupère un résultat qui sera de type objet de la classe Character
        return $pdoStatement->fetchObject(Type::class);
    }


	 /**
     * Méthode permettant de retourner tous les personnages de l'univers *Sonic*, par ordre alphabétique 
     * sur la page d'accueil
     *
     * @return Character[]
     */
    public function findHomeCharacters()
    {
        // 1) Connexion à la BDD
        $pdo = Database::getPDO();

        // 2) Je crée la requete SQL + Execution
        $sql = 'SELECT * from `character` ORDER BY name asc';
        $pdoStatement = $pdo->query($sql);

        // 3) Je récupère les résultats sous forme de tableau d'objets
        $character = $pdoStatement->fetchAll(PDO::FETCH_CLASS, Character::class);

        return $character;
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
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
	
	
	/**
     * Get the value of picture
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set the value of picture
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
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
