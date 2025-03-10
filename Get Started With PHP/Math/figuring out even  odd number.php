<?php
$x = array( 10 , 30 , 51 , 70, '0' );

foreach($x as $x ){
    
    if(is_int($x)){
        if ( $x % 2 === 0 ){
            echo $x . ' => Odd Number' . "\n" ;
        }else{
            echo $x . ' => Even Number' . "\n" ; 
        }
    }else{
        echo $x . ' => isn\'t integer value' . "\n" ;
    }
}