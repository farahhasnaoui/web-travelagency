<?php



include "../../dbconfig.php";
include '../../entities/user.php';
//$log="admin";
//$pwd="admin";
/*$servername="localhost";
	$username="root";
	$password="";
	$dbname="dblogin";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname",
	$username, $password);
	$req="select * from users where user_name='$login' && user_pass='$pwd'";
	$rep=$conn->query($req);
	$res=$rep->fetchAll();
	*/

$c = new Database();

$conn=$c->connexion();

$user=new User($_POST['userName'],$_POST['mdp'],$conn);

$u=$user->Logedin($conn,$_POST['userName'],$_POST['mdp']);

	//var_dump($u);
//$logR=$_POST['login'];
//$pwdR=$_POST['pwd'];
$vide=false;
if (!empty($_POST['userName']) && !empty($_POST['mdp'])){


	foreach($u as $t){
		$vide=true;
	if ($t['userName']==$_POST['userName'] && $t['mdp']==$_POST['mdp']){

		session_start();
		$_SESSION['userName']=$_POST['userName'];
		$_SESSION['mdp']=$_POST['mdp'];

		$_SESSION['cin']=$t['cin'];

        echo '<meta http-equiv="refresh" content="0;URL=../Back office/AfficherAgent.php">';
        echo $_SESSION['cin'];
		}

}
if ($vide==false) {
         // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
         echo '<body onLoad="alert(\'Membre non reconnu...\')">';
         // puis on le redirige vers la page d'accueil
         echo '<meta http-equiv="refresh" content="0;URL=error-404.html">';
      }
}

else {
      echo "Les variables du formulaire ne sont pas déclarées.<br> Vous devez remplir le formulaire";
     ?> <a href="signup.php">Retour au formulaire</a>	 <?php
}

?>
