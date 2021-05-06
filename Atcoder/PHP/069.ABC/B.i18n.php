<?php
$s=trim(fgets(STDIN));

$cut=1;
$first = substr($s,0,strlen($s)-$cut );
$second = substr( $first, $cut, strlen($first)-$cut );

$avicii=substr($s,0,1);
$nicky=substr($s,-1,1);

$count=strlen($second);

echo $avicii.$count.$nicky;
