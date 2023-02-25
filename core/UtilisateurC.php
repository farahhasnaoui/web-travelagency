<?php

class UtilisateurC {
    

    protected $db;

    function __construct() {
        echo"verifier les champs1";
        $conn = NULL;
        try{
            $conn = new PDO("mysql:host=localhost;dbname=agence_de_voyage",
            "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e){
                echo 'ERROR: ' . $e->getMessage();
                }    
            $this->db = $conn;
    }

    function ajouterUser($utilisateur){
        $sql="insert into utilisateur (cin,nom,prenom,email,numTel,userName,mdp) values 
     (:cin, :nom, :prenom, :email, :numTel, :userName, :mdp)";

        try{
            $req=$this->db->prepare($sql);
            $cin=$utilisateur->getCin();
            $nom=$utilisateur->getNom();
            $prenom=$utilisateur->getPrenom();
            $email=$utilisateur->getEmail();
            $numTel=$utilisateur->getNumTel();
            $userName=$utilisateur->getUserName();
            $mdp=$utilisateur->getMdp();
            $req->bindValue(':cin',$cin);
            $req->bindValue(':nom',$nom);
            $req->bindValue(':prenom',$prenom);
            $req->bindValue(':email',$email);
            $req->bindValue(':numTel',$numTel);
            $req->bindValue(':userName',$userName);
            $req->bindValue(':mdp',$mdp);
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

    }
    function afficherUser(){
        $conn = NULL;
        try{
            $conn = new PDO("mysql:host=localhost;dbname=agence_de_voyage",
            "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e){
                echo 'ERROR: ' . $e->getMessage();
                }    
            $this->db = $conn;
        $sql="SElECT * From utilisateur";
        try{
            $liste=$this->db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    public function addUser($user)
    {
        $conn=config::getConnexion();
        $insert=$conn->prepare("INSERT INTO `utilisateur`( `mail`, `password`, `nom`, `prenom`, `dateNaissance`, `sexe`, `adresse`, `telephone`,`role`)values(?,?,?,?,?,?,?,?,?)");
        $insert->execute(array($user->getMail(),$user->getPassword(),$user->getNom(),$user->getPrenom(),$user->getDateNaiss(),$user->getSexe(),$user->getAdressse(),$user->getTel(),0));

    }


    public function Logedin($conn,$login,$pwd)
    {
        $req="select * from utilisateur where userName='$login' && user_pass='$pwd'";
        $rep=$conn->query($req);
        return $rep->fetchAll();
    }
   public function afficherProfilClient($idClient)
    {
        $conn = config::getConnexion();
        $check = $conn->query("SELECT utilisateur.nom , utilisateur.prenom ,utilisateur.dateNaissance , utilisateur.sexe , utilisateur.telephone , utilisateur.adresse , utilisateur.mail ,fidelite.PointsFidelite from utilisateur JOIN fidelite on utilisateur.id=fidelite.idClient where id='$idClient'");
		$liste = $check->fetchAll() ;
        return $liste;
    }

        public function afficherTousClients()
    {
        $conn=config::getConnexion();
        $check=$conn->query("Select * from utilisateur ");
        echo $check;
        return $check->fetchAll();
    }

    public function updateUser($user)
    {
        $conn=config::getConnexion();
        $del=$conn->prepare("UPDATE `utilisateur` SET `cin`=?,`nom`=?,`prenom`=?,`email`=?,`numTel`=?,`userName`=?,`userName`=? WHERE `cin`=?");

            $del->execute(array($user->getNom(),$user->getPrenom(),$user->getDateNaiss(),$user->getSexe(),$user->getAdressse(),$user->getTel(),$user->getId()));
    }




    public function RecupererUser($cin){


        $conn = NULL;
        try{
            $conn = new PDO("mysql:host=localhost;dbname=agence_de_voyage",
            "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e){
                echo 'ERROR: ' . $e->getMessage();
                }    
            $this->db = $conn;
    
		$sql="SELECT * from utilisateur where (cin=$cin)";
		
		try{
		$liste=$this->db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function modifierUser($e,$cin){
        $conn = NULL;
        try{
            $conn = new PDO("mysql:host=localhost;dbname=agence_de_voyage",
            "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo"222";
            } catch(PDOException $e){
                echo 'ERROR: ' . $e->getMessage();
                }    
            $this->db = $conn;
        $sql="UPDATE utilisateur SET cin=:cin, nom=:nom, prenom=:prenom, email=:email, numTel=:numTel, userName=:userName,mdp=:mdp WHERE cin=:cin";
        
        
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{        
        $req = $this->db->prepare($sql);
     $cin=$e->getCin();
        $nom=$e->getNom();
        $prenom=$e->getPrenom();
        $email=$e->getEmail();
        $numTel=$e->getNumTel();
        $userName=$e->getUserName();
        $mdp=$e->getMdp();
        
 
        $datas = array(':cin'=>$cin,  ':nom'=>$nom,':prenom'=>$prenom,':email'=>$email,':numTel'=>$numTel,':userName'=>$userName,':mdp'=>$mdp);
        $req->bindValue(':cin',$cin);
        $req->bindValue(':nom',$nom);
        $req->bindValue(':prenom',$prenom);
        $req->bindValue(':email',$email);
        $req->bindValue(':numTel',$numTel);
        $req->bindValue(':userName',$userName);
        $req->bindValue(':mdp',$mdp);
        
        
            $s=$req->execute();
            
           
        }
        catch (Exception $z){
            echo " Erreur ! ".$z->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        
    }
    public function supprimerUser($cin)	
    {
        echo"2222";
        $conn = NULL;
        try{
            $conn = new PDO("mysql:host=localhost;dbname=agence_de_voyage",
            "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo"33333";
            } catch(PDOException $e){
                echo 'ERROR: ' . $e->getMessage();
                }    
            $this->db = $conn;
        $sql = "DELETE  FROM `utilisateur` WHERE `cin`=:cin";
        $req= $this->db->prepare($sql);
        $req->bindValue(':cin',$cin);
   $req->execute();
   
    }

}