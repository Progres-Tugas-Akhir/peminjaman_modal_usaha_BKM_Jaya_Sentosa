<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
include "../k.php";
$id_survey=$_GET['id_survey'];
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
															
// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 1;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'fryza.rachmania@gmail.com';                     // SMTP username
    $mail->Password   = 'fryzarachmaniamashuri';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('fryza.rachmania@gmail.com', 'Admin BKM Jaya Sentosa');
  	$query = "SELECT * FROM tb_survey";
	$sql = mysqli_query($connect, $query);
	while ($data = mysqli_fetch_array($sql)) {
	$mail->addAddress($data['email'], 'Anggota');}    // Add a recipient

    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Hasil Survey Usaha';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error:' . $mail->ErrorInfo;
}

// <IfModule mod_rewrite.c>
// RewriteEngine on
// RewriteCond %{REQUEST_FILENAME} !-d
// RewriteCond %{REQUEST_FILENAME}.php -f
// RewriteRule ^(.*)$ $1.php
// </IfModule>