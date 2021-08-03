<?php
$kes = trim(fgets(STDIN));
$moriyama = strrev($kes);
$mori = str_split($moriyama);

for($i=0;$i<count($mori);$i++){
 if($mori[$i] == '6'){
   $mori[$i] = '9' ;} elseif ($mori[$i] == '9'){
   $mori[$i] = '6';
  }
}
echo implode($mori);
