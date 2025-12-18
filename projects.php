<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Projects | Soham Thummar</title>

    <!-- Main CSS -->
    <link rel="stylesheet" href="style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php include "includes/nav.php"; ?>

<!-- =====================
     PROJECTS PAGE
===================== -->
<section id="projects-page" style="padding:120px 10% 80px;">

    <div class="projects-header" style="margin-bottom:60px;">
        <h1 style="font-size:60px; line-height:1.2;">
            PROJECTS
        </h1>

        <p style="margin-top:20px; max-width:700px; color:#7c7c7c; font-size:16px;">
            A collection of my work in <b>AI, Machine Learning, IoT, Embedded Systems</b>
            and full-stack development.  
            Each project focuses on real-world problem solving and practical implementation.
        </p>
    </div>

    <!-- PROJECT GRID -->
    <?php include "github-projects.php"; ?>

</section>

<?php include "includes/footer.php"; ?>

</body>
</html>
