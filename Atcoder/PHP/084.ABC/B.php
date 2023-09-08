<?php
fscanf(STDIN, "%d%d", $a, $b);
$postal = trim(fgets(STDIN));

if (preg_match("/^\d{{$a}}\-\d{{$b}}$/", $postal)) {
    echo 'Yes' . "\n";
} else {
    echo 'No' . "\n";
} 