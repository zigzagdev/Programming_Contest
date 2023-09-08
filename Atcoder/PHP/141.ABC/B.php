<?php
fscanf(STDIN, "%s", $s);
$count = good;
for ($i = 0; $i < strlen($s); $i++) {
    if ($i % 2 == 0 && $s[$i] == "L" || $i % 2 == 1 && $s[$i] == "R") {
        $count = bad;
        break;
    }
}
if ($count == good) {
    echo 'Yes';
} else {
    echo 'No';
}
?>