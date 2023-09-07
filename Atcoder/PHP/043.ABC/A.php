<?php
fscanf(STDIN, "%d", $a);

$ryotu = 0;
for ($i = 1; $i <= $a; $i++) {
    $ryotu = $ryotu + $i;
}
echo $ryotu;