<?PHP
include "../../core/ReservationVoyC.php";
include "../../entities/ReservationVoy.php";

if (isset($_GET['idR'])){
    $resC =new ReservationVoyC();

    $resC->validerReservation($_GET['idR']);

    header('Location: afficherReservationVoy.php');


}

?>



