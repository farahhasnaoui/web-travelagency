<HTML>
<head>
</head>
<body>
    <?PHP
include "../entities/circuit.php";
include "../core/circuitC.php";

if (isset($_GET['id'])){
	$circuit1C=new circuitC();
    $result=$circuit1C->recuperercircuit($_GET["id"]);
	foreach($result as $row){
		$lieu=$row['lieu'];
		$lieu_d=$row['lieu_d'];
		$lieu_a=$row['lieu_a'];
    $date=$row['date'];
    $nom_circuit=$row['nom_circuit'];
    $prix=$row['prix'];
		$description=$row['description'];
		$nb_place=$row['nb_place'];
		$photo=$row['photo'];
  
?>
<meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="control.js"> </script>
<link rel="stylesheet" href="assets/css/ajouter.css">
<div class="container">  
  <form method="post" name="cc" id="contact">
    <h3>Modifier un circuit</h3>
    <h4>Modifier un circuit de la base de donner</h4>
      <fieldset>
      <input placeholder="lieu" type="text" name="lieu" value="<?PHP echo $lieu ?>"   >
    </fieldset>
    <fieldset>
      <input placeholder="lieu deaprt" type="text" name="lieu_d" value="<?PHP echo $lieu_d ?>"  >
    </fieldset>
    <fieldset>
      <input placeholder="lieu arrivee" type="text" name="lieu_a" value="<?PHP echo $lieu_a ?>" >
    </fieldset>
    <fieldset>
      <input placeholder="date" type="date" name="date" value="<?PHP echo $date ?>" >
    </fieldset>
    <fieldset>
      <input placeholder="nom du circuit " type="text" name="nom_circuit" value="<?PHP echo $nom_circuit ?>"  >
    </fieldset>
    <fieldset>
      <input placeholder="prix" type="number" name="prix" min="0" value="<?PHP echo $prix ?>">
    </fieldset>
    <fieldset>
      <textarea placeholder="description" tabindex="5" type="text" name="description" value="<?PHP echo $description ?>"  ><?PHP echo $description ?></textarea>
    </fieldset>
      <fieldset>
      <input placeholder="nombre de place" type="number" name="nb_place"min="0" value="<?PHP echo $nb_place ?>">
    </fieldset>
      <fieldset>
      <input placeholder="photo" type="file" name="photo" accept="image/png, image/jpeg" value="<?PHP echo $photo ?>" >
    </fieldset>
    <fieldset>
      <button onclick="cliick()" type="submit" name="modifier" value="modifier">Modifier</button>
      
     
    </fieldset>
    <fieldset>
 
<input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>"></td>

    </fieldset>
  </form>
  <form >
              <button  class="btn btn-warning" type="submit" formaction="afficherCircuit.php">Cancel</button>
              
           </form>
  
</div>
<?php
  }
}
if (isset($_POST['modifier'])){
	$circuit=new circuit($_POST['lieu'],$_POST['lieu_d'],$_POST['lieu_a'],$_POST['date'],$_POST['nom_circuit'],$_POST['prix'],$_POST['description'],$_POST['nb_place'],$_POST['photo']);

$circuit1C->modifiercircuit($circuit,$_POST['id_ini']);
	
	header('Location: afficherCircuit.php');
}
?>

</body>
</HTMl>