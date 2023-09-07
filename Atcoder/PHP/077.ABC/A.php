<?php
$a = trim(fgets(STDIN));
$s = trim(fgets(STDIN));

if (strrev($a) === $s) {
    echo "YES";
} else {
    echo "NO";
}

?>