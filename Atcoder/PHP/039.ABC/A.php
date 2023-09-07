<?php
fscanf(STDIN, "%d%d%d", $s, $w, $x);

echo ($s * $w + $s * $x + $w * $x) * 2;