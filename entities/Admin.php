<?php
include_once "../../dbConfig.php";
class Admin
{
    private $iduser;
    private $login;
    private $mdp;
    private $email;
    private $role;
    public $conn;


    public function __construct($login,$mdp,$conn){

        $this->login=$login;
        $this->mdp=$mdp;
        $co= new Database();
        $this->conn=$co->connexion();
    }
    //getter
    function getIdUser(){
        return $this->iduser;
    }
    function getLogin(){
        return $this->login;
    }
    function getMdp(){
        return $this->mdp;
    }
    function getEmail(){
        return $this->email;
    }
    function getRole(){
        return $this->role;
    }
    //setter
    function setLogin($login){
        $this->login=$login;
    }
    function setMdp($mdp){
        $this->mdp=$mdp;
    }
    function setEmail($email){
        $this->email=$email;
    }
    function setRole($role){
        $this->role=$role;
    }

    public function Login($conn,$login,$mdp)
    {
        $req="select * from agent where username='$login' && mdp='$mdp'";
        $rep=$conn->query($req);
        return $rep->fetchAll();
    }
   
    public function Loggin($conn,$username,$mdp)
    {
        $req="select * from utilisateur where username='$username' && mdp='$mdp'";
        $rep=$conn->query($req);
        return $rep->fetchAll();
    }
    

}