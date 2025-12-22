<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: contact.php");
    exit;
}

$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$message = trim($_POST["message"]);

if (!$name || !$email || !$message) {
    die("All fields are required.");
}

// CHANGE THIS TO YOUR EMAIL
$to = "sohamthummar04@gmail.com";
$subject = "New Contact Message from Portfolio";

$body = "
Name: $name
Email: $email

Message:
$message
";

$headers = "From: $email";

if (mail($to, $subject, $body, $headers)) {
    header("Location: contact.php?success=1");
} else {
    echo "Failed to send message. Please try again later.";
}
