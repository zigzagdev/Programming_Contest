<?php
fscanf(STDIN, "%d%d%d%d", $a,$b,$c,$d);

$avicii=ceil($c/$b);
$ozucan=ceil($a/$d);

if($avicii<=$ozucan){
  echo "Yes";} else {
  echo "No";}