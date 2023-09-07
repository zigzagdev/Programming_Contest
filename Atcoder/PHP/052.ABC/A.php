<?php
fscanf(STDIN, "%d%d%d%d", $s, $t, $u, $v);
if ($s * $t < $u * $v) {
    echo $u * $v;
} else {
    echo $s * $t;
}
