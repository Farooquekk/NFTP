<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form div{
            margin-bottom: 5px;
        }
        label{
            
            width: 110px;
            display: inline-block;
            text-align: right;
            margin-right: 5px;
        }
        form{
            background-color: lightseagreen;
            width: 300px;

            padding-bottom: 10px;
        }
        form h1{
            color: #fff;
            text-align: center;
        }
        .error{
            font-weight: bold;
            color: red;
            display: block;
            text-align: center;
        }
    </style>
</head>
<body>  
    <form action="process.php" method="post">
        <h1>Login form</h1>
       <?php
     $error =  $_GET[ 'error' ];
     if( $error == 1  ){
        ?>
                <span class="error">Please Fill All fileds</span>

        <?php
     }
     if( $error == 2  ){
        ?>
                <span class="error">Please entr correcr email &* password</span>

        <?php
     }

       ?>
        <div>
           <label for=""> Enter email </label>
           <input type="text" id="email" name="email" >
        </div>
        <div>
            <label for="">Enter password </label>
            <input type="password" id="password" name="password" >
        </div>
        <div>
            <label for="">Enter Name </label>
            <input type="text" id="name" name="name" >
        </div>
        <div>
            <label for="">Enter Age </label>
            <input type="number" id="age" name="age" >
        </div>
        <div>
            <label for="">&nbsp;</label>
            <input type="submit" value="Login">
            <input type="reset" value="Clear">
        </div>
    </form>
</body>
</html>