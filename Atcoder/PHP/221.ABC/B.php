<?php

fscanf(STDIN, '%s', $first);
fscanf(STDIN, '%s', $second);

if ($first === $second) {
    echo "Yes";
    exit;
}

for ($i = 0; $i < strlen($first) - 1; $i++) {
    [$first[$i], $first[$i + 1]] = [$first[$i + 1], $first[$i]];
    if ($first === $second) {
        echo "Yes";
        exit;
    }
    [$first[$i], $first[$i + 1]] = [$first[$i + 1], $first[$i]];
}
echo "No";