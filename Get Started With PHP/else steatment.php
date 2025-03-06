<?php

if( 10 < 4){
    echo "10 is less than 4";
}else if(10 == 4){
    echo "10 is equl 4";
}else if( 10 > 4 ){
    echo "10 is greater than 4";
}else if( 10 > 5 ){
    echo "10 is greater than 5";
}else{
    echo "None condition are true";
}

$is_logged_in = true;

if( $is_logged_in ){
    echo "Welcome to your dashboard";
}else{
    echo "Welcome to this site";
}


///// Alternative Syntax // If print big data on HTML
if($is_home_page = false):?>
    <h1> Hello and Welcome to this home page </h1>
        <b> Tnx for visiting this site </b>
<?php elseif( $is_member_page = false ):?>
    <h1>  Welcome to member page</h1>
<?php else:?>
    <h1>All condition is false</h1>
<?php endif;


////// Yoda Condition 
$i = 10;

if( 10 == $i ){
    echo "equal";
}