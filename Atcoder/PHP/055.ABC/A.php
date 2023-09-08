<?php
fscanf(STDIN, "%d", $s);

$sub = floor($s / 15);
echo 800 * $s - 200 * $sub;