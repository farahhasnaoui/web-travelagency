
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>MC Admin </title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
</head>
<script type="javascript">

</script>

<script>
    function refreshTable() {
        var table = $('#dataTable').DataTable();

        //clear datatable
        table.clear().draw();

        //destroy datatable
        table.destroy();
    }
</script>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">Mc Tacos Admin</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseCommande" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-wrench"></i>
                    <span class="nav-link-text">Gestion de Reservation</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseCommande">
                    <li>
                        <a href="afficherReservation.php">reservation Vol</a>
                    </li>
                    <li>
                        <a href="afficherReservationVoy.php">reservation voyage</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseProduit" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-wrench"></i>
                    <span class="nav-link-text">Gestion de Voyage</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseProduit">
                    <li>
                        <a href="ajouterVoy.php">Ajouter Voyage</a>
                    </li>
                    <li>
                        <a href="afficherComment.php">Afficher les commentairess</a>
                    </li>

                    <li>
                        <a href="afficherVoy.php">Liste des Voyages</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseclient" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-wrench"></i>
                    <span class="nav-link-text">Gestion des comptes</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseclient">
                    <li>
                        <a href="tableUsers.php">utilisateurs</a>
                    </li>
                    <li>
                        <a href="AjouterUser.php">ajouter User</a>
                    </li>
                    <li>
                        <a href="AfficherAgent.php">agent</a>
                    </li>
                    <li>
                        <a href="AjouterAgent.php">ajouter agent</a>
                    </li>



                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapsevol" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-wrench"></i>
                    <span class="nav-link-text">Gestion des vols</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapsevol">
                    <li>
                        <a href="ajouterVol.php">ajouter Vol</a>
                    </li>

                    <li>
                        <a href="afficherVol.php">liste des vols</a>
                    </li>

                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseHotels" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-wrench"></i>
                    <span class="nav-link-text">Gestion de Hotels</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseHotels">
                    <li>
                        <a href="Bhotels.php">Hotels</a>
                    </li>
                    <li>
                        <a href="Bchambres.php">Chambres</a>
                    </li>
                    <li>
                        <a href="Bpromotions.php">Promotions</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapsepayment" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-wrench"></i>
                    <span class="nav-link-text">Gestion des payements</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapsepayment">
                    <li>
                        <a href="afficherTransaction.php">liste des transaction</a>
                    </li>



                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapsearticle" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-wrench"></i>
                    <span class="nav-link-text">Gestion des Reclamation</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapsearticle">


                    <li>
                        <a href="afficherarticle.php">liste des reclamation</a>
                    </li>

                </ul>
            </li>

        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>

    </div>
</nav>