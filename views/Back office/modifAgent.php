<?php

include_once "../../core/AgentC.php";
include_once "../../entities/Agent.php";


$agent1c = new AgentC();
$error = "";
if (
    isset($_POST["cin"]) &&
    isset($_POST["nom"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["email"]) &&
    isset($_POST["numTel"]) &&
    isset($_POST["username"]) &&
    isset($_POST["mdp"])&&
    isset($_POST["role"]) &&
    isset($_POST["salaire"])
){
    if (
        !empty($_POST["cin"]) &&
        !empty($_POST["nom"]) &&
        !empty($_POST["prenom"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["numTel"]) &&
        !empty($_POST["username"]) &&
        !empty($_POST["mdp"])&&
        !empty($_POST["role"]) &&
        !empty($_POST["salaire"])
    ) {
        $agent = new Agent(

            $_POST['cin'],
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['email'],
            $_POST['numTel'],
            $_POST['username'],
            $_POST['mdp'],
            $_POST['role'],
            $_POST['salaire']
        );

        $agent1c-> modifierAgent($agent, $_GET['cin']);
        header('Location:AfficherAgent.php');
    }
    else
        $error = "Missing information";
}
?>

