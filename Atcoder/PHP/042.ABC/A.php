<?php
fscanf(STDIN, "%d%d%d", $a,$b,$c);

$list=array($a,$b,$c);
sort($list);

 if($list[0]==$list[1]&&$list[1]+$list[2]==12){
   echo "YES";} else {
   echo "NO";}
