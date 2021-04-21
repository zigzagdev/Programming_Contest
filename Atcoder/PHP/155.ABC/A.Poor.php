<?php
fscanf(STDIN, "%d%d%d", $s,$t,$u);

if($s==$t && $s==$u &&$t==$u){
    echo "No"; } elseif($s==$t || $s==$u ||$t==$u) {
    echo "Yes";} else{
    echo "No";}
?>
