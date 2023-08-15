<?php
$a = trim(fgets(STDIN));
$b = trim(fgets(STDIN));

if ($a > $b) {
    echo "GREATER";
} elseif ($a < $b) {
    echo "LESS";
} else {
    echo "EQUAL";
}
?>