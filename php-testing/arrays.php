<?php

  // References
  require_once 'FUNctions.php';
  // require_once 'FUNctions.php';
  

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

  // Sort by value (don't preserve keys)
  // sort($countries); // ascending
  // rsort($countries); // descending

  // Sort by value (preserve keys)
  // Case sensitive
  // asort($countries);
  // Case insensitive
  asort($countries, SORT_STRING | SORT_FLAG_CASE);
  // "Natural sort order" case insensitive
  // E.g. img1.jpg, img2.jpg, img10.jpg, img11.jpg
  // asort($countries, SORT_NATURAL | SORT_FLAG_CASE);

  // // Sort by key
  // ksort($countries); // ascending
  // krsort($countries); // descending
  
  // Remove item by key/index
  // unset($countries["ug"]);
  // unset($things[2]);

  // Remove item by value
  // $countryKeyToDelete = array_search("Spain", $countries);
  // unset($countries[$countryKeyToDelete]);

  // Debug - print contents
  // echo "<pre>";
  // print_r($countries);
  // // var_dump($countries);
  // echo "</pre>";
  // exit;

  // List of animals
  $animals = ["cow", "bear", "dinosaur", "ant", "dog", "cat", "catdog", "gorilla", "quokka", "rabbit", "snake"];

?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arrays in PHP</title>
  <style>

    .countries-table {
      border-collapse: collapse;
    }

    .countries-table :is(th, td) {
      padding: 0.3em 0.5em;
      border: 1px solid #3cc;
      text-align: left;
    }

  </style>
</head>
<body>
  <h1>Arrays in PHP</h1>

<?php if (false): ?>

  <h2>Counting array items</h2>
  <p>Total animals: <?= count($animals) ?></p>

  <h2>Getting specific array items</h2>
  <p>Animal 5 (index 4): <?= $animals[4] ?></p>

  <h2>Displaying array items (loop)</h2>
  
  <ul>
  <?php for ($i = 0; $i < count($animals); $i++): ?>
    <li>Item <?= $animals[$i] ?></li>
  <?php endfor ?>
  </ul>

  <ul>
  <?php foreach ($animals as $key => $value): ?>
    <li>Item <?= $key ?> is <?= $value ?></li>
  <?php endforeach ?>
  </ul>
  

  <h2>Displaying array items (implode/join)</h2>
  
  <p>My animals: <?= implode(", ", $animals) ?></p>

  <ul><li><?= implode("</li><li>", $animals) ?></li></ul>

<?php endif ?>
  

  <h2>Displaying countries (associative array)</h2>

  <table class="countries-table">
    <thead>
      <tr>
        <th>Code</th>
        <th>Name</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($countries as $key => $value): ?>
      <tr>
        <td><?= strtoupper($key) ?></td>
        <td><?= $value ?></td>
      </tr>
    <?php endforeach ?>
    </tbody>
  </table>

  <p>
  <select name="country">
  <?php foreach ($countries as $key => $value): ?>
    <option value="<?= $key ?>"><?= $value ?></option>
  <?php endforeach ?>
  </select>
  </p>

  <p>
    <?php displaySelectList($countries, "country2", "ug"); ?>
  </p>

  <p>
    <?php displayRadioButtonList($countries, "countryRadio", "nz"); ?>
  </p>

  <p>
    <?php displayCheckboxList($countries, "countryCheckboxes", "nz"); ?>
  </p>

  <pre>
    <?php print_r($countries) ?>
  </pre>

</body>
</html>