<?php
include "../../entities/Vol.php";
include "../../core/VolC.php";
if (isset($_GET['idVol']))
{
    echo"verifir";
    $valeur=$_GET['idVol'];

    $pe = new VolC();
    $pe->supprimerVol($valeur);
    header('Location: afficherVol.php');
}
?>