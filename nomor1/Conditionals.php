    <!-- Conditionals -->
<?php
// If / elseif / else
$condition = 10;

if ($condition == 10) {
    echo 'condition 10';
} elseif ($condition == 5) {
    echo 'condition 5';
} else {
    echo 'all other conditions';
}

// And condition = &&

$condition = 10;
$condition2 = 5;
if ($condition === 10 && $condition2 === 5) {
    echo '10 and 5';
}

// One line 
$isActive = true;
if ($isActive) return true;

// Null check
$name = null;
if (is_null($name)) {
    echo "Name is null\n";
}

//Comparaison operation
// == // equal no type check
// === // equal with type check
// != //not equal
// || //or
// && //and
// > //greater than
// < //less than

// Ternary operator (true : false)
$isValid = false;
echo $isValid ? 'user valid' : 'user not valid'; 
// Output: user not valid

//Null Coalesce Operator
$name = null;
echo $name ?? 'Mike';  //output 'Mike' if $name is null

//Null Coalesce Assignment
$name = null;
$name ??= 'Mike';
echo $name;   // Mike

// Null Safe + Null Coalesce (if null will return 'No user profile')
$user = null;
echo $user?->profile?->activate() ?? 'Not applicable';

//Spaceship operator return -1 0 1
$names = ['Mike', 'Paul', 'John'];
usort($names, function($a, $b) {
    return $a <=> $b;
});
print_r($names);
// ['John', 'Mike', 'Paul']

// Return false when convert as boolean
// false, 0, 0.0, null, unset, '0', '', []

// Compare same variable with multiple values
$color = 'red';

switch ($color) {
    case 'red':
        echo 'The color is red';
        break;
    case 'yellow':
        echo 'The color is yellow';
        break;
    case 'blue':
        echo 'The color is blue';
        break;
    default:
        echo 'The color is unknown';
}

// Match Expression (PHP 8)
$color = "yellow";

$type = match($color) {
    'red' => 'danger',
    'yellow', 'orange' => 'warning',
    'green' => 'success',
    default => 'Unknown'
};

// Check if variable declare
$color = ['red' => true];
echo isset($color['red']) ? 'true' : 'false';  
?>

