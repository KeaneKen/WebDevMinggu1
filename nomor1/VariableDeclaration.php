    <!-- Variable Declaration -->
<?php
$name = 'Mike'; //string
$isActive = true; //boolean
$number = 25; //integer
$amount = 99.95; //float
$fruits = ['orange', 'apple', 'banana'] //array
// const MAX_USERS = 50; //works inside classes and global scope
// define('MAX_USERS', 50); //is a function, used globally.
?>

<?php
// Assign 'by reference' with the & keyword
$name_1 = "Ken";
$name_2 = &$name_1;
$name_2 = "Edi";
echo $name_1; //Ken should be changed to Edi
?>

<?php
// Type conversion
$age = (int)readline("Your age: ");
echo "Your age is" . (string)$age;

//Checking Types
echo gettype($age); // int
echo is_int($age); // true
echo is_float(12.5); // true
echo is_string($name); // true
?>