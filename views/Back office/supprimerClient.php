<?php
include "../../entities/Utilisateur.php";
include "../../core/UtilisateurC.php";
if (isset($_GET['cin']))
{
	echo"verifir";
	$valeur=$_GET['cin'];

$pe = new UtilisateurC();
$pe->supprimerUser($valeur);
	header('Location: tableUsers.php');
}
?>