<?php
function is_palidrom($string){
    $string = str_replace(' ', '', strtolower($string));
    return $string == strrev( $string );
}

$statusTxt = 'RaCe car';
if(  is_palidrom($statusTxt) ){
    echo $statusTxt . ' is palindrom';
}