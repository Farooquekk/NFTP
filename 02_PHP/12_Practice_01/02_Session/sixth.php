<?
session_start();

// echo $_SESSION['email1'];
// echo $_SESSION['password1'];
// echo $_SESSION['email'];
// echo $_SESSION['password'];

echo $_SESSION['email1'] = null;
echo $_SESSION['password1']=null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <style>
        body{
            height: 100vh;
            width: 100vw;
            background-color: skyblue;
            box-sizing: border-box;
            text-align: center;
        }
        h1{
            text-align: center;
            font-size: 50px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-transform: uppercase;
            text-decoration: underline;
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
    <h1>Logout Successfully </h1>
    <a href="forth.php">Login</a>
    
</body>
</html>