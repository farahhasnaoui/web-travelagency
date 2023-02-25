<?PHP
include 'header.php' ;
include "../../entities/produit.php";
include "../../core/produitC.php";
echo "vérifier les champs";
if (isset($_POST['Referance']) and isset($_POST['Nom']) and isset($_POST['Prix']) and isset($_POST['Code']) and isset($_POST['Quantite']) and isset($_POST['myimage'])){
	
$upload_image=$_FILES["myimage"]["name"];
$folder="image/";
$folder.=$upload_image;
$produit1=new produit($_POST['Referance'],$_POST['Nom'],$_POST['Prix'],$_POST['Code'],$folder,$_POST['Quantite'],$folder);

var_dump($produit1);

move_uploaded_file($_FILES["myimage"]["tmp_name"], "$folder".$_FILES["myimage"]["name"]);
$produit1C=new ProduitC();
$produit1C->ajouterProduit($produit1);

	
}else{
	echo "vérifier les champs";
}
//*/

?>