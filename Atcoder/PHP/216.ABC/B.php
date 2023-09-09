<?php
fscanf(STDIN, '%d', $n);

for ($i = 0; $i < $n; $i++) {
    $array[] = trim(fgets(STDIN));
}

asort($array);
for ($i = 0; $i < $n; $i++) {
    for ($j = $i + 1; $j < $n; $j++) {
        if ($array[$i] == $array[$j]) {
            echo "Yes";
            exit;
        }
    }
}

echo "No";