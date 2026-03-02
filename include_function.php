<?php

// include "function.php"; //include is used to include the contents of another file into the current file. It allows you to reuse code and organize your project into multiple files. When the include statement is encountered, the specified file is read and its contents are inserted into the current file at that point. This can be useful for including functions, classes, or other reusable code that you want to use across multiple files in your project.

require_once "function.php"; //require_once is similar to include, but it will only include the specified file once. If the file has already been included, it will not be included again. This can be useful to prevent errors that may occur if the same file is included multiple times, such as redeclaration of functions or classes. If the file cannot be found, require_once will produce a fatal error and stop the execution of the script, while include will only produce a warning and continue executing the script.

//the best option is to use require_once because it will prevent errors that may occur if the same file is included multiple times, such as redeclaration of functions or classes. If the file cannot be found, require_once will produce a fatal error and stop the execution of the script, while include will only produce a warning and continue executing the script. This can help to ensure that your code is more robust and less prone to errors

// 2 ways to define arrays (use square brackets)
// $things = array(1,2,3,4);
// $things =[1,2,3,4];


//You can mix data types
// $things = [1, "two", 3.21, false, [],  "something"];

//You can dynamically add items to arrays (no initial size/ limit)
$things = []; // re initiate back  to nothing
$things[] = "something";
$things[] = "another";
$things[] = "test";
$things[] = "Where is this ";

//Do not add things like this 
// array_push($things, "new value");

//Define an array with specific keys/index
$things = [
    5 => "first",
    10 => "second",
    "fish" => "cakes"

];

//Push (add) and pop(remove) from end of array
// array_pop($things); //remove "new value"


// Create an associative array (list/dictionary/collection)
// of countries

// countryCode => countryName
$countries = [
    "au" => "Australia",
    "ug" => "Uganda",
    "nz" => "new Zealand",
    "es" => "Spain",
];
//sort($countries); //sort ascending but it changes the index ( not for assocaitive array). SORT_STRING is used to sort the array as strings, and SORT_FLAG_CASE is used to make the sorting case-insensitive. This means that uppercase and lowercase letters will be treated as equal when sorting the array. For example, "apple" and "Apple" will be considered the same and will be sorted together. This can be useful when you want to sort an array of strings without considering the case of the letters.
asort($countries, SORT_STRING | SORT_FLAG_CASE);
//sort by value and preserve the key values
// Sort by value
//sort($countries); //sort ascending but it changes the index ( not for assocaitive array)
// rsort($countries); // descending

// // Sort by key
// asort($countries); // ascending you use this one to preserve the key values
// ksort($countries); // ascending
// krsort($countries); // descending

//Remove item by key/index
// unset($countries["ug"]);
// unset($things[2]);

//Remove item by value
// $countryKeytoDelete = array_search("Spain",$countries);
// unset($countries[$countryKeytoDelete]);


// //Search for value and return key/index
// $people=["Steve", "Marry", "Blahface", "BOb"];
// var_dump(array_search("Marry", $people)) ;

// print_r($countries);
// //debugging functions
// exit;

//list of animals
$animals = ["dog", "cat", "mouse", "hamster", "turtle", "frog", "snake", "lizard", "rabbit"];




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays in PHP</title>
    <style>
        .countries-table {
            /* // border-collapse is used to collapse the borders of the table cells into a single border, making the table look cleaner and more organized. It removes the default spacing between cells and allows the borders to be shared between adjacent cells, creating a more cohesive and visually appealing table layout. */
            border-collapse: collapse;
        }

        .countries-table :is(th, td) {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>

<body>
    <h1>Arrays in PHP</h1>

    <h2>Counting Array Items</h2>

    <p>Total Animals : <?= count($animals); ?></p>

    <h2>Getting Specific Animals</h2>
    <p>Animal 5 (index 4) : <?= $animals[4]; ?></p>


    <!-- //pre is used to preserve the formatting of the array when printed -->
    <pre>
    <?php print_r($countries); ?>
    </pre>

    <h2>Displaying Array Items :</h2>
    <ul>
        <!-- for can't be used for associative arrays because they don't have numeric indexes and cant used to loope through not linear arrays (1,2,4,5,7-->

        <?php for ($i = 0; $i < count($animals); $i++) : ?>
            <li><?= $animals[$i]; ?></li>
        <?php endfor; ?>
    </ul>


    <ul>
        <!-- foreach is used for associative arrays and linear arrays (1,2,3,4,5,6,7) -->
        <?php foreach ($countries as $country) : ?>
            <li><?= $country ?></li>
        <?php endforeach; ?>
    </ul>


    <ul>
        <!-- foreach is used for associative arrays and linear arrays (1,2,3,4,5,6,7). $key is the index and $country is the value, and $key cant be changed because its a copy of the index -->
        <?php foreach ($countries as $key => $country) : ?>
            <li>Code <?= $key ?>: <?= $country ?></li>
        <?php endforeach; ?>
    </ul>

    <!-- 
    //implode is used to join array items into a string with a separator -->
    <h2>Displaying Array items (Implode/Join)</h2>
    <p><?= implode(", ", $animals); ?></p>
    <ul>
        <li><?= implode("</li><li>", $animals); ?></li>
    </ul>


    <table class="countries-table">
        <thead>
            <tr>
                <th>Code</th>
                <th>Name</th>

            </tr>

        </thead>
        <tbody>
            <!-- //foeareach for the table rows, $key is the index and $country is the value, and $key cant be changed because its a copy of the index -->
            <!-- start the  loop here -->
            <?php foreach ($countries as $key => $country): ?>
                <tr>
                    <td><?= strtoupper($key) ?> </td>
                    <td><?= $country  ?></td>
                </tr>
            <?php endforeach; ?>
            <!-- end of loop here -->
        </tbody>
    </table>
    <br />
    <select name="country" id="">
        <?php foreach ($countries as $key => $country): ?>
            <option value="<?= $key ?>"><?= $country ?></option>
        <?php endforeach; ?>
    </select>

    <p>
        <?php displaySelectList($countries, "country", "NZ"); ?>
    </p>
</body>

</html>