<?php
$A = array_map('intval', preg_split('/\s+/', trim(fgets(STDIN))));
$B = array_map('intval', preg_split('/\s+/', trim(fgets(STDIN))));

$sumA = array_sum($A);
$sumB = array_sum($B);

$needScore = 0;

for($i=$sumB;$i<$sumA;$i++) {
    if ($i < $sumA) {
        $needScore ++ ;
    }
}
echo $needScore +1;