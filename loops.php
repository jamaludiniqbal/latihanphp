<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops in PHP</title>
</head>
<body>
    <h1>Loops in PHP</h1>

<?php if(false) :  ?> 
    <?php
        //while loop is a pre-test loop
        //(condition is checked BEFORE the loop is executed)
        while(false){
            echo "<p>while loop.. </p>";
        }


        // do.. while loop is a pre test loop
        //(condition is checked AFTER the loop is executed)
        //do.. while loop body will execute at least once
        do{
            echo "<p>do.. while loop.. </p>";
        }while(false)
    ?>
<?php endif ?>

<?php 
    //initialize counter varible
    $number = 1;
    while($number <=10){

    //printresult
        echo "<p>Run #$number</p>";
       
        // Increment counter
        // $number = $number + 1;
        // $number += 1;
        $number++;
        }


        //increment
        $blah = 5;
        echo ++$blah;
        echo $blah;



?>
<h2>for Loop 1 to 10</h2>
<?php

    //for (initialization; condition; increment)
    //for (before the loop; before each cycle; afte each cycle)
     for($number = 1; $number <= 10; $number++)
        {
        //print result    
        echo "<p>$number </p>";
        
    }

?>

<h2>Break &amp; Continue</h2>

<?php

    //break = exit the loop
    //conmtinue = skip to next iteration/sycle of the loop

    //Loop 1- 10
     for($number = 1; $number <= 10; $number++)
        {
            //if $number ===5 break
            // if($number === 5) break;


            //skip to the next iteration
            if($number ===5 ) continue;

        //print result    
        echo "<p>Run #$number </p>";
        
    }

?>

<h2>Skip even number</h2>

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

<h2>More complex HTML output</h2>


<?php
    // start list output
    echo "<ul>";

 // Loop - 1 to 3
for ($i = 1; $i <= 3; $i += 1) {

    // Don't display HTML like this...
    // echo "<tr><td class='product'>\n";
    // echo "&lt;th class='product-name'>Product 1</h3>\n";
    // echo "</th><p class='product-price'>$123.45</p>\n";
    // echo "</tr></tr>";

    // Use HEREDOC to define big blocks of HTML
    // This is the same as using double quoted strings
        echo <<<HTML
        <li class="product">
            <h3 class="product-name">Product {$i}s</h3>
            <p class="product-price">$123.45</p>
        </li>

        HTML;
}
// End list output
echo "</ul>";
?>

</body>
</html>