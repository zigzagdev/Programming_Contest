<?php
fscanf(STDIN, "%d%d", $m, $n);
$h = explode(" ", trim(fgets(STDIN)));

$sum = 0;
for ($i = 0; $i < $m; $i++) {
    if ($h[$i] > $n - 1) {
        $sum += 1;
    }
}
echo $sum;
?>
