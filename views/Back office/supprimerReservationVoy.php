<?php
include "../../entities/ReservationVoy.php";
include "../../core/ReservationVoyC.php";
if (isset($_GET['idR']))
{

    $valeur=$_GET['idR'];

    $pe = new ReservationVoyC();
    $pe->supprimerReservation($valeur);
    header('Location: afficherReservationVoy.php');
}
?>
