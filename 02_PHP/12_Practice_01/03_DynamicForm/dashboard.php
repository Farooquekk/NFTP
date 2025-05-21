<?php
session_start();

if (!isset($_SESSION['logged_user_email'])) {
    header("Location: login.php?error=error2");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
    body {
        height: 100vh;
        width: 100vw;
        background-color: skyblue;
        box-sizing: border-box;
    }
    h1 {
        text-align: center;
        font-size: 50px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        text-transform: uppercase;
        text-decoration: underline;
        
    }
    .container {
        width: 55%;
        height: 50%;
        margin: auto;
        margin-top: 5%;
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px black;
        text-align: center;
    }
    .profile {
        width: 50%;
        margin: auto;
        margin-top: 6%;
        background-color: yellowgreen;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px black;
        text-align: center;
    }
    .container .profile h2 {
        font-size: 25px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        text-transform: uppercase;
        margin: 10px 0;
        text-decoration: wavy underline;
    }
    .container .profile h3 {
        font-size: 20px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        text-transform: uppercase;
        margin: 10px 0;
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
    <h1>Welcome, to the Dashboard!!!</h1>
    <div class="container">
        <div class="profile">
            <h2>Your Profile</h2>
            <h3>Name: <?php echo $_SESSION['logged_user_name']; ?> </h3>
            <h3>Email: <?php echo $_SESSION['logged_user_email']; ?></h3>
            <h3>Password: <?php echo $_SESSION['logged_user_password']; ?></h3>
        </div>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
