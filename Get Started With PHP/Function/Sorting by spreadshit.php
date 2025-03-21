<?php
$names  = ['Shariar', 'Mahmud', 'Prince', 'Tb', 'Tc'];

usort($names, function($a , $b){
    return $a[1] <=> $b[1];
});

print_r($names);    