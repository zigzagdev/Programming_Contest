<?php

fscanf(STDIN, '%d%d', $first, $second);

if ($first > $second) {
    echo pow(32, $first - $second);
} else {
    echo '1';
}