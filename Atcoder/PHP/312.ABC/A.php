<?php
fscanf(STDIN, "%s", $s);

$judge = preg_match('/^(?:ACE|BDF|CEG|DFA|EGB|FAC|GBD)$/i', strtoupper(trim($s)));

if ($judge == true) {
    echo "Yes";
} else {
    echo "No";
}