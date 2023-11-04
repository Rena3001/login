<?php
include_once './connect.php';
session_start();

if (!isset($_SESSION['email'])) {
    header('Location: http://localhost/login/login.php');
    exit;
}

$email = $_SESSION['email'];

$getUsers = $conn->prepare("SELECT * FROM user WHERE email=?");
$getUsers->execute([$email]);
$user = $getUsers->fetch(PDO::FETCH_ASSOC);

if ($user) {
    $full_name = $user['full_name'];
} else {
    // Handle the case where the user is not found in the database.
    // You might want to redirect or display an error message.
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Salam <?=$full_name?>
</body>
</html>
