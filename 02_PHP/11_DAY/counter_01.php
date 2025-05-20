<?php

session_start();


$_SESSION['count']+= 1;
if(!isset($_SESSION)){
    $_SESSION['count'] = 0;
}
echo " You Visited the Page : Counter:".$_SESSION['count']. " times ";
?>
