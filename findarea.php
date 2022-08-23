<?php
//find area of circle,triangle,square,rectangle

$l=5;
$h=8;
$r=10;
$a=4;
$b=3;
$pi=3.141;


//Circle   pi*r*r

$res= $pi*$r*$r;
echo "Area of circle is : $res </br>";


//Triangle  (1/2)*b*h

$res =(1/2)*$b*$h;
echo "Area of triangle is : $res </br>";

//square  a*a

$res = $a*$a;
echo "Area of square is : $res </br>";

//Rectangle  $l*$b

$res = $l*$b;
echo "Area of rectangle is :". $res;








?>