<?php
    // Define username variable
    $username = "adminn"; // You can change this value to test the conditional content

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional content in PHP</title>
</head>
<body>
    //if else using curly braces
    <h1>Conditional content in PHP</h1>

    <!-- php code in the middle of html -->
<p>Loggin in as : <?php echo $username ?></p>
<p>Loggin in as : <?= $username ?></p>

    <?php if($username == "admin") { ?>

    <h1>Secret Content</h1>
    <?php }else { ?>

    <h1>Non-secret Content</h1>
    <?php } ?>



    <!-- if else using alternative syntax with colons and endif  for html -->
    <h1>Conditional content in PHP</h1>
    <?php if($username == "admin") : ?>

    <h1>Secret Content</h1>
    <?php else : ?>

    <h1>Regular Content</h1>
    <?php endif ?>




    
<?php


//using echo to show html content based on condition not recommended
if($username == "admin"){
        echo "<section class='secret'>";
        echo "<h2>Admin Area</h2>";
        echo "<p>Welcome, admin! You have access to all the features and settings of the website.</p>";
        echo "</section>";

}else{

// Using heredoc syntax for better readability when outputting larger blocks of HTML content. Heredoc allows you to write multi-line strings without the need for concatenation or escaping quotes.
        echo <<<PHPSTRING
        <section class='regular'>
        <h2>Regular User Area</h2>
        <P>Welcome, regular user! You have access to the standard features of the website.</P>
        </section>
        PHPSTRING;


}
?>

// Using the ternary operator for simple conditional output. The ternary operator is a concise way to return one of two values based on a condition. It is often used for simple conditions where you want to output one of two strings or values.
<p><?=  (1===1) ? "TRUE" : "FALSE" ?> </p>

</body>
</html>