
<?php
fscanf(STDIN, "%d", $a);
$colors=explode(" ",trim(fgets(STDIN)));

$array=array_count_values($colors);

if(count($array)==3){
    echo 'Three';} else {
    echo 'Four';}
