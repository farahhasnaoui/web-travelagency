<?PHP
include "../config1.php";
require_once ("../entities/circuit.php");
class circuitC {
function affichercircuit ($circuit){

		
		echo "lieu: ".$circuit->getlieu()."<br>";
		echo "lieu_d: ".$circuit->getlieu_d()."<br>";
		echo "lieu_a: ".$circuit->getlieu_a()."<br>";
		echo "date: ".$circuit->getdate()."<br>";
		echo "nom_circuit: ".$circuit->getnom_circuit()."<br>";
		echo "prix: ".$circuit->getprix()."<br>";
        echo "description: ".$circuit->getdescription()."<br>";
        echo "nb_place: ".$circuit->getnb_place()."<br>";
        echo "photo: ".$circuit->getphoto()."<br>";

	}
	
	function ajoutercircuits ($circuit){
		$sql="insert into circuit (lieu,lieu_d,lieu_a,date,nom_circuit,prix,description,nb_place,photo) values (:lieu,:lieu_d,:lieu_a,:date,:nom_circuit,:prix,:description,:nb_place,:photo)";
		$db = config::getConnexion();
		try{

        $req=$db->prepare($sql);
        
        $lieu=$circuit->getlieu();
        $lieu_d=$circuit->getlieu_d();
        $lieu_a=$circuit->getlieu_a();
        $date=$circuit->getdate();
        $nom_circuit=$circuit->getnom_circuit();
        $prix=$circuit->getprix();
        $description=$circuit->getdescription();
        $nb_place=$circuit->getnb_place();
        $photo=$circuit->getphoto();

        //lier variable => paramètre
        
		$req->bindValue(':lieu',$lieu);
		$req->bindValue(':lieu_d',$lieu_d);
		$req->bindValue(':lieu_a',$lieu_a);
		$req->bindValue(':date',$date);
		$req->bindValue(':nom_circuit',$nom_circuit);
		$req->bindValue(':prix',$prix);
        $req->bindValue(':description',$description);
        $req->bindValue(':nb_place',$nb_place);
        $req->bindValue(':photo',$photo);

            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function affichercircuits(){
		$sql="SElECT * From circuit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimercircuits($idCircuit){
		$sql="DELETE FROM circuit where idCircuit= :idCircuit";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idCircuit',$idCircuit);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    
    
    
   function modifiercircuit($circuit,$id){
		$sql="UPDATE circuit SET lieu=:lieu,lieu_d=:lieu_d,lieu_a=:lieu_a,date=:date,nom_circuit=:nom_circuit,prix=:prix,description=:description,nb_place=:nb_place,photo=:photo WHERE idCircuit=:idCircuit";
		$db = config::getConnexion();
try{

		$req=$db->prepare($sql);
        $lieu=$circuit->getLieu();
        $lieu_d=$circuit->getLieu_d();
        $lieu_a=$circuit->getLieu_a();
        $date=$circuit->getDate();
        $nom_circuit=$circuit->getNom_circuit();
        $prix=$circuit->getPrix();
        $description=$circuit->getDescription();
        $nb_place=$circuit->getNb_place();
        $photo=$circuit->getPhoto();
		$datas = array( ':lieu'=>$lieu, ':lieu_d'=>$lieu_d,':lieu_a'=>$lieu_a,':date'=>$date,':nom_circuit'=>$nom_circuit,':prix'=>$prix,':description'=>$description,':nb_place'=>$nb_place,':photo'=>$photo);
        //lier variable => paramètre
        $req->bindValue(':idCircuit',$id);
		$req->bindValue(':lieu',$lieu);
		$req->bindValue(':lieu_d',$lieu_d);
		$req->bindValue(':lieu_a',$lieu_a);
		$req->bindValue(':date',$date);
		$req->bindValue(':nom_circuit',$nom_circuit);
		$req->bindValue(':prix',$prix);
        $req->bindValue(':description',$description);
        $req->bindValue(':nb_place',$nb_place);
        $req->bindValue(':photo',$photo);

		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
    }
    
 

    function recuperercircuit($idCircuit){
		$sql="SELECT * from circuit where idCircuit=$idCircuit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }   
    
    function rechercherListecircuit($lieu){
		$sql="SELECT * from circuit where lieu LIKE '%$lieu%'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function tricroissant(){
		$sql="SElECT * From circuit order by prix";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

function tridecroissant(){
		$sql="SElECT * From circuit order by prix DESC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}





}
	?>