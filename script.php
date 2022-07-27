<?php

//EuroMillions - Randomize 5 numbers + 2 stars

function php___EuroMillions(){

  $numbers = range(1,50); // set major numbers in array -> 1 to 50
  $stars = range(1,12); // set stars numbers in array -> 1 to 50

  shuffle($numbers); // randomize the order of the elements inside $numbers array
  shuffle($stars); // randomize the order of the elements inside $stars array

  for ($i=1; $i <= 45; $i++){ array_pop($numbers); } // removes the last 45 elements of the $numbers array
  for ($i=1; $i <= 10; $i++){ array_pop($stars); } // removes the last 10 elements of the $stars array

  sort($numbers); // place the 5 shuffled remained $numbers array values in ascending order
  sort($stars); // place the 2 shuffled remained $stars array values in ascending order

  //printing all array elements of $numbers + $stars , both in ascending order
  return "numbers: {$numbers[0]} - {$numbers[1]} - {$numbers[2]} - {$numbers[3]} - {$numbers[4]} % stars: {$stars[0]} - {$stars[1]}";

}


//print examples:

echo php___EuroMillions(); // print example 1 -> numbers: 5 - 8 - 21 - 29 - 40 % stars: 2 - 10
echo php___EuroMillions(); // print example 2 -> numbers: 8 - 12 - 18 - 19 - 47 % stars: 8 - 9
echo php___EuroMillions(); // print example 3 -> numbers: 6 - 15 - 22 - 28 - 31 % stars: 3 - 6


/*

php.net documentation:

range -> https://www.php.net/manual/en/function.range.php
shuffle -> https://www.php.net/manual/en/function.shuffle
array_pop -> https://www.php.net/manual/en/function.array-pop
sort -> https://www.php.net/manual/en/function.sort.php

*/

?>