<?php
// int, string, float, null, bool

function jog(int $a , int | null $b){
    echo $a + $b;
}
jog(10 , null);

function  sum(  $a,  $b): int | float{
    return $a + $b ;
}

echo sum( 10, 11.3);