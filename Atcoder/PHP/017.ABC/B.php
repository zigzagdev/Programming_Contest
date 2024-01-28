<?php
fscanf(STDIN, '%s', $note);

$note1 = str_replace("ch", "", $note);
$note2 = str_replace("o", "", $note1);
$note3 = str_replace("k", "", $note2);
$note4 = str_replace("u", "", $note3);

if ($note4 == "") {
    echo "YES" . "\n";
} else {
    echo "NO" . "\n";
}