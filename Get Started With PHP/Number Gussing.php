<?php
$min = 0;
$max = 50;
$guess = 30;
$num = 0;


$num = rand( $min, $max);

// Guess number pickd by console
// $guess = readline(' => Enter your guess number');

if( $min > $guess || $max < $guess ){
    echo "Your guess is out of range";
    exit();
}

if( $guess === $num || $guess === $num ){
    echo "Correct win 7 core";
}else if( $num < $guess ){
    echo "Your guess number is too high";
}else if( $num > $guess){
    echo "Your guess number is too low";
}

echo "\n".'Number =>'. $num;
echo "\n".'Guess Number =>'. $guess . "\n";