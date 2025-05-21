<?php
session_start();
echo "<h1>Thank you for your purchase! Mr/Mrs {$_SESSION['logged_user_name']}</h1>";
echo "<h2>Your order has been placed successfully.</h2>";
unset($_SESSION['cart']);
// session_destroy();
header("Location: dashboard.php");
exit;
?>
