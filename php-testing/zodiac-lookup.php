<?php 

  // Get birth year
  $birthYear = 2023;

  // Get Zodiac offset (the -4 offset is to make "Rat" the first Zodiac - based on 4AD)
  $zodiacOffset = ($birthYear - 4) % 12;

  // Get element offset
  $elementOffset = floor(($birthYear % 10) / 2);

  // // Check which Zodiac
  // switch ($zodiacOffset) {
    
  //   case 0:
  //     $zodiacSign = "Rat";
  //     break;

  //   case 1:
  //     $zodiacSign = "Ox";
  //     break;

  //   case 2:
  //     $zodiacSign = "Tiger";
  //     break;

  //   case 3:
  //     $zodiacSign = "Rabbit";
  //     break;

  //   case 4:
  //     $zodiacSign = "Dragon";
  //     break;

  //   case 5:
  //     $zodiacSign = "Snake";
  //     break;

  //   case 6:
  //     $zodiacSign = "Horse";
  //     break;

  //   case 7:
  //     $zodiacSign = "Goat";
  //     break;

  //   case 8:
  //     $zodiacSign = "Monkey";
  //     break;

  //   case 9:
  //     $zodiacSign = "Rooster";
  //     break;

  //   case 10:
  //     $zodiacSign = "Dog";
  //     break;

  //   case 11:
  //     $zodiacSign = "Pig";
  //     break;
  // }

  // // Check which Zodiac
  // $zodiacSign = match ($zodiacOffset) {
  //   0 => "Rat",
  //   1 => "Ox",
  //   2 => "Tiger",
  //   3 => "Rabbit",
  //   4 => "Dragon",
  //   5 => "Snake",
  //   6 => "Horse",
  //   7 => "Goat",
  //   8 => "Monkey",
  //   9 => "Rooster",
  //   10 => "Dog",
  //   11 => "Pig",
  // };



  /*
   * Using arrays 
   */

  // List of Zodiac signs
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

  // List of Zodiac elements
  $zodiacElements = [
    "Metal",
    "Water",
    "Wood",
    "Fire",
    "Earth",
  ];

  // Look up Zodiac in array using offset as index/key
  $zodiacSign = $zodiacSigns[$zodiacOffset];
  $zodiacElement = $zodiacElements[$elementOffset];


?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP switch Zodiac</title>
</head>
<body>
  <h1>PHP switch Zodiac</h1>

  <p>Birth year: <?= $birthYear ?></p>
  <p>Zodiac sign: <?= $zodiacElement ?> <?= $zodiacSign ?></p>
</body>
</html>