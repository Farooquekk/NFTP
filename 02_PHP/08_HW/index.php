
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marksheet Generator</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: lightgoldenrodyellow;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            font-size: 25px;
            background-color: black;
        }
        .container {
            background-color: lightblue;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }
        .container input, .container button {
            padding: 10px;
            margin: 10px;
            font-size: 18px;
        }
        button {
            background-color: black;
            color: white;
            border: none;
            border-radius: 5px;
        }
        button:hover {
            background-color: wheat;
            color: black;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Enter Number of Subjects</h2>
        <form action="enter_subjects.php" method="get">
            <input type="number" name="num_subjects" required min="1" placeholder="Enter Number of Subjects">
            <button type="submit">Next</button>
        </form>
    </div>
</body>
</html>
