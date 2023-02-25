<?php

include"entities/Vol.php";
class ReservationVoyC
{
    protected $db;
    function __construct() {

        $conn = NULL;
        try{
            $conn = new PDO("mysql:host=localhost;dbname=agence_de_voyage",
                "root", "root");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e){
            echo 'ERROR: ' . $e->getMessage();
        }
        $this->db = $conn;
    }
    function affichReservation(){
        $conn = NULL;
        try{
            $conn = new PDO("mysql:host=localhost;dbname=agence_de_voyage",
                "root", "root");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e){
            echo 'ERROR: ' . $e->getMessage();
        }
        $this->db = $conn;
        $sql="SElECT * From reservationVoy";
        try{
            $liste=$this->db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    public function recupererReservationVoy($idR){

        $conn = NULL;
        try{
            $conn = new PDO("mysql:host=localhost;dbname=agence_de_voyage",
                "root", "root");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e){
            echo 'ERROR: ' . $e->getMessage();
        }
        $sql="SELECT * from reservationVoy where idR=$idR";
        $this->db = $conn;
        try{
            $liste=$this->db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    public function validerReservation($idR){

        $conn = NULL;
        try{
            $conn = new PDO("mysql:host=localhost;dbname=agence_de_voyage",
                "root", "root");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch(PDOException $e){
            echo 'ERROR: ' . $e->getMessage();
        }
        $this->db = $conn;
        $sql="UPDATE reservationVoy SET valid=1 WHERE idR='$idR'";

        $req= $this->db->prepare($sql);
        $req->bindValue(':idR',$idR);
        $req->execute();

    }


    public function ajouterReservationVoy($cin,$idVoy,$valid,$dateReservation,$prix)
    {



        $conn = NULL;
        try{

            $conn = new PDO("mysql:host=localhost;dbname=agence_de_voyage",
                "root", "root");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e){
            echo 'ERROR: ' . $e->getMessage();
        }
        $this->db = $conn;


        $sql = "INSERT INTO reservationVoy (cin,idVo,valid,dateReservation,prix) VALUES ('$cin','$idVoy','$valid',now(),'$prix')";


        $this->db->exec($sql);

    }





    public function supprimerReservation($idR)
    {

        $conn = NULL;
        try{
            $conn = new PDO("mysql:host=localhost;dbname=agence_de_voyage",
                "root", "root");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch(PDOException $e){
            echo 'ERROR: ' . $e->getMessage();
        }
        $this->db = $conn;
        $sql = "DELETE  FROM `reservationVoy` WHERE `idR`=:idR";
        $req= $this->db->prepare($sql);
        $req->bindValue(':idR',$idR);
        $req->execute();

    }













}