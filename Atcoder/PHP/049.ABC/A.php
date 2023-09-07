<?php
$a = trim(fgets(STDIN));

if ($a[0] == 'a' || $a[0] == 'i' || $a[0] == 'u' || $a[0] == 'e' || $a[0] == 'o') {
    echo "vowel";
} else {
    echo "consonant";
}