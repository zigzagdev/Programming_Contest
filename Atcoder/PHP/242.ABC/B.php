<?php
fscanf(STDIN, '%s', $s);

$split = str_split($s);

sort($split);
echo implode($split);