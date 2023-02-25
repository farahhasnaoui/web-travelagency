<?PHP
include 'header.php' ;
include "../../core/circuitC.php";
$circuitC=new circuitC();
$listecircuits=$circuitC->affichercircuits($circuitC);

?>

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Promotions</a>
        </li>
        <li class="breadcrumb-item active">listes des Circuits</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Liste des Circuits</div>
        <div class="card-body">
           
          <div class="table-responsive">
          <form id="form3" method="post" action="ajouterCircuit.html">
                        <button type="submit" class="btn btn-info add-new" value="Ajouter"><i class="fa fa-plus"></i> Ajouter</button>
                        </form>
                        <br>

            <table class="table table-bordered" id="dataTable" name="dataTable" width="100%" cellspacing="0">
              
                <thead>
                <tr>
                <th>idCircuit </th>
                <th>lieu</th>
                <th>lieu_d</th>
                <th>lieu_a</th>
                <th>date</th>
                <th>nom_circuit</th>
                <th>prix</th>
                <th>description</th>
                <th>nb_place</th>
                <th>photo</th> 
                <th>supprimer</th>
                <th>modifier</th>
                   
					

                </tr>
               </thead>
              
              <tbody>
              <?php
              foreach ($listecircuits as $row) {
              ?>
              <tr>
              <td><?PHP echo $row['idCircuit']; ?></td>
              <td><?PHP echo $row['lieu']; ?></td>
              <td><?PHP echo $row['lieu_d']; ?></td>
              <td><?PHP echo $row['lieu_a']; ?></td>
              <td><?PHP echo $row['date']; ?></td>
              <td><?PHP echo $row['nom_circuit']; ?></td>
              <td><?PHP echo $row['prix']; ?></td>
              <td><?PHP echo $row['description']; ?></td>
              <td><?PHP echo $row['nb_place']; ?></td>
              <td><img class="imgcircuit" src="../entities/img/<?PHP echo $row['photo']; ?>"></td>
	  
	  <td> <form id="form2" method="post" action="supprimerCircuit.php">
                             <input type="text" value="<?PHP echo $row['idCircuit']; ?>" name="idCircuit" hidden>
                             <input class="btn btn-danger add-new" type="submit" value="supprimer"/>
                            </form></td>
      <td><form id="form1" method="post" action="modifier.php?id=<?php echo $row['idCircuit']; ?>">
                             <input type="text" value="<?PHP echo $row['idCircuit']; ?>" name="idCircuit" hidden>
                             <input class="btn btn-info add-new" type="submit" value="Modifier"/>
                            </form></td>
    </tr>
    <?PHP include 'footer.php' ;
    }
    ?>
              </tbody>     
            

            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>

       

