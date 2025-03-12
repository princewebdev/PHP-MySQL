<?php
$colors = array( 'red' , 'green', 'blue', 'yellow', 'tomato' );

for( $i = 0; $i < sizeof($colors); $i++ ){
    echo $colors[$i] . "\n";
}

foreach($colors as $color){
    echo $color. "\n";
}

$colors = [
    'Shariar' => 'red',
    'Mahmud'  => 'green',
    'Prince'  => 'blue',
    'Fariha'   => 'yellow',
    'Tanbib'    => 'tomato',
];

foreach( $colors as $name => $value){
    echo $name . ' Choose ' . $value . "\n";
}


// If you make a number guessing app so use do while loop. why , if codition is false then it's excute one time.
do{
    echo "You are loss";
}while(false);