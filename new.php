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
// calculate the factorial of a number
function factorial($n) {
    if ($n == 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}
$number = 5;
echo "The factorial of $number is " . factorial($number) . ".";
// calculate the Fibonacci sequence up to a certain number
function fibonacci($n) {
    $fib = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $fib[] = $fib[$i - 1] + $fib[$i - 2];
    }
    return $fib;
}
$count = 10;
echo "The Fibonacci sequence up to $count is: " . implode(", ", fibonacci($count)) . ".";
// input from user
echo "Enter a number: ";
$handle = fopen ("php://stdin","r");
$number = fgets($handle);
echo "You entered: " . $number;
echo "Enter your name: ";
$name = fgets($handle);
echo "Hello, " . trim($name) . "!";
echo "Enter a string: ";
$string = fgets($handle);
echo "The length of the string you entered is " . strlen($string) . ".";
echo "Enter a number to calculate its square: ";
$number = fgets($handle);
echo "The square of the number you entered is " . ($number * $number) . ".";
#calculate the area of a rectangle
echo "Enter the length of the rectangle: ";
$length = fgets($handle);
echo "Enter the width of the rectangle: ";
$width = fgets($handle);
$area = $length * $width;
echo "The area of the rectangle is " . $area . ".";
echo "Enter a number to check if it is even or odd: ";
$number = fgets($handle);
if ($number % 2 == 0) {
    echo "The number you entered is even.";
} 
else {
    echo "The number you entered is odd.";
}
echo "Enter a number to check if it is prime: ";
$number = fgets($handle);
function isPrime($n) {
    if ($n <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
if (isPrime($number)) {
    echo "The number you entered is prime.";
} 
else {
    echo "The number you entered is not prime.";
}
echo "Enter a string to check if it is a palindrome: ";
$string = fgets($handle);
function isPalindrome($str) {
    $str = str_replace(' ', '', $str); // remove spaces
    return $str == strrev($str);
}
if (isPalindrome($string)) {
    echo "The string you entered is a palindrome.";
} 
else {
    echo "The string you entered is not a palindrome.";
}


## making a simple calculator
echo "Enter the first number: ";
$num1 = fgets($handle);
echo "Enter the second number: ";
$num2 = fgets($handle);
echo "Enter the operator (+, -, *, /): ";
$operator = fgets($handle);
switch (trim($operator)) {
    case '+':
        $result = $num1 + $num2;
        break;
    case '-':
        $result = $num1 - $num2;
        break;
    case '*':
        $result = $num1 * $num2;
        break;
    case '/':
        if ($num2 != 0) {
            $result = $num1 / $num2;
        } else {
            echo "Division by zero is not allowed.";
            exit;
        }
        break;
    default:
        echo "Invalid operator.";
        exit;
}
echo "The result of $num1 $operator $num2 is: " . $result . ".";
// fabonacci series using recursion
function fibonacciRecursive($n) {
    if ($n == 0) {
        return 0;
    } elseif ($n == 1) {
        return 1;
    } else {
        return fibonacciRecursive($n - 1) + fibonacciRecursive($n - 2);
    }
}
$count = 10;
echo "The Fibonacci sequence up to $count is: ";
for ($i = 0; $i < $count; $i++) {
    echo fibonacciRecursive($i) . " ";
}
// calculate the greatest common divisor (GCD) of two numbers
function gcd($a, $b) {
    if ($b == 0) {
        return $a;
    }
    return gcd($b, $a % $b);
}
echo "Enter the first number to calculate GCD: ";
$num1 = fgets($handle);
echo "Enter the second number to calculate GCD: ";
$num2 = fgets($handle);
$result = gcd($num1, $num2);
echo "The greatest common divisor of $num1 and $num2 is: " . $result . ".";

// factorial using iteration
function factorialIterative($n) {
    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}
$number = 5;
echo "The factorial of $number is " . factorialIterative($number) . ".";
// calculate the least common multiple (LCM) of two numbers
function lcm($a, $b) {
    return ($a * $b) / gcd($a, $b);
}

echo "Enter the first number to calculate LCM: ";
$num1 = fgets($handle);
echo "Enter the second number to calculate LCM: ";
$num2 = fgets($handle);
$result = lcm($num1, $num2);
echo "The least common multiple of $num1 and $num2 is: " . $result . ".";
// calculate the power of a number
echo "Enter the base number: ";
$base = fgets($handle);
echo "Enter the exponent: ";
$exponent = fgets($handle);
$result = pow($base, $exponent);
echo "$base raised to the power of $exponent is: " . $result . ".";
// User input for a simple login system
$validUsername = "admin";
$validPassword = "password";
echo "Enter your username: ";
$username = fgets($handle);
echo "Enter your password: ";
$password = fgets($handle);
if (trim($username) == $validUsername && trim($password) == $validPassword) {
    echo "Login successful. Welcome, " . trim($username) . "!";
} else {
    echo "Login failed. Invalid username or password.";
}
// calculate the area of a triangle using Heron's formula
echo "Enter the lengths of the three sides of the triangle: ";
$side1 = fgets($handle);
$side2 = fgets($handle);
$side3 = fgets($handle);
$s = ($side1 + $side2 + $side3) / 2; // semi-perimeter
$area = sqrt($s * ($s - $side1) * ($s - $side2) * ($s - $side3));
echo "The area of the triangle is: " . $area . ".";
// calculate the distance between two points in a 2D plane
echo "Enter the coordinates of the first point (x1, y1): ";
$x1 = fgets($handle);
$y1 = fgets($handle);
echo "Enter the coordinates of the second point (x2, y2): ";
$x2 = fgets($handle);
$y2 = fgets($handle);
$distance = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
echo "The distance between the two points is: " . $distance . ".";
// 3d distance between two points
echo "Enter the coordinates of the first point (x1, y1, z1): ";
$x1 = fgets($handle);
$y1 = fgets($handle);
$z1 = fgets($handle);
echo "Enter the coordinates of the second point (x2, y2, z2): ";
$x2 = fgets($handle);
$y2 = fgets($handle);
$z2 = fgets($handle);
$distance = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2) + pow($z2 - $z1, 2));
echo "The distance between the two points in 3D space is: " . $distance . ".";
// calculate the area of a trapezoid
echo "Enter the lengths of the two parallel sides of the trapezoid: ";  
$base1 = fgets($handle);
$base2 = fgets($handle);
echo "Enter the height of the trapezoid: ";
$height = fgets($handle);
$area = (($base1 + $base2) / 2) * $height;
echo "The area of the trapezoid is: " . $area . ".";
// calculate the area of a parallelogram
echo "Enter the base of the parallelogram: ";
$base = fgets($handle);
echo "Enter the height of the parallelogram: ";
$height = fgets($handle);
$area = $base * $height;
echo "The area of the parallelogram is: " . $area . ".";
// calculate the area of a rhombus
echo "Enter the lengths of the two diagonals of the rhombus: ";
$diagonal1 = fgets($handle);
$diagonal2 = fgets($handle);
$area = ($diagonal1 * $diagonal2) / 2;
echo "The area of the rhombus is: " . $area . ".";
// calculate the area of a regular polygon
echo "Enter the number of sides of the regular polygon: ";
$sides = fgets($handle);
echo "Enter the length of each side of the regular polygon: ";
$sideLength = fgets($handle);
$area = (pow($sideLength, 2) * $sides) / (4 * tan(pi() / $sides));
echo "The area of the regular polygon is: " . $area . ".";
// calculate the area of a sector of a circle
echo "Enter the radius of the circle: ";
$radius = fgets($handle);
echo "Enter the angle of the sector in degrees: ";
$angle = fgets($handle);
$area = (pi() * pow($radius, 2) * $angle) / 360;
echo "The area of the sector of the circle is: " . $area . ".";
// calculate the area of a segment of a circle
echo "Enter the radius of the circle: ";
$radius = fgets($handle);
echo "Enter the height of the segment: ";
$height = fgets($handle);
$area = (pow($radius, 2) * acos(($radius - $height) / $radius)) - (($radius - $height) * sqrt((2 * $radius * $height) - pow($height, 2)));
echo "The area of the segment of the circle is: " . $area . ".";
// calculate the area of a sector of a circle using radians
echo "Enter the radius of the circle: ";
$radius = fgets($handle);
echo "Enter the angle of the sector in radians: ";
$angle = fgets($handle);
$area = (pow($radius, 2) * $angle) / 2;
echo "The area of the sector of the circle is: " . $area . ".";
// calculate the area of a segment of a circle using radians
echo "Enter the radius of the circle: ";
$radius = fgets($handle);
echo "Enter the height of the segment: ";
$height = fgets($handle);
$area = (pow($radius, 2) * acos(($radius - $height) / $radius)) - (($radius - $height) * sqrt((2 * $radius * $height) - pow($height, 2)));
echo "The area of the segment of the circle is: " . $area . ".";
// how to find the area of a circle using the radius
echo "Enter the radius of the circle: ";
$radius = fgets($handle);
$area = pi() * pow($radius, 2);
echo "The area of the circle is: " . $area . ".";
// how to find the area of a circle using the diameter
echo "Enter the diameter of the circle: ";
$diameter = fgets($handle);
$radius = $diameter / 2;
$area = pi() * pow($radius, 2);
echo "The area of the circle is: " . $area . ".";
// calculate the area of a circle using the circumference
echo "Enter the circumference of the circle: ";
$circumference = fgets($handle);
$radius = $circumference / (2 * pi());
$area = pi() * pow($radius, 2);
echo "The area of the circle is: " . $area . ".";
// calculate the area of a circle using the area of a sector
echo "Enter the area of the sector: ";  
$sectorArea = fgets($handle);
echo "Enter the angle of the sector in degrees: ";
$angle = fgets($handle);
$area = ($sectorArea * 360) / $angle;
echo "The area of the circle is: " . $area . ".";
// calculate the area of a circle using the area of a segment
echo "Enter the area of the segment: ";
$segmentArea = fgets($handle);
echo "Enter the height of the segment: ";
$height = fgets($handle);
$area = ($segmentArea * 2) / (pow($height, 2) * acos(($height) / $height));
echo "The area of the circle is: " . $area . ".";

?>
