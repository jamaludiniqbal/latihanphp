<?php

    //Get birth year



    $birthYear = 1992;

    //Get Zodiac offset (the -4 offset is to make "rat" the first Zodiac)
    $zodiacOffset = ($birthYear - 4) % 12;   



        // get element offset
        //floor is for round down ( menggenapkan)
        $elementOffset = floor(($birthYear % 10) / 2);

    //check with zodiac
//     $zodiacSign = match ($zodiacOffset) {
//          0 => "Rat",
//          1 => "Ox",
//          2 => "Tiger",
//          3 => "Rabbit",
//          4 => "Dragon",
//          5 => "Snake",
//          6 => "Horse",
//          7 => "Goat",
//          8 => "Monkey",
//          9 => "Rooster",
//          10 => "Dog",
//          11 => "Pig",


//     };


    /* Using Array 

    */
//     List of zodiac signs using index and we actually can change the index of each item
        // $zodiacSigns = [
        //  0 => "Rat",
        //  1 => "Ox",
        //  2 => "Tiger",
        //  3 => "Rabbit",
        //  4 => "Dragon",
        //  5 => "Snake",
        //  6 => "Horse",
        //  7 => "Goat",
        //  8 => "Monkey",
        //  9 => "Rooster",
        //  10 => "Dog",
        //  11 => "Pig",


        // ];


        //list of zodiac without index 
        $zodiacSigns = [
         "Rat",
         "Ox",
         "Tiger",
         "Rabbit",
         "Dragon",
         "Snake",
         "Horse",
         "Goat",
         "Monkey",
         "Rooster",
          "Dog",
          "Pig",


        ];
        
        $zodiacElements = [
                "Metal", 
                "Water",
                "Wood",
                "Fire",
                "Earth"
        ];

        //uLook up zodiac in array using offset as index/key
        $zodiacSign = $zodiacSigns[$zodiacOffset];
    
        //get zodiac elemets
        $zodiacElement = $zodiacElements[$elementOffset];

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
    <p>Zodiac: <?=  $zodiacSign. " " .$zodiacElement  ?></p>
</body>
</html>