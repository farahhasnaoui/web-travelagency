<?php
include "../../core/UtilisateurC.php";
include_once "../../entities/Utilisateur.php";


$utilisateur1C = new UtilisateurC();
$error = "";
echo"hello";
if (isset($_POST['cin']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['numTel']) && isset($_POST['userName']) && isset($_POST['mdp'])) {

    if (
        !empty($_POST["cin"]) &&
        !empty($_POST["nom"]) &&
        !empty($_POST["prenom"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["numTel"]) &&
        !empty($_POST["userName"]) &&
        !empty($_POST["mdp"])
        
    ) {

        $utilisateur1 = new Utilisateur ($_POST['cin'], $_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['numTel'], $_POST['userName'], $_POST['mdp'] );


        $utilisateur1C->ajouterUser($utilisateur1);

        header('Location: AfficherUtilisateur.php');

    } else
        echo "verifier les champs";
}
?>
