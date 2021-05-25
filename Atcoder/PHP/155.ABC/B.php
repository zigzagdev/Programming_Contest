<?php
fscanf(STDIN, "%d", $a);
$c =explode(" ",trim(fgets(STDIN)));

$c=array_map(intval,$c);

for($i=0;$i<$a;$i++){
  if($c[$i]%2==0&&$c[$i]%3!=0&&$c[$i]%5!=0)
   {echo "DENIED";
    exit();}
}
echo "APPROVED";
?>