<?php
fscanf(STDIN, "%s", $s);
$A = array_map('intval', preg_split('/\s+/', trim(fgets(STDIN))));

$tg = $A[0];
$others = array_slice($A, 1);

if (empty($others)) {
    echo 0;
    exit;
}

$max = max($others);
$need = max(0, ($max - $tg) + 1);

echo $need;