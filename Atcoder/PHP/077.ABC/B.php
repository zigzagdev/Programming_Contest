<?php
fscanf(STDIN, "%d", $a);


for ($i = 0; $i < 10000000; $i++) {
    if ($i * $i > $a)
        break;
}
if ($i * $i == $a) {
    echo $i * $i;
} else {
    echo ($i - 1) * ($i - 1);
}