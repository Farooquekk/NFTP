<?php
session_start();


// if (!isset($_POST['email']) || !isset($_POST['password'])) {
//     header('Location:first.php?error=error1');
    
// }


$_SESSION['email1'] = $_POST['email'];
$_SESSION['password1'] = $_POST['password'];

// echo $_SESSION['email1'];
// echo $_SESSION['password1'];
// echo $_SESSION['password'];
// echo $_SESSION['email'];



if($_SESSION['email1']==$_SESSION['email'] && $_SESSION['password1']==$_SESSION['password']){
    // echo "Hello Ji";
     header('Location:third.php');
}
else{
    header('Location:forth.php?error=error1');
    exit;
}

exit;
?>
