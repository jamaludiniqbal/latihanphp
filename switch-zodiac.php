<?php

    //Get birth year
    $birthYear = 2026;

    //Get Zodiac offset (the -4 offset is to make "rat" the first Zodiac)
    $zodiacOffset = ($birthYear - 4) % 12;   

    //check with zodiac
    switch ($zodiacOffset) {
    
   
    case 0:
            $zodiacSign = "Rat";
            break;
    case 1:
            $zodiacSign = "Ox";
            break;
    case 2:
            $zodiacSign = "Tiger";
            break;
    case 3:
            $zodiacSign = "Rabbit";
            break;
    case 4:
            $zodiacSign = "Dragon";
            break;
    case 5:
            $zodiacSign = "Snake";
            break;
    case 6:
            $zodiacSign = "Horse";
            break;
    case 7:
            $zodiacSign = "Goat";
            break;
    case 8:
            $zodiacSign = "Monkey";
            break;
    case 9:
            $zodiacSign = "Rooster";
            break;
    case 10:
            $zodiacSign = "Dog";
            break;
    case 11:
            $zodiacSign = "Pig";
            break;
            

               
   
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
    
    <p>Birth Year: <?=  $birthYear ?></p>
    <p>Zodiac: <?=  $zodiacSign  ?></p>
</body>
</html>