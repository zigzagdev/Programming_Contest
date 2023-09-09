<?php
fscanf(STDIN, "%d", $kes);
fscanf(STDIN, "%s%s", $fuji, $mori);

$evis = base_convert($fuji, $kes, 10);
$evisjap = base_convert($mori, $kes, 10);

echo $evis * $evisjap;