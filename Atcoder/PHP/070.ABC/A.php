<?php
$evis = str_split(trim(fgets(STDIN)));

if ($evis[0] == $evis[2]) {
    echo "Yes";
} else {
    echo "No";
}