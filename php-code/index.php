<?php

require_once "vendor/autoload.php";

$dotenv = new \Dotenv\Dotenv(__DIR__);
$dotenv->load();

try {
    $pdo = new PDO(sprintf('mysql:host=%s;dbname=%s',
        $_ENV['MYSQL_HOST'],
        $_ENV['MYSQL_DATABASE']),
        $_ENV['MYSQL_USER'],
        $_ENV['MYSQL_PASSWORD']
    );
} catch (PDOException $exception){
    var_dump($exception->getMessage()); die();
}

echo "DB connect well :)";
