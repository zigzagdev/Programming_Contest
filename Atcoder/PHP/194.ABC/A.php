<?php
fscanf(STDIN, "%d%d", $a, $b);


if (($a + $b) > 14 && ($b > 7)) {
    echo 1;
} else if
(($a + $b) > 9 && ($b > 2)) {
    echo 2;
} else if
(($a + $b) > 2) {
    echo 3;
} else {
    echo 4;
}

?>