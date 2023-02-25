<?php
include "../../config.php";
class AgentC{
    function ajouterAgent($Agent)
    {
        $db = config::getConnexion();
        $sql="INSERT INTO agent (cin,nom, prenom, email,numTel,username, mdp, role,salaire) 
			VALUES (:cin,:nom,:prenom,:email, :numTel, :username, :mdp, :role, :salaire)";

        try{
            $query = $db->prepare($sql);

            $query->execute([
                'cin' => $Agent->getCin(),
                'nom' => $Agent->getNom(),
                'prenom' => $Agent->getPrenom(),
                'email' => $Agent->getEmail(),
                'numTel' => $Agent->getNumTel(),
                'username' => $Agent->getUserName(),
                'mdp' => $Agent->getMdp(),
                'role' => $Agent->getRole(),
                'salaire' => $Agent->getSalaire()

            ]);
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }

    function afficherAgent(){

        $db = config::getConnexion();

        $sql="SELECT * FROM agent";

        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

    }

    function modifierAgent($e,$cin){
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
        $sql="UPDATE agent SET cin=:cin, nom=:nom, prenom=:prenom, email=:email, numTel=:numTel, username=:username,role=:role,salaire=:salaire WHERE cin=:cin";
        
        
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
        $role=$e->getRole();
        $salaire=$e->getSalaire();
        
 
        $datas = array(':cin'=>$cin,  ':nom'=>$nom,':prenom'=>$prenom,':email'=>$email,':numTel'=>$numTel,':username'=>$userName,':mdp'=>$mdp,':role'=>$role,':salaire'=>$salaire);
        $req->bindValue(':cin',$cin);
        $req->bindValue(':nom',$nom);
        $req->bindValue(':prenom',$prenom);
        $req->bindValue(':email',$email);
        $req->bindValue(':numTel',$numTel);
        $req->bindValue(':username',$userName);
        $req->bindValue(':mdp',$mdp);
        $req->bindValue(':role',$role);
        $req->bindValue(':salaire',$salaire);
        
        
            $s=$req->execute();
            
           
        }
        catch (Exception $z){
            echo " Erreur ! ".$z->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }

    }


    function supprimerAgent($cin)
    {
        $sql="DELETE FROM agent WHERE cin= :cin";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':cin',$cin);
        try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function recupererAgent($cin){
        $conn = NULL;
        try{
            $conn = new PDO("mysql:host=localhost;dbname=agence_de_voyage",
            "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e){
                echo 'ERROR: ' . $e->getMessage();
                }    
            $this->db = $conn;
    
		$sql="SELECT * from agent where (cin=$cin)";
		
		try{
		$liste=$this->db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }





}
