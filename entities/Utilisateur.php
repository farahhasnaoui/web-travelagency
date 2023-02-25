<?php


class Utilisateur
{
    private $cin;
    private $nom;
    private $prenom;
    private $email;
    private $numTel;
    private $userName;
    private $mdp;


    function __construct($cin,$nom,$prenom,$email,$numTel,$userName,$mdp){
        $this->cin=$cin;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->email=$email;
        $this->numTel=$numTel;
        $this->userName=$userName;
        $this->mdp=$mdp;
    }


    public function getCin()
    {
        return $this->cin;
    }


    public function setCin($cin)
    {
        $this->cin = $cin;
    }


    public function getNom()
    {
        return $this->nom;
    }


    public function setNom($nom)
    {
        $this->nom = $nom;
    }


    public function getPrenom()
    {
        return $this->prenom;
    }


    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }


    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $email;
    }


    public function getNumTel()
    {
        return $this->numTel;
    }


    public function setNumTel($numTel)
    {
        $this->numTel = $numTel;
    }


    public function getUserName()
    {
        return $this->userName;
    }


    public function setUserName($userName)
    {
        $this->userName = $userName;
    }


    public function getMdp()
    {
        return $this->mdp;
    }


    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    }


}