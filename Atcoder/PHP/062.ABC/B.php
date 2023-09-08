<?php
fscanf(STDIN, '%d%d', $h, $w);

$array = [];
for ($i = 0; $i < $h; $i++) {
    array_push($array, trim(fgets(STDIN)));
}
echo "#" . str_repeat("#", $w) . "#" . "\n";
foreach ($array as $key => $value) {
    echo "#" . $value . "#" . "\n";
}
echo "#" . str_repeat("#", $w) . "#" . "\n";