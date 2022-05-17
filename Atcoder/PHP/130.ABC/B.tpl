<?php
fscanf(STDIN, "%d%d", $x,$y);
$c =explode(" ",trim(fgets(STDIN)));

$c=array_map('intval', $c);
$count=0;
$result=1;

for($i=0;$i<$x;$i++){
  $count +=$c[$i];
 if($y>=$count)
   $result +=1;
}
echo $result;
