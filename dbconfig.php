<?php
$host = "localhost";
$dbname = "online_bookstore";
$username = "root";   
$password = "";       

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected to database!";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
