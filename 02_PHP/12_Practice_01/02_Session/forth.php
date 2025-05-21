<?php
session_start(); 
if(isset($_GET['error'])){
    if($_GET['error']=='error1'){
        echo "<h3 style='color:red' 'text-align=center'>Please enter your email and password</h3>";
    }
    else if($_GET['error']=='error2'){
        echo "<h3 style='color:red'>Please login first</h3>";

    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
<style>
        body{
            height: 100vh;
            width: 100vw;
            background-color: burlywood;
            box-sizing: border-box;;
        }
        .container{
            width: 43%;
            height: 56%;
            margin: auto;
            margin-top: 10%;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px black;
            text-align: center;
        }
        .container h1{
            font-size: 40px;
            text-transform: uppercase;
            text-decoration: underline;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        form label,input{
            font-size: 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font: bolder;
            padding: 2px;
            margin: 5px;
            
            }
            input{
                border-radius: 5px;
            border :2px solid black;
            width: 300px;
            }
            label{
                font-weight: 700;
            }
            button{
                font-size: 20px;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                font: bolder;
                padding: 5px;
                margin: 5px;
                background-color: black;
                color: white;
                border-radius: 8px;
                border :1px solid black;
                cursor:pointer;
                text-transform: uppercase;

            }
        
    </style>

</head>
<body>

<div class="container">

<h1>Login Form</h1>

<pre>
<form action="fifth.php" method="POST">
<label for="email">Email  </label>
<input type="email" name="email" required>
<!-- <br>
<br> -->
<label for="password">Password  </label>
<input type="password" name="password" id="password" required>
<!-- <br>
<br> -->
<button type="submit">Submit</button>

</form>
</pre>
</div>
    
</body>
</html>