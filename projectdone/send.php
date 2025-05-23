<?php
// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

// Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                       // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                        // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                    // Enable SMTP authentication
    $mail->Username   = 'ashrafulakash467@gmail.com';             // SMTP username
    $mail->Password   = 'tyhzrmdzghtvaqfe';                      // SMTP password (use App Password)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;             // Enable implicit TLS encryption
    $mail->Port       = 465;                                     // TCP port to connect to

    // Recipients
    $mail->setFrom('ashrafulakash467@gmail.com', 'EasyShop');
    $mail->addAddress('ashraful30299@gmail.com', 'User');        // Add a recipient

    // Content
    $mail->isHTML(true);                                        // Set email format to HTML
    $mail->Subject = 'EasyShop Order';
    $mail->Body    = 'Thank You for Your Order<br>EasyShop Team';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
}
?>
