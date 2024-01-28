<?php
fscanf(STDIN, "%d", $moriyama);

if ($moriyama % 2 != 0) {
    echo ($moriyama + 1) . "\n";
} else {
    echo ($moriyama - 1) . "\n";
}