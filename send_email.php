<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; 
    $mail->SMTPAuth = true;
    $mail->Username = 'pbkates1717@gmail.com'; 
    $mail->Password = 'n c a q u b i g k i i o d p z o'; 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom($_POST['email'], $_POST['name']);
    $mail->addAddress('pbkates1717@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = $_POST['subject'];
    $mail->Body = $_POST['message'];

    $mail->send();
    header('Location: contact.php?response=success');
} catch (Exception $e) {
    header('Location: contact.php?response=error');
}
exit();
