<?php include 'header.php' ; ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Reservation</a>
        </li>
        <li class="breadcrumb-item active">listes des Reservation</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Liste des Reservation</div>
        <div class="card-body">
           
          <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" name="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Id Reservation</th>
                  <th>Id Client</th>
                  <th>Prix Total</th>
				  <th>Date de Création</th>
                  <th>Date de Modification</th>
                    <th>Etat</th>
					

                </tr>
              </thead>
              
              <tbody>
              <?php
              include "../../core/panierC.php";
				$panierC=new cart();
				$listeCommande=$panierC->afficherCommande();
              foreach ($listeCommande as $row) {

              ?>
              <tr>
                  <th><?php echo $row['id']; ?></th>

                  <th><?php echo $row['customer_id']; ?></th>
                  <th><?php echo $row['total_price']; ?> Dt</th>
                  <th><?php echo $row['created']; ?></th>
                  <th><?php echo $row['modified']; ?></th>
				  <?php if ($row['status'] == 1 ):?>
                  <th><a href="gererCommande.php?action=confirmer&id=<?php echo $row['id']; ?>">confirmer</a></th>
				  <?php endif;?>
				  <?php if ($row['status'] == 2 ): ?>
				  <th><?php echo 'terminé'; ?></th>
				  
					<?php endif;?>
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
    