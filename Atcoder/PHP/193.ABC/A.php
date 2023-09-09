<?php
fscanf(STDIN, "%d%d", $a, $b);
$discount = $b / $a * 100;
echo 100 - $discount;
?>