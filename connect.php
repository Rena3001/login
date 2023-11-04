<?php
$servername = "localhost";
$username = "root";
$password = "";
$baseName = "new baza";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$baseName", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //   echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}



?>