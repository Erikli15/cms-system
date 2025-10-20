<?php 
return [
    "host" => $_ENV["DB_HOST"] ?? "localhost",
    "dbname" => $_ENV["DB_NAME"] ?? "cms_system",
    "username" => $_ENV["DB_USER"] ?? "root",
    "password" => $_ENV["DB_PASS"] ?? "",
    "charset" => "utf8mb4",
];
?>