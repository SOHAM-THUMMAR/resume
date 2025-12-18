<?php
$username = "SOHAM-THUMMAR";
$url = "https://api.github.com/users/$username/repos";

$ch = curl_init($url);
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => [
        "User-Agent: SohamPortfolio"
    ],
]);

$response = curl_exec($ch);
curl_close($ch);

$repos = json_decode($response, true);

if (!is_array($repos)) {
    echo "<p>Unable to load projects.</p>";
    return;
}
?>

<div class="projects-grid">
<?php foreach ($repos as $repo): ?>
    <?php if ($repo['fork']) continue; ?>

    <div class="project-card">
        <h2><?= htmlspecialchars($repo['name']) ?></h2>

        <p>
        <?= $repo['description']
            ? htmlspecialchars($repo['description'])
            : "no descriptions found." ?>
        </p>

        <div class="project-actions">
            <a href="project.php?repo=<?= urlencode($repo['name']) ?>" class="btn-outline">
                Read More
            </a>

            <a href="<?= htmlspecialchars($repo['html_url']) ?>" target="_blank" class="btn-solid" style="color:#fff;">
                GitHub ↗
            </a>
        </div>
    </div>
<?php endforeach; ?>
</div>
