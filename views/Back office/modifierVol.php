<?PHP
include "../../core/VolC.php";
include "../../entities/Vol.php";
include "header.php";
if (isset($_GET['idVol'])){
    $volC =new VolC();
    echo "1";
    $result=$volC->recupererVol($_GET['idVol']);
    echo "1";
    foreach($result as $emp){
        $idVol=$emp['idVol'];
        $airline=$emp['airline'];
        $lieu_a=$emp['lieu_a'];
        $lieu_d=$emp['lieu_d'];
        $date_d=$emp['date_d'];
        $date_r=$emp['date_r'];
        $heure_d=$emp['heure_d'];
        $heure_r=$emp['heure_r'];
        $prixVol=$emp['prixVol'];
    }
}

?>
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">produits</a>
            </li>
            <li class="breadcrumb-item active">Modifier vol</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card card-register mx-auto mt-5">
            <div class="card-header">Modifier vol</div>
            <div class="card-body">
                <form method="POST" action="modifVol.php" >
                    <div class="form-group">
                        <div class="form-row">

                            <label for="exampleInputName">airline</label>
                            <input class="form-control" name="airline" type="text"  value="<?PHP echo $airline?>" required>

                        </div>
                        <div class="form-row">

                            <label for="exampleInputLastName">lieu Depart</label>
                            <input class="form-control" name="lieu_d"  type="text"   value="<?PHP echo $lieu_d?>"   required>

                        </div>

                        <div class="form-row">
                        <label for="exampleInputEmail1">lieu Arrivée</label>
                        <input class="form-control" name="lieu_a" type="text"  value="<?PHP echo $lieu_a ?>"  required>
                        </div>

                        <div class="form-row">

                            <label for="exampleInputPassword1">date depart</label>
                            <input class="form-control" name="date_d" type="date"  value="<?PHP echo $date_d ?>"  title="Ce champ doit avoir 8 chiffres ." required>

                        </div>
                        <div class="form-row">

                            <label for="exampleConfirmPassword">Date retour</label>
                            <input class="form-control" name="date_r" type="date" value="<?PHP echo $date_r ?>"   required>
                        </div>
                        <div class="form-row">

                            <label for="exampleConfirmPassword">Heure depart</label>
                            <input class="form-control" name="heure_d" type="number" placeholder="" value="<?PHP echo $heure_d ?>"  required >
                        </div>
                        <div class="form-row">

                            <label for="exampleConfirmPassword">Heure arrive</label>
                            <input class="form-control" name="heure_r" type="number" placeholder="" value="<?PHP echo $heure_r ?>"  required >
                        </div>
                        <div class="form-row">

                            <label for="exampleConfirmPassword">PRIX</label>
                            <input class="form-control" name="prixVol" type="number" value="<?PHP echo $prixVol ?>"   required>
                        </div>
                        <div class="form-row">
                        <input class="form-control" type="hidden" name="idVol" value="<?PHP echo $idVol ?>">
                        <input class="form-control" type="submit" name="modifier" value="modifier">
                        </div>
                    </div>
            </form>
            </div>

        </div>
    </div>

</div>

<?php include 'footer.php' ; ?>

