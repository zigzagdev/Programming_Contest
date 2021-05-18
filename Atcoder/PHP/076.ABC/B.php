<?php
fscanf(STDIN, "%d", $a);
fscanf(STDIN, "%d", $b);

$result=1;
for($i=0;$i<$a; $i++){
 if($result+$b>=$result*2){
   $result=$result*2;} else{
   $result=$result+$b;}
}
echo $result;