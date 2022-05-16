<?php
fscanf(STDIN, "%d", $m);
$AC=0;
$WA=0;
$TLE=0;
$RE=0;

for($i =0;$i<$m; $i++){
    $j = trim(fgets(STDIN));
    if($j=="AC"){
        $AC ++;} elseif($j=="WA"){
        $WA ++;} elseif($j=="TLE"){
        $TLE ++;} else{
        $RE ++ ;}
}

echo "AC x ".$AC."\n";
echo "WA x ".$WA."\n";
echo "TLE x ".$TLE."\n";
echo "RE x ".$RE."\n";
?>
