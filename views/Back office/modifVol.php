<?PHP
include "../../entities/Vol.php";
include "../../core/VolC.php";

if (isset($_POST['idVol'])){
    echo "1";
    $volC=new VolC();
    echo"2";
$vol=new vol($_POST['airline'], $_POST['lieu_a'], $_POST['lieu_d'], $_POST['date_d'], $_POST['date_r'], $_POST['heure_d'], $_POST['heure_r'], $_POST['prixVol']);
echo"3";
$volC->modifierVol($vol,$_POST['idVol']);
header('Location:afficherVol.php');

}
?>
