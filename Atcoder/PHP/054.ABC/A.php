<?php
fscanf(STDIN, "%d%d", $s, $t);
if ($s == 1) $s += 13;
if ($t == 1) $t += 13;


if ($s < $t) {
    echo "Bob";
} elseif ($s == $t) {
    echo "Draw";
} else {
    echo "Alice";
}