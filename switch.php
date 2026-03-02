<?php
    // PHP Logic can go at the very top of your script
    //Output will happen inside the <body> element further down

    //Get traffic light color
    $lightColor = "Amber";

    //Check traffic light color (determine what to do)
    //Snippet (pressing Tab) when you type the syntax is very useful
    
    //strtolower to change the cas-sensitive and trim is to fix the space problem
    switch (trim(strtolower($lightColor))) {
    
    //green = go
    case 'green':
            $action = "Go !!";
            break;
   //possible to do on the switch case
    case 'orange':
    case 'yellow':
    case 'amber':        
            $action = "Slow Down";
            break;

    case 'red':
            $action = "STOP !!";
            break;
 
    
        //default caution
        default:
            $action = "CAUTION";
            break;
    }

    //MATCH IS IMPORTANT !!    
    //Check traffic light  using MATCH instead of switch case , which is very cool         
    //Normalise input - force to lowercase and trim whitespace
    $action = match (trim(strtolower($lightColor))) {
         "green" => "Go !",
         "orange", "yellow", "amber" => "Slow Down",
         "red" => "STOP !!"
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Switch Statement</title>
</head>
<body>
    <h1>PHP Switch Statement</h1>

    <?php //(this is the most apprpirate to do comment on php script) echo "<p>Light Coloe : $lightColor </p>" ?>
    
    <p>Light Color : <?=  $lightColor ?></p>
    <p>Action: <?=  $action  ?></p>
</body>
</html>