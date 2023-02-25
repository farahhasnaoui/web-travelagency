<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';


require_once ('vendor/autoload.php');
require_once ('config/db.php');
require_once ('lib/pdo_db.php');
require_once ('models/Customer.php');
require_once ('models/Transaction.php');
session_start();
$prix=10000;
$description=$_SESSION['produit'];
\Stripe\Stripe::setApiKey('sk_test_YC5bJxRvxW7RPgR7gnPzwjl800rTEXFDiE');

//Sanitize POST Array
$POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
$first_name = $POST['first_name'];
$last_name = $POST['last_name'];
$email = $POST['email'];
$token = $POST['stripeToken'];

// Create customer In stripe
$customer = \Stripe\Customer::create(array(
    "email" => $email ,
    "source" =>$token
));
echo"1111";
//charge Customer
$charge = \Stripe\Charge::create(array(
    "amount" => $prix
,
    "currency" => "usd",
    "description" => "payement en ligne" ,
    "customer" =>$customer->id
));

//Customer data
$customerData = [
    'id' =>$charge->customer,
    'first_name' => $first_name,
    'last_name' => $last_name,
    'email' => $email
];

//Instantiate Customer
$customer = new Customer();

//add customer to DB
$customer->addCustomer($customerData);



//Transaction data
$transactionData = ['id' =>$charge->id ,
    'customer_id' => $charge->customer ,
    'product' => $charge->description ,
    'amount' => $charge->amount ,
    'currency' => $charge->currency ,
    'status' => $charge->status

];

//Instantiate Transaction
$transaction = new Transaction();

//add transaction to DB
$transaction->addTransaction($transactionData);






// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth = 1;                                   // Enable SMTP authentication
    $mail->Username = 'testmailing07@gmail.com';                     // SMTP username
    $mail->Password = 'Azerty123.';                               // SMTP password
    $mail->SMTPSecure="ssl";
       // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('testmailing07@gmail.com','admin Planete tours');
    $mail->addAddress($email);     // Add a recipient





    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Resrvation effectuee';
    $mail->Body = 'votre payement a été effectué avec <b>succes!</b> <br> Merci pour votre confiance. ';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
    header('Location: ../index.php');
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}




//redirect to success









?>
