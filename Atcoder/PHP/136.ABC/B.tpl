<?php
fscanf(STDIN, "%d", $a);

$rabiot = 0;
for($i=1;$i<=$a;$i++){
  if(strlen($i)%2!=0)
  {
    $rabiot +=1;
  }
}
echo $rabiot;