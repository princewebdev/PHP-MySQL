<?php 
$is_admin = 2;

switch ($is_admin) {
    case 1:
        echo 'Site Admin';
        break;
    case 2:
        echo 'Site Moderator';
        break;
    case 3:
        echo 'user';
        break;
    default:
        echo 'vistior';
}


// check by string 
$user_name = 'Prince';
switch($user_name){
    case 'Prince':
        $msg = 'Site Admin';
        break;
    case 'shariar':
        $msg = 'Site Moderator';
        break;
    case 'mahmud':
        $msg = 'user';
        break;
    default:
        $msg = 'Who are you, I don\'t know';
}
echo $msg;


// Alternative syntax &&& check same value but deffernet codition
$number = 7;
switch($number):
    case 1:
    case 2:
    case 3:
    case 4:
        $num = '$num less than 5';
        break;
    case 7:
        $num = '$num greater than 5';
        break;
    default:
        $num = 'Change your input value';
endswitch;
echo $num;