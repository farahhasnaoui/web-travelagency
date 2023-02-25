<?PHP
include "../../entities/Comment.php";
include "../../core/CommentC.php";
include "../../config.php"; 

if (isset($_GET["comment_id"])){ 

	$commentC=new CommentC();
	$commentC->supprimerComment($_GET["comment_id"]);
	echo "h";
	header('Location: voyages3.php');
}

?>