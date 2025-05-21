<?php
session_start();


if (!isset($_POST['email']) || !isset($_POST['password'])) {
    header('Location:first.php?error=error1');
    
}


$_SESSION['email'] = $_POST['email'];
$_SESSION['password'] = $_POST['password'];

// echo $_SESSION['email'];
// echo $_SESSION['password'];

header("Location: forth.php");
exit;
?>
