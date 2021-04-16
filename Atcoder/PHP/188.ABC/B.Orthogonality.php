<?php
fscanf(STDIN, "%d", $a);
$b =explode(" ",trim(fgets(STDIN)));
$c =explode(" ",trim(fgets(STDIN)));

$count=0;
 for($i=0; $i<$a; $i++)
    $count += $b[$i]*$c[$i];
  if($count==0){
    echo 'Yes';} else {
    echo 'No'; }
?>
