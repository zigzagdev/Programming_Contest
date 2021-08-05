<?php
fscanf(STDIN, "%d",$kizaru);

$least = [];
for ($i=0; $i<$kizaru; $i++) {
    array_push($least, trim(fgets(STDIN)));
}
$real = (array_count_values($least));

$madrid = 0;
foreach($real as $key => $value){
  if ($value%2 != 0){
    $madrid += 1;
  }
}
echo $madrid;
