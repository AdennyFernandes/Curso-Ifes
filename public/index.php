<?php
try {
$conn = new PDO('mysql:host=localhost;dbname=cursoifes', 
$username = 'root',
$password = 'root');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
echo 'ERROR: ' . $e->getMessage();
}
?>