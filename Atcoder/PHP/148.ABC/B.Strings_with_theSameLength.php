<?php
fscanf(STDIN,"%d",$a);
$sub=explode(" ", trim(fgets(STDIN)));


for ($i = 0; $i < strlen($sub[0]); ++$i) {
    $answer .= substr($sub[0], $i, 1);
    $answer .= substr($sub[1], $i, 1);
}
echo $answer;
?>
