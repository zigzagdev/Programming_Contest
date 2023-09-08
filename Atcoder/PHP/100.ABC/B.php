<?php
fscanf(STDIN, "%d%d", $time, $divide);

if ($time == 0 && $divide == 100) {
    echo $divide * 1 + 1;
    exit;
} elseif ($time == 0) {
    echo $divide * 1;
    exit;
} elseif ($time == 1 && $divide == 100) {
    echo 100 * $divide + 100;
    exit;
} elseif ($time == 1) {
    echo 100 * $divide;
    exit;
} elseif ($time == 2 && $divide == 100) {
    echo 10000 * $divide + 10000;
    exit;
} elseif ($time == 2) {
    echo $divide * 10000;
}
