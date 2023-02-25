<?php
class Agent
{
    private $cin;
    private $nom = null ;
    private $prenom = null ;
    private $email = null ;
    private $numTel;
    private $username = null ;
    private $mdp = null ;
    private $role;
    private $salaire;

    function __construct( $cin,  $nom,  $prenom,  $email,  $numTel,  $username,  $mdp,  $role,  $salaire)
    {
        $this->cin = $cin;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->numTel = $numTel;
        $this->username = $username;
        $this->mdp = $mdp;
        $this->role = $role;
        $this->salaire = $salaire;
    }
    public function getCin()  //getters (accesseurs) permettent de renvoyer la valeur
    {
        return $this->cin;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getNumTel()
    {
        return $this->numTel;
    }
    public function getUserName()
    {
        return $this->username;
    }
    public function getMdp()
    {
        return $this->mdp;
    }
    public function getRole()
    {
        return $this->role;
    }
    public function getSalaire()
    {
        return $this->salaire;
    }

    public function setCin(int $cin) //setters(mutateurs) permettent de modifier une valeur
    {
        $this->cin = $cin;
    }
    public function setNom(string $nom)
    {
        $this->nom = $nom;
    }
    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;
    }
    public function setEmail(string $email)
    {
        $this->email = $email;
    }
    public function setTel(int $numTel)
    {
        $this->numTel = $numTel;
    }
    public function setUserName(string $username)
    {
        $this->username = $username;
    }
    public function setMdp(string $mdp)
    {
        $this->mdp = $mdp;
    }
    public function setRole(int $role)
    {
        $this->role = $role;
    }
    public function setSalaire(float $salaire)
    {
        $this->salaire = $salaire;
    }








}
?>