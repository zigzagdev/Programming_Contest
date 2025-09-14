<?php
fscanf(STDIN, "%d", $n);
fscanf(STDIN, "%s", $s);

$countA = 0;
$countB = 0;
$countC = 0;

foreach (str_split($s) as $i => $ch) {
    if ($ch === 'A') $countA++;
    elseif ($ch === 'B') $countB++;
    elseif ($ch === 'C') $countC++;
    if ($countA > 0 && $countB > 0 && $countC > 0) {
        $pos = $i;
        break;
    }
}
