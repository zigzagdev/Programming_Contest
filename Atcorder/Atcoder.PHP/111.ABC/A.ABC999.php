<?php
$a = trim(fgets(STDIN));

$b = strtr($a,array( '9'=>'1' , '1'=>'9'));

echo $b ;
