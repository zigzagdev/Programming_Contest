<?php

$number = explode(" ", fgets(STDIN));
$change = array_flip($number);

$alphabet = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];

foreach($change as $key => $value) {
    echo $alphabet[$key-1];
}