<?php 
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if( !isset($_POST[ 'email' ]) ){
    header( 'Location:login.php?error=1' );
}

    $email       = $_POST[ 'email' ];
    $password    = $_POST[ 'password' ];
    $name = "Naeem";
 if( $email == "naeem@gmail.com"  && $password == "naeem123" ){
$_SESSION[ 'user' ] = $name;
   header('Location:main.php');
 }else{
    header( 'Location:login.php?error=2' );
 }


?>