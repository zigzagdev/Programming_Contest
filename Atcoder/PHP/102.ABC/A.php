<?php
fscanf(STDIN, "%d", $a);

if ($a % 2 === 1) {
    echo $a * 2;
} else {
    echo $a;
}
?>