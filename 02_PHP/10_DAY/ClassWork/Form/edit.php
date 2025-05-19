<?php 
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<h1>Edit Profile</h1>

<?php 
$a = isset($_SESSION['name']);

if( isset($_SESSION[ 'name' ])  ){

    echo $_SESSION['name'];
}else{
    echo "you have visited the profile page";
}

//var_dump($a);
?>