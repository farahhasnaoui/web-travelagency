

<?PHP
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'payment/vendor/autoload.php';


require_once ('payment/vendor/autoload.php');
require_once ('payment/config/db.php');
require_once ('payment/lib/pdo_db.php');
require_once ('payment/models/Customer.php');
require_once ('payment/models/Transaction.php');

include "../../entities/Utilisateur.php";
include "../../core/UtilisateurC.php";

if (isset($_POST['cin']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['numTel']) && isset($_POST['userName']) && isset($_POST['mdp'])){
    
    $user1=new utilisateur($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['numTel'],$_POST['userName'],$_POST['mdp']);

    $user1C=new UtilisateurC();

    $user1C->ajouterUser($user1);
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth = 1;                                   // Enable SMTP authentication
    $mail->Username = 'farah.hasnaoui22@gmail.com';                     // SMTP username
    $mail->Password = 'kenzafarah';                               // SMTP password
    $mail->SMTPSecure="ssl";
       // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('farah.hasnaoui22@gmail.com','admin Planete tours');
    $mail->addAddress($email);     // Add a recipient





    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Resrvation effectuee';
    $mail->Body = 'votre payement a été effectué avec <b>succes!</b> <br> Merci pour votre confiance. ';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
    header('Location: ../loginn.php');
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}




//redirect to success

    header('Location: loginn.php');
    
}else{
    echo"verifier les champs";
}
//*/

?>