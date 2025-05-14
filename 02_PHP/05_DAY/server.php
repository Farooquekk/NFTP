<?php

$num_subjects = isset($_GET['num_subjects']) ? intval($_GET['num_subjects']) : 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Marks</title>
   <style>
        body{
            width: 100vw;
            height: auto;
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
            height:auto;
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
            margin: 10px;
        }
        .container button{
            width: 100px;
            height: 36px;
            border: 2px;
            background-color:  black;
            color: white;
            border-radius: 5px;
            font-size: 15px;
            font-weight: bold;
            margin: 6px;
            padding: 5px;
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
        <h2>Enter Subject Names and Marks</h2>
        <form action="server_2.php" method="post">
            <input type="hidden" name="num_subjects" value="<?php echo $num_subjects; ?>">
            
            <?php for ($i = 1; $i <= $num_subjects; $i++): ?>
                <div class="subject">
                    <input type="text" name="subject_names[]" placeholder="Subject Name" required>
                    <input type="number" name="marks[]" placeholder="Marks" required min="0" max="100">
                </div>
            <?php endfor; ?>
            
            <button type="submit">Generate </button>
        </form>
        
        <a href=".php"><button>Edit </button></a>
    </div>
</body>
</html>
