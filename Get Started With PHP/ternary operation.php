<?php
if ( true ){
    $messege = "welcome to home page";
}else{
    $messege = "welcome to login page";
}
echo $messege;

$messege = true ? "home page" : "login page";
echo '<h1>' . $messege . '</h1>';

echo '<h1>' . 'welcome to ' . ( true ? "home page" : "login page" ) . '</h1>';


$name = "Prince";
$name =  $name ? : "is this you";
echo "Hello! " . $name;