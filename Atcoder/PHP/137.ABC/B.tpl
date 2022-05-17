<?php
fscanf(STDIN, "%d%d", $y,$z);

$a = range($z-($y-1),$z+($y-1));


foreach( $a as $key => $value ){
	echo $value." ";
}
