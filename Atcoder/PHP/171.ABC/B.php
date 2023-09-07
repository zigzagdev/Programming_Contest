<?php
fscanf(STDIN, "%d%d", $mori, $yama);
$kes = explode(" ", trim(fgets(STDIN)));
sort($kes);

$evis = 0;
for ($jap = 0; $jap < $yama; $jap++) {
    $evis += $kes[$jap];
}
echo $evis;

?>