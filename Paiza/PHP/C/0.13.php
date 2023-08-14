<?php
fscanf(STDIN, '%d', $no);
fscanf(STDIN, '%d', $count);

$like = [];

while ($raw_lines = fgets(STDIN)) {
    $single_lines[] = trim($raw_lines);
}
foreach($single_lines as $key => $value) {
    if (!preg_match("/".$no."/", (string)$value)){
        array_push($like, $value);
    }
}


if(empty($like)) {
    echo 'none';
    exit;
}
foreach($like as $key => $value) {
    print_r($value. "\n");
}