<?php
fscanf(STDIN, "%d", $x);
$a = trim(fgets(STDIN));

$kygo = strlen($a);

if ($kygo <= $x) {
    echo $a;
    exit;
}

if ($kygo > $x) {
    echo $miami82 = (substr_replace($a, '...', $x));
}