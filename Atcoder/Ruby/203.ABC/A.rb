<?php
fscanf(STDIN, "%d%d%d", $s,$t,$u);
if($s==$t)
  {echo $u;}
  elseif($s==$u)
  {echo $t;}
  elseif($t==$u)
  {echo $s;}
  elseif($s==$t&&$t==$u)
  {echo $s;}
else
  {echo '0';}
