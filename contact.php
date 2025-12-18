<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact | Soham Thummar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include "includes/nav.php"; ?>

<section id="contact-page" style="padding:120px 10% 80px; max-width:900px;">

    <h1 style="font-size:60px; margin-bottom:20px;">
        CONTACT
    </h1>

    <p style="color:#7c7c7c; max-width:650px; margin-bottom:50px;">
        Have a project, idea, or collaboration in mind?  
        Send me a message — I’ll get back to you.
    </p>

    <form action="send-mail.php" method="POST" class="contact-form">

        <input type="text" name="name" placeholder="Your Name" required>

        <input type="email" name="email" placeholder="Your Email" required>

        <textarea name="message" rows="6" placeholder="Your Message" required></textarea>

        <button type="submit" class="btn-solid">
            Send Message
        </button>

    </form>

</section>

<?php include "includes/footer.php"; ?>

</body>
</html>
