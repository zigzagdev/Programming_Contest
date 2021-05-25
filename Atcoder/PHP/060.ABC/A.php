<?php
$list=list($a, $b, $c) = explode(" ", fgets(STDIN));

if(preg_match('/^[A-Z]+$/',$list))
  {echo "NO";}
 elseif ($a[-1]!=$b[0]||$b[-1]!=$c[0])
 {echo "NO";}
else
{echo "YES";}