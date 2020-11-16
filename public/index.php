<?php
phpinfo();

$pdo = null;

try {
    $pdo = new PDO('mysql:host=mysql;dbname=cursoifes', 'MYSQL_PASSWORD', 'root', 'MYSQL_ROOT_PASSWORD', 'root');
} catch (PDOException $e) {
    print $e->getMessage();
    die();
}

var_dump($pdo);
echo "Glória à Deus";