<?php 
class Player{
    private $nom;
    private $force;
    private $pv;
    private $idArme;

    public function __construct(){
        $this->setForce(5);
        $this->setPv(100);
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
     * Get the value of force
     */ 
    public function getForce()
    {
        return $this->force;
    }

    /**
     * Set the value of force
     *
     * @return  self
     */ 
    public function setForce($force)
    {
        $this->force = $force;

        return $this;
    }

    /**
     * Get the value of pv
     */ 
    public function getPv()
    {
        return $this->pv;
    }

    /**
     * Set the value of pv
     *
     * @return  self
     */ 
    public function setPv($pv)
    {
        $this->pv = $pv;

        return $this;
    }

    /**
     * Get the value of idArme
     */ 
    public function getIdArme()
    {
        return $this->idArme;
    }

    /**
     * Set the value of idArme
     *
     * @return  self
     */ 
    public function setIdArme($idArme)
    {
        $this->idArme = $idArme;

        return $this;
    }
}