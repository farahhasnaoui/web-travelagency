<?PHP



include "../../entities/article.php";
include "../../core/articleC.php";


if (isset($_POST['date_a']) and isset($_POST['titre']) and isset($_POST['editor1']) ){
    echo 'here i am';



    $a1=new article($_POST['date_a'],$_POST['titre'],$_POST['editor1']);

    echo 'here i am 1';

    $a1C=new articleC();
    $a1C->ajouterarticle($a1);
    header('Location: about.php');

}else{
    echo "vérifier les champs";
}

?>
