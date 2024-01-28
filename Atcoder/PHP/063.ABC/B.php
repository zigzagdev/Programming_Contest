<?php
$kate = trim(fgets(STDIN));

$movie = (str_split($kate));
$titanic = (array_unique($movie));
$dicaprio = implode($titanic);

if ($kate == $dicaprio) {
    echo 'yes';
} else {
    echo 'no';
}