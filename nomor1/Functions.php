    <!-- Functions -->
<?php
//function declararion
function name($firstName, $lastName = 'defaultvalue') {
    return "$firstName $lastName";
}

echo name('Mike', 'Taylor');   // Mike Taylor
echo name('Ken');              // Ken defaultvalue (uses default parameter)

// Named Parameters (PHP 8+)
echo name(firstName: 'Mike', lastName: 'Taylor');
// You can also flip the order:
echo name(lastName: 'Taylor', firstName: 'Mike');


//Function variables params
// function name(...$params) {
//     return $params[0] . " " . $params[1];
// }
// echo name('Mike', 'Taylor');  // Mike Taylor

// Closure function
// Route::get('/', function () {
//      return view('welcome');
// });

// Arrow functions
// Route::get('/', fn () => view('welcome');

// Typed parameter and typed return
function display(string $first, string $last) : string {
    return "$first $last";
}
echo display("Mike", "Taylor");  // Mike Taylor

// Union type (or)
// function display(string|int $data) {
//     ...}

// Intersection type (and)
// function count_and_interate(Iterator&Countable $value) {
//     ...
// }

// Return any type (mixed)
// function logInfo(string $info) : mixed {
//     ...
// }

// No return (void)
// function logInfo(string $info) : void {
//     ...
// }
?>
