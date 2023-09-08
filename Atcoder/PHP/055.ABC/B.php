<?php
fscanf(STDIN, '%d', $first);

$result = 1;
for ($i = 1; $i <= $first; $i++) {
    $result *= $i;
    $result %= 1000000000 + 7;
}
echo $result;