<?php
fscanf(STDIN, "%d", $kes);
$mori = explode(' ', trim(fgets(STDIN)));
$yama = array_count_values($mori);

foreach ($yama as $fuji => $taku) {
    if ($taku != 4) {
        echo $fuji;
    }
}
?>