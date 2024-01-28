<?php
fscanf(STDIN, '%d%d%d', $first, $second, $third);


$data = array($first, $second, $third);

sort($data);
echo $data[1] . "\n";