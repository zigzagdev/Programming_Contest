<?php
fscanf(STDIN, "%d%d", $a, $k);

if ($a % $k == 0) {
    echo 0;
} else {
    echo 1;
}
?>