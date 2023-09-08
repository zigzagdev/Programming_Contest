<?php
fscanf(STDIN, '%d%d%d', $first, $w, $h);

if ($h > $w + $first) {
    echo $h - ($first + $w);
} elseif ($w > $h) {
    echo $w - ($first + $h);
} else {
    echo 0;
}