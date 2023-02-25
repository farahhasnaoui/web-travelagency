<?php
include "../../core/AgentC.php";
include_once "../../entities/Agent.php";


$agent1C = new AgentC();
$error = "";
echo"hello";
if (isset($_POST['cin']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['numTel']) && isset($_POST['username']) && isset($_POST['mdp']) && isset($_POST['role']) && isset($_POST['salaire'])) {

    if (
        !empty($_POST["cin"]) &&
        !empty($_POST["nom"]) &&
        !empty($_POST["prenom"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["numTel"]) &&
        !empty($_POST["username"]) &&
        !empty($_POST["mdp"])&&
        !empty($_POST["role"])&&
        !empty($_POST["salaire"])
    ) {

        $agent1 = new Agent ($_POST['cin'], $_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['numTel'], $_POST['username'], $_POST['mdp'] , $_POST['role'] , $_POST['salaire']);


        $agent1C->ajouterAgent($agent1);

        header('Location: AfficherAgent.php');

    } else
        echo "verifier les champs";
}
?>
