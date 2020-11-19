<?php
phpinfo();

$pdo = null;

try {
    $pdo = new PDO('mysql:host=mysql;dbname=cursoifes', 'root', 'root');
} catch (PDOException $e) {
    print $e->getMessage();
    die();
}

var_dump($pdo);