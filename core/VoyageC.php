<?PHP
include "../../config.php"; 
class VoyageC {
	function ajouterVoyage($voyage){
		$sql="insert into voyage  (idVo,airline,lieu_aller,lieu_retour,description,nom_hotel,prix,date_aller,date_retour,image,voy_places) values 
(:idVo, :airline,:lieu_aller,:lieu_retour,:description,:nom_hotel,:prix,:date_aller,:date_retour,:image,:voy_places)";
		$db = config::getConnexion();
		try{ 
        $req=$db->prepare($sql);
        $idVo=$voyage->getIdVo();
        $airline=$voyage->getAirline();
        $lieu_aller=$voyage->getLieu_aller();
        $lieu_retour=$voyage->getLieu_retour();
        $description=$voyage->getDescription();
        $nom_hotel=$voyage->getNom_hotel();
        $prix=$voyage->getPrix();
        $date_aller=$voyage->getDate_aller();
        $date_retour=$voyage->getDate_retour(); 
        $image=$voyage->getImage();
         $voy_places=$voyage->getVoy_places();

        
        //lier variable => paramètre 
        $req->bindValue(':idVo',$idVo); 
		$req->bindValue(':airline',$airline);
		$req->bindValue(':lieu_aller',$lieu_aller);
		$req->bindValue(':lieu_retour',$lieu_retour);
		$req->bindValue(':description',$description);
		$req->bindValue(':nom_hotel',$nom_hotel);
		$req->bindValue(':prix',$prix);  
		$req->bindValue(':date_aller',$date_aller);
		$req->bindValue(':date_retour',$date_retour); 
		$req->bindValue(':image',$image); 
		$req->bindValue(':voy_places',$voy_places); 
		
		
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function afficherVoyages(){
		$sql="SElECT * From voyage ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerVoyage($idVo){
		$sql="DELETE FROM voyage where idVo= :idVo";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idVo',$idVo);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierVoyage($voyage,$idVo){
		$sql="UPDATE voyage SET idVo=:idVoo, airline=:airline,lieu_aller=:lieu_aller,lieu_retour=:lieu_retour,description=:description,nom_hotel=:nom_hotel,prix=:prix,date_aller=:date_aller,date_retour=:date_retour,image=:image,voy_places=:voy_places WHERE idVo=:idVo";
		$db = config::getConnexion();
try{

        $req=$db->prepare($sql);
		$idVoo=$voyage->getIdVo();
        $airline=$voyage->getAirline();
        $lieu_aller=$voyage->getLieu_aller();
        $lieu_retour=$voyage->getLieu_retour();
        $description=$voyage->getDescription();
        $nom_hotel=$voyage->getNom_hotel();
        $prix=$voyage->getPrix();
        $date_aller=$voyage->getDate_aller();
        $date_retour=$voyage->getDate_retour();
        $image=$voyage->getImage();
         $voy_places=$voyage->getVoy_places();
		$datas = array(':idVoo'=>$idVoo, ':idVo'=>$idVo, ':airline'=>$airline,':lieu_aller'=>$lieu_aller,':lieu_retour'=>$lieu_retour,':description'=>$description, ':nom_hotel'=>$nom_hotel,':prix'=>$prix,':date_aller'=>$date_aller,':date_retour'=>$date_retour,':image'=>$image,':voy_places'=>$voy_places);
		//lier variable => paramètre

		$req->bindValue(':idVoo',$idVoo);
	    $req->bindValue(':idVo',$idVo);
		$req->bindValue(':airline',$airline);
		$req->bindValue(':lieu_aller',$lieu_aller);
		$req->bindValue(':lieu_retour',$lieu_retour);
		$req->bindValue(':description',$description);
		$req->bindValue(':nom_hotel',$nom_hotel);
		$req->bindValue(':prix',$prix);  
		$req->bindValue(':date_aller',$date_aller);
		$req->bindValue(':date_retour',$date_retour); 
		$req->bindValue(':image',$image); 
			$req->bindValue(':voy_places',$voy_places); 
		
		
            $s=$req->execute(); 
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererVoyage($idVo){
		$sql="SELECT * from voyage where idVo=$idVo";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste; 
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function rechercherListevoyages($lieu_retour){
		$sql="SELECT * from voyage
    where lieu_retour LIKE '%$lieu_retour%'"; 
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function afficherVoyagesdecroissant(){
		$sql="SElECT * From voyage ORDER BY prix DESC ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function afficherVoyagescroissant(){
		$sql="SElECT * From voyage ORDER BY prix ASC ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function rechercherprixmin(){
		$sql="SELECT min(prix) as min from voyage   "; 

    
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function rechercherprixmax(){
		$sql="SELECT max(prix) as max from voyage  "; 
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	} 
	function updateVoyageViews($idVo){
		$sql=" UPDATE voyage Set views=views+1  where idVo=$idVo";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste; 
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function recherchervoyagedate($date_retour){ 
		$sql="SELECT * from voyage
    where    date_retour=$date_retour"; 
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