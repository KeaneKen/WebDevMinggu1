    <!-- Strings -->
<?php
// String can use single quote
$name = 'Mike';
// or double quote
$name = "Mike";

// Double quote string can escape characters \n = new line  \t = tab  \\ = backslash
echo "Hello Mike\nHello David";

// Double quote string can do interpolation
echo "Hello $name";

// string concat
echo 'Hello ' . $name;

// string length
echo strlen($name);

// Remove space(s) before and after
$text = "   Hello   ";
echo trim($text);     // "Hello"

// Convert to lowercase / uppercase
$email = "SIGMA@MAIL.COM";
echo strtolower($email);
echo strtoupper($name);

// Converts the first character to uppercase
echo ucfirst($name);  // 'Mike' 

// Replace text a by text b in $text
$text = "banana";
echo str_replace('a', 'b', $text);


// String Contains (PHP 8)
echo str_contains($name, 'ke');  // true

// Find numeric position of first occurrence 
$pos = strpos($name, 'k'); // 2
echo $pos;

// Returns portion of string (offset / length)
echo substr($name, 0, $pos); // Mi
?>
