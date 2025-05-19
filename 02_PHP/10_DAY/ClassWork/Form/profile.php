<?php 
session_start();
echo $_SESSION[ 'name' ];


$name = "Welcome";




unset($_SESSION[ 'name' ]);


?>
<a href="edit.php">Edit Profile</a>