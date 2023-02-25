<?PHP
include "../../entities/comment.php";
include "../../core/commentC.php";

include "../../core/VoyageC.php";
include "../../entities/Voyage.php";


	

	


	if (isset($_POST['sender_name']) and isset($_POST['comment'])  ){ 
	
		
$comment1=new comment($_POST['comment'],$_POST['sender_name']);

//Partie2 
/*
var_dump($employe1);
}
*/ 
//Partie3 

$comment1C=new CommentC();
$comment1C->ajouterComment($comment1); 





 

/*header('Location: voyagedetails3.php?idVo='.$voyid);*/
header('Location: voyages3.php'); 



	 
}else{
	echo "vérifier les champs";
}
	



//*/

?>

