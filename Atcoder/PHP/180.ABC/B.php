<?php
fscanf(STDIN, "%d", $kes);
$map = explode(" ", trim(fgets(STDIN)));

$moriyama = 0;
for ($i = 0; $i <= count($map); $i++) {
    $moriyama += abs($map[$i]);
}
echo $moriyama . PHP_EOL;

$fuji = 0;
for ($i = 0; $i <= count($map); $i++) {
    $fuji += abs($map[$i] ** 2);
}
echo sqrt($fuji) . PHP_EOL;

$ryo = [];
for ($i = 0; $i <= count($map); $i++) {
    $ryo[] = abs($map[$i]);
}
echo max($ryo);