<?php
session_start();
unset($_SESSION['logged_user_email']);
unset($_SESSION['logged_user_password']);
unset($_SESSION['logged_user_name']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Logout</title>
    <style>
    body {
        height: 100vh;
        width: 100vw;
        background-color: skyblue;
        box-sizing: border-box;
        text-align: center;
    }
    h1 {
        font-size: 52px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        text-transform: uppercase;
        text-decoration: underline;
        margin-top: 15%;
        color: black;
    }
    a {
        margin-top: 25px;
        font-size: 20px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        text-transform: uppercase;
        text-decoration: none;
        color: white;
        background-color: black;
        padding: 10px 20px;
        border-radius: 5px;
        display: inline-block;
    }
</style>

</head>
<body>
    <h1>You have been logged out successfully.</h1>
    <a href="login.php">Login Again</a>
</body>
</html>
