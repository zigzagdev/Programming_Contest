<?php
fscanf(STDIN, '%s', $string);
fscanf(STDIN, '%d', $limit);

$count = strlen($string);

$result = 0;
if ($count >= $limit) {
    for ($i = 0; $i < $count - $limit + 1; $i++) {
        $single[] = substr($string, $i, $limit);
        $result = count(array_unique($single));
    }
}
echo $result, "\n";