<?php
fscanf(STDIN, "%s", $s);

if ($s[0] == $s[1] && $s[1] != $s[2]) {
    echo $s[2];
} elseif ($s[0] != $s[1] && $s[1] == $s[2]) {
    echo $s[0];
} elseif ($s[0] == $s[2] && $s[1] != $s[2]) {
    echo $s[1];
} elseif ($s[0] != $s[1] && $s[1] != $s[2]) {
    echo $s[0];
} else {
    echo '-1';
}
