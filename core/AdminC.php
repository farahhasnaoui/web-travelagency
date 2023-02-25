<?php
include "../../Config.php";
include "../../Modal/Admin.php";

class AdminC
{
    function ajouterAdmin($Admin)
    {
        $db = config::getConnexion();
        $sql="INSERT INTO user (login,mdp,email,role) 
			VALUES (:login,:mdp,:email,:role)";

        try{
            $query = $db->prepare($sql);

            $query->execute([
                'login' => $Admin->getLogin(),
                'mdp' => $Admin->getMdp(),
                'email' => $Admin->getEmail(),
                'role' => $Admin->getRole()
            ]);
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }

    function afficherAdmins(){

        $sql="SELECT * FROM user";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function supprimerAdmin($iduser){
        $sql="DELETE FROM user WHERE iduser= :iduser";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':iduser',$iduser);
        try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function modifierAdmin($Admin, $iduser){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE user SET 
						login = :login, 
						mdp = :mdp,
						email = :email,
						role = :role
					WHERE iduser = :iduser'
            );
            $query->execute([
                'login' => $Admin->getLogin(),
                'mdp' => $Admin->getMdp(),
                'email' => $Admin->getEmail(),
                'role' => $Admin->getRole(),
                'iduser' => $iduser
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    function recupererAdmin($iduser){
        $sql="SELECT * from user where iduser=$iduser";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $user=$query->fetch();
            return $user;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }





}