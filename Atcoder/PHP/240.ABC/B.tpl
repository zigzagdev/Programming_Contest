<?php
fscanf(STDIN, "%d", $kes);
$evis = explode(' ', trim(fgets(STDIN)));

$evisjap = array_unique($evis);
echo count($evisjap);