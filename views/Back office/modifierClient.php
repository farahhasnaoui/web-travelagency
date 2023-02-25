<?PHP
include "../../entities/Utilisateur.php";
include "../../core/UtilisateurC.php";

if (isset($_GET['cin'])){
    $user1C=new UtilisateurC();
    echo"111";
    $result=$user1C->recupererUser($_GET['cin']);
    echo"222";
	foreach($result as $row){
		$cin=$row['cin'];
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$email=$row['email'];
    $userName=$row['userName'];
    $numTel=$row['numTel'];
		$mdp=$row['mdp'];
			}
}
if (isset($_POST['modifier']))
{
	echo"111111";
	$user=new utilisateur($_POST['cin'], $_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['numTel'], $_POST['userName'], $_POST['mdp']);

	$user1C->modifierUser($user,$_POST['cin']);
	header('Location: tableUsers.php');
}
include "header.php"; 
?>
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">produits</a>
        </li>
        <li class="breadcrumb-item active">Modifier client</li>
      </ol>
      <!-- Example DataTables Card-->
	  <div class="card card-register mx-auto mt-5">
      <div class="card-header">Modifier Client</div>
      <div class="card-body">
        <form method="POST" >
          <div class="form-group">
            <div class="form-row">
              
                <label for="exampleInputName">cin</label>
                <input class="form-control" name="cin" type="number" aria-describedby="nameHelp"  pattern="[0-9]{8}" title="Ce champ doit avoir 8 chiffres ."  value="<?PHP echo $cin ?>" required>
              
			  </div>
			  <div class="form-row">
              
                <label for="exampleInputLastName">nom</label>
                <input class="form-control" name="nom"  type="text" aria-describedby="nameHelp"  value="<?PHP echo $nom ?>" pattern="[A-Za-z]{4,}" title="Ce champ doit avoir au moins 4 Characthéres ." required>
              
            </div>
          </div>
          <div class="form-group">
		  
            <label for="exampleInputEmail1">prenom</label>
            <input class="form-control" name="prenom" type="text" aria-describedby="nameHelp" value="<?PHP echo $prenom ?>" pattern="[A-Za-z]{4,}" title="Ce champ doit avoir au moins 4 Characthéres ." required>
          </div>
          <div class="form-group">
            <div class="form-row">
              
                <label for="exampleInputPassword1">email</label>
                <input class="form-control" name="email" type="text" aria-describedby="nameHelp" value="<?PHP echo $email ?>"  required>
              
			  </div>
			  <div class="form-row">
              
                <label for="exampleConfirmPassword">numTel</label>
                <input class="form-control" name="numTel" type="text" value="<?PHP echo $numTel ?>"  pattern="[0-9]{8}" title="Ce champ doit avoir 8 chiffres ." required>
              </div>
			  <div class="form-row">
              
                <label for="exampleConfirmPassword">Login</label>
                <input class="form-control" name="userName" type="text" placeholder="" value="<?PHP echo $userName ?>"  required >
              </div>
			  <label for="exampleInputPassword1">passeword</label>
                <input class="form-control" name="mdp" type="text"  value="<?PHP echo $mdp ?>"  required>
              
			  </div>
            </div>
          </div>
          <input class="form-control" type="submit" name="modifier" value="modifier">
		  <input type="hidden" name="referance_ini" value="<?PHP echo $_GET['cin'];?>"></td>


        </form>
       
      </div>
    </div>
      
    </div>

	<?php include 'footer.php' ; ?>
    