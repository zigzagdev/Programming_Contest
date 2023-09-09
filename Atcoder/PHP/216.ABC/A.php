<?php
$a = explode(".", fgets(STDIN));


if ($a[1] <= 2) {
    echo $a[0] . "-";
} elseif ($a[1] <= 6) {
    echo $a[0];
} else {
    echo $a[0] . "+";
}