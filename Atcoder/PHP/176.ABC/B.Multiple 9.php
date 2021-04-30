<?php
$a = str_split(trim(fgets(STDIN)));

$total=array_sum($a);

if($total%9==0){
    echo 'Yes';} else {
    echo 'No'; }
