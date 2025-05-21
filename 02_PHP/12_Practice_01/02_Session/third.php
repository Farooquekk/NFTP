<?php
session_start();

if (!isset($_SESSION['email1']) || !isset($_SESSION['password1'])) {
    header("Location: forth.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dash Board</title>
    <style>
        body{
            height: 100vh;
            width: 100vw;
            background-color: skyblue;
            box-sizing: border-box;
        }
        h1{
            text-align: center;
            font-size: 50px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-transform: uppercase;
            text-decoration: underline;
        }
        .container{
            width: 63%;
            height: 50%;
            margin: auto;
            margin-top: 5%;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px black;
            text-align: center;
        }
        .profile{
            width: 80%;
            height: 60%;
            margin: auto;
            background-color: yellowgreen;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px black;
            text-align: center;
            

        }
        
        .container .profile h3{
            text-align: center;
            font-size: 25px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-transform: uppercase;
        }
        a{
            margin-top: 25px;
            text-align: center;
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
    
    <h1>Welcome to the Page</h1>
    <div class="container">
    <div class="profile">
    <h3 style="text-decoration: underline;">Your Profile</h3>    
    <h3> Email : <?php echo $_SESSION['email']; ?></h3>
    <h3> Password : <?php echo $_SESSION['password']; ?></h3>
    </div>
    <a href="sixth.php">Logout</a>
    </div>
    
</body>
</html>
