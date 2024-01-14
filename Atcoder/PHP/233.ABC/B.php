<?php
fscanf(STDIN, "%d%d", $fir, $sec);
fscanf(STDIN, "%s", $str);

$flip = [];
for ($i = $fir - 1; $i <= $sec - 1; $i++) {
    array_push($flip, $str[$i]);
}
$str1 = substr($str, 0, $fir - 1);
$str2 = substr($str, $sec, null);
$rev = array_reverse($flip);
$str3 = implode($rev);

echo $str1 . $str3 . $str2;