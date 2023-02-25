<?php
session_start();
include "../../entities\Utilisateur.php";
require "../../core\UtilisateurC.php";


$uC=new UserC();
$resultat= $uC->login($_POST['email'],$_POST['password']);
if(empty($resultat))
    echo "<script type='text/javascript'>document.location.replace('login.php');</script>";
else {
    foreach ($resultat as $x) {

        $_SESSION['id'] = $x['id'];
        $_SESSION['nom'] = $x['nom'];
        $_SESSION['prenom'] = $x['prenom'];
        $_SESSION['mail'] = $x['mail'];
        $_SESSION['password'] = $x['password'];

        $_SESSION['dateNaissance'] = $x['dateNaissance'];
        $_SESSION['sexe'] = $x['sexe'];
        $_SESSION['adresse'] = $x['adresse'];
        $_SESSION['telephone'] = $x['telephone'];
        $_SESSION['banned'] = $x['banned'];
        $_SESSION['totalBan'] = $x['totalBan'];
        $_SESSION['role'] = $x['role'];
        if ($x['role'] == 0)
            echo "<script type='text/javascript'>document.location.replace('index.php');</script>";
        else
            echo "<script type='text/javascript'>document.location.replace('../backOffice/index.php');</script>";


    }
}




?>