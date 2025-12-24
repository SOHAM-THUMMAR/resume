<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$username = "SOHAM-THUMMAR";

$ch = curl_init("https://api.github.com/users/$username/repos");
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 15,
    CURLOPT_HTTPHEADER => [
        "User-Agent: SohamPortfolio"
    ],
]);

$response = curl_exec($ch);

if ($response === false) {
    die("ERROR: " . curl_error($ch));
}

curl_close($ch);

echo "<pre>";
echo htmlspecialchars($response);
echo "</pre>";
