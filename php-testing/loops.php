<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loops in PHP</title>
</head>
<body>
  <h1>Loops in PHP</h1>

<?php if (false): ?>

  <?php

    // while loop is a pre-test loop
    // (condition is checked BEFORE the loop is executed)
    while (false) {
      echo "<p>while loop...</p>";
    }

    // do..while loop is a post-test loop
    // (condition is checked AFTER the loop is executed)
    // do..while loop body will execute at LEAST once
    do {
      echo "<p>do..while loop...</p>";
    } while (false)

  ?>

  <h2>while loop - 1 to 10</h2>

  <?php

    // Initialise counter variable
    $counter = 1;

    // Loop condition (1 to 10)
    while ($counter <= 10) {

      // Print result
      echo "Run #$counter<br>";

      // Increment counter
      $counter += 1;
      // $counter = $counter + 1;
      // $counter++;
      // ++$counter;
    }

  ?>

  <h2>for loop - 1 to 10</h2>

  <?php

    // for (initialisation; condition; increment)
    // for (before the loop; before each cycle; after each cycle)
    for ($counter = 1; $counter <= 10; $counter += 1) { 
      
      // Print result
      echo "Run #$counter<br>";
    }

  ?>


  <h2>break &amp; continue</h2>

  <?php

    // break    = exit the loop
    // continue = skip to the next iteration/cycle of the loop

    // Loop - 1 to 10
    for ($counter = 1; $counter <= 10; $counter += 1) { 
      
      // if ($counter === 5) break;
      if ($counter === 5) continue;

      // Print result
      echo "Run #$counter<br>";
    }

  ?>

  <h2>Skip even numbers</h2>

  <?php

    // Loop - 1 to 10
    for ($counter = 1; $counter <= 10; $counter += 1) { 
      
      // Check if even - skip
      if ($counter % 2 === 0) continue;

      // Print result
      echo "Run #$counter<br>";
    }

    // Loop - 1 to 10 (skip every second number)
    for ($counter = 1; $counter <= 10; $counter += 2) {

      // Print result
      echo "Run #$counter<br>";
    }

  ?>

<?php endif ?>


  <h2>More complex HTML output</h2>

  <?php

    // Start list output
    echo "<ul>\n";

    // Loop - 1 to 3
    for ($i = 1; $i <= 3; $i += 1) { 
      
      // Don't display HTML like this...
      // echo "\t\t<li class='product'>\n";
      // echo "\t\t\t<h3 class='product-name'>Product 1</h3>\n";
      // echo "\t\t\t<p class='product-price'>$123.45</p>\n";
      // echo "\t\t</li>\n";

      // Use HEREDOC to define big blocks of HTML
      // This is the same as using double quoted strings
      echo <<<HTML
      <li class="product">
        <h3 class="product-name">Product $i</h3>
        <p class="product-price">$123.45</p>
      </li>

      HTML;

    }

    // End list output
    echo "</ul>";

  ?>

  <!-- <li class="product">
    <h3 class="product-name">Product 1</h3>
    <p class="product-price">$123.45</p>
  </li> -->

</body>
</html>