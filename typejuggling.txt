<?php
$foo = "0";  // $foo is string (ASCII 48)
echo gettype($foo);
echo "</br>";
$foo += 2;   // $foo is now an integer (2)
echo gettype($foo);
echo "</br>";
$foo = $foo + 1.3;  // $foo is now a float (3.3)
echo gettype($foo);
echo "</br>";
$foo = 5 + "10 Little Piggies"; // $foo is integer (15)
echo gettype($foo);
echo "</br>";
$foo = 5 + "10 Small Pigs";     // $foo is integer (15)
echo gettype($foo);
echo "</br>";
?>

