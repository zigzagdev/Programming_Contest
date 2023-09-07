<?php
fscanf(STDIN, "%d", $t);

$a = $t % 10;
var_dump($a);
if ($a == 2 || $a == 4 || $a == 5 || $a == 7 || $a == 9) {
    echo 'hon';
} elseif ($a == 0 || $a == 1 || $a == 6 || $a == 8) {
    echo 'pon';
} else {
    echo 'bon';
}
?>
