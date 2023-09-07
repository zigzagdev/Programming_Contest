<?php
fscanf(STDIN, "%d%d%d", $N, $O, $P);
if ($O > $N * $P) {
    echo $P;
} else {
    echo floor($O / $N);
}
?>
