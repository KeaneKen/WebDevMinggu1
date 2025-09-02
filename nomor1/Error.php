<?php

// Custom Exception class
class InvalidAgeException extends Exception {}
class FileNotFoundException extends Exception {}

// Function that may throw errors
function checkAge(int $age) {
    if ($age < 0) {
        throw new InvalidAgeException("Age cannot be negative: $age");
    }
    echo "Age is valid: $age\n";
}

function openFile(string $filename) {
    if (!file_exists($filename)) {
        throw new FileNotFoundException("File not found: $filename");
    }
    echo "File opened: $filename\n";
}


// Demonstrating try/catch/finally

try {
    checkAge(-5); // will throw InvalidAgeException
} catch (InvalidAgeException $e) {
    echo "Caught InvalidAgeException: " . $e->getMessage() . "\n";
} catch (Exception $e) {
    echo "Caught general exception: " . $e->getMessage() . "\n";
} finally {
    echo "Finished checking age.\n";
}

echo "----\n";

try {
    openFile("missing.txt"); // will throw FileNotFoundException
} catch (FileNotFoundException $e) {
    echo "Caught FileNotFoundException: " . $e->getMessage() . "\n";
} catch (Exception $e) {
    echo "Caught general exception: " . $e->getMessage() . "\n";
} finally {
    echo "Finished file operation.\n";
}

echo "----\n";

// Example with no error
try {
    checkAge(25);
} catch (Exception $e) {
    echo "Caught: " . $e->getMessage() . "\n";
} finally {
    echo "Done with valid age check.\n";
}
