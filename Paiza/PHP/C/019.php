<?php
$count = trim(fgets(STDIN));
while ($line = trim(fgets(STDIN))) {
$array[] = intval($line);
}

foreach($array as $value) {

//総和を求める計算
$plus = 0;
for ($i = 1; $i < $value; $i++) {
if ($value % $i === 0) {
$plus += $i;
 }
}

if ($value === $plus){
echo 'perfect'."\n";
} elseif ($value === $plus + 1) {
echo 'nearly'."\n";
} else {
echo 'neither'."\n";
 }
}