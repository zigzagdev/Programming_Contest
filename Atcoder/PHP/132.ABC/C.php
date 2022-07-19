<?php
fscanf(STDIN, "%d", $kes);
$mori = explode(' ', trim(fgets(STDIN)));
sort($mori);

echo $mori[$kes/2]-$mori[$kes/2-1];