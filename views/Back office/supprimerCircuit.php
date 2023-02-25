<?PHP
include "../entities/circuit.php";
include "../core/circuitC.php";
$circuit1C=new circuitC();
if (isset($_POST["idCircuit"])){
    $circuit1C->supprimercircuits($_POST["idCircuit"]);
    header('Location: afficherCircuit.php');
}

?>
