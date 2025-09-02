<?php

// Example 1
$num1 = [1,2,3,0,0,0];
$num2 = [2,5,6];
$m = 3;
$n = 3;

//Printing out the values
echo "Example 1: <br>";
echo "Num1 :  [" . implode(",", $num1) . "]<br>";
echo "Num2 :  [" . implode(",", $num2) . "]<br>";

//Merge
$num1 = array_merge(array_slice($num1, 0, $m), $num2);

// Sort
sort($num1);

//Output
echo "Output : [" . implode(",", $num1) . "]<br><br>";

// Example 2
$num1 = [1];
$num2 = [];
$m = 1;
$n = 0;

//Printing out the values
echo "Example 2: <br>";
echo "Num1 :  [" . implode(",", $num1) . "]<br>";
echo "Num2 :  [" . implode(",", $num2) . "]<br>";

//Merge
$num1 = array_merge($num1, $num2);

// Sort
sort($num1);

//Output
echo "Output : [" . implode(",", $num1) . "]<br><br>";

// Example 3
$num1 = [0];
$num2 = [1];
$m = 0;
$n = 1;

//Printing out the values
echo "Example 3: <br>";
echo "Num1 :  [" . implode(",", $num1) . "]<br>";
echo "Num2 :  [" . implode(",", $num2) . "]<br>";

//Merge
$num1 = array_merge(array_slice($num1, 0, $m), $num2);

// Sort
sort($num1);

//Output
echo "Output : [" . implode(",", $num1) . "]<br><br>";


?>