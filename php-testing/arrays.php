<?php

  // 2 ways to define arrays (use square brackets!)
  $things = array(1, 2, 3);
  $things = [1, 2, 3];

  // You CAN mix data types (but you shouldn't)
  $things = [1, "two", 3.21, false, [], "something"];

  // You can dynamically add items to arrays (no initial size/limit)
  $things = [];
  $things[] = "something";
  $things[] = "another";
  $things[5] = "test";
  $things[] = "where is this?";

  // Don't add items like this...
  array_push($things, "new value");

  // Push (add) and pop (remove) from end of array
  array_pop($things);

  // Defining an array with specific keys/indexes
  // $things = [
  //   5 => "first",
  //   10 => "second",
  //   "fish" => "cakes",
  // ];

  // Create an associative array (list/dictionary/collection) of countries
  // countryCode => countryName
  $countries = [
    "au" => "Australia",
    "ug" => "Uganda",
    "nz" => "new Zealand",
    "es" => "Spain",
    // ...
  ];

  // Sort by value
  //sort($countries); // ascending
  // rsort($countries); // descending

  // Sort by value (preserve keys)
  asort($countries);

  // // Sort by key
  // ksort($countries); // ascending
  // krsort($countries); // descending
  
  // Remove item by key/index
  unset($countries["ug"]);
  unset($things[2]);

  // Remove item by value
  $countryKeyToDelete = array_search("Spain", $countries);
  unset($countries[$countryKeyToDelete]);

  // Debug - print contents
  print_r($countries);
  exit;

?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arrays in PHP</title>
</head>
<body>
  <h1>Arrays in PHP</h1>



</body>
</html>