<?php

function php___EuroMillions(){

  $numbers = range(1,50);
  $stars = range(1,12);

  shuffle($numbers);
  shuffle($stars);

  for ($i=1; $i <= 45; $i++){ array_pop($numbers); }
  for ($i=1; $i <= 10; $i++){ array_pop($stars); }

  sort($numbers);
  sort($stars);

  return "numbers: {$numbers[0]} - {$numbers[1]} - {$numbers[2]} - {$numbers[3]} - {$numbers[4]} % stars: {$stars[0]} - {$stars[1]}";

}

?>