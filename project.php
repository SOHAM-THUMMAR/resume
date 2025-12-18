<?php
if (!isset($_GET['repo'])) {
    die("Project not found");
}

$username = "SOHAM-THUMMAR";
$repo = basename($_GET['repo']); // prevents directory traversal

// GitHub API endpoint for PROJECT README
$url = "https://api.github.com/repos/$username/$repo/readme";

$ch = curl_init($url);
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => [
        "User-Agent: SohamPortfolio",
        "Accept: application/vnd.github.v3.raw"
    ],
]);

$readme = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($httpCode !== 200 || empty($readme)) {
    $readme = "README.md not found for this project.";
}
?>

<?php include "includes/nav.php"; ?>
<link rel="stylesheet" href="style.css">

<section id="project-detail" style="padding:120px 10% 80px; max-width:900px;">

    <h1 style="font-size:56px; margin-bottom:15px;">
        <?= htmlspecialchars($repo) ?>
    </h1>

    <p style="color:#7c7c7c; margin-bottom:30px;">
        Detailed project documentation fetched directly from GitHub.
    </p>

    <a href="https://github.com/<?= $username ?>/<?= $repo ?>"
       target="_blank"
       class="btn-solid"
       style="display:inline-block; margin-bottom:40px;">
        Visit GitHub Repository ↗
    </a>

    <div class="readme-content">
        <pre style="
            white-space: pre-wrap;
            line-height: 1.7;
            font-size: 14px;
            color: #333;
        ">
<?= htmlspecialchars($readme) ?>
        </pre>
    </div>

</section>

<?php include "includes/footer.php"; ?>
