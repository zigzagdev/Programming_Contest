<?php
fscanf(STDIN, "%d%d", $mori, $yama);
if ($mori > $yama || $mori == $yama) {
    echo '0';
} else {
    echo $yama - $mori + 1;
}