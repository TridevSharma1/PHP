<?php
echo"Hello Tridev Shrma Rmember Me";
echo "This is ", "multiple ", "echo.<br>";
$name = "John";
$age = 25;
echo "My name is $name and I am $age years old.";
echo "The sum of 5 and 10 is " . (5 + 10) . ".";
echo"The value of pi is approximately " . pi() . ".";
echo "The current date and time is " . date("Y-m-d H:i:s") . ".";
echo "The length of the string 'Hello' is " . strlen("Hello") . ".";
echo "The square root of 16 is " . sqrt(16) . ".";
echo "The absolute value of -5 is " . abs(-5) . ".";
echo "The random number between 1 and 100 is " . rand(1, 100) . ".";
echo "The current year is " . date("Y") . ".";
echo "The current month is " . date("F") . ".";
echo "The current day is " . date("d") . ".";
// This is a single-line comment
/* This is a multi-line comment
 that spans multiple lines */
echo "This is a comment demonstration.";
echo "The result of 10 divided by 2 is " . (10 / 2) . ".";
echo "The result of 10 modulo 3 is " . (10 % 3) . ".";
echo "The result of 2 to the power of 3 is " . (2 ** 3) . ".";
echo "The result of 10 incremented by 1 is " . (++$age) . ".";
echo "The result of 10 decremented by 1 is " . (--$age) . ".";
// calculate the area of a circle with radius 5
$radius = 5;
$area = pi() * $radius * $radius;
echo "The area of a circle with radius $radius is $area.";
echo "The length of the string 'Hello World' is " . strlen("Hello World") . ".";
echo "The number of words in the string 'Hello World' is " . str_word_count ("Hello World") . ".";
echo "The reverse of the string 'Hello' is " . strrev("Hello") . ".";
echo "The position of the first occurrence of 'o' in the string 'Hello' is " . strpos("Hello", "o") . ".";
echo "The string 'Hello' in uppercase is " . strtoupper("Hello") . ".";
echo "The string 'Hello' in lowercase is " . strtolower("Hello") . ".";

?>
