<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        body{
            background-color: lightblue;
            height: 100vh;
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
            
            color: white;
            font: bold 16px Arial;
        }
        form div{
            margin-bottom: 5px;
        }
        label{
            
            width: 60px;
            display: inline-block;
            text-align: right;
            margin-right: 5px;
        }
        
        
        
        .container{
            width: 300px;
            margin: auto;
            background-color: lightseagreen;
            padding: 10px;
            border-radius: 10px;
            text-align: center;
            
        }

        input{
            width: 70%;
            padding: 10px;
            margin: 5px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="submit"]{
            background-color: #333;
            color: white;
            cursor: pointer;
            margin-right: 22px;
            border-radius: 10px;
            width: 100px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Marks For Each Subject</h1>
<form action="process.php" method="POST">

<div>
<label for="">English</label>
    <input type="number" required min="0" max="100" name="english" >
</div>
<div>
<label for="">Math</label>
    <input type="number" required min="0" max="100" name="math" >
</div>
<div>
<label for="">Science</label>
    <input type="number" required min="0" max="100" name="science" >
</div>
<div>
<label for="">Computer</label>
    <input type="number" required min="0" max="100" name="computer" >
</div>
  
    <div>
    <label for="">&nbsp;</label>
    <input type="submit" value="Generate" > 
    </div>


</form>
</div>
    
</body>
</html>