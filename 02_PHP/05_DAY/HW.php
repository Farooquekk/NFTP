<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marksheet Generator</title>
    
    <style>
        body{
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: lightgoldenrodyellow;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            font-weight: bold;
            font-size: 25px; 



        }
        .container{
            width: 50%;
            height:30%;
            text-align: center;
            background-color: lightblue;
            border-radius: 10px;
            padding: 20px;
            letter-spacing: 2px;
            word-spacing: 12px;
        }
        .container input{
            width: 200px;
            height: 30px;
            border: 2px;
            border-radius: 7px;
            padding: 5px;
           
        }
        .container button{
            width: 50px;
            height: 28px;
            border: 2px;
            background-color:  black;
            color: white;
           border-radius: 5px;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;

        }
        .container button:hover{
            background-color: wheat;
            color:black;
            
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Enter Number of Subjects</h2>
        <form action="server.php" method="get">
            <input type="number" name="num_subjects" required min="1" placeholder="Enter Number of Subjs">
            <button type="submit">Next</button>
        </form>
    </div>
</body>
</html>
