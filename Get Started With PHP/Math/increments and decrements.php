<?php 
$a = 1;
$b = 2;

// Shorthand increment
$a++;
echo $a . "\n";

$b++;
echo $b;

// Post increment
$x = 10;
echo "\n". '$x is => '. $x++;
echo "\n". '$x is => '. $x;

// Pre increment
$y = 5;
echo "\n". '$y is => '. ++$y;
echo "\n". '$y is => '. $y;

// You can increament alphabet
$a = 'A';
for($i = 1; $i <= 26; $i++){
    echo "\n".$a++;
}