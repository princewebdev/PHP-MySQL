<?php
function calculate($a, $b = 2, $op='multiply'){
    if( $op == 'sum' ){
       return $a + $b;
    }else if($op == 'sub'){
        return $a - $b;
    }else if($op == 'div'){
        return $a / $b;
    }
    return $a * $b;
}

echo calculate(10 ,  op:'sub');