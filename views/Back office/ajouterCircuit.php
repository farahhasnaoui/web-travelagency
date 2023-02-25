<?PHP

include "../entities/circuit.php";
include "../core/circuitC.php";



if ( isset($_POST['lieu']) and isset($_POST['lieu_d']) and isset($_POST['lieu_a']) and isset($_POST['date'])and isset($_POST['nom_circuit'])and isset($_POST['prix'])and isset($_POST['description'])and isset($_POST['nb_place']) and isset($_POST['photo']))
{
$circuit=new circuit($_POST['lieu'],$_POST['lieu_d'],$_POST['lieu_a'],$_POST['date'],$_POST['nom_circuit'],$_POST['prix'],$_POST['description'],$_POST['nb_place'],$_POST['photo']);

$circuit1C=new circuitC();
$circuit1C->ajoutercircuits($circuit);
header('Location: afficherCircuit.php');
	
}else{
	echo "vérifier les champs!!";
}


?>