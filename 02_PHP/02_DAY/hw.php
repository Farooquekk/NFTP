<?php

$iftarArray = array(

    "fruits" => array("Melon","Dates","Apple","Banana"),
    "food" => array("Biryani","Samosa","ChannaChat"),
    "drinks" => array("Water","Jameshirin","QuizMilk","SliceJuice"),
);

// var_dump($iftarArray);

print($iftarArray["fruits"][0]);
print($iftarArray["drinks"][0]);
// print_r($iftarArray);

// $newIftarArray = array_push($iftarArray,"meatItems");
$iftarArray["meatItems"] = array();

print_r($iftarArray);
$iftarArray["meatItems"][0]="ChickenTikka";
$iftarArray["meatItems"][1]="BeefKabab";
$iftarArray["meatItems"][2]="GolaKabab";

// print_r($iftarArray);
// var_dump($iftarArray);

var_dump(array_pop($iftarArray,"meetItems"));






?>