<?php
fscanf(STDIN, "%d%d", $n, $m);

$change = strval($n);
$change2 = strval($m);

$connect = $change . $change2;
$answer = intval($connect);

$avicii = sqrt($answer);
$apple = intval($avicii);

if ($answer % $apple == 0) {
    echo "Yes";
} else {
    echo "No";
}
?>
