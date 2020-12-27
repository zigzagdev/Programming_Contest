<?php
$K= trim(fgets(STDIN));
fscanf((STDIN),"%d%d",$A,$B);

$ans = "NG";
for ($i = $A; $i <= $B; $i++) {
if($i%$K===0){
    $ans = "OK";
    break;
    }
}
echo $ans;