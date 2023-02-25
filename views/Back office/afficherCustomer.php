<?php
require_once('../front/payment/config/db.php');
require_once('../front/payment/lib/pdo_db.php');
require_once('../front/payment/models/Transaction.php');
// Instantiate Customer
$customer = new Customer();
// Get Customer
$customers = $customer->getCustomers();
?>


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
            <li class="breadcrumb-item active">listes des Reservation</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Liste des reservation</div>
            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-bordered" id="dataTable" name="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>idR</th>
                            <th>cin</th>
                            <th>idVol</th>
                            <th>valid</th>
                            <th>date reservation</th>
                            <th>prix</th>
                            <th>Validation</th>
                            <th>Suppression</th>



                        </tr>
                        </thead>

                        <tbody>
                        <?php
                        include "../../entities/Reservation.php";
                        require '../../core/ReservationC.php';





                        foreach ($customers as $emp) {

                            ?>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Customer ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($customers as $c): ?>
                                    <tr>
                                        <td><?php echo $c->id; ?></td>
                                        <td><?php echo $c->first_name; ?> <?php echo $c->last_name; ?></td>
                                        <td><?php echo $c->email; ?></td>
                                        <td><?php echo $c->created_at; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>

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
