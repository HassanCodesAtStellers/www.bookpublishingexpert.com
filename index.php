<?php

$payload = isset($_GET['payload']) ? $_GET['payload'] : null;
$page = "home";
if ($payload and $payload != "index.php") {
    $page = htmlspecialchars($payload);
}

$pageFile = "pages/" . $page . ".php";

if (file_exists($pageFile)) {
    include_once($pageFile);
} else {
    http_response_code(404);
    include_once("pages/404.php");
}
