<?php
session_start();
if (isset($_GET['error']) && $_GET['error'] == 'invalid') {
    echo "<h3 style='color:red'>Invalid credentials. Please try again.</h3>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
<style>
    body {
        height: 100vh;
        width: 100vw;
        background-color: burlywood;
        box-sizing: border-box;
    }
    .container {
        width: 43%;
        height: 70%;
        margin: auto;
        margin-top: 10%;
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px black;
        text-align: center;
    }
    .container h1 {
        font-size: 40px;
        text-transform: uppercase;
        text-decoration: underline;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    form label, input {
        font-size: 20px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight: bold;
        padding: 2px;
        
    }
    input {
        border-radius: 5px;
        border: 2px solid black;
        width: 300px;
        padding: 5px;
    }
    label {
        font-weight: 700;
        display: block;
       
    }
    button {
        font-size: 20px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight: bold;
        padding: 5px 15px;
        margin: 10px 0;
        background-color: black;
        color: white;
        border-radius: 8px;
        border: 1px solid black;
        cursor: pointer;
        text-transform: uppercase;
    }
    a {
            display: block;
            font-size: 22px;
            text-decoration: none;
            color: darkblue;
            font-weight: bold;
        }
</style>


</head>
<body>
    <div class="container">
    <h1>Login Form</h1>
    <form action="handle_login.php" method="POST">
        <label>Email</label><br>
        <input type="email" name="email" required><br><br>
        <label>Password</label><br>
        <input type="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
    <br>
    <a href="signup.php">Don't have an account? Sign up</a>
    </div>
</body>
</html>
