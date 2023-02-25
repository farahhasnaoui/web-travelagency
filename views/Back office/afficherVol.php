<?PHP
include "header.php";


?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Vol</a>
        </li>
        <li class="breadcrumb-item active">listes des Vols</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Liste des Vols</div>
        <div class="card-body">
           
          <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" name="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>id</th>
                  <th>airline</th>
                  <th>lieu arrivé</th>
				  <th>lieu depart</th>
                  <th>date depart</th>
				  <th>date retour</th>
          <th>heure depart</th>
          <th>heure retour</th>
          <th>prix</th>
				  <th>Modification</th>
                  <th>Supression</th>
                   
					

                </tr>
              </thead>
              
              <tbody>
              <?php
             include "../../entities/Vol.php";
			 require '../../core/VolC.php';




			$vol=new VolC();
			$liste1=$vol->affichVol();
              foreach ($liste1 as $emp) {

              ?>
              <tr>
      <td><?php echo $emp['idVol']; ?></td>
      <td><?php echo $emp['airline']; ?></td>
      <td><?php echo $emp['lieu_a']; ?></td>
      <td><?php echo $emp['lieu_d']; ?></td>
      <td><?php echo $emp['date_d']; ?></td>
                  <td><?php echo $emp['date_r']; ?></td>
	  <td><?php echo $emp['heure_r']; ?></td>
                  <td><?php echo $emp['heure_d']; ?></td>
                  <td><?php echo $emp['prixVol']; ?></td>
	  <td><a href="modifierVol.php?idVol=<?PHP echo $emp['idVol']; ?>">Modifier</a></td>
	  <td><a href="supprimerVol.php?idVol=<?PHP echo $emp['idVol']; ?>">supprimer</a></td>

    </tr>
			 
                  <?php
              }
              ?>
              </tbody>

            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
	<?php include 'footer.php' ; ?>
    