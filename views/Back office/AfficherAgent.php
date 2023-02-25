
<?php
include "../../core/AgentC.php";
include "header.php";

$agent1C = new AgentC();
$listeAgents = $agent1C->afficherAgent();
?>



<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Agent</a>
            </li>
            <li class="breadcrumb-item active">listes des agents</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Liste des Agents</div>
            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-bordered" id="dataTable" name="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>cin</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Email</th>
                            <th>Telephone</th>
                            <th>Username</th>
                            <th>Mot de passe</th>
                            <th>Role</th>
                            <th>Salaire</th>
                            <th>Supprimer </th>
                            <th>Modifier</th>



                        </tr>
                        </thead>


    <?PHP
    foreach($listeAgents as $agent){
        ?>
        <tr>
            <td><?PHP echo $agent['cin']; ?></td>
            <td><?PHP echo $agent['nom']; ?></td>
            <td><?PHP echo $agent['prenom']; ?></td>
            <td><?PHP echo $agent['email']; ?></td>
            <td><?PHP echo $agent['numTel']; ?></td>
            <td><?PHP echo $agent['username']; ?></td>
            <td><?PHP echo md5($agent['mdp']); ?></td>
            <td><?PHP echo $agent['role']; ?></td>
            <td><?PHP echo $agent['salaire']; ?></td>
            <td>
                <form method="POST" action="SupprimerAgent.php">
                    <input type="submit" name="supprimer" value="supprimer">
                    <input type="hidden" value=<?PHP echo $agent['cin']; ?> name="cin">
                </form>
            </td>
            <td>
                <a href="ModifierAgent.php?cin=<?PHP echo $agent['cin']; ?>"> Modifier </a>
            </td>
        </tr>
        <?PHP
    }
    ?>
                        </tbody>

                    </table>
                </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
    </div>

                            <?php include"footer.php"; ?>