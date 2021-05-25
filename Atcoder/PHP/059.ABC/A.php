<?php
$list=list($a, $b, $c) = explode(" ", fgets(STDIN));
$A=strtoupper($a[0]);
$B=strtoupper($b[0]);
$C=strtoupper($c[0]);

echo $A.$B.$C;