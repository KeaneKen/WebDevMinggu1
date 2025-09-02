<?php
$mixedDataArray = ['Mike', 5.2, true, ['10', '20']];

$nameList = ['Mike', 'Peter', 'Shawn', 'John'];

// Direct access
echo "nameList[1]: " . $nameList[1] . "<br>\n"; // Peter

// Nested array access
echo "mixedDataArray[3][1]: " . $mixedDataArray[3][1] . "<br>\n"; // 20

// Add element
$nameList[] = 'Micheal';
echo "After add: " . implode(', ', $nameList) . "<br>\n";

// Merge arrays
$numberList1 = [1, 2];
$numberList2 = [3, 4];
$mergedNumberList = array_merge($numberList1, $numberList2);
echo "Merged: " . implode(', ', $mergedNumberList) . "<br>\n";

// Spread operator (PHP 7.4+)
$spreadNumberList = [...$numberList1, ...$numberList2];
echo "Spread: " . implode(', ', $spreadNumberList) . "<br>\n";

// Concat with spread
$peopleNameList = array_merge(['John'], $nameList);
echo "People: " . implode(', ', $peopleNameList) . "<br>\n";

// Remove entry by value
$keyToRemove = array_search('Peter', $nameList, true);
if ($keyToRemove !== false) {
    unset($nameList[$keyToRemove]);
}
echo "After unset Peter: " . implode(', ', $nameList) . "<br>\n";

// String to array and back
$nameString = "Mike,Shawn,John";
$arrayFromNameString = explode(',', $nameString);
echo "Exploded: " . implode(' | ', $arrayFromNameString) . "<br>\n";

// foreach
echo "Foreach greetings: ";
foreach ($nameList as $name) {
    echo 'Hello ' . $name . '; ';
}
echo "<br>\n";

// Count
echo "Count names: " . count($nameList) . "<br>\n";

// Associative array
$personDetails = ['age' => 45, 'genre' => 'men'];
$personDetails['name'] = 'Mike';
foreach ($personDetails as $k => $v) {
    echo "$k: $v; ";
}
echo "<br>\n";

// Key exists, keys and values
echo "age exists? " . (array_key_exists('age', $personDetails) ? 'yes' : 'no') . "<br>\n";
echo "keys: " . implode(', ', array_keys($personDetails)) . "<br>\n";
echo "values: " . implode(', ', array_values($personDetails)) . "<br>\n";

// Array filter and map
$userList = [
    ['name' => 'Alice', 'active' => true],
    ['name' => 'Bob', 'active' => false],
    ['name' => 'Carol', 'active' => true],
];
$activeUsers = array_filter($userList, fn($p) => !empty($p['active']));
echo "Filtered names: " . implode(', ', array_map(fn($p) => $p['name'], $activeUsers)) . "<br>\n";

$allUserNames = array_map(fn($p) => $p['name'], $userList);
echo "Only names: " . implode(', ', $allUserNames) . "<br>\n";

// Search associative array
$productList = [
    ['id' => '100', 'name' => 'product 1'],
    ['id' => '200', 'name' => 'product 2'],
    ['id' => '300', 'name' => 'product 3'],
    ['id' => '400', 'name' => 'product 4'],
];
$productKey = array_search('product 3', array_column($productList, 'name'));
echo "found_key: " . $productKey . "<br>\n";

?>