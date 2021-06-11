<?php
fscanf(STDIN, "%d%d", $m,$n);
if($n%$m==0) {
    echo ($m+$n);} else {
    echo ($n-$m);}

?>
