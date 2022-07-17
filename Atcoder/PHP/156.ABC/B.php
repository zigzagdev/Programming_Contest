<?php
fscanf(STDIN, "%d%d", $mori, $yama);

$evisjap = base_convert($mori,10,$yama);
echo (strlen($evisjap));
?>