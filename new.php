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


?>
