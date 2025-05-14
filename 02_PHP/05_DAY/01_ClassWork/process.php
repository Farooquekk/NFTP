<?php 

// echo "<pre>";
// print_r($_GET);
// echo "</pre>";

// $email =  $_GET[ 'email' ];

// echo "Welcom ".$_GET[ 'name' ];


$email =  $_POST[ 'email' ];
$password = $_POST[ 'password' ];
$name = $_POST[ 'name' ];
$age = $_POST['age'];

echo($age);


if( strlen($email) == 0  || strlen($password) == 0 || strlen($name) == 0 ){
    // echo "redirect in process";
       header(header: 'Location:index.php?error=1');

}else{
    
    if( $email == "naeem@gmail.com" && $password == "1234567" ){
        echo "Welcome ".$name;
    }else{
        //echo "Email or password may be incorrect";
        header('Location:index.php?error=2');

    }


}






// if( strlen()

// )




// echo "<pre>";
// print_r($_POST);
// echo "</pre>";


// echo "Welcome ".$_POST[ 'name' ];

?>

