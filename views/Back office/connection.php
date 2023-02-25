<?php include"header.php";

session_start(); // Démarrage d’une session
include_once '../../core/Utilisateur.php';
include_once '../../ControllerUtilisateur/UtilisateurC.php';
$message = "";
$userC = new UtilisateurC();
if (isset($_POST["email"]) &&
    isset($_POST["mdp"])) {
    if (!empty($_POST["email"]) &&
        !empty($_POST["mdp"])) {
        $message = $userC->connexionUser($_POST["email"], $_POST["mdp"]);
        $_SESSION['e'] = $_POST["email"];// on stocke dans le tableau une colonne ayant comme nom "e",
        //  avec l'email à l'intérieur
        if ($message != 'pseudo ou le mot de passe est incorrect') {
            header('Location:ProfilUser.php');
        } else {
            $message = 'pseudo ou le mot de passe est incorrect';
        }
    } else
        $message = "Missing information";
}
?>
