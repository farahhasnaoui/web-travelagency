<?php
include "header.php";
include "../../core/AgentC.php";
include "../../entities/Agent.php";


if (isset($_GET['cin'])) {
    echo"hello";
    $agent1c = new AgentC();

    $listagent = $agent1c->recupererAgent($_GET['cin']);
    foreach($listagent as $row){
		$cin=$row['cin'];
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$email=$row['email'];
    $userName=$row['username'];
    $numTel=$row['numTel'];
        $mdp=$row['mdp'];
        $role=$row['role'];
        $salaire=$row['salaire'];
        

            }
            if (isset($_POST['modifier']))
{
	echo"111111";
    $agent=new Agent( $_POST['cin'], $_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['numTel'], $_POST['username'], $_POST['mdp'], $_POST['role'], $_POST['salaire']);

    $agent1c->modifierAgent($agent,$_POST['cin']);

}
       
   
    
}

?>
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Gestion des agent</a>
            </li>
            <li class="breadcrumb-item active">Ajouter agent</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card card-register mx-auto mt-5">
            <div class="card-header">Ajouter agent</div>
            <div class="card-body">
                <form method="POST"  >
                    <div class="form-group">
                        <div class="form-row">

                            <label for="exampleInputName">cin</label>
                            <input type="int" class="form-control" name="cin" id="cin" value="<?PHP echo $cin ?>"   required>
                        </div>
                        <div class="form-row">

                            <label for="exampleInputLastName">nom</label>
                            <input type="text" class="form-control" name="nom" id="nom" maxlength="20" value="<?PHP echo $nom?>"  required>

                        </div>
                    </div>
                    <div class="form-row">
                        <label for="exampleInputEmail1">prenom</label>
                        <input type="text" class="form-control" name="prenom" id="prenom"value="<?PHP echo $prenom ?>" required>
                    </div>
                    <div class="form-row">
                        <label for="exampleInputEmail1">email</label>
                        <input type="email" class="form-control" name="email" id="email"value="<?PHP echo $email ?>"  required>
                    </div>
                    <div class="form-row">
                        <label for="exampleInputEmail1">numTel</label>
                        <input type="tel" class="form-control" name="numTel" id="numTel" value="<?PHP echo $numTel ?>" required >

                    </div>
                    <div class="form-row">
                        <label for="exampleInputEmail1">userName</label>
                        <input type="text" class="form-control" name="username"  id="username"  value="<?PHP echo $userName ?>"  required>
                    </div>
                    <div class="form-row">
                        <label for="exampleInputEmail1">password</label>
                        <input type="password" class="form-control" name="mdp" id="mdp"value="<?PHP echo $mdp ?>"    required>
                    </div>
                    <div class="form-row">
                        <label for="exampleInputEmail1">role</label>
                        <input type="int" class="form-control" name="role"   id="role" value="<?PHP echo $role ?>" required>
                    </div>
                    <div class="form-row">
                        <label for="exampleInputEmail1">salaire</label>
                        <input type="float" class="form-control" name="salaire" id="salaire" value="<?PHP echo $salaire ?>" required>

                    </div>


                    <input class="form-control" type="submit" name="modifier" value="modifier">
                </form>

            </div>


        </div>
    </div>

</div>

<?php include"footer.php"; ?>