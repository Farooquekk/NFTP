<?php 
session_start();

$_SESSION['name'] = "Naeem";

echo "Welcome ". $_SESSION[ 'name' ];



?>
<br>
<a href="profile.php">Profile</a>
<br>
<a href="edit.php">Edit Profile</a>
