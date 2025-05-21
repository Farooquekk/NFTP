<?php


if(!isset($_POST['Name']) || !isset($_POST['Age'])){
    die("Invlid access. Please submit the form first.");
}

echo "<pre>";
print_r($_POST['Name']);
print_r($_POST['Age']);
echo "</pre>";


?>