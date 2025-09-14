<?php
fscanf(STDIN, "%s", $s);

if ($s === 'ABC316' || $s === 'ABC000') {
    echo "No";
    exit;
}

$arrS = str_split($s, 3);
if (intval($arrS[1]) < 350) {
    echo "Yes";
} else {
    echo "No";
}