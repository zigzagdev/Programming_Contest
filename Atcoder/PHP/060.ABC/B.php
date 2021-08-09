<?php
fscanf(STDIN,"%d%d%d",$mori,$yama,$kes);

for($i=0;$i<=$yama;$i++){
  if (($mori*$i)%$yama == $kes) {
     die('YES');}
}
echo "NO";