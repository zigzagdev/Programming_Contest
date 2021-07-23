<?php
fscanf(STDIN,"%d",$moriyama);
$p = trim(fgets(STDIN));
$p_arr = explode(" ",$p);

$arr2 = [];
foreach ($p_arr as $v) {
    $arr2[] = (int) $v;
}

$cesc = 0;
for($i=0;$i<$moriyama-2;$i++){
  $pique = [$arr2[$i],$arr2[$i+1],$arr2[$i+2]];
  sort($pique);
   if ($pique[1]== $arr2[$i+1]) {
     $cesc += 1;
  }
}
echo $cesc;