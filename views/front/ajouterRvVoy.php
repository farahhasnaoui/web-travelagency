
<?PHP

include "../../entities/ReservationVoy.php";
include "../../core/ReservationVoyC.php";
include "../../core/VoyageC.php";

if (isset($_GET['idVo'])){

    $voyC = new VoyageC();

    $list= $voyC->recupererVoyage($_GET['idVo']);
    date_default_timezone_set("Africa/Tunisie");
    echo "The time is " . date("h:i:sa");
    $dateReservation = date("h:i:sa");
    foreach($list as $row){
        echo $row['idVo'];
        $idVo = $row['idVo'];
        $prixVoy = $row['prix'];
    }
    $res=new ReservationVoy('07238394', $idVo, 0, $dateReservation, $prixVoy);

    $res1C=new ReservationVoyC();
    echo"verifier les champs2";
    $res1C->ajouterReservationVoy('07238394', $idVo, 0, $dateReservation, $prixVoy);
    echo"verifier les champs3";
    header('Location: coming-soon.html');

}else{
    echo"verifier les champs";
}
//*/

?>
