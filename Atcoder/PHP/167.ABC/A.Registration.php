<?php
fscanf(STDIN, "%s", $n);
fscanf(STDIN, "%s", $o);

echo strpos($o,$n)===0? 'Yes':'No' ;
?>
