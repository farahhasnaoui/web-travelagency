
<?PHP



include "../../entities/Vol.php";
include "../../core/VolC.php";


if (isset($_POST['airline']) and isset($_POST['lieu_a']) and isset($_POST['lieu_d']) and isset($_POST['date_d']) and isset($_POST['date_r'])  and isset($_POST['heure_d'])  and isset($_POST['heure_r']) and isset($_POST['prixVol']) ){
echo 'here i am';



$vol1=new vol($_POST['airline'],$_POST['lieu_a'],$_POST['lieu_d'],$_POST['date_d'],$_POST['date_r'],$_POST['heure_d'],$_POST['heure_r'],$_POST['prixVol']);

echo 'here i am 1';

$vol1C=new VolC();
$vol1C->ajoutervols($vol1);
    header('Location: afficherVol.php');

}else{
echo "vérifier les champs";
}

?>