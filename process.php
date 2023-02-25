<?php
$mysqli = new mysqli('localhost','root','','agence_de_voyage') or die(mysqli_error($mysqli));
if (isset($_POST['save'])){
    $cin = $_POST['cin'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $numTel = $_POST['numTel'];
    $userName= $_POST['userName'];
    $mdp = $_POST['mdp'];
    $mysqli->query("INSERT INTO user (cin, nom, prenom, email , numTel, userName, mdp) VALUES ('$cin','$nom','$prenom','$email','$numTel','$userName','$mdp')") or
    die($mysqli->error);
}
