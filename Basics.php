<?php // use <?php at the start and ? > at the end of the PHP script

echo 'Hello World\'s'; // echo "Hello World"

echo 10; //int
echo "10"; //str however still a number
echo 20.43; //float

$isTrue = True;
(if isTrue = True); //boolen

$myName = 'Reece'; //variable

CONST PI = 3.14; // constant cannot be changed later on in the script
CONST ILEARNFAST = True;

$expression = "expressions are created when variables and conditions are declared"; //expressions

// Arithmetic Operators
$num1 = 9;
$num2 = 10;
$sum = $num1 + $num2;
$sum = $num1 - $num2;
$sum = $num1 / $num2;
$sum = $num1 * $num2;

// Assignment Operators
$num1 += $num2; // num1 + num2
$num1 -= $num2; // num1 - num2
$num1 /= $num2; // num1 / num2
$num1 *= $num2; // num1 * num2

// comparison Operators
$num1 == $num2; //both equal to each other? doesnt care about data type
$num1 === $num2; //both equal to each other? does care about data type
$num1 != $num2; //doesnt equal too? doesnt care about data type
$num1 !== $num2; //doesnt equal too? cares about data type
$num1 < $num2; // lessthan
$num1 <= $num2; // lessthan or equal too
$num1 > $num2; // Morethan
$num1 => $num2; // Morethan or equal too
$num1 <=> $num2; // left is greater then right = 1, left is less than right = -1, both left and right equal = 0 (spaceship)

//logical Operators
$num1 = 5;
$num2 = 10;
$num1 === 5 and $num2 === 10; //checks if $num1 is eqaul to int(5) and also checks if $num2 is equal to int(10) in this case = True
$num1 === "5" && $num2 === 30; //checks if $num1 is eqaul to int(5) and also checks if $num2 is equal to int(10) in this case = False

$num1 = 5;
$num2 = 10;
$num1 === "5" or $num2 === 10; //checks if $num1 is eqaul to int(5) or also checks if $num2 is equal to int(10) in this case = True
$num1 === "5" || $num2 === 30; //checks if $num1 is eqaul to int(5) or also checks if $num2 is equal to int(10) in this case = False

$num1 = 5;
$num2 = 10;
$num1 === "5" xor $num2 === 10; //checks if $num1 is eqaul to int(5) however also checks if $num2 is equal to int(10) in this case = True only if 1 is correct
$num1 === 5 xor $num2 === 10; //checks if $num1 is eqaul to int(5) however also checks if $num2 is equal to int(10) in this case = False only if 1 is correct

$num1 = 5;
!$num1 === 6 // checks is $num1 is not equal to int(5) in this case = True
!$num1 === 5 // checks is $num1 is not equal to int(5) in this case = False

// incrementer/decrementer
$num1 = 5;
++$num1; // will output 6 then next output 7
$num1++; // will output 5 then next output 6

$num1 = 5;
--$num1; // will output 4 then next output 3
$num1--; // will output 5 then next output 4

// String Operators
$a = "Hello";
$b = ", World";
$c = $a . $b; // joines both $a and $b together in a string

$a = "Hello";
$b = $a . ", World"; // joines both $a and ", World" together

// Conditions if elseif else
$a = 1
$b = "1"

if ($a === $b) { // if something is true | good for data type checks (!==, boolen, >)
  echo "if your seing this php is broken as $a and $b are the same number \"1\" however arn't the same data type ";
}
elseif ($a = $b) { // same as if but second in if loop
  echo "php is working properly"
}
else { // if non is true
  echo "php is working right as $a $b arn't the same data type"
}

 // Conditions switch
$a = 2;

switch ($a) { // switch statiment are used for large blocks try use instead of if loop in large data
  case 30: // check for this value
    echo "variable is equal to 30";
    break; // breaks from loop
  case 2:
    echo "variable is equal to 2";
    break;
  default: // basically else
    echo "None where true";
    break;
}

// While loop
$a = 1;
$b = 100;

while ($a < $b) { // while something is still true it will keep the loop going
  echo "sorry" . $b . "is still greater than" . $a++; // makes sure the loop isnt infinate (incrementer)
}

// do-while
$a = 1;

do { //will run atleast 1 time then checks if the while is true ot false
  echo "the loop number is". $a++;
} while ($a <= 10);

// for loop
for ($i = 0; $i < 10; $i++) {
  echo "this will loop 10 times. we have already looped " . $i . ", times."
}

//foreach
$names = ["john", "jane", "doe"];

foreach ($names as $value) {
  echo $value;
}
// associate array / foreach loop
$array = [
  "Name" => "john",
  "real" => "false"
];
foreach ($array as $key => $value) {
  echo $key . ": " . $value; // for the first loop the output will be Name: John, second loop will outpu real: false.
}

// breaks
$a = 1;

while ($a <= 10) { // will only run when $a is less than or equal too 10
  if ($a === 5) {
    break; // breaks when $a === 5
  }
  echo $a++;
}
//nested statement
$a = 1;
 while ($a++) { // makes the loop infinate
   echo $a;
   while ($a >= 10) { //while $a is greater than or equal to 10
     break 2; // breaks 2 levels of loops (breaks infinate loop)
   }
 }

 //continue
 $a = 1;

 while ($a < 10) { // while $a is less than 10 is true it will loop
   $a++;
   if ($a === 5) {
     continue; // this will skip the next step once it gets to 5 | 2, 3, 4, 6, 7, 8, 9, finish | we can also continue layers like break in nests
   }
   echo $a;
 }

 // include and reuire
 include 'reece.php'; // this will include code from reece.php | directory/reece.php | if it cant find the file it will send a warning
 include_once 'harris.php'; // this will include code from harris.php | directory/reece.php | if the code is already linked the nit will just skip this
 require 'reece.php'; // this will include code from reece.php | directory/reece.php | if it cant find the file it will send a fatal error and stop website
 require_once 'harris.php'; // this will include code from harris.php | directory/reece.php | if the code is already linked the nit will give a fatal error

// example | index.php

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php
    include_once 'reece.php'; // this will take $a from reece.php and will output Hello World
    echo &a;
  ?>

  </body>
</html>

// reece.php
<?php
$a = "Hello World!"
?>

// functions
echo personInfo("Reece", 17); // User defined function

$a = "Hello World!";
echo str_replace("world", "Reece", $a); // Internal function (there are alot and i dont know every single one) | this replaces world for reece
$b = "Hi";
str_repeat($b, 3); // Internal function that repeats $b 3 times once you echo it out
$c = "Hello Reece!";
$char = "lo";
stripos($a, $char); // Internal function that finds the location of "lo" in "Hello World"

// making functions
function calcMult($num1, $num2) { // takes in values and assigns them to $num1 and $num2
  $value = $num1 * $num2;
  return $value
}

echo calcMult(3, 23); // how to input vlaues to function
