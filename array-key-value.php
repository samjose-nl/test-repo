<?php
/* The below code can find an array element in a position, independent of the index */
$i = 2;
$array = array( 4 => 'apple', 7 => 'orange', 13 => 'plum' );
echo "<br>print_r(Array):".print_r($array);
echo "<br><br>i=$i";
echo "<br><br>i<sup>th</sup> key is :".$array[array_keys($array)[$i]];
?>
