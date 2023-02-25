


<?PHP
include "../../core/UtilsateurC.php";


$user1C=new UtilsateurC();
$listeUser=$user1C->afficherUser();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
    <tr>
        <td>Cin</td>
        <td>Nom</td>
        <td>Prenom</td>
        <td>email</td>
        <td>numTel</td>
        <td>userName</td>
        <td>mdp</td>
    </tr>

    <?PHP
    foreach($listeUser as $row){
        ?>
        <tr>
            <td><?PHP echo $row['cin']; ?></td>
            <td><?PHP echo $row['nom']; ?></td>
            <td><?PHP echo $row['prenom']; ?></td>
            <td><?PHP echo $row['email']; ?></td>
            <td><?PHP echo $row['numTel']; ?></td>
            <td><?PHP echo $row['userName']; ?></td>
            <td><?PHP echo $row['mdp']; ?></td>

        <?PHP
    }
    ?>
</table>


