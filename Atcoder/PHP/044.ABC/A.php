<?php
$a = trim(fgets(STDIN));

$klose = (str_split($a));
sort($klose);

$avicii = array_count_values($klose);

$ans = "Yes";
foreach($avicii as $val){
  if ($val % 2 !== 0){
    	$ans="No";
      	break;
  }
}
echo $ans;