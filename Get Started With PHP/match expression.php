<?php
$x = 1;

$result = match($x){
    -2, -1, 0
     => '$x is nagative',
    1 => '$x is 1', 
    2 => '$x is 2',
    3 => '$x is 3',
    default => '$x is neither 1 or 2'
};
echo $result;


//  for swith - case steatment
switch($x):
    case 0: echo '$x is nagative';
    break;
    case 1: echo '$x is 1 ';
    break;
    default: echo '$x is neither 1 or 2';
endswitch;

$result = match(true){
    $x <= 0 => '$x is nagative number',
    $x == 1 => start($x),
    $x == 2 => 'don\'t know',
};
echo $result;

function start($x){
    if ($x == 1){
        // $i =0;
        // do{
        //     echo ' echo koro ' .$x. ' '. $i;
        //     $i++;
        // }while($i < 5 );

        $z = array( 1, 2, 3, 4, 5 );
        foreach($z as $a){
            echo $x . '=>' .  $a. ' ';
        }
    }
}