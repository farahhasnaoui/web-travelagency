<?php
include"header.php";

?>
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Gestion des utlisateurs</a>
                </li>
                <li class="breadcrumb-item active">Ajouter User</li>
            </ol>
            <!-- Example DataTables Card-->
            <div class="card card-register mx-auto mt-5">
                <div class="card-header">Ajouter User</div>
                <div class="card-body">
                    <form method="POST" action="" >
                        <div class="form-group">
                            <div class="form-row">

                                <label for="exampleInputName">cin</label>
                                <input type="int" class="form-control" name="cin" id="cin"   pattern="[0-9]{8}" title="CIN doit avoir 8 chiffres ." pattern="[0-9]{8}" title="CIN doit avoir 8 chiffres ." required>
                            </div>
                            <div class="form-row">

                                <label for="exampleInputLastName">nom</label>
                                 <input type="text" class="form-control" name="nom" id="nom" maxlength="20"   pattern="[A-Za-z]{4,}" title="le nom doit avoir au moins 4 Characthéres ." required>

                            </div>
                        </div>
                        <div class="form-row">
                            <label for="exampleInputEmail1">prenom</label>
                             <input type="text" class="form-control" name="prenom" id="prenom" pattern="[A-Za-z]{4,}" title="le prenom doit avoir au moins 4 Characthéres ." required>
                        </div>
                        <div class="form-row">
                            <label for="exampleInputEmail1">email</label>
                            <input type="email" class="form-control" name="email" id="email"  required>
                        </div>
                        <div class="form-row">
                            <label for="exampleInputEmail1">numTel</label>
                            <input type="tel" class="form-control" name="numTel" id="numTel"  pattern="[0-9]{8}" title="Le numero de téléphone doit avoir 8 chiffres ." required >

                        </div>
                        <div class="form-row">
                            <label for="exampleInputEmail1">userName</label>
                            <input type="text" class="form-control" name="userName" id="userName"  required>
                        </div>
                        <div class="form-row">
                            <label for="exampleInputEmail1">password</label>
                            <input type="password" class="form-control" name="mdp" id="mdp" required>
                        </div>
                    


                        <input class="form-control" type="submit" name="ajouter" value="ajouter">
                    </form>
                </div>


            </div>
        </div>

    </div>












<?php include "footer.php"; ?>