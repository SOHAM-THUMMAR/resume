<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

if (!function_exists('curl_init')) {
    die("cURL IS NOT ENABLED");
}

$ch = curl_init("https://api.github.com");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "User-Agent: Test"
]);

$res = curl_exec($ch);

if ($res === false) {
    echo "cURL ERROR: " . curl_error($ch);
} else {
    echo "cURL WORKS";
}

curl_close($ch);
