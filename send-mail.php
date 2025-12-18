<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/PHPMailer/src/Exception.php';
require 'vendor/PHPMailer/src/PHPMailer.php';
require 'vendor/PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: contact.php");
    exit;
}

$name    = htmlspecialchars($_POST['name']);
$email   = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);

$mail = new PHPMailer(true);

try {
    // SMTP SETTINGS
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'sohamthummar04@gmail.com';   // 🔴 YOUR EMAIL
    $mail->Password   = 'ykyr fain qkdc ocdw';     // 🔴 APP PASSWORD
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // EMAIL HEADERS
    $mail->setFrom('yourgmail@gmail.com', 'Portfolio Contact');
    $mail->addAddress('yourgmail@gmail.com'); // receive mail here
    $mail->addReplyTo($email, $name);

    // EMAIL CONTENT
    $mail->isHTML(true);
    $mail->Subject = "New Contact Message from $name";
    $mail->Body = "
        <h2>New Message from Portfolio</h2>
        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Message:</strong><br>{$message}</p>
    ";

    $mail->send();

    echo "<script>
        alert('Message sent successfully!');
        window.location.href='contact.php';
    </script>";

} catch (Exception $e) {
    echo "<script>
        alert('Message failed. Please try again later.');
        window.location.href='contact.php';
    </script>";
}
