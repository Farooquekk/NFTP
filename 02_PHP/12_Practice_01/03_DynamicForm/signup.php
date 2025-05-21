<?php
session_start(); 
if(isset($_GET['error'])){
    if($_GET['error']=='error1'){
        echo "<h3 style='color:red'>Please enter your email and password</h3>";
    }
    elseif($_GET['error']=='exists'){
        echo "<h3 style='color:red'>User already registered. Please login.</h3>";
    }
}
if(isset($_GET['success'])){
    echo "<h3 style='color:green'>Registration successful. You can now login.</h3>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
<style>
    body {
        height: 100vh;
        width: 100vw;
        background-color: burlywood;
        box-sizing: border-box;
    }
    .container {
        width: 43%;
        height: 75%;
        margin: auto;
        margin-top: 10%;
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px black;
        text-align: center;
    }
    .container h1 {
        font-size: 30px;
        text-transform: uppercase;
        text-decoration: underline;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    form label, input {
        font-size: 18px;
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
    <h1>Sign Up Form</h1>
    <form action="handle_signup.php" method="POST">
        <label>Name</label><br>
        <input type="text" name="name" required><br><br>
        <label>Email</label><br>
        <input type="email" name="email" required><br><br>
        <label>Password</label><br>
        <input type="password" name="password" required><br><br>
        <button type="submit">Sign Up</button>
    </form>
    <br>
    <a href="login.php">Already have an account? Login</a>
    </div>
</body>
</html>
