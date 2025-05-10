<?php // Operators

// 1. Arithmatic

// $a = 1;
// print($a);
// echo("<br>");
// $a+2;
// echo("<br>");
// echo($a+1);
// echo("<br>");
// echo ($a);
// echo("<br>");

// // i. unnary operator

// $i=1;
// echo("<br>");
// echo($i);
// echo("<br>");
// echo($i++);
// echo("<br>");
// echo(++$i);
// echo("<br>");
// echo(++$i);
// echo("<br>");
// echo($i);


// $a = 3;
// $b = 5;

// $result = ++$a+$b++;
// echo($a);
// echo("<br>");
// echo($b);
// echo("<br>");

// echo($result);
// echo("<br>");

// $a = 67;
// echo($a);
// echo("<br>");
// $a-=4;
// echo($a);
// echo("<br>");


// 
// echo(2+3+8);
// echo("<br>");
// echo(2+3+8-10);
// echo("<br>");
// echo(2+2*5);
// echo("<br>");
// $a=12;
// $b="hello";
// echo($a+$b);

// comparision operator
$c=2==32;
var_dump($c);
echo("<br>");
$c=1=="1";

// === strict checking type+amount
echo("<br>");
var_dump(1==="1");
echo("<br>");
var_dump($c);
echo("<br>");
echo(ord('f'));
echo("<br>");
echo(chr(104));

// Logical Operator

$a= true && false;
var_dump($a);
$a =  true && true;
var_dump($a);

// concatination operator --> . always used with string in php

$name = "Naeem";
$name.='Mr';
echo($name);

$time = 15;
echo("Good Morning");
echo("Good Evening");
// echo true?"a":"b"
echo $time?"a":"b";



die();
?>