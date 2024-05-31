<?php
// Import PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load PHPMailer
require 'vendor/autoload.php';
require 'PHPMailerAutoload.php';

// Create a new PHPMailer instance
$mail = new PHPMailer();

// Set up your email server settings
$mail->isSMTP();
$mail->Host = 'localhost';
$mail->SMTPAuth = true;
$mail->Username = 'adegbolajohn1@gmail.com';
$mail->Password = 'Adegbola2019.';
$mail->SMTPSecure = 'tls'; // or 'sl'
$mail->Port = 587; // or 465

// Set up the email content
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $number = $_POST['number'];
  $message = $_POST['message'];

$mail->setFrom($email, $name);
$mail->addAddress('adegbolajohn1@gmail.com', 'John'); // recipient email
$mail->Subject = 'Contact Form Submission';
$mail->Body = "<p>Name: $name</p><p>Sender's Number: $number</p><p>Email: $email</p><p>Message: $message</p>";

// Send the email
if (!$mail->send()) {
    echo 'Error: '. $mail->ErrorInfo;
} else {
    echo 'Email sent successfully!';
}
?>
