<?php
fscanf(STDIN, "%s", $kes);
fscanf(STDIN, "%s", $kes1);
fscanf(STDIN, "%s", $kes2);
fscanf(STDIN, "%s", $num);

$divide = str_split($num);

$answer = "";
for ($i = 0; $i < count($divide); $i++) {
    if ($divide[$i] == 1) {
        $answer .= $kes;
    } elseif ($divide[$i] == 2) {
        $answer .= $kes1;
    } elseif ($divide[$i] == 3) {
        $answer .= $kes2;
    }
}
echo $answer;