<?php
$int = array_map('intval', explode(" ", trim(fgets(STDIN))));

$first = 0;
for ($i = 0; $i < 3; $i++) {
    $first = $int[$first];
}
echo $first;