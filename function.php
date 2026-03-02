<?php
// Naming the function is important based on what they do
//CamelCase

//dockblock is a comment that describes the function, its parameters, and its return value

/**
 * Display a select list of options
 *
 * @param array $array The array of options to display
 * @param string $name The name of the select list
 * @return void
 */
function displaySelectList(array $array, string $name = ""): void //Refers to PHP type declarations, which specify the expected types of function parameters and return values. In this case, the function expects an array and a string (or null) as parameters, and it does not return any value (void).

//by making string ="" it makes the parameter optional, so if we call the function without passing a value for $name, it will default to an empty string. This allows us to call the function with just the array of options, and it will still work without throwing an error.
{
    echo <<<HTML
    <select name="{$name}">
HTML;

    foreach ($array as $key => $value)

        echo <<<HTML
    <option value="{$key}">{$value}</option>
HTML;
}

echo <<<HTML
</select>       
HTML;

$countries = [
    'US' => 'United States',
    'CA' => 'Canada',
    'MX' => 'Mexico',
    'ID' => 'Indonesia',
    'IN' => 'India',
];

$something = 1234;


//Type Declaration helps to ensure that the function is used correctly and can prevent certain types of errors. It also makes the code more readable and self-documenting, as it clearly indicates what types of values are expected and returned by the function.
// displaySelectList($countries, '');

displaySelectList($countries);
