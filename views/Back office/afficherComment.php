<?PHP
include "header.php";


?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Gestion des Commentaires</a>
        </li>
        <li class="breadcrumb-item active">listes des commentaires</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Liste des commentaires</div>
        <div class="card-body">
           
          <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" name="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
              

        <th>id</th>
        <th>Sender Name </th>
        <th>Comment </th>
        <th>Date</th>
      
        <th>supprimer</th>
                   
					

                </tr>
              </thead>
              
              <tbody>
              <?php
             include "../../entities/Comment.php";
			 require '../../core/CommentC.php';
       include "../../config.php"; 




			$comment=new CommentC();
			$liste1=$comment->afficherComments();
              foreach ($liste1 as $emp) { 

              ?>
              <tr>
      <td><?php echo $emp['comment_id']; ?></td>
      <td><?php echo $emp['sender_name']; ?></td>
       <td><?php echo $emp['comment']; ?></td>
          <td><?php echo $emp['datec']; ?></td>
    
        
	   <td><a href="supprimerCommentadmin.php?comment_id=<?PHP echo $emp['comment_id']; ?>">supprimer</a></td>

    </tr>
			 
                  <?php
              }
              ?>
              </tbody>

            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated by Hayfa Ouni</div>
      </div>
    </div>
	<?php include 'footer.php' ; ?>
    