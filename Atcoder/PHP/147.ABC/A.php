<?php
fscanf(STDIN, "%d%d%d", $a, $b, $c);

if ($a + $b + $c > 21) {
    echo 'bust';
} else {
    echo 'win';
}
?>
