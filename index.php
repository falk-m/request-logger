<?php

$data = [
    "REQUEST_METHOD" => $_SERVER['REQUEST_METHOD'] ?? "",
    "URL" => $_SERVER["REQUEST_URI"] ?? "",
    "GET" => $_GET ?? [],
    "POST" => $_POST ?? [],
];

$logfile = implode(DIRECTORY_SEPARATOR, [__dir__, "log", date("Y-m-d") . ".log"]);

$content = date("c") . " " . json_encode($data);
$result = file_put_contents($logfile, $content, FILE_APPEND);

if (!$result) {
    http_response_code(500);
    echo "500 - Server Internal Error";
    exit;
}

echo "200 - OK";
