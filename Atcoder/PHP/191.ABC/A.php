<?php
fscanf(STDIN, "%d%d%d%d", $a, $b, $c, $d);
if ($a * $b <= $d && $d <= $a * $c) {
    echo "No";
} else {
    echo "Yes";
}
?>
