
<?php

// The date function in PHP is used to format a local date and time, and it returns the formatted date string. In this case, "Y-m-d H:i:s" is the format for the date, which represents the year, month, day, hour, minute, and second.
$today = date("Y-m-d H:i:s");

// The echo statement is used to output the value of the variable $today, which contains the current date and time in the specified format.
echo 'today is ' . $today;

//# is used to include a comment in the code. It is a way to add notes or explanations for the code, and it is ignored by the PHP interpreter when executing the script.

//"" and {today} is used to include the variable $today directly within the string. This is a feature of double-quoted strings in PHP, where variables can be parsed and their values included in the output.
echo "<p>Hi everyone today is {$today} am </p>";

//print_r is a function that prints human-readable information about a variable. It is often used for debugging purposes to quickly display the contents of an array or object.
print_r([1, 2, 3]);

//var_dump is a function that displays structured information about one or more variables that includes its type and value. It is often used for debugging purposes to understand the contents of a variable.
var_dump([2, 3, 4]);

$horray = [0, "", null, false];

//gettype is a function that returns the type of a variable. It is used to determine the data type of a variable, such as whether it is an integer, string, array, etc.
echo gettype($horray);

$someVariable = "Hello, World!"; // This is a string variable
$someVariable = 123.45; // This is a float variable
$someVariable = 123; // This is an integer variable
$someVariable = true; // This is a boolean variable
echo is_int(123);
echo "</br>";
echo false ? "true" : "false"; // This is a ternary operator that evaluates the condition (false) and returns "false" because the condition is not met.

// if(is_init(123){
//     echo "true";
// }else{
//     echo "false";
// } 

// define constants in PHP using the define() function. Constants are identifiers for simple values that cannot be changed during the execution of the script. They are defined using the define() function, which takes two parameters: the name of the constant and its value. Constants are typically defined in uppercase letters by convention.
define('APP_NAME', 'LatihanPHP');
define('VERSION', '1.0.0');
define('MAX_USERS', 100);
define('PI', 3.1415926535);
define('FEATURES', ['auth', 'billing', 'reports']); // PHP 7+

//Constants are immutable, which means that once they are defined, their values cannot be changed. They are also global, meaning they can be accessed from anywhere in the script after they have been defined.
echo "<p>App: " . APP_NAME . " v" . VERSION . "</p>";
echo "<p>Max users: " . MAX_USERS . "</p>";
echo "<p>PI * 2 = " . (PI * 2) . "</p>";
echo "<p>First feature: " . FEATURES[0] . "</p>";

// In PHP, when you perform an arithmetic operation between a string and a number, PHP will attempt to convert the string to a number. If the string starts with numeric characters, it will be converted to that number. If the string does not start with numeric characters, it will be converted to 0.
echo gettype("100" + 4);

echo "100" * 5; //result 500 because PHP will convert the string "100" to the integer 100 before performing the multiplication.

echo (int)123.45;

?>
