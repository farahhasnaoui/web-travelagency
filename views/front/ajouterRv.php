<?PHP
session_start();
include "../../entities/Reservation.php";
include "../../core/ReservationC.php";
include "../../core/VolC.php";

if (isset($_GET['idVol'])){

    $volC = new VolC();

       $list= $volC->recupererVol($_GET['idVol']);


    $dateReservation = date("h:i:sa");
    foreach($list as $row){
        echo $row['idVol'];
        $idVol = $row['idVol'];
        $prixVol = $row['prixVol'];
    }

    $res=new Reservation('07238394', $idVol, 0, $dateReservation, $prixVol);

    $res1C=new ReservationC();

    $res1C->ajouterReservationVol('07238394', $idVol, 0, $dateReservation, $prixVol);

    $volC = new VolC();

    $list= $volC->recupererVol($_GET['idVol']);

    $_SESSION['produit']="payement vol";
    $_SESSION['prix']=$prixVol;
    header('Location: payment/indexPayement.php ');

}else{
    echo"verifier les champs";
}
//*/

?>
