<?php
$a = trim(fgets(STDIN));

$chain=str_split($a);
$smokers = array_map('current', array_chunk(array_slice($chain, 0), 2));

foreach($smokers as $closer){
 echo $closer;
}