<?php

class Arme
{
    private static $compteur = 1;
    private $id;
    private $nom;
    private $degat;
    private static $armes = []; // Pour faire la liaison entre arme et player
    // Puis écrire une fonction qui récupère une arme en
    // fonction de l'id .

    public function __construct($nom, $degat)
    {
        $this->setNom($nom);
        $this->setDegat($degat);
        $this->id = self::$compteur;
        self::$compteur++;
        self::$armes[] = $this;
    }

    public static function recupererArme($id)
    {
        foreach (self::$armes as $arme) {
            if ($arme->id === $id) {
                return $arme;
            }
        }
    }

    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of degat
     */
    public function getDegat()
    {
        return $this->degat;
    }

    /**
     * Set the value of degat
     *
     * @return  self
     */
    public function setDegat($degat)
    {
        $this->degat = $degat;

        return $this;
    }

    /**
     * Get the value of compteur
     */
    public static function getCompteur()
    {
        return self::$compteur;
    }

    /**
     * Set the value of compteur
     *
     * @return  self
     */
    public static function setCompteur($compteur)
    {
        self::$compteur = $compteur;
    }

    /**
     * Get the value of Armes
     */
    public static function getArmes()
    {
        return self::$armes;
    }

    /**
     * Set the value of Armes
     *
     * @return  self
     */
    public static function setArmes($armes)
    {
        self::$armes = $armes;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
