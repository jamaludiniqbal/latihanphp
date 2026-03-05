<?php
//enables strict typing in PHP, which means that the types of function parameters and return values must be explicitly declared and will be enforced at runtime. This can help catch type-related errors early and improve code reliability.
//when arguments does not match with the type declaration, a TypeError will be thrown, which can help identify and fix issues in the code more quickly. It also promotes better code readability and maintainability by making it clear what types of values are expected and returned by functions.
//recommended to use strict typing in PHP to improve code quality and reduce the likelihood of type-related errors.
declare(strict_types=1);


// Naming the function is important based on what they do
//CamelCase

//dockblock is a comment that describes the function, its parameters, and its return value

/**
 * Display a select list of options
 *
 * @param array $array The array of options to display
 * @param string $name The name of the select list
 * @param mixed $defaultValue The default value to be selected
 * @return void
 */
function displaySelectList(array $array, string $name = "", mixed $defaultValue = null): void //Refers to PHP type declarations, which specify the expected types of function parameters and return values. In this case, the function expects an array and a string (or null) as parameters, and it does not return any value (void).

//by making string ="" it makes the parameter optional, so if we call the function without passing a value for $name, it will default to an empty string. This allows us to call the function with just the array of options, and it will still work without throwing an error.
{

    echo <<<HTML
    <select name="{$name}">
HTML;

    foreach ($array as $key => $value)
        if (empty($array)) {
            echo <<<HTML
             <option value="">No options available</option>;
             HTML;
        } else {
            //check if the current key is equal to the default value, if it is, add the "selected" attribute to the option element
            $selected = $key === $defaultValue ? "selected" : "";
            echo <<<HTML
             <option value="{$key}" {$selected}>{$value}</option>;
             HTML;
        }
}

echo <<<HTML
</select>       
HTML;

$countries = [
    'US' => 'United States',
    'CA' => 'Canada',
    'MX' => 'Mexico',
];


//Type Declaration helps to ensure that the function is used correctly and can prevent certain types of errors. It also makes the code more readable and self-documenting, as it clearly indicates what types of values are expected and returned by the function.
// displaySelectList($countries, '');



/**
 * Undocumented function
 *
 * @param array $array
 * @param string $name
 * @param mixed $defaultValue
 * @return void
 */
function displayRadioList(array $array, string $name = "", mixed $defaultValue = null): void
{
    foreach ($array as $key => $value) {
        $checked = $key === $defaultValue ? "checked" : "";
        echo <<<HTML
        <label>
            <input type="radio" name="{$name}" value="{$key}" {$checked}>
            {$value}
        </label>
        HTML;
    }
}


function  displayCheckboxList(array $array, string $name = "", array $defaultValues = []): void
{
    foreach ($array as $key => $value) {
        $checked = in_array($key, $defaultValues) ? "checked" : "";
        echo <<<HTML
        <label>
            <input type="checkbox" name="{$name}[]" value="{$key}" {$checked}>
            {$value}
        </label>
        HTML;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="form.php" method="post">
<fieldset>
    <legend>Countries</legend>
        <p>
    <?php displaySelectList($countries, "country1", "CA"); ?>
</p>
<p>
<?php displayRadioList($countries, "country2", "CA"); ?>
</p>
<p>
    <?php displayCheckboxList($countries, "countryCheckbox", ["CA", "MX"]); ?>
</p>

<button type="submit">
    <span>Submit</span>

</button>


</fieldset>



    </form>
<pre>
<?php

    // print_r($_POST);
    // print_r($_GET);
    // print_r($_REQUEST);

    //conditional operator (ternary operator) is a shorthand way of writing an if-else statement. It takes three operands: a condition, a value to return if the condition is true, and a value to return if the condition is false. The syntax is as follows: condition ? value_if_true : value_if_false.
    $countries = $_GET['countryCheckbox'] ?? null;

    var_dump($countries);
?>
</pre>

</body>
</html>