<?php
session_start();

if (!isset($_POST['email']) || !isset($_POST['password'])) {
    header("Location: login.php?error=invalid");
    exit;
}

$email = $_POST['email'];
$password = $_POST['password'];
$found = false;

if (isset($_SESSION['users'])) {
    foreach ($_SESSION['users'] as $user) {
        if ($user['email'] === $email && $user['password'] === $password) {
            $_SESSION['logged_user_email'] = $email;
            $_SESSION['logged_user_password'] = $password;
            $_SESSION['logged_user_name'] = $user['name'];
            $found = true;
            break;
        }
    }
}

if ($found) {
    header("Location: dashboard.php");
} else {
    header("Location: login.php?error=invalid");
}
exit;
?>