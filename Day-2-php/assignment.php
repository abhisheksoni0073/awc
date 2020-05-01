<?php 
/*Assignment Operators in PHP
Operatos	Description
+=		Add and assign
-=		Subtract and assign
*=		Multiply and assign
/=		Divide and assign quotient
%=		Divide and assign modulus
.=		Concatenate and assign(its used only for sting) */
$num = 10;
$num1 = 2;
$num += $num1;
echo "<h1> $num </h1>";
$num -= $num1;
echo "<h1> $num </h1>";
$num *= $num1;
echo "<h1> $num </h1>";
$num /= $num1;
echo "<h1> $num </h1>";
$num %= $num1;
echo "<h1> $num </h1>";
$a= "Indian";
$b = " Army";
$a.=$b;
echo "<h1>$a</h1>";
 ?>