<?PHP
include "header.php";


?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">reclamation</a>
        </li>
        <li class="breadcrumb-item active">listes des reclamation</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Liste des Reclamation</div>
        <div class="card-body">
           
          <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" name="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>name</th>
                  <th>subject</th>
                  <th>message</th>

                  

                  <th>Supression</th>
                   
					

                </tr>
              </thead>
              
              <tbody>
              <?php
             include "../../entities/article.php";
			 require '../../core/articleC.php';




			$a=new articleC();
			$liste1=$a->affiche_a();
              foreach ($liste1 as $emp) {

              ?>
              <tr>
      <td><?php echo $emp['date_a']; ?></td>
      <td><?php echo $emp['titre']; ?></td>
      <td><?php echo $emp['editor1']; ?></td>

  

	  <td><a href="supprimerarticle.php?titre=<?PHP echo $emp['titre']; ?>">supprimer</a></td>

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