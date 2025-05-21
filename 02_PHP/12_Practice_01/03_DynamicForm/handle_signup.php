<?php
session_start();

if (!isset($_POST['email']) || !isset($_POST['password'])) {
    header("Location: signup.php?error=error1");
    exit;
}

$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];

if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = [];
}

foreach ($_SESSION['users'] as $user) {
    // print_r($user);
    if ($user['email'] === $email) {
        header("Location: signup.php?error=exists");
        exit;
    }
}

$_SESSION['users'][] = ['email' => $email, 'password' => $password,'name' => $name];
header("Location: signup.php?success=1");
exit;
?>