<?php
include_once './connect.php';
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

if (empty($email) || empty($password)) {
    header('Location: ./index.php');
    echo "Please fill in all the fields.";
    exit;
}

$getUser = $conn->prepare("SELECT * FROM users WHERE email = ?");
$getUser->execute([$email]);
$user = $getUser->fetch(PDO::FETCH_ASSOC);

if ($user) {
    // Verify the password using password_verify
    if (password_verify($password, $user['password'])) {
        $_SESSION['email'] = $email;
        header('Location: ./index.php');
    } else {
        echo "Invalid password. Please try again.";
    }
} else {
    echo "Account not found. Please create an account.";
}
?>