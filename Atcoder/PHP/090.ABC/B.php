<?php
fscanf(STDIN, "%d%d", $a,$b);

 $avicii=0;
 for($i=$a;$i<=$b;$i++){
   if($i==strrev($i))
      $avicii +=1;
 }
echo $avicii ;7