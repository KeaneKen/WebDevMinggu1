    <!-- Files -->
<?php
// Current Directory
$current_dir = __DIR__;
echo $current_dir;

// Check if File Exists
if (file_exists('posts/first.txt')) {
    echo "File exists!";
} else {
    echo "File not found!";
}

// Read Entire File
$post = file_get_contents('posts/first.txt');
echo $post;

// Read File Line by Line
$file = fopen("test.txt", "r");  // open in read mode

while (!feof($file)) {          // while not end of file
    $line = fgets($file);       // get one line
    echo $line . "<br>";
}
fclose($file);                  // close file

// Write to File (CSV Example)
$file = fopen('export.csv', 'w');  // "w" = write (overwrite)

// Our data: multiple rows
$array = [
    ['name' => 'Mike', 'age' => 45],
    ['name' => 'Anna', 'age' => 30],
];

// Write header (first row keys)
fputcsv($file, array_keys($array[0]));

// Write each row
foreach ($array as $row) {
    fputcsv($file, $row);
}

fclose($file);

echo "CSV exported!";

?>