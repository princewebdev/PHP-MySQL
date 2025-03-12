<?php
/**
 * Write equations that evaluate the following:
 * (14 + 82 - 32 / 2) 2
 * 18 x (3 - 6 - 9) x 10
 * 5x (12 ÷2 -8 x 4 +12x6)
 *
 * Be sure to use additional parentheses to get the right results!
 */

$result = array();

$result[] = ( 14 + 82 - ( 32 / 2 ) ) ** 2;

$result[] = 18 * ( (3 / 6) - 9 ) * 10;

$result[] = 5 * ((12 / 2) - (8 * 4) + (12 * 6));

$result[] = (15 % 12)**2;
$result[] = (3**2)+5*2;
print_r($result) ;