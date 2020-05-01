<?php
/*Arithmetic operators in PHP
Operatos	Description
+		Add
-		Subtract
*		Multiply
/		Divide and return quotient
%		Divide and return modulus */
$num = $_POST['n'];
$num1 = $_POST['n1'];

$sum=$num + $num1;
echo "<h1> $num + $num1  = ". $sum. "</h1>";
$sub = $num - $num1;
echo "<h1> $num - $num1  = ". $sub. "</h1>";
$mul = $num * $num1;
echo "<h1> $num * $num1  = ". $mul. "</h1>";
$div = $num / $num1;
echo "<h1> $num / $num1  = ". $div. "</h1>";
$mod = $num % $num1;
echo "<h1> $num % $num1  = ". $mod. "</h1>";
?>