<?php 

  // PHP logic can go at the VERY top of your page/script
  // Output will happen inside the <body> element further down

  // switch statements should be used to match 1 variable against multiple possible cases (multiple choice)

  // Get traffic light colour (URL, form, ...)
  $lightColour = "  GreEN  ";

  // $lightColour = strtolower($lightColour);

  // // Check traffic light colour (determine what to do)
  // switch (trim(strtolower($lightColour))) {
    
  //   // green = go
  //   case "green":
  //     $action = "GO!";
  //     break;
    
  //   // orange = slow
  //   case "orange":
  //   case "yellow":
  //   case "amber":
  //     $action = "Slow down";
  //     break;
    
  //   // red = stop
  //   case "red":
  //     $action = "STOP!!!";
  //     break;
    
  //   // default = caution
  //   default:
  //     $action = "CAUTION";
  //     break;
  // }

  // Check traffic light colour (determine what to do)
  // Normalise input - force to lowercase and trim whitespace (from beginning and end)
  $action = match (trim(strtolower($lightColour))) {
    "green" => "GO!",
    "orange", "yellow", "amber" => "Slow down",
    "red" => "STOP!!!",
    default => "CAUTION"
  }

?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP switch statement</title>
</head>
<body>
  <h1>PHP switch statement</h1>

  <?php //echo "<p>Light colour: $lightColour</p>" ?>

  <p>Light colour: <?= $lightColour ?></p>
  <p>Action: <?= $action ?></p>
</body>
</html>